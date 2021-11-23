<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Validation\Rule;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $term = $request->term ? $request->term : '';
        $query = Article::orderBy('id', 'desc');
        if ($term) {
            $query = $query->where('name_ru', 'like', '%' . $term . '%');
        }
        $items = $query->paginate();

        return view('admin.articles.index', [
            'items' => $items,
            'term' => $term
        ]);

    }


    public function add()
    {
        $item = new Article;
        return view('admin.articles.view', [
            'item' => $item
        ]);
    }

    public function edit(Article $item)
    {
        return view('admin.articles.view', [
            'item' => $item
        ]);
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            "name_ru" => "required|min:3|max:255",
            "alias" => "unique:articles,alias",
        ]);

        $item = new Article;
        $item->name_ru = $request->name_ru;
        $item->name_kk = $request->name_kk;
        $item->name_en = $request->name_en;
        $item->description_ru = $request->description_ru;
        $item->description_kk = $request->description_kk;
        $item->description_en = $request->description_en;
        $item->meta_title_ru = $request->meta_title_ru;
        $item->meta_title_en = $request->meta_title_en;
        $item->meta_title_kk = $request->meta_title_kk;
        $item->meta_description_ru = $request->meta_description_ru;
        $item->meta_description_en = $request->meta_description_en;
        $item->meta_description_kk = $request->meta_description_kk;
        $item->open_graph_title_ru = $request->open_graph_title_ru;
        $item->open_graph_title_en = $request->open_graph_title_en;
        $item->open_graph_title_kk = $request->open_graph_title_kk;
        $item->open_graph_description_ru = $request->open_graph_description_ru;
        $item->open_graph_description_en = $request->open_graph_description_en;
        $item->open_graph_description_kk = $request->open_graph_description_kk;
        $item->avatar = $request->image;
        $item->is_published = $request->is_published;

        $item->published_at = Carbon::createFromTimestamp(strtotime($request->get("published_at")));
        $item->is_published = $request->get("is_published");

        $item->save();

        $item->alias = Str::slug($item->id . '-' . $request->name_ru);
        $item->update(['alias' => Str::slug($item->id . '-' .$request->get("name_ru"))]);
        $item->alias = Str::slug($request->get("name_ru"));

        $logger = new Log;
        $logger->log('add', 'articles', $item->id, $item->name_ru);

        return redirect('/admin/article/' . $item->id)->with('status', 'Новая статья успешно добавлена');
    }

    public function update(Request $request, Article $item)
    {

        $this->validate($request, [
            "name_ru" => "required|min:3|max:255",
            "alias" => Rule::unique("articles", "alias")->ignore($item->id),
        ]);

        $item->name_ru = $request->name_ru;
        $item->name_kk = $request->name_kk;
        $item->name_en = $request->name_en;
        $item->description_ru = $request->description_ru;
        $item->description_kk = $request->description_kk;
        $item->description_en = $request->description_en;
        $item->meta_title_ru = $request->meta_title_ru;
        $item->meta_title_en = $request->meta_title_en;
        $item->meta_title_kk = $request->meta_title_kk;
        $item->meta_description_ru = $request->meta_description_ru;
        $item->meta_description_en = $request->meta_description_en;
        $item->meta_description_kk = $request->meta_description_kk;
        $item->open_graph_title_ru = $request->open_graph_title_ru;
        $item->open_graph_title_en = $request->open_graph_title_en;
        $item->open_graph_title_kk = $request->open_graph_title_kk;
        $item->open_graph_description_ru = $request->open_graph_description_ru;
        $item->open_graph_description_en = $request->open_graph_description_en;
        $item->open_graph_description_kk = $request->open_graph_description_kk;
        $item->avatar = $request->image;
        $item->is_published = $request->is_published;
        $alias = $request->get("alias", Str::slug($item->id . "-" . $request->get("name_ru")));
        $alias = $alias !== null ? $alias : Str::slug($item->id . "-" . $request->get("name_ru"));
        $item->alias = $alias;
        $item->published_at = Carbon::createFromTimestamp(strtotime($request->get("published_at")));
        $item->is_published = $request->get("is_published");

        $item->save();

        $logger = new Log;
        $logger->log('edit', 'articles', $item->id, $item->name);

        return redirect('/admin/article/' . $item->id)->with('status', 'Данные о статье успешно изменены');

    }

    public function delete(Article $item)
    {
        $item->delete();
        return redirect('/admin/articles')->with('status', 'Объект успешно удален');
    }



}

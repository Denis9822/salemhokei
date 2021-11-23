<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AlbumImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AlbumController extends Controller
{
    public function index(Request $request)
    {
        $term = $request->term ? $request->term : '';
        $query = Album::orderBy('id','desc');
        if ($term) {
            $query = $query->where('name_ru', 'like', '%' . $term . '%');
        }
        $items = $query->paginate();

        return view('admin.albums.index', [
            'items' => $items,
            'term' => $term,
        ]);
    }

    public function add(){

        $item = new Album;
        return view('admin.albums.view', [
            'item' => $item,
        ]);
    }

    public function edit(Album $item)
    {
        $pictures = AlbumImage::all()->where('album_id', '=', $item->id);

        if (Auth::user()->can('album.edit')){

            return view('admin.albums.view', [
                'item' => $item,
                'pictures' => $pictures
            ]);
        }else{
            return view('admin.albums.show', [
                'item' => $item,
                'pictures' => $pictures
            ]);
        }
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            "name_ru" => "required|min:3|max:191",
            "alias" => "unique:articles,alias",
        ]);

        $item = new Album;
        $item->name_ru = $request->name_ru;
        $item->name_kk = $request->name_kk;
        $item->name_en = $request->name_en;
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
        $item->is_published = $request->get("is_published");
        $item->published_at = Carbon::createFromTimestamp(strtotime($request->get("published_at")));
        $item->save();

        $item->alias = Str::slug($item->id . '-' . $request->name_ru);
        $item->update(['alias' => Str::slug($item->id . '-' .$request->get("name_ru"))]);
        $item->alias = Str::slug($request->get("name_ru"));

        $logger = new Log;
        $logger->log('add', 'albums', $item->id, $item->name_ru);

        return redirect('/admin/album/' . $item->id)->with('status', 'Новая статья успешно добавлена');
    }

    public function update(Request $request, Album $item)
    {
        $this->validate($request, [
            "name_ru" => "required|min:3|max:191",
            "alias" => Rule::unique("articles", "alias")->ignore($item->id),
        ]);

        $item->name_ru = $request->name_ru;
        $item->name_kk = $request->name_kk;
        $item->name_en = $request->name_en;
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
        $item->is_published = $request->get("is_published");
        $item->published_at = Carbon::createFromTimestamp(strtotime($request->get("published_at")));
        $alias = $request->get("alias", Str::slug($item->id . "-" . $request->get("name_ru")));
        $alias = $alias !== null ? $alias : Str::slug($item->id . "-" . $request->get("name_ru"));
        $item->alias = $alias;
        $item->save();

        $logger = new Log;
        $logger->log('edit', 'albums', $item->id, $item->name_ru);

        return redirect('/admin/album/' . $item->id)->with('status', 'Данные о статье успешно изменены');
    }

    public function delete(Album $item)
    {
        $item->delete();
        return redirect('/admin/albums')->with('status', 'Объект успешно удален');
    }

    public function addPicture(Request $request, Album $item)
    {
        foreach ($request->pic as $img)
        {
            $picture = new AlbumImage;
            $imageName = rand().'.'.$img->getClientOriginalExtension();
            $img->move(public_path('img/gallery/'.$item->id), $imageName);
            $picture->avatar = '/img/gallery/'.$imageName;
            $picture->album_id = $request->id;
            $picture->save();
        }
        return redirect('/admin/album/'.$request->id)->with('status', 'Изображения добавлены');
    }

    public function deletePicture(Request $request, Album $item)
    {
        $pics = $request->pics;
        foreach ($pics as $key => $pic_id){
            $picture = AlbumImage::find($pic_id);
            $picture->delete();
        }
        return redirect('/admin/album/'.$request->id)->with('status', 'Изображения удалены');
    }
}

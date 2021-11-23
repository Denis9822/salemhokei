<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Models\Section;
use App\Models\Log;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SectionController extends Controller
{

    public function index(Request $request,$name = null)
    {

        $term = $request->get("term");

       if ($name == 'rink')
           $query = Section::orderBy("id", "desc")->where('type',2)->with('authors');
       else
        $query = Section::orderBy("id", "desc")->where('type',1)->with('authors');
        if ($term) {
            $query = $query->where("name_ru", "like", "%" . $term . "%");
        }

        $items = $query->paginate();

        return view("admin.sections.index", [
            "items" => $items,
            "term" => $term,
            "name" => $name,
        ]);
    }



    public function notifications()
    {
// dd(1);
        return view('admin.sections.notifications', [
            'item' => []
        ]);
    }

    public function add($name = null)
    {

        $item = new Section;
        $responsible = User::all();
        $regions = Region::all();
        return view('admin.sections.view', [
            'item' => $item,
            'responsible' => $responsible,
            'regions' => $regions,
            'name' => $name
        ]);
    }

    public function create()
    {
        $item = new Section;
        $sections = Section::orderBy("name_ru", "asc")->get();
        return view("admin.sections.view", [
            "item" => $item,
            "sections" => $sections
        ]);
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            "name_ru" => "required|min:3|max:255",
        ]);

        $item = new Section;
        $item->name_ru = $request->name_ru;
        $item->name_kk = $request->name_kk;
        $item->name_en = $request->name_en;
        $item->annotation_ru = $request->annotation_ru;
        $item->annotation_kk = $request->annotation_kk;
        $item->annotation_en = $request->annotation_en;
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
        $item->type = $request->type;
        $item->google_map = $request->google_map ?? null;
        $item->yandex_map = $request->yandex_map ?? null;
        $item->open_graph_title_kk = $request->open_graph_title_kk;
        $item->open_graph_description_ru = $request->open_graph_description_ru;
        $item->open_graph_description_en = $request->open_graph_description_en;
        $item->open_graph_description_kk = $request->open_graph_description_kk;
        $item->avatar = $request->image;
        $item->email = (isset($request->email))?$request->email:null;
        $item->satrud = ($request->satrud==1)?$request->satrud:null;
        $item->is_published = $request->is_published;

        $item->save();

        $item->alias = str_limit(Str::slug($item->id . '-' . $request->name_ru),100);
        $item->update(['alias' => Str::slug($item->id . '-' .$request->get("name_ru"))]);
        $item->alias = Str::slug($request->get("name_ru"));

        $item->authors()->sync($request->input('user_id'));

        $item->regions()->sync($request->input('region_id'));

        $logger = new Log;
        $logger->log("add", "section", $item->id, $item->name_ru);

        return redirect("/admin/section/" . $item->id)->with("status", "Новый раздел успешно добавлен");
    }

    public function edit(Section $item)
    {
        $sections = Section::where("id", "!=", $item->id)->orderBy("name_ru", "asc")->get();
        $name = ($item->type == 2) ? "rink" : null;

        $responsible = User::all();
        $author = Section::with('authors')->get();
        $regions = Region::all();
        return view("admin.sections.view", [
            "item" => $item,
            "sections" => $sections,
            "responsible" => $responsible,
            "regions" => $regions,
            "name" => $name
        ]);
//        return $responsible[0];
    }

    public function update(Request $request, Section $item)
    {
        // dd($request);
        $this->validate($request, [
            "name_ru" => "required|min:3|max:255",
            "alias" => "unique:articles,alias",
        ]);

        $item->name_ru = $request->name_ru;
        $item->name_kk = $request->name_kk;
        $item->name_en = $request->name_en;
        $item->annotation_ru = $request->annotation_ru;
        $item->annotation_kk = $request->annotation_kk;
        $item->annotation_en = $request->annotation_en;
        $item->description_ru = $request->description_ru;
        $item->description_kk = $request->description_kk;
        $item->description_en = $request->description_en;
        $item->meta_title_ru = $request->meta_title_ru;
        $item->meta_title_en = $request->meta_title_en;
        $item->meta_title_kk = $request->meta_title_kk;
        $item->google_map = $request->google_map ?? null;
        $item->yandex_map = $request->yandex_map ?? null;
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
        $item->alias = str_limit($alias,100);

        $item->email = (isset($request->email))?$request->email:null;




        // dd($request);

        $item->satrud = ($request->satrud==1)?$request->satrud:null;
        $item->is_published = $request->get("is_published");

        $item->save();
        $item->authors()->sync($request->input('user_id'));
        $item->regions()->sync($request->input('region_id'));

        $logger = new Log;
        $logger->log("edit", "section", $item->id, $item->name_ru);

        return redirect("/admin/section/" . $item->id)->with("status", "Данные о разделе успешно изменены");
    }

    public function delete(Section $item)
    {
        $item->delete();
        return redirect("/admin/sections/")->with("status", "Объект успешно удален");
    }
}

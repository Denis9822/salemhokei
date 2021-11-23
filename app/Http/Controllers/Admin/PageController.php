<?php

namespace App\Http\Controllers\Admin;

use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Text;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Log;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Validation\Rule;

class PageController extends Controller
{


    public function index(Request $request)
    {
        $term = $request->term ? $request->term : '';
        $query = Page::orderBy('id', 'desc');
        if ($term) {
            $query = $query->where('name_ru', 'like', '%' . $term . '%');
        }
        $items = $query->get();
//        dd($items);
        $menuItems = MenuItem::query()->whereNotIn('id', [12,13, 14])->select('id', 'label_kk as name_kk', 'label_ru as name_ru', 'link_ru as link_ru', 'link_kk as link_kk')->get();

//        dd($menuItems);

        $menuItems->each(function ($item) {
            $item->is_published = 1;
            $item->is_static = 'static';
            $item->created_at = now();
        });
//        dd($menuItems);
        $items = collect(array_merge($items->all(), $menuItems->all()));
//        $items = $items->merge($menuItems);

//        dd($items);

        return view('admin.pages.index', [
            'items' => $items,
            'term' => $term,
        ]);
    }

    public function add()
    {
        $item = new Page;
        return view('admin.pages.view', [
            'item' => $item
        ]);
    }
    public function edit(Page $item)
    {
        return view('admin.pages.view', [
            'item' => $item
        ]);
    }

    public function menu(Request $request)
    {
        return view('admin.pages.menu');
    }


    public function hockey(Request $request, MenuItem $item)
    {
        $textItems = Text::with('video')->where('page', 'hockey')->orderBy('id')->get();

        return view('admin.pages.hockey', [
            'item' => $item,
            'textItems' => $textItems
        ]);
    }

    public function equipment(Request $request, MenuItem $item)
    {
        $textItems = Text::with('video')->where('page', 'equipment')->orderBy('id')->get();

        return view('admin.pages.equipment', [
            'item' => $item,
            'textItems' => $textItems
        ]);
    }

    public function schools(Request $request, MenuItem $item)
    {
        $textItems = Text::with('video')->where('page', 'schools')->orderByDesc('id')->get();

        return view('admin.pages.schools', [
            'item' => $item,
            'textItems' => $textItems
        ]);
    }

    public function main(Request $request, MenuItem $item)
    {
        $textItems = Text::with('video')->where('page', '/')->orderByDesc('id')->get();

        return view('admin.pages.main', [
            'item' => $item,
            'textItems' => $textItems
        ]);
    }

    public function play(Request $request, MenuItem $item)
    {
        $textItems = Text::with('video')->where('page', 'play')->orderByDesc('id')->get();

        return view('admin.pages.play', [
            'item' => $item,
            'textItems' => $textItems
        ]);
    }

    public function faq(Request $request, MenuItem $item)
    {
        $textItems = Text::with('video')->where('page', 'faq')->orderByDesc('id')->get();

        return view('admin.pages.faq', [
            'item' => $item,
            'textItems' => $textItems
        ]);
    }

    public function parents(Request $request, MenuItem $item)
    {
//        dd($item);
        $textItems = Text::with('video')->where('page', 'faq')->orderByDesc('id')->get();

//        dd($textItems);

        return view('admin.pages.parents', [
            'item' => $item,
            'textItems' => $textItems
        ]);
    }

    public function editStaticPage(Request $request, MenuItem $item)
    {

        switch ($item->link) {
            case 'hockey':
                return $this->hockey($request, $item);
                die;
                break;
            case 'equipment':
                // return $this->equipment($request, $item);
                // die;
                break;
            case 'faq':
                 return $this->faq($request, $item);
                 die;
                break;
            case 'parents':
                 return $this->parents($request, $item);
                 die;
                break;
            case 'school':
                return $this->schools($request, $item);
                die;
                break;
            case '/':
                return $this->main($request, $item);
                die;
                break;
            case 'play':
                return $this->play($request, $item);
                die;
                break;
        }

        // dd($item);
        return view('admin.pages.default', [
            'item' => $item
        ]);
    }

    public function save(Request $request)
    {
//        dd(1);
        $this->validate($request, [
            "name_ru" => "required|min:3|max:255",
            "alias" => "unique:pages,alias",
        ]);

        $item = new Page;
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
        //        $item->avatar = $request->image;
        $item->is_published = $request->is_published;
        $item->is_published = $request->get("is_published");

        $accordion_ru = $request->accordion_ru ? $request->accordion_ru : [];
        foreach ($accordion_ru as $key => $value) {
            if (empty($value["title"])) {
                unset($accordion_ru[$key]);
            }
        }
        $accordion_ru = array_values($accordion_ru);
        $item->accordion_ru = $accordion_ru;

        $accordion_en = $request->accordion_en ? $request->accordion_en : [];
        foreach ($accordion_en as $key => $value) {
            if (empty($value["title"])) {
                unset($accordion_en[$key]);
            }
        }
        $accordion_en = array_values($accordion_en);
        $item->accordion_en = $accordion_en;

        $accordion_kk = $request->accordion_kk ? $request->accordion_kk : [];
        foreach ($accordion_kk as $key => $value) {
            if (empty($value["title"])) {
                unset($accordion_kk[$key]);
            }
        }
        $accordion_kk = array_values($accordion_kk);
        $item->accordion_kk = $accordion_kk;


        $employees_ru = $request->employees_ru ? $request->employees_ru : [];
        foreach ($employees_ru as $key => $value) {
            if (empty($value["title"])) {
                unset($employees_ru[$key]);
            } else {
                if (!empty($value["img"])) {
                    $imageName = "section-employees-" . $key . "-" . $item->id . "-" . time() . "." . $request->employees_ru[$key]["img"]->getClientOriginalExtension();
                    $request->employees_ru[$key]["img"]->move(public_path("images/sections/" . $item->id), $imageName);
                    $employees_ru[$key]["img"] = "/images/sections/" . $item->id . "/" . $imageName;
                } else {
                    $employees_ru[$key]["img"] = $employees_ru[$key]["old_img"];
                }
                unset($employees_ru[$key]["old_img"]);
            }
        }
        $employees_ru = array_values($employees_ru);
        $item->employees_ru = $employees_ru;

        $employees_en = $request->employees_en ? $request->employees_en : [];
        foreach ($employees_en as $key => $value) {
            if (empty($value["title"])) {
                unset($employees_en[$key]);
            } else {
                if (!empty($value["img"])) {
                    $imageName = "section-employees-" . $key . "-" . $item->id . "-" . time() . "." . $request->employees_en[$key]["img"]->getClientOriginalExtension();
                    $request->employees_en[$key]["img"]->move(public_path("images/sections/" . $item->id), $imageName);
                    $employees_en[$key]["img"] = "/images/sections/" . $item->id . "/" . $imageName;
                } else {
                    $employees_en[$key]["img"] = $employees_en[$key]["old_img"];
                }
                unset($employees_en[$key]["old_img"]);
            }
        }
        $employees_en = array_values($employees_en);
        $item->employees_en = $employees_en;

        $employees_kk = $request->employees_kk ? $request->employees_kk : [];
        foreach ($employees_kk as $key => $value) {
            if (empty($value["title"])) {
                unset($employees_kk[$key]);
            } else {
                if (!empty($value["img"])) {
                    $imageName = "section-employees-" . $key . "-" . $item->id . "-" . time() . "." . $request->employees_kk[$key]["img"]->getClientOriginalExtension();
                    $request->employees_kk[$key]["img"]->move(public_path("images/sections/" . $item->id), $imageName);
                    $employees_kk[$key]["img"] = "/images/sections/" . $item->id . "/" . $imageName;
                } else {
                    $employees_kk[$key]["img"] = $employees_kk[$key]["old_img"];
                }
                unset($employees_kk[$key]["old_img"]);
            }
        }
        $employees_kk = array_values($employees_kk);
        $item->employees_kk = $employees_kk;


        $item->save();

        $item->alias = Str::slug($item->id . '-' . $request->name_ru);
        $item->update(['alias' => Str::slug($item->id . '-' . $request->get("name_ru"))]);
        $item->alias = Str::slug($request->get("name_ru"));

        $logger = new Log;
        $logger->log('add', 'pages', $item->id, $item->name_ru);

        return redirect('/admin/page/' . $item->id)->with('status', 'Новая страница успешно добавлена');
    }

    public function store(Request $request)
    {
//        dd(21);
        $this->validate($request, [
            "name_ru" => "required|min:3|max:255",
            "alias" => "unique:pages,alias",
        ]);

        $item = new Page;
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
        //        $item->avatar = $request->image;
        $item->is_published = $request->is_published;
        $item->is_published = $request->get("is_published");

        $accordion_ru = $request->accordion_ru ? $request->accordion_ru : [];
        foreach ($accordion_ru as $key => $value) {
            if (empty($value["title"])) {
                unset($accordion_ru[$key]);
            }
        }
        $accordion_ru = array_values($accordion_ru);
        $item->accordion_ru = $accordion_ru;

        $accordion_en = $request->accordion_en ? $request->accordion_en : [];
        foreach ($accordion_en as $key => $value) {
            if (empty($value["title"])) {
                unset($accordion_en[$key]);
            }
        }
        $accordion_en = array_values($accordion_en);
        $item->accordion_en = $accordion_en;

        $accordion_kk = $request->accordion_kk ? $request->accordion_kk : [];
        foreach ($accordion_kk as $key => $value) {
            if (empty($value["title"])) {
                unset($accordion_kk[$key]);
            }
        }
        $accordion_kk = array_values($accordion_kk);
        $item->accordion_kk = $accordion_kk;


        $employees_ru = $request->employees_ru ? $request->employees_ru : [];
        foreach ($employees_ru as $key => $value) {
            if (empty($value["title"])) {
                unset($employees_ru[$key]);
            } else {
                if (!empty($value["img"])) {
                    $imageName = "section-employees-" . $key . "-" . $item->id . "-" . time() . "." . $request->employees_ru[$key]["img"]->getClientOriginalExtension();
                    $request->employees_ru[$key]["img"]->move(public_path("images/sections/" . $item->id), $imageName);
                    $employees_ru[$key]["img"] = "/images/sections/" . $item->id . "/" . $imageName;
                } else {
                    $employees_ru[$key]["img"] = $employees_ru[$key]["old_img"];
                }
                unset($employees_ru[$key]["old_img"]);
            }
        }
        $employees_ru = array_values($employees_ru);
        $item->employees_ru = $employees_ru;

        $employees_en = $request->employees_en ? $request->employees_en : [];
        foreach ($employees_en as $key => $value) {
            if (empty($value["title"])) {
                unset($employees_en[$key]);
            } else {
                if (!empty($value["img"])) {
                    $imageName = "section-employees-" . $key . "-" . $item->id . "-" . time() . "." . $request->employees_en[$key]["img"]->getClientOriginalExtension();
                    $request->employees_en[$key]["img"]->move(public_path("images/sections/" . $item->id), $imageName);
                    $employees_en[$key]["img"] = "/images/sections/" . $item->id . "/" . $imageName;
                } else {
                    $employees_en[$key]["img"] = $employees_en[$key]["old_img"];
                }
                unset($employees_en[$key]["old_img"]);
            }
        }
        $employees_en = array_values($employees_en);
        $item->employees_en = $employees_en;

        $employees_kk = $request->employees_kk ? $request->employees_kk : [];
        foreach ($employees_kk as $key => $value) {
            if (empty($value["title"])) {
                unset($employees_kk[$key]);
            } else {
                if (!empty($value["img"])) {
                    $imageName = "section-employees-" . $key . "-" . $item->id . "-" . time() . "." . $request->employees_kk[$key]["img"]->getClientOriginalExtension();
                    $request->employees_kk[$key]["img"]->move(public_path("images/sections/" . $item->id), $imageName);
                    $employees_kk[$key]["img"] = "/images/sections/" . $item->id . "/" . $imageName;
                } else {
                    $employees_kk[$key]["img"] = $employees_kk[$key]["old_img"];
                }
                unset($employees_kk[$key]["old_img"]);
            }
        }
        $employees_kk = array_values($employees_kk);
        $item->employees_kk = $employees_kk;


        $item->save();

        $item->alias = Str::slug($item->id . '-' . $request->name_ru);
        $item->update(['alias' => Str::slug($item->id . '-' . $request->get("name_ru"))]);
        $item->alias = Str::slug($request->get("name_ru"));

        $logger = new Log;
        $logger->log('add', 'pages', $item->id, $item->name_ru);

        return redirect('/admin/page/' . $item->id)->with('status', 'Новая статья успешно добавлена');
    }

    public function update(Request $request, Page $item)
    {

        $this->validate($request, [
            "name_ru" => "required|min:3|max:255",
            "alias" => Rule::unique("pages", "alias")->ignore($item->id),
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
        $item->is_published = $request->get("is_published");

        $accordion_ru = $request->accordion_ru ? $request->accordion_ru : [];
        foreach ($accordion_ru as $key => $value) {
            if (empty($value["title"])) {
                unset($accordion_ru[$key]);
            }
        }
        $accordion_ru = array_values($accordion_ru);
        $item->accordion_ru = $accordion_ru;

        $accordion_en = $request->accordion_en ? $request->accordion_en : [];
        foreach ($accordion_en as $key => $value) {
            if (empty($value["title"])) {
                unset($accordion_en[$key]);
            }
        }
        $accordion_en = array_values($accordion_en);
        $item->accordion_en = $accordion_en;

        $accordion_kk = $request->accordion_kk ? $request->accordion_kk : [];
        foreach ($accordion_kk as $key => $value) {
            if (empty($value["title"])) {
                unset($accordion_kk[$key]);
            }
        }
        $accordion_kk = array_values($accordion_kk);
        $item->accordion_kk = $accordion_kk;


        $employees_ru = $request->employees_ru ? $request->employees_ru : [];
        foreach ($employees_ru as $key => $value) {
            if (empty($value["title"])) {
                unset($employees_ru[$key]);
            } else {
                if (!empty($value["img"])) {
                    $imageName = "section-employees-" . $key . "-" . $item->id . "-" . time() . "." . $request->employees_ru[$key]["img"]->getClientOriginalExtension();
                    $request->employees_ru[$key]["img"]->move(public_path("images/sections/" . $item->id), $imageName);
                    $employees_ru[$key]["img"] = "/images/sections/" . $item->id . "/" . $imageName;
                } else {
                    $employees_ru[$key]["img"] = $employees_ru[$key]["old_img"];
                }
                unset($employees_ru[$key]["old_img"]);
            }
        }
        $employees_ru = array_values($employees_ru);
        $item->employees_ru = $employees_ru;

        $employees_en = $request->employees_en ? $request->employees_en : [];
        foreach ($employees_en as $key => $value) {
            if (empty($value["title"])) {
                unset($employees_en[$key]);
            } else {
                if (!empty($value["img"])) {
                    $imageName = "section-employees-" . $key . "-" . $item->id . "-" . time() . "." . $request->employees_en[$key]["img"]->getClientOriginalExtension();
                    $request->employees_en[$key]["img"]->move(public_path("images/sections/" . $item->id), $imageName);
                    $employees_en[$key]["img"] = "/images/sections/" . $item->id . "/" . $imageName;
                } else {
                    $employees_en[$key]["img"] = $employees_en[$key]["old_img"];
                }
                unset($employees_en[$key]["old_img"]);
            }
        }
        $employees_en = array_values($employees_en);
        $item->employees_en = $employees_en;

        $employees_kk = $request->employees_kk ? $request->employees_kk : [];
        foreach ($employees_kk as $key => $value) {
            if (empty($value["title"])) {
                unset($employees_kk[$key]);
            } else {
                if (!empty($value["img"])) {
                    $imageName = "section-employees-" . $key . "-" . $item->id . "-" . time() . "." . $request->employees_kk[$key]["img"]->getClientOriginalExtension();
                    $request->employees_kk[$key]["img"]->move(public_path("images/sections/" . $item->id), $imageName);
                    $employees_kk[$key]["img"] = "/images/sections/" . $item->id . "/" . $imageName;
                } else {
                    $employees_kk[$key]["img"] = $employees_kk[$key]["old_img"];
                }
                unset($employees_kk[$key]["old_img"]);
            }
        }
        $employees_kk = array_values($employees_kk);
        $item->employees_kk = $employees_kk;



        $item->save();

        $logger = new Log;
        $logger->log('edit', 'pages', $item->id, $item->name);

        return redirect('/admin/page/' . $item->id)->with('status', 'Данные о странице успешно сохранены');
    }

    public function delete(Page $item)
    {
        $item->delete();
        return redirect('/admin/pages')->with('status', 'Объект успешно удален');
    }
}

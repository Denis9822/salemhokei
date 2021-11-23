<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class VideoController extends Controller
{
    public function index(Request $request)
    {
        $term = $request->term ? $request->term : '';
        $query = Video::orderBy('id','desc');
        if ($term) {
            $query = $query->where('name_ru', 'like', '%' . $term . '%');
        }
        $items = $query->paginate();

        return view('admin.videos.index', [
            'items' => $items,
            'term' => $term,
        ]);
    }

    public function add(){

        $item = new Video;
        return view('admin.videos.view', [
            'item' => $item,
        ]);
    }

    public function edit(Video $item)
    {

        if (Auth::user()->can('video.edit')){

            return view('admin.videos.view', [
                'item' => $item,
            ]);
        }else{
            return view('admin.videos.show', [
                'item' => $item,
            ]);
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "upload_id" => "required|unique:uploads,id",
        ]);

        $item = new Video;
        $item->name_ru = $request->name_ru;
        $item->name_kk = $request->name_kk;
        $item->name_en = $request->name_en;
        $item->link_ru = $request->link_ru;
        $item->link_kk = $request->link_kk;
        $item->link_en = $request->link_en;
        $item->is_published = $request->get("is_published");
        $item->published_at = Carbon::createFromTimestamp(strtotime($request->get("published_at")));
        $item->save();

        $logger = new Log;
        $logger->log('add', 'videos', $item->id, $item->name_ru);

        return redirect('/admin/video/' . $item->id)->with('status', 'Новая статья успешно добавлена');
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            "name_ru" => "required|min:3|max:191",
            "link_ru" => "required|min:3|max:191",
        ]);

        $item = new Video;
        $item->name_ru = $request->name_ru;
        $item->name_kk = $request->name_kk;
        $item->name_en = $request->name_en;
        $item->link_ru = $request->link_ru;
        $item->link_kk = $request->link_kk;
        $item->link_en = $request->link_en;
        $item->is_published = $request->get("is_published");
        $item->published_at = Carbon::createFromTimestamp(strtotime($request->get("published_at")));
        $item->save();

        $logger = new Log;
        $logger->log('add', 'videos', $item->id, $item->name_ru);

        return redirect('/admin/video/' . $item->id)->with('status', 'Новая статья успешно добавлена');
    }

    public function update(Request $request, Video $item)
    {
        $this->validate($request, [
            "name_ru" => "required|min:3|max:191",
            "link_ru" => "required|min:3|max:191",
        ]);

        $item->name_ru = $request->name_ru;
        $item->name_kk = $request->name_kk;
        $item->name_en = $request->name_en;
        $item->link_ru = $request->link_ru;
        $item->link_kk = $request->link_kk;
        $item->link_en = $request->link_en;
        $item->is_published = $request->get("is_published");
        $item->published_at = Carbon::createFromTimestamp(strtotime($request->get("published_at")));
        $item->save();

        $logger = new Log;
        $logger->log('edit', 'videos', $item->id, $item->name_ru);

        return redirect('/admin/video/' . $item->id)->with('status', 'Данные о статье успешно изменены');
    }

    public function delete(Video $item)
    {
        $item->delete();
        return redirect('/admin/videos')->with('status', 'Объект успешно удален');
    }
}

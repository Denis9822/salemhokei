<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Validation\Rule;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $term = $request->term ? $request->term : '';
        $query = Event::orderBy('id', 'desc');
        if ($term) {
            $query = $query->where('name_ru', 'like', '%' . $term . '%');
        }
        $items = $query->paginate();

        return view('admin.events.index', [
            'items' => $items,
            'term' => $term,
        ]);

    }


    public function add()
    {
        $item = new Event;
        return view('admin.events.view', [
            'item' => $item
        ]);
    }

    public function edit(Event $item)
    {
        return view('admin.events.view', [
            'item' => $item
        ]);
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            "name_ru" => "required|min:3|max:255",
            "alias" => "unique:events,alias",
        ]);

        $item = new Event;
        $item->name_ru = $request->name_ru;
        $item->name_kk = $request->name_kk;
        $item->name_en = $request->name_en;
        $item->city_ru = $request->city_ru;
        $item->city_kk = $request->city_kk;
        $item->city_en = $request->city_en;
        $item->description_ru = $request->description_ru;
        $item->description_kk = $request->description_kk;
        $item->description_en = $request->description_en;
//        $item->avatar = $request->image;
        $item->is_published = $request->is_published;

        $item->date = Carbon::createFromTimestamp(strtotime($request->get("date")));
        $item->is_published = $request->get("is_published");

        $item->save();

        $item->alias = Str::slug($item->id . '-' . $request->name_ru);
        $item->update(['alias' => Str::slug($item->id . '-' .$request->get("name_ru"))]);
        $item->alias = Str::slug($request->get("name_ru"));

        $logger = new Log;
        $logger->log('add', 'events', $item->id, $item->name_ru);

        return redirect('/admin/event/' . $item->id)->with('status', 'Новая статья успешно добавлена');
    }

    public function update(Request $request, Event $item)
    {

        $this->validate($request, [
            "name_ru" => "required|min:3|max:255",
            "alias" => Rule::unique("events", "alias")->ignore($item->id),
        ]);

        $item->name_ru = $request->name_ru;
        $item->name_kk = $request->name_kk;
        $item->name_en = $request->name_en;
        $item->city_ru = $request->city_ru;
        $item->city_kk = $request->city_kk;
        $item->city_en = $request->city_en;
        $item->description_ru = $request->description_ru;
        $item->description_kk = $request->description_kk;
        $item->description_en = $request->description_en;
//        $item->avatar = $request->image;
        $item->is_published = $request->is_published;
        $alias = $request->get("alias", Str::slug($item->id . "-" . $request->get("name_ru")));
        $alias = $alias !== null ? $alias : Str::slug($item->id . "-" . $request->get("name_ru"));
        $item->alias = $alias;
        $item->date = Carbon::createFromTimestamp(strtotime($request->get("date")));
        $item->is_published = $request->get("is_published");

        $item->save();

        $logger = new Log;
        $logger->log('edit', 'events', $item->id, $item->name);

        return redirect('/admin/event/' . $item->id)->with('status', 'Данные о статье успешно изменены');

    }

    public function delete(Event $item)
    {
        $item->delete();
        return redirect('/admin/events')->with('status', 'Объект успешно удален');
    }



}

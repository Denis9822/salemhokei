<?php

namespace App\Http\Controllers\Admin;

use App\Models\Region;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $term = $request->get("term");
        $query = Region::orderBy("id", "desc");
        if ($term) {
            $query = $query->where("name_ru", "like", "%" . $term . "%");
        }

        $items = $query->paginate();

        return view("admin.regions.index", [
            "items" => $items,
            'term' => $term
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lang = 'ru')
    {

        return view('admin.regions.view',
        [
            'lang' => $lang,
            'item' => new Region,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "name_ru" => "required|min:3|max:255",
        ]);
        $item = new Region;
        $item->name_ru = $request->name_ru;
        $item->name_kk = $request->name_kk;
        $item->name_en = $request->name_en;


        $item->save();

        return redirect(route('regions.edit', $item->id))->with("status", "Новый раздел успешно добавлен");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit(Region $region, $lang = 'ru')
    {
        return view('admin.regions.view',
            [
                'lang' => $lang,
                'item' => $region,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Region $region)
    {
        $this->validate($request, [
            "name_ru" => "required|min:3|max:255",
        ]);
        $item = new Region;
        $region->name_ru = $request->name_ru;
        $region->name_kk = $request->name_kk;
        $region->name_en = $request->name_en;


        $region->save();
        return redirect( route('regions.edit', $region->id))->with("status", "Данные успешно изменены");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
        $region->delete();
        return redirect(route('regions.index'))->with("status", "Объект успешно удален");
    }
}

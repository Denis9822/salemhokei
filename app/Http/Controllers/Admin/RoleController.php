<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Caffeinated\Shinobi\Models\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $term = $request->term ? $request->term : '';
        $query = Role::orderBy('id','desc');
        if ($term) {
            $query = $query->where('name', 'like', '%' . $term . '%');
        }
        $items = $query->paginate();

        return view('admin.roles.index', [
            'items' => $items,
            'term' => $term,
        ]);

    }

    public function add(){

        $item = new Role;
        $permissions = Permission::all();
        return view('admin.roles.view', [
            'item' => $item,
            'permissions' => $permissions
        ]);
    }

    public function edit(Role $item)
    {
        $permissions = Permission::all();

        if (Auth::user()->can('user_role.edit')){

            return view('admin.roles.view', [
                'item' => $item,
                'permissions' => $permissions
            ]);
        }else{
            return view('admin.roles.show', [
                'item' => $item,
                'permissions' => $permissions
            ]);
        }
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            "name" => "required|min:3|max:255"
        ]);

        $item = new Role;
        $item->name = $request->name;

        $item->save();

        $item->permissions()->sync($request->get('permissions', []));

        $logger = new Log;
        $logger->log('add', 'roles', $item->id, $item->name_ru);

        return redirect('/admin/role/' . $item->id)->with('status', 'Новая статья успешно добавлена');
    }

    public function update(Request $request, Role $item)
    {
        $this->validate($request, [
            "name" => "required|min:3|max:255"
        ]);

        $item->name = $request->name;

        $item->save();

        $item->permissions()->sync($request->get('permissions', []));

        $logger = new Log;
        $logger->log('edit', 'roles', $item->id, $item->name);

        return redirect('/admin/role/' . $item->id)->with('status', 'Данные о статье успешно изменены');
    }

    public function delete(Permission $item)
    {
        $item->delete();
        return redirect('/admin/roles')->with('status', 'Объект успешно удален');
    }
}

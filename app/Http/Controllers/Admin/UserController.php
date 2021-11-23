<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\EmailHelper;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Log;

use Caffeinated\Shinobi\Models\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();
        $term = $request->get("term");
        $query = User::where("id", "!=", $user->id);
        if ($term) {
            $query = $query->where("name", "like", "%" . $term . "%");
        }
        $items = $query->orderBy("id", "desc")->paginate();
        return view("admin.users.index", [
            "items" => $items,
            "term" => $term,
        ]);
    }

    public function profile(Request $request)
    {

        return view('admin.profile.index', [
            'user' => $request->user()
        ]);
    }

    public function create()
    {
        $item = new User;
        $roles = Role::all();
        return view("admin.users.view", [
            "item" => $item,
            "roles" => $roles
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => "required|min:3|max:255",
            "email" => "required|email|min:3|max:255|unique:users,email",
            "password" => "required|min:3|max:255",
            "role" => "required",
        ]);

        if ($request->get("role") == "simple") {
            $this->validate($request, ["iin" => "required|digits:12|unique:users,iin"]);
        } elseif ($request->get("role") == "provider") {
            $this->validate($request, ["bin" => "required|digits:12|unique:users,bin"]);
        }

        $item = new User;
        $item->name = $request->get("name");
        $item->email = $request->get("email");
        $item->email_verified_at = Carbon::now();
//        $password = str_random(16);
        $item->password = bcrypt($request->get("password"));
        $item->save();

//        $roles = Role::get(['name'])->toArray();
//        $role = $request->get("role", "redactor");
//        $role = in_array($role, $roles);
//        $item->syncRoles($role);

        $item->categories()->sync($request->input('role'));

        $logger = new Log;
        $logger->log("add", "users", $item->id, $item->name);

        $from = "kazakh.invest@panama.kz";
        $subject = __("default.notifications.register.title") . " | " . date("d-m-Y H:i:s");
        $data = [
            "name" => $item->name,
            "login" => $item->email,
            "password" => $request->get("password"),
            "link" => env("APP_URL") . "/admin/login",
        ];
        EmailHelper::SMTPSendEmail($from, $item->email, $subject, $data, "server.email.notifications.register");

//        return redirect("/admin/user/" . $item->id)->with("new_password", $request->get("password"));
        return redirect("/admin/user/" . $item->id);
    }

    public function edit(User $item)
    {
        $roles = Role::all();

        return view("admin.users.view", [
            "item" => $item,
            "roles" => $roles
        ]);
    }

    public function update(Request $request, User $item)
    {
        $this->validate($request, [
            "name" => "required|min:3|max:255",
            "email" => "required|email|min:3|max:255|unique:users,email," . $item->id,
            "role" => "required",
        ]);

        if ($request->get("role") == "simple") {
            $this->validate($request, ["iin" => "required|digits:12|unique:users,iin," . $item->id]);
        } elseif ($request->get("role") == "provider") {
            $this->validate($request, ["bin" => "required|digits:12|unique:users,bin," . $item->id]);
        }

        $item->name = $request->get("name");
        $item->email = $request->get("email");
        $item->save();

        $role = $request->get("role", "redactor");
        $role = in_array($role, ["redactor", "admin"]) ? $role : "redactor";
        $item->syncRoles($role);

        $logger = new Log;
        $logger->log("edit", "users", $item->id, $item->name);

        return redirect("/admin/user/" . $item->id)->with("status", "Данные успешно обновлены");
    }

    public function password_reset(User $item)
    {
        $password = str_random(16);
        $item->password = bcrypt($password);
        $item->save();

        $logger = new Log;
        $logger->log("edit", "users", $item->id, $item->name);

        $from = "no-reply@ccltd.kz";
        $subject = __("default.notifications.password_reset.title") . " | " . date("d-m-Y H:i:s");
        $data = [
            "name" => $item->name,
            "login" => $item->email,
            "password" => $password,
            "link" => env("APP_URL") . "/login",
        ];

        EmailHelper::SMTPSendEmail($from, $item->email, $subject, $data, "server.email.notifications.password_reset");

        return redirect("/admin/user/" . $item->id)->with("new_password", $password);
    }

    public function delete(User $item)
    {
        $item->delete();
        return redirect("/admin/users")->with("status", "Объект успешно удален");
    }

    public function new_password(User $item){
        return view("admin.users.new_password", [
            "item" => $item,
        ]);
    }

    public function new_password_save(User $item, Request $request)
    {
        $status_check = Hash::check($request->get("old_password"), $item->password);
        if ($status_check == true) {
            $item->password = bcrypt($request->get("new_password"));
            $item->save();
        }else{
            return redirect("/admin/user/new_password/" . $item->id)->with('status', 'Неверно введен текущий пароль');
        }

        return redirect("/admin/user/" . $item->id)->with("new_password", $request->get("new_password"));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Log;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function show(Request $request)
    {
        if (Auth::check()) {
            return view("admin.profile.index", [
                "user" => $request->user()
            ]);
        }else{
            return view("admin.auth.login");
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "max:255",
            "email" => "max:255",
            "password" => "min:8|confirmed",
        ]);

        /** @var User $user */
        $user = $request->user();
        if (!empty($request->old_password)) {
            if (!Auth::attempt(["email" => $user->email, "password" => $request->old_password])) {
                $validator->errors()->add("old_password", "Пароль не совпадает");
            }
        }

        if (count($validator->errors()) > 0) {
            return redirect("/admin/profile")
                ->withErrors($validator);
        }

        if (!empty($request->name)) {
            $user->name = $request->name;
        }
        if (!empty($request->email)) {
            $user->email = $request->email;
        }
        if (!empty($request->old_password) && !empty($request->password)) {
            $hash = bcrypt($request->password);
            $user->password = $hash;
        }
        $user->save();

        $logger = new Log;
        $logger->log("edit", "users", $user->id, $user->name);

        return redirect("/admin/profile");
    }
}

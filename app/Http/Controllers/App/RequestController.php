<?php

namespace App\Http\Controllers\App;

use App\Helpers\EmailHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class RequestController extends Controller
{
    public function send(Request $request)
    {
        $this->validate($request, [
            "name" => "required|min:3|max:255",
            "email" => "required|email|min:3|max:255",
            "phone" => "required",
        ]);

        if (substr($request->get("phone"), 0, 4) != "+7 7") {
            return Response::json(["success" => false]);
        }

        $from = "no-reply@ccltd.kz";
        $to = "info@ccltd.kz";
//        $to = "meir@panama.kz";
        $subject = "Заявка пользователя на сайте ccltd.kz | " . date("d-m-Y H:i:s");
        $data = [
            "name" => $request->get("name"),
            "phone" => $request->get("phone"),
            "email" => $request->get("email"),
            "msg" => $request->get("message"),
        ];
        $stat = EmailHelper::SMTPSendEmail($from, $to, $subject, $data, "server.email.notifications.request");

        return Response::json(["success" => true]);
    }
}

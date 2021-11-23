<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Log;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;


class AjaxController extends Controller
{
    public $imageMaxSize = "10000";
    public $fileMaxSize = "25000";

    public function uploadPic(Request $request)
    {
        if ($request->header("Origin") != env("APP_URL")) {
            return Response::json(array("success" => false));
        }

        $this->validate($request, [
            "file" => "image|max:$this->imageMaxSize"
        ]);

        $file = $request->file;
        $imageName = time() . "." . $file->getClientOriginalExtension();
        $file->move(public_path("images"), $imageName);

        $logger = new Log;
        $logger->log("upload_img", "", "", $imageName);

//        Helper::resize("/images/" . $imageName);

        return Response::json(array("filelink" => config("APP_URL") . "/images/" . $imageName));
    }

    public function ajaxUploadPic(Request $request)
    {
        // dd($request->header("Origin"), env("APP_URL"));
        if ($request->header("Origin") != env("APP_URL")) {
            return Response::json(array("success" => false));
        }

        $this->validate($request, [
            "file" => "image|max:$this->imageMaxSize"
        ]);

        $file = $request->file;
        $imageName = time() . "." . $file->getClientOriginalExtension();
        $file->move(public_path("images"), $imageName);

        $logger = new Log;
        $logger->log("upload_img", "", "", $imageName);

//        Helper::resize("/images/" . $imageName);

        return Response::json(array("location" => config("APP_URL") . "/images/" . $imageName));
    }

    public function uploadFile(Request $request)
    {
        if ($request->header("Origin") != env("APP_URL")) {
            return Response::json(array("success" => false));
        }

        $rules = array(
            "file" => "file|required|max:$this->fileMaxSize|mimes:docx,doc,xls,xlsx,pdf,txt,ppt,pptx"
        );

        $validation = Validator::make(Input::all(), $rules);
        $file = Input::file("file");
        if ($validation->fails()) {
            return FALSE;
        } else {

            $imageName = time() . "." . $file->getClientOriginalExtension();
            $file->move(public_path("files"), $imageName);

            $logger = new Log;
            $logger->log("upload_file", "", "", $imageName);

            return Response::json(array("filelink" => config("APP_URL") . "/files/" . $imageName));
        }
    }

    public function ajaxUploadFile(Request $request)
    {
        if ($request->header("Origin") != env("APP_URL")) {
            return Response::json(array("success" => false));
        }

        $rules = array(
            "file" => "file|required|max:$this->fileMaxSize|mimes:docx,doc,xls,xlsx,pdf,txt,ppt,pptx"
        );

        $validation = Validator::make(Input::all(), $rules);
        $file = Input::file("file");
        if ($validation->fails()) {
            return Response::json(array("success" => false));
        } else {
            $imageName = time() . "." . $file->getClientOriginalExtension();
            $file->move(public_path("files"), $imageName);

            $logger = new Log;
            $logger->log("upload_file", "", "", $imageName);

            return Response::json(array(
                "success" => true,
                "location" => config("APP_URL") . "/files/" . $imageName
            ));
        }
    }
}

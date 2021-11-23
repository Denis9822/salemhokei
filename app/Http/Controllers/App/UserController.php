<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Agreement;
use App\Models\Album;
use App\Models\Article;
use App\Models\Section;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();
//        return view("app.pages.user.profile", [
//            "user" => $user,
//        ]);
        $articles = Article::query()->get();
        $albums = Album::query()->get();
        $videos = Video::query()->get();

        $merged = collect($articles)->merge($albums)->merge($videos);

        return $merged->forPage(1, 9);
    }
}

<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(["namespace" => "Admin"], function () {
    Route::post("/redactoruploadimage", "AjaxController@uploadPic");
    Route::post("/redactoruploadfile", "AjaxController@uploadFile");

    Route::post("/ajax_upload_image", "AjaxController@ajaxUploadPic");
    Route::post("/ajax_upload_file", "AjaxController@ajaxUploadFile");

    Route::group(["prefix" => "admin"], function () {

        Route::post("/upload/video", "UploadController@store")->name('video.store');
        Route::post("/upload/image", "UploadController@store_image")->name('image.store');
        //
        Route::get("/static-page/{item}", "PageController@editStaticPage");
        Route::put("/text/{text}", "TextController@update")->name('text.update');

        Route::get("/login", "LoginController@showLoginForm");
        Route::post("/login", "LoginController@login");
        Route::get("/", "ProfileController@show");
        Route::get("/profile", "ProfileController@show");
        Route::post("/profile", "ProfileController@update");

        Route::group(["middleware" => "has.permission:article.create"], function () {
            Route::get("/article/add", "ArticleController@add");
            Route::post("/article/add", "ArticleController@save");
        });

        Route::group(["middleware" => "has.permission:event.create"], function () {
            Route::get("/event/add", "EventController@add");
            Route::post("/event/add", "EventController@save");
        });



        Route::group(["middleware" => "has.permission:page.create"], function () {
            Route::get("/page/add", "PageController@add");
            Route::post("/page/add", "PageController@save");
        });


        // Страницы
        Route::group(["middleware" => "has.permission:page.view"], function () {
            Route::get("/pages", "PageController@index");
//            Route::any("/page/{item}", "PageController@edit");
            Route::get("/page/{item}", "PageController@edit");
        });


        Route::group(["middleware" => "has.permission:user.create"], function () {
            Route::get("/user/add", "UserController@create");
            Route::post("/user/add", "UserController@store");
        });

        Route::group(["middleware" => "has.permission:user_role.create"], function () {
            Route::get("/role/add", "RoleController@add");
            Route::post("/role/add", "RoleController@save");
        });

        Route::group(['prefix' => 'regions'], function () {
            Route::get("/add", "RegionController@create")->name('regions.create');
            Route::post("/add", "RegionController@store")->name('regions.store');
//            Route::get("/notifications", "RegionController@notifications");
            Route::get("/", "RegionController@index")->name('regions.index');
            Route::get("/{region}", "RegionController@edit")->name('regions.edit');
            Route::post("/{region}", "RegionController@update")->name('regions.update');
            Route::delete("/{region}", "RegionController@destroy")->name('regions.delete');
        });

        Route::group(["middleware" => "has.permission:section.create"], function () {
            Route::get("/section/add/{name?}", "SectionController@add");
            Route::post("/section/add", "SectionController@save");
        });

        Route::group(["middleware" => "has.permission:user.view"], function () {
            Route::get("/users", "UserController@index");
            Route::get("/user/{item}", "UserController@edit");
        });

        Route::group(["middleware" => "has.permission:video.create"], function () {
            Route::get("/video/add", "VideoController@add");
            Route::post("/video/add", "VideoController@save");
        });

        Route::group(["middleware" => "has.permission:album.create"], function () {
            Route::get("/album/add", "AlbumController@add");
            Route::post("/album/add", "AlbumController@save");
        });

//        Route::group(["middleware" => "has.permission:access.view"], function () {
        // Секции
        Route::group(["middleware" => "has.permission:section.view"], function () {
            Route::get("/notifications", "SectionController@notifications");
            Route::get("/sections/{name?}", "SectionController@index");
            Route::get("/section/{item}", "SectionController@edit");

        });

        Route::group(["middleware" => "has.permission:section.edit"], function () {
            Route::post("/section/{item}", "SectionController@update");
            Route::get("/section/{item}/notify", "SectionController@notify");
        });
        Route::group(["middleware" => "has.permission:section.delete"], function () {
            Route::delete("/section/{item}", "SectionController@delete");
        });
        //
        // Новости
        Route::group(["middleware" => "has.permission:article.view"], function () {
            Route::get("/articles", "ArticleController@index");
            Route::get("/article/{item}", "ArticleController@edit");

        });

        Route::group(["middleware" => "has.permission:article.edit"], function () {
            Route::post("/article/{item}", "ArticleController@update");
            Route::get("/article/{item}/notify", "ArticleController@notify");
        });
        Route::group(["middleware" => "has.permission:article.delete"], function () {
            Route::delete("/article/{item}", "ArticleController@delete");
        });
        //
        // Мероприятия
        Route::group(["middleware" => "has.permission:event.view"], function () {
            Route::get("/events", "EventController@index");
            Route::get("/event/{item}", "EventController@edit");

        });
        Route::group(["middleware" => "has.permission:event.edit"], function () {
            Route::post("/event/{item}", "EventController@update");
        });
        Route::group(["middleware" => "has.permission:event.delete"], function () {
            Route::delete("/event/{item}", "EventController@delete");
        });

        Route::group(["middleware" => "has.permission:page.view"], function () {
            Route::get("/menu", "PageController@menu");
        });

        Route::group(["middleware" => "has.permission:page.edit"], function () {
            Route::post("/page/{item}", "PageController@update");
        });
        Route::group(["middleware" => "has.permission:page.delete"], function () {
            Route::delete("/page/{item}", "PageController@delete")->name('page.delete');
        });
        //
        // Роли
        Route::group(["middleware" => "has.permission:user_role.view"], function () {
            Route::get("/roles", "RoleController@index");
            Route::get("/role/{item}", "RoleController@edit");

        });
        Route::group(["middleware" => "has.permission:user_role.edit"], function () {
            Route::post("/role/{item}", "RoleController@update");
            Route::get("/role/{item}/notify", "RoleController@notify");
        });
        Route::group(["middleware" => "has.permission:user_role.delete"], function () {
            Route::delete("/role/{item}", "RoleController@delete");
        });
        //
        // Видео
        Route::group(["middleware" => "has.permission:video.view"], function () {
            Route::get("/videos", "VideoController@index");
            Route::get("/video/{item}", "VideoController@edit");

        });
        Route::group(["middleware" => "has.permission:video.edit"], function () {
            Route::post("/video/{item}", "VideoController@update");
            Route::get("/video/{item}/notify", "VideoController@notify");
        });
        Route::group(["middleware" => "has.permission:video.delete"], function () {
            Route::delete("/video/{item}", "VideoController@delete");
        });
        //
        // Альбомы
        Route::group(["middleware" => "has.permission:album.view"], function () {
            Route::get("/albums", "AlbumController@index");
            Route::get("/album/{item}", "AlbumController@edit");

        });
        Route::group(["middleware" => "has.permission:album.edit"], function () {
            Route::post("/album/{item}", "AlbumController@update");
            Route::get("/album/{item}/notify", "AlbumController@notify");
            Route::post('/album/add_picture/{id}', 'AlbumController@addPicture');
//            Route::delete('/album/delete_picture/{id}', 'AlbumController@deletePicture');
        });
        Route::group(["middleware" => "has.permission:album.delete"], function () {
            Route::delete("/album/{item}", "AlbumController@delete");
            Route::delete('/album/delete_picture/{id}', 'AlbumController@deletePicture');
        });
        //

        //  Пользователи
        Route::group(["middleware" => "has.permission:user.edit"], function () {
//            Route::get("/user/{item}", "UserController@edit");
            Route::post("/user/{item}", "UserController@update");
            Route::get("/user/password_reset/{item}", "UserController@password_reset");
            Route::get("/user/new_password/{item}", "UserController@new_password");
            Route::post("/user/new_password_save/{item}", "UserController@new_password_save");
        });
        Route::group(["middleware" => "has.permission:user.delete"], function () {
            Route::delete("/user/{item}", "UserController@delete");
        });
    });


    //

//    Route::group(["middleware" => "has.permission:access.full"], function () {
//        Route::get("/users", "UserController@index");
//
//        Route::get("/user/add", "UserController@create");
//        Route::post("/user/add", "UserController@store");
//
//        Route::get("/user/password_reset/{item}", "UserController@password_reset");
//        Route::get("/user/new_password/{item}", "UserController@new_password");
//        Route::post("/user/new_password_save/{item}", "UserController@new_password_save");
//
//        Route::get("/user/{item}", "UserController@edit");
//        Route::post("/user/{item}", "UserController@update");
//
//        Route::delete("/user/{item}", "UserController@delete");
//
//
//        Route::get("/user/{user}/agreement/add", "AgreementController@create");
//        Route::post("/user/{user}/agreement/add", "AgreementController@store");
//
//        Route::get("/user/{user}/agreement/{item}", "AgreementController@edit");
//        Route::post("/user/{user}/agreement/{item}", "AgreementController@update");
//
//        Route::delete("/user/{user}/agreement/{item}", "AgreementController@delete");
//    });
//    });
});

Route::group(["middleware" => ["web"], "namespace" => "App"], function () {

    Route::get("/sendmail", "PageController@sendmail");
    Route::get("/", "PageController@index");
    Route::post("/contact_mail", "PageController@contact_mail");
    Route::post("/record_to_school", "PageController@record_to_school");

    Route::group(['prefix' => '{lang}'], function () {
        Route::get("/", "PageController@index");
        Route::get("/pages/{alias}", "PageController@show");
        Route::get("/about", "PageController@about");
        Route::get("/equipment", "PageController@equipment");
        Route::get("/hockey", "PageController@hockey")->name('page.hockey');

        Route::get("/start", "PageController@start");
        Route::get("/schools", "PageController@schools")->name('schools');
        Route::get("/school/{item}", "PageController@school");
        Route::get("/rinks", "PageController@rollers")->name('rollers');
        Route::get("/rink/{item}", "PageController@rink")->name('rink');
        Route::post("/schooll", "PageController@schooll")->name('schooll');
        Route::post("/schoolreg", "PageController@schoolreg")->name('schoolreg');

        Route::get("/faq", "PageController@faq");
        Route::get("/play", "PageController@play");
        Route::get("/parents", "PageController@for_parents");
        Route::get("/training", "PageController@for_parents_training");
        Route::get("/food", "PageController@for_parents_food");
        Route::get("/psychology", "PageController@for_parents_psychology");
        Route::get("/article/{item}", "PageController@article");

        Route::get("/news", "PageController@news");
        Route::get("/news_articles", "PageController@news_articles");

        Route::get("/news_videos", "PageController@news_videos");
        Route::get("/news_albums", "PageController@news_albums");
        Route::get("/album/{id}", "PageController@album");


        Route::get("/login", "LoginController@showLoginForm");

        Route::get('/logout', 'LoginController@logout');
        Route::post('/logout', 'LoginController@logout');

        Route::post("/login", "LoginController@login");

        Route::group(["middleware" => "check.auth"], function () {
            Route::get("/cabinet", "UserController@index");
        });

        Route::post("/send", "RequestController@send");
    });
});


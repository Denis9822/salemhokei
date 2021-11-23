<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Mail\TrialLesson;
use App\Models\Album;
use App\Models\AlbumImage;
use App\Models\Article;
use App\Models\Region;
use App\Models\Section;
use App\Models\Text;
use App\Models\Video;
use Harimayco\Menu\Facades\Menu;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Helpers\EmailHelper;
use App\Models\Page;
use App\Models\Schoreg;


class PageController extends Controller
{
    public function index(Request $request, $lang = "ru")
    {

        $articles = Article::orderBy("published_at", "desc")
            ->where("is_published", "=", 1);
        $articles = $articles->take(5)->get();

        $textItems = Text::with('video')->where('page', '/')->orderByDesc('id')->get();

        $videos = Video::orderBy("published_at", "desc")
            ->where("is_published", "=", 1);
        $videos = $videos->take(5)->get();

        $albums = Album::orderBy("published_at", "desc")
            ->where("is_published", "=", 1);
        $albums = $albums->take(5)->get();

        return view("app.pages.home.index", [
            "items" => [],
            'lang' => $lang,
            'articles' => $articles,
            'videos' => $videos,
            'albums' => $albums,
            'textItems' => $textItems
        ]);
    }

    public function about(Request $request, $lang = "ru")
    {
        return view("app.pages.about", [
            "items" => [],
            "lang" => $lang
        ]);
    }

    public function equipment(Request $request, $lang = "ru")
    {
        $textItems = Text::where('page', 'hockey')->get();
        return view("app.pages.equipment", [
            "items" => [],
            "textItems" => $textItems,
            "lang" => $lang
        ]);
    }

    public function hockey(Request $request, $lang = "ru")
    {
        $textItems = Text::with('video')->where('page', 'hockey')->get();
        return view("app.pages.hockey", [
            "items" => [],
            "textItems" => $textItems,
            "lang" => $lang
        ]);
    }
    public function rollers(Request $request, $lang = "ru")
    {
        $regions = Region::all();
        $schools = Section::where("is_published", "=", 1)->where('type',2)->with('regions')->paginate(6);

        $type = $request->type;

        if (empty($type)) {
            $schools = [];
        } else {
            $schools = Section::where('is_published', '=', 1)->where('type',2)->with('regions')->whereHas('regions', function ($query) use ($type) {
                $query->where('regions.id', '=', $type);
            })->paginate(6);
        }

        $random= rand(1,4);
        $linkImg = "/assets/img/schools/".$lang."/style".$random;
        $color = "#fff";
        if ($random == 1) $color = "##1A215D";
        else if ($random == 2) $color = "#fff";
        else if ($random == 3) $color = "#fff";
        else if ($random == 4) $color = "#1A215D";
        $regItems = Region::get();
        $textItems = Text::where('page', 'schools')->get();

        return view("app.pages.rollers", [
            "schools" => $schools,
            "regions" => $regions,
            'textItems' => $textItems,
            'regItems' => $regItems,
            "lang" => $lang,
            'linkImg' => $linkImg,
            'color' => $color
        ]);
    }

    public function schools(Request $request, $lang = "ru")
    {
        $regions = Region::all();
        $schools = Section::where("is_published", "=", 1)->where('type',1)->with('regions')->paginate(6);
        $type = $request->type;

        if (empty($type)) {
            $schools = [];
        } else {
            $schools = Section::where('is_published', '=', 1)->where('type',1)->with('regions')->whereHas('regions', function ($query) use ($type) {
                $query->where('regions.id', '=', $type);
            })->paginate(6);
        }

        $random= rand(1,4);
        $linkImg = "/assets/img/schools/".$lang."/style".$random;
        $color = "#fff";
        if ($random == 1) $color = "##1A215D";
        else if ($random == 2) $color = "#fff";
        else if ($random == 3) $color = "#fff";
        else if ($random == 4) $color = "#1A215D";
        $regItems = Region::get();
        $textItems = Text::where('page', 'schools')->get();

        return view("app.pages.schools", [
            "schools" => $schools,
            "regions" => $regions,
            'textItems' => $textItems,
            'regItems' => $regItems,
            "lang" => $lang,
            'linkImg' => $linkImg,
            'color' => $color
        ]);
    }

    public function schoolreg(Request $request, $lang = 'ru')
    {
        $data = $request->except('_token');

        $this->validate($request, [
            "first_name" => "required", "last_name" => "required",
            "email" => "required|email", "phone" => "required", "avatar",
            "sex", "cite" => "required", "shool" => "required",
        ]);

        if (Schoreg::where('email', $data['email'])->count() === 0) {
            $item = new Schoreg;
            $item->first_name = $data['first_name'];
            $item->last_name = $data['last_name'];
            $item->email = $data['email'];
            $item->phone = $data['phone'];
            $item->cite = $data['cite'];
            $item->shool = $data['shool'];
            $item->lang = $lang;
            if ($item->save()) {

                $this->reg_mail($data['email'], $lang);

                $scool = Section::where('id', intval($data['shool']))->where('email', '!=', 'NULL')->first();
                if (isset($scool)) {
                    $this->scool_mail($data['first_name'], $data['last_name'], $data['phone'], $data['email'], $scool->email);
                }
                return response()->json(['success' => 'Ajax request submitted successfully']);
            } else {
                return response()->json(['error' => 'Ajax request submitted unsuccessfully'], 422);
            }

        } else {
            return response()->json(['error' => 'Oldindan mavjut']);
        }
    }


    public function reg_mail($email, $lang = 'ru')
    {

        if ($lang == 'kk') {
            Mail::to($email)->locale('kk')->later(now()->addMinutes(1), new TrialLesson(['Salem Hokei']));
        } else {
            Mail::to($email)->locale('ru')->later(now()->addMinutes(1), new TrialLesson(['Salem Hokei']));
        }

        return redirect()->back()->with('success', 'message send!');
    }


    public function sendmail($lang = 'ru')
    {
        $email = 'parmonov98@yandex.ru';

        if ($lang == 'kk') {
            Mail::to($email)->locale('kk')->later(now()->addMinutes(1), new TrialLesson(['Salem Hokei']));
        } else {
            Mail::to($email)->locale('ru')->later(now()->addMinutes(1), new TrialLesson(['Salem Hokei']));
        }


         dd('successfully sent1');
    }


    public function scool_mail($f_name, $l_name, $phone, $usmail, $email)
    {
        $mails = explode(";",$email);
        foreach ($mails as $mail) {
            $request = ['site' => 'SALEM HOKEI', 'name' => $f_name . ' ' . $l_name, 'phone' => $phone, 'email' => $usmail];
            Mail::send('app.pages.emails.record_to_school', ['data' => $request], function ($m) use ($mail) {
                $m->from(env('MAIL_FROM_ADDRESS'), 'Salem Hokei');
                $m->to($mail, 'Receiver')->subject('Сообщение с сайта SalemHokei.KZ');
            });
        }


    }


    public function shkola($id)
    {

        if (empty($id)) {
            $schools = [];
        } else {
            $schools = Section::where('is_published', '=', 1)->where('type',1)->with('regions')->whereHas('regions', function ($query) use ($id) {
                $query->where('regions.id', '=', $id);
            })->get();
        }
        return $schools;
    }




    public function schooll(Request $request, $lang = 'ru')
    {
        $data = $request->except('_token');

        $item = $this->shkola($data['gor']);


        if ($data['gor'] == '' || $item->count() == 0) {
            $s = '<option value="">----</option>';
        } else {
            $s = '<option value="">-----</option>';
            foreach ($item as $key => $value) {
                $s .= '<option value="' . $value->id . '">' . $value['name_' . $lang] . '</option>';
            }
        }

        return ['select' => $s];
    }


    public function start(Request $request, $lang = 'ru')
    {
        return view('app.pages.start',compact('lang'));
    }
    public function school(Request $request, $lang = 'ru', $alias)
    {

        $item = Section::whereAlias($alias)
            ->with('regions')->where('type',1)
            ->whereIsPublished(true)
            ->first();

        return view('app.pages.school', [
            'lang' => $lang,
            'item' => $item
        ]);
    }

    public function rink(Request $request, $lang = 'ru', $alias)
    {

        $item = Section::whereAlias($alias)
            ->with('regions')->where('type',2)
            ->whereIsPublished(true)
            ->first();

        return view('app.pages.rink', [
            'lang' => $lang,
            'item' => $item
        ]);
    }

    public function faq(Request $request, $lang = "ru")
    {
        $textItems = Text::with('video')->where('page', 'faq')->orderByDesc('id')->get();
        return view("app.pages.faq", [
            "lang" => $lang,
            'textItems' => $textItems
        ]);
    }

    public function for_parents(Request $request, $lang = "ru")
    {
//        dd($request->all());
//        $textItems = Text::with('video')->where('page', 'parents')->orderByDesc('id')->get();
//        dd($textItems);
//        dd($ParentsNavBar->roots());
        return view("app.pages.parents", [
            "lang" => $lang,
//            'textItems' => $textItems
        ]);
    }

    public function play(Request $request, $lang = "ru")
    {
        $textItems = Text::with('video')->where('page', 'play')->orderByDesc('id')->get();
        return view("app.pages.play", [
            "lang" => $lang,
            'textItems' => $textItems
        ]);
    }

    public function for_parents_training(Request $request, $lang = "ru")
    {
        return view("app.pages.for_parents_training", [
            "lang" => $lang
        ]);
    }

    public function for_parents_food(Request $request, $lang = "ru")
    {
        return view("app.pages.for_parents_food", [
            "lang" => $lang
        ]);
    }

    public function for_parents_psychology(Request $request, $lang = "ru")
    {
        return view("app.pages.for_parents_psychology", [
            "lang" => $lang
        ]);
    }

    public function article(Request $request, $lang = 'ru', $alias)
    {
        $item = Article::whereAlias($alias)
            ->whereIsPublished(true)
            ->first();

        return view('app.pages.article', [
            'lang' => $lang,
            'item' => $item
        ]);
    }

    public function news_articles(Request $request, $lang = 'ru')
    {
        $articles = Article::where("is_published", "=", 1)->paginate(9);

        return view('app.pages.news_articles', [
            'lang' => $lang,
            'articles' => $articles
        ]);
    }

    public function news_videos(Request $request, $lang = 'ru')
    {
        $videos = Video::where("is_published", "=", 1)->paginate(9);

        return view('app.pages.news_videos', [
            'lang' => $lang,
            'videos' => $videos
        ]);
    }

    public function news_albums(Request $request, $lang = 'ru')
    {
        $albums = Album::where("is_published", "=", 1)->paginate(9);

        return view('app.pages.news_albums', [
            'lang' => $lang,
            'albums' => $albums
        ]);
    }

    public function album(Request $request, $lang = 'ru')
    {
        $item = Album::where('id', '=', $request->id)
            ->whereIsPublished(true)
            ->first();
        $photos = AlbumImage::orderBy('id', 'desc')->with('album')->where('album_id', '=', $request->id)->get();

        return view('app.pages.album', [
            'lang' => $lang,
            'item' => $item,
            'photos' => $photos
        ]);
    }

    public function news(Request $request, $lang = 'ru')
    {
        $articles = Article::get();
        $albums = Album::get();
        $videos = Video::get();


        $items = collect($articles)->merge($albums)->merge($videos)->paginate(9);


        return view('app.pages.news', [
            'lang' => $lang,
            'items' => $items,
        ]);
    }

    public function contact_mail(Request $request, $lang = 'ru')
    {
        $emails = array(env('MAIL_USERNAME'));

        Mail::send('app.pages.emails.view', ['data' => $request], function ($m) use ($emails) {
            foreach ($emails as $email) {
                $m->from(env('MAIL_USERNAME'), 'Salem Hokei');
                $m->to($email, 'Receiver')->subject('Сообщение с сайта');
            }
        });

        return redirect()->back()->with('success', 'message send!');
    }

    public function record_to_school(Request $request, $lang = 'ru')
    {

        $emails = array($request->email);
//        dd($emails);
        $mailed = Mail::send('app.pages.emails.record_to_school', ['data' => $request], function ($m) use ($emails) {
            foreach ($emails as $email) {
                $m->from(env('MAIL_USERNAME'), 'Salem Hokei');
                $m->to($email, 'Receiver')->subject('Запись на пробное занятие');
            }
        });


        dd($mailed);
//        return redirect()->back()->with('success', 'message send!');
    }

    public function show(Request $request, $lang, $alias)
    {
//         dd($alias);
        $item = Page::whereAlias($alias)->whereIsPublished(true)->orderBy("id", "desc")->first();
        // dd($item->accordion);
        if (!$item) {
            return abort(404);
        }

        return view("app.pages.page.default", [
            "item" => $item,
        ]);
    }

}

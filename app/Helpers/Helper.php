<?php

namespace App\Helpers;

use App\Models\Form;
use App\Models\Object;
use App\Models\Package;
use App\Models\Participant;
use App\Models\Register;
use App\Models\Research;
use App\Models\Service;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;

class Helper
{
    public static function resize($path = null)
    {
        if (empty($path)) {
            return false;
        }

        $path = substr($path, 1);

        if (!file_exists(public_path($path))) {
            return false;
        }

        $img = Image::make(public_path($path));

        $width = $img->width();
        $height = $img->height();

        if ($width > 1920 || $height > 1920) {
            if ($width > $height) {
                $img->resize(1920, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
            } else {
                $img->resize(null, 1920, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
            }
        }

        $img->save(public_path($path));

//        $imageOptimizer = new ImageOptimizer();
//        $imageOptimizer->optimizeImage(public_path($path));

        return true;
    }

    public static function preview($url)
    {
        $image = Helper::getYoutubeVideoPreview($url);

        if (!empty($image) && Helper::checkURL($url)) {
            return $image;
        }

        return env("APP_URL") . "/assets/img/unconted_sm.png";
    }


    public static function checkURL($url = null)
    {
        if (empty($url)) {
            return false;
        }

        $hash = md5($url);

        $result = Cache::remember("check_url_$hash", env("APP_LONG_CACHE_DURATION", 60), function () use ($url) {
            try {
                $headers = get_headers($url);
            } catch (\ErrorException $e) {
                return false;
            }
            return (isset($headers[0]) && stripos($headers[0], "200 OK")) ? true : false;
        });

        return $result;
    }

    public static function getYoutubeVideoPreview($link)
    {
        $id = trim(self::parseYoutube($link));
        if (empty($id) || $id == "") {
            return null;
        }

        $preview = "https://img.youtube.com/vi/" . $id . "/maxresdefault.jpg";
        return $preview;
    }

    public static function parseYoutube($link)
    {
        if (
        preg_match(
            "#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=embed/)[^&\n]+|(?<=v=)[^&\‌​n]+|(?<=youtu.be/)[^&\n]+#",
            $link, $m
        )
        ) {
            return array_shift($m);
        } else {
            return null;
        }
    }
}

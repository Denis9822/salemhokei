<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

/**
 * App\Http\Controllers\Controller
 *
 * @property string $from
 * @property string $baseUrl
 * @property User $user
 *
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $from = "info@panama.kz";
    public $baseUrl = "https://fms.kz";

    public function __construct()
    {
        $this->from = env("MAIL_USERNAME", $this->from);
        $this->baseUrl = env("APP_URL", $this->baseUrl);
    }
}

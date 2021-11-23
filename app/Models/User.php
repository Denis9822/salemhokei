<?php

namespace App\Models;

use App\Helpers\EmailHelper;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Caffeinated\Shinobi\Concerns\HasRolesAndPermissions;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;


/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $iin
 * @property string|null $bin
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Agreement[] $agreements
 * @property-read int|null $agreements_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Caffeinated\Shinobi\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Caffeinated\Shinobi\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereBin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereIin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable;
    use HasRolesAndPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name", "email", "password",
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        "password", "remember_token",
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        "email_verified_at" => "datetime",
    ];

    public function sendEmailVerificationNotification()
    {
        $baseUrl = env("APP_URL");
        $lang = App::getLocale();
        $from = env("MAIL_USERNAME");

        /** @var PasswordReset $res */
        $res = PasswordReset::firstOrCreate([
            "email" => $this->email,
        ]);
        $res->token = Str::random(8);
        $res->save();

        $subject = __("default.notifications.register.title") . " | " . date("d-m-Y H:i:s");
        $data = ["name" => $this->name, "token" => $res->token, "link" => "$baseUrl/$lang/auth/verifyEmail?token=$res->token"];

        EmailHelper::SMTPSendEmail($from, $this->email, $subject, $data, "vendor.email.verify-email");
        return true;
    }

    public function sendPasswordResetNotification($token = null)
    {
        $baseUrl = env("APP_URL");
        $lang = App::getLocale();
        $from = env("MAIL_USERNAME");

        /** @var PasswordReset $res */
        $res = PasswordReset::firstOrCreate([
            "email" => $this->email,
        ]);
        $res->token = Str::random(8);
        $res->save();

        $subject = __("default.notifications.password_reset.title") . " | " . date("d-m-Y H:i:s");
        $data = ["name" => $this->name, "token" => $res->token];

        EmailHelper::SMTPSendEmail($from, $this->email, $subject, $data, "vendor.email.password-reset");
        return true;
    }

    public function sendEmailNotification($subject, $data, $template)
    {
        $baseUrl = env("APP_URL");
        $lang = App::getLocale();
        $from = env("MAIL_USERNAME");

        /** @var PasswordReset $res */
        $res = PasswordReset::firstOrCreate([
            "email" => $this->email,
        ]);
        $res->token = Str::random(8);
        $res->save();

        $subject = __("default.notifications.register.title") . " | " . date("d-m-Y H:i:s");
        $data = ["name" => $this->name, "token" => $res->token, "link" => "$baseUrl/$lang/auth/verifyEmail?token=$res->token"];

        EmailHelper::SMTPSendEmail($from, $this->email, $subject, $data, "vendor.email.verify-email");
        return true;
    }


    public function agreements()
    {
        return $this->hasMany(Agreement::class, "user_id");
    }

    public function categories()
    {
        return $this->belongsToMany(Role_category::class, "role_user", "user_id", "role_id");
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


/**
 * App\Models\Log
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log query()
 * @mixin \Eloquent
 */
class Log extends Model
{
    public function log($type, $table, $id, $message)
    {
        $date = date('d-m-Y H:i:s');
        $str = $date;
        switch ($type) {
            case "add":
                $str .= " | Добавлена запись";
                $str .= " в таблицу:";
                $str .= " " . $table;

                $str .= " | ID:";
                $str .= " " . $id;
                break;
            case "edit":
                $str .= " | Изменена запись";
                $str .= " в таблице:";
                $str .= " " . $table;

                $str .= " | ID:";
                $str .= " " . $id;
                break;
            case "upload_file":
                $str .= " | Загружен файл";
                break;
            case "upload_image":
                $str .= " | Загружено изображение";
                break;
            case "block":
                $str .= " | Заблокирована запись";
                break;
        }
        $str .= " | " . $message . " \n";
        if ($user = Auth::user()) {
            $str .= "ID пользователя " . $user->id . " \n";
        } else {
            $str .= "ID пользователя undefined \n";
        }

        if (Storage::disk('local')->exists('events.log')) {
            $size = Storage::size('events.log');
            if ($size > 104857600) {
                Storage::move('events.log', $date . '.log');
            }
        }

        Storage::prepend('events.log', $str);

        return true;
    }
}

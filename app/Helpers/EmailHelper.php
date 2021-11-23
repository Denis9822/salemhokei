<?php

namespace App\Helpers;


use App\Models\Log;
use GuzzleHttp\Exception\ConnectException;
use Illuminate\Support\Facades\Mail;

class EmailHelper
{
    public static function oldSendEmail($from = null, $to = null, $subject = "", $data = array())
    {
        $headers = "From: $from\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html;charset=utf-8 \r\n";

        // Формирование тела письма
        $msg = "<html><body>";
        $msg .= "<h2>" . $subject . "</h2>\r\n";

//        $data = $data["data"];
        foreach ($data as $key => $item) {
            $msg .= "<h3>" . $key . " - " . $item . "</h3>\r\n";
        }
        $msg .= "</body></html>";

        return mail($to, $subject, $msg, $headers);
    }

    public static function SMTPSendEmail($from = null, $to = null, $subject = "", $data = array(), $template = "vendor.email.bootstrap-default")
    {
        try {
            Mail::send($template, $data, function ($message) use ($from, $to, $subject) {
                $message->from($from, "no-reply");
                $message->to($to);
                $message->subject($subject);
            });
        } catch (\Swift_TransportException $e) {
            return false;
        } catch (ConnectException $b) {
            return false;
        }
        return true;
    }
}

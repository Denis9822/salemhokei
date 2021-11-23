<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TrialLesson extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $data = ['test'];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->locale == 'ru'){
            return $this->from(env('MAIL_FROM_ADDRESS'))
                ->with('data', $this->data[0])
                ->subject('Вы оставили заявку на пробное занятие!')
                ->view('app.pages.emails.schoolru');

        }else{

            return $this->from(env('MAIL_FROM_ADDRESS'))
                ->with('data', $this->data[0])
                ->subject('Сіз сынақ сабағына өтініш қалдырдыңыз!')
                ->view('app.pages.emails.schoolkk');

            }
    }
}

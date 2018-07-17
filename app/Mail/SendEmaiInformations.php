<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmaiInformations extends Mailable
{
    use Queueable, SerializesModels;
    public $total;
    public $user;
    public $items;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($notificable)
    {
        $this->user = $notificable;
        $items = $notificable->cart[0]->cart_item;
        $total = (($notificable->cart[0]->cart_item[0]->product->price)*($notificable->cart[0]->cart_item[0]->quantity));
        $this->items = $notificable->cart[0]->cart_item;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.email');
    }
}

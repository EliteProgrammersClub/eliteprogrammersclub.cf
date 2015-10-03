<?php

namespace App\Http\Controllers;

use Mail;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\NewsLetter;
use App\Models\NewsLetterItem;

class NewsletterController extends BaseController
{
    protected $newsletter;

    public function __construct(Newsletter $newsletter)
    {
        $this->newsletter = $newsletter;
    }

    public function show($id)
    {
        $newsletter = $this->newsletter->find($id);

        // Mail::send('newsletters.show',['newsletter' => $newsletter], function ($m) {
        //    $m->to('arnold@archlinux.info', 'Acho Arnold')->subject('Your Reminder!');
        // });

        return view(
            'newsletters.show',
            [
                'newsletter' => $newsletter
            ]
        );

    }
}

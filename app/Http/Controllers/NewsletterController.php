<?php

namespace App\Http\Controllers;

use Mail;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Newsletter;
use App\Models\NewsletterItem;
use App\Models\Subscriber;

class NewsletterController extends BaseController
{
    private $newsletter;
    private $suscriber;

    public function __construct(
        Newsletter $newsletter,
        Subscriber $subscriber
    ) {
        $this->newsletter = $newsletter;
        $this->subscriber = $subscriber;
    }

    public function show($id)
    {
        $newsletter = $this->newsletter->find($id);


        return view(
            'newsletters.show',
            [
                'newsletter' => $newsletter,
            ]
        );
    }

    public function sendPreview()
    {
        $previewers = $this->subscriber->where('can_preview', '=', true)->where('status', '=', true)->get();
        $newsletter = $this->newsletter->find(1);

        foreach ($previewers as $previewer) {
            Mail::send(
                'newsletters.show',
                [
                    'newsletter' => $newsletter,
                    'subscriber' => $previewer,
                    'unsubscribeUrl' => route('subscriber.unsubscribe', ['token' => $previewer->unsubscribe_token ])
                ],
                function ($m) use ($previewer) {
                    $m->to($previewer->email, $previewer->name)
                      ->subject('Elite Programmers Club newsletter. | University of Buea');
                }
            );
        }

        return response()->json(['success' => true]);
    }

    public function send()
    {
        $subscribers = $this->subscriber->where('status', '=', true)->get();
        $newsletter = $this->newsletter->find(1);

        foreach ($subscribers as $subscriber) {
            Mail::send(
                'newsletters.show',
                [
                    'newsletter' => $newsletter,
                    'subscriber' => $subscriber,
                    'unsubscribeUrl' => route('subscriber.unsubscribe', ['token' => $subscriber->unsubscribe_token ])
                ],
                function ($m) use ($subscriber) {
                    $m->to($subscriber->email, $subscriber->name)
                      ->subject('Elite Programmers Club newsletter | University of Buea');
                }
            );
        }

        return response()->json(['success' => true]);
    }
}

<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends BaseController
{
    protected $subscriber;

    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }

    public function create()
    {
        return view('subscriber.create');
    }

    public function store(Request $request)
    {
        $this->subscriber->first_name = $request->input('first_name');
        $this->subscriber->last_name = $request->input('last_name');
        $this->subscriber->email = $request->input('email');
        $this->subscriber->can_preview = false;
        $this->subscriber->unsubscribe_token = generateUnsubscribeToken();
        $this->subscriber->save();
        return "sucess";
    }

    public function unsubscribe($token)
    {
        $subscriber = $this->subscriber->where('unsubscribe_token', '=', $token)->first();
        if ($subscriber) {
            $subscriber->status = false;
            $subscriber->save();
            return $subscriber->email."has been successfully unsubscribed from the newsletter";
        }

        return "User not found";

    }
}

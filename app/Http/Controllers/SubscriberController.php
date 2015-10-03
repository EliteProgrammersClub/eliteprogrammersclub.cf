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
        $this->subscriber->save();
        return "sucess";
    }
}

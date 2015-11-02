<?php


use App\Models\Subscriber;

//use SubscriberController

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {

    // $subscribers= Subscriber::all();
    // foreach ($subscribers as $subscriber) {
    //     $subscriber->unsubscribe_token = generateUnsubscribeToken();
    //     $subscriber->save();
    // }
    return "This website is under heavy development. We'll be online soon";
});



$app->group(['prefix' => 'subscribers', 'namespace' => 'App\Http\Controllers'], function ($app) {
    $app->post(
        '/',
        [
            'as' => 'subscriber.store',
            'uses' => 'SubscriberController@store',
        ]
    );

    $app->get(
        'create',
        [
            'as' => 'subscriber.create',
            'uses' => 'SubscriberController@create',
        ]
    );

    $app->get(
        'unsubscribe/{token}',
        [
            'as' => 'subscriber.unsubscribe',
            'uses' => 'SubscriberController@unsubscribe',
        ]
    );
});


$app->group(['prefix' => 'newsletters', 'namespace' => 'App\Http\Controllers' ], function ($app) {
    $app->get(
        'send-preview',
        [
            'as' => 'newsletter.send-preview',
            'uses' => 'NewsletterController@sendPreview'
        ]
    );

    $app->get(
        'send',
        [
            'as' => 'newsletter.send',
            'uses' => 'NewsletterController@send'
        ]
    );

    $app->get(
        '{id}',
        [
            'as' => 'newsletter.show',
            'uses' => 'NewsletterController@show'
        ]
    );
});




$app->get('hello', function () {
    $disk = \Storage::disk('s3');
    $disk->put(
        'cool.png',
        //time().'SublimeText_Master_012312_icon.png',
        file_get_contents('/Users/najela/Downloads/cool.png')
    );
    return json_encode(['sucess' => true]);
});

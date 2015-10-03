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
    return $app->welcome();
});



$app->group(['prefix' => 'subscribers', 'namespace' => 'App\Http\Controllers'], function ($app) {
    $app->get(
        'create',
        [
            'as' => 'subscriber.create',
            'uses' => 'SubscriberController@create',
        ]
    );

    $app->post(
        '/',
        [
            'as' => 'subscriber.store',
            'uses' => 'SubscriberController@store',
        ]
    );
});


$app->group(['prefix' => 'newsletters', 'namespace' => 'App\Http\Controllers' ], function ($app) {
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
        time().'newsletter_1_header.jpg',
        file_get_contents('/Users/najela/Downloads/11537167_10204669319073134_3571290144422276455_o.jpg')
    );
    return var_dump($disk);
});

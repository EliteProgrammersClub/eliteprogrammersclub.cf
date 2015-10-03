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

$app->get(
    'subscribers/create',
    [
        'as' => 'subscriber.create',
        'uses' => 'SubscriberController@create',
    ]
);

$app->post(
    'subscribers',
    [
        'as' => 'subscriber.store',
        'uses' => 'SubscriberController@store',
    ]
);



$app->get('hello', function () {
    $disk = \Storage::disk('s3');
    $disk->put( time().'phpunit.xml', file_get_contents('/var/www/open-source/eliteprogrammersclub.cf/git-repo/phpunit.xml'));
    return var_dump($disk);
});

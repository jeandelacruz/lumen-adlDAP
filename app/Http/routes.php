<?php

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
    return $app->version();
});

$app->get('/search/{fieldSearch}/{valSearch}', 'adLDAPController@searchActiveDirectory');

$app->get('/update/{fieldSearch}/{valSearch}/{fieldUpdate}/{valUpdate}', 'adLDAPController@updateActiveDirectory');

$app->get('/changePassword/{fieldSearch}/{valSearch}/{newPassword}', 'adLDAPController@changePassword');

$app->get('/lockAccount/{fieldSearch}/{valSearch}', 'adLDAPController@lockAccount');

$app->get('/disabledAccount/{fieldSearch}/{valSearch}', 'adLDAPController@disabledAccount');

$app->get('/enabledAccount/{fieldSearch}/{valSearch}', 'adLDAPController@enabledAccount');
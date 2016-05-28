<?php

Route::get('/', ['as' => 'get.index', 'uses' => 'PublicController@getIndex']);
Route::any('/robots.txt', ['as' => 'get.robots', 'uses' => 'PublicController@anyRobots']);
Route::get('/cache/{id}', ['as' => 'get.cache', 'uses' => 'PublicController@getCache']);
Route::get('/claim/{code}', ['as' => 'get.claim', 'uses' => 'PublicController@getClaim']);
Route::post('/claim/{code}', ['as' => 'post.claim', 'uses' => 'PublicController@postClaim']);

//Route::get('/', 'Hom')
//Route::get('/', function () {
//    $size = 2048;
//    $code = new TCPDF2DBarcode('http://www.bicyclincoln.org/', 'QRCODE,H');
//    $cols = intval($code->getBarcodeArray()['num_cols']);
//    $unit_size = ceil($size / $cols);
//    $size = $cols * $unit_size;
//    $image = Image::make($code->getBarcodePngData($unit_size, $unit_size, [0, 0, 0]));
//
//    $background = Image::canvas($size, $size, '#FFFFFF');
//
//    $background->insert($image, 'center');
//
//    $icon = Image::make(storage_path('assets/qr-logo.png'));
//    $icon->resize($size, $size);
//
//    $background->insert($icon, 'center');
//
//    return $background->response('png');
//});

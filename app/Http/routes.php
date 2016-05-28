<?php

Route::get('/', ['as' => 'index.get', 'uses' => 'PublicController@getIndex']);
Route::any('/robots.txt', ['as' => 'robots.any', 'uses' => 'PublicController@anyRobots']);
Route::get('/cache/{id}', ['as' => 'cache.get', 'uses' => 'PublicController@getCache']);
Route::get('/claim/{code}', ['as' => 'claim.get', 'uses' => 'PublicController@getClaim']);
Route::post('/claim/{code}', ['as' => 'claim.post', 'uses' => 'PublicController@postClaim']);

Route::group(
    ['prefix' => '/admin'],
    function () {
        Route::get('/', ['as' => 'admin.index.get', 'uses' => 'AdminController@getIndex']);
    }
);

Route::group(
    ['prefix' => '/develop'],
    function () {
        Route::get('/qr', function () {
            $size = 2048;
            $code = new TCPDF2DBarcode('http://www.bicyclincoln.org/', 'QRCODE,H');
            $cols = intval($code->getBarcodeArray()['num_cols']);
            $unit_size = ceil($size / $cols);
            $size = $cols * $unit_size;
            $image = Image::make($code->getBarcodePngData($unit_size, $unit_size, [0, 0, 0]));

            $background = Image::canvas($size, $size, '#FFFFFF');

            $background->insert($image, 'center');

            $icon = Image::make(storage_path('assets/qr-logo.png'));
            $icon->resize($size, $size);

            $background->insert($icon, 'center');

            return $background->response('png');
        });
    }
);


Route::auth();

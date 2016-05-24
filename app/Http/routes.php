<?php

Route::get('/', function () {
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

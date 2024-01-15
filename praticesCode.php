<?php

/**
 * jodi kono url ar name poriborton korte cai tahole route create kore tar modhe jekno nam set kore diya jabe.
 *
 *
 */

Route::get('/', function () {
    return view("views page file name");
});

/**
 * new route make korar jonno view page a age ekti file make korte hobe page ar jonno.
 */

Roure::get('/post-page', function (){
   return 'my post page';
});

/**
 *  jodi kono url ar name poriborton korte cai tahole route create kore tar modhe jekno nam set kore diya jabe.
 */

Route::get('/change_url_path',function (){
   return "my post page";
});

/**
 *
 */

Roure::get('/post-page', function (){
    return 'my post page';
});


/**
 * php artisan route -h
 */
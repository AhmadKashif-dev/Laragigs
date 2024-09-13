<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('listings', [
        'heading'=> 'Latest Listings',
        'listings'=> [
            [
                'id'=> '1',
            'title'=> 'Listing One',
            'desc'=> 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk
            kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk
            kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk
            kkkkkkkkkkkkkkkkkkkkkkkk',
            ],
            [
                'id'=> '2',
            'title'=> 'Listing Two',
            'desc'=> 'llllllllllllllllllllllllllllllllllllllllllllllllllllllllllL
            ;;;;;;;;;;;;;;;;;
            lllllllllllllllllllllllllllllllllllllll
            lllllllllllllllllllllllll
            Llllllllllllllllllllllllllll',
            ],
        ],
    ]);
});


// Route::get('/hello', function () {
//     return response('<h1>Hello world</h1>');
// });

// Route::get('/posts/{id}', function ($id) {
//     dd($id);
//     return response('POST ID is ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function (Request $request) {
//     dd($request);
// });
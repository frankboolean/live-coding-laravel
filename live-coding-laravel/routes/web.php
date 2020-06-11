<?php

use Illuminate\Support\Facades\Route;




Route::get('/home', function () {

    $cards = config('pasta');


    // $collection =collect($cards) -> map(function($item,$key){
    //   $item['id']=$key;
    //   return $item;
    //
    // });
    //
    // $lunga=$collection -> where('tipo','lunga');

    return view('home',compact('cards'));
})-> name ('home');

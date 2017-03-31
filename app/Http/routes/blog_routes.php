<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Route::group(['namespace' => 'Blog','prefix'=>'blog'],function(){
    Route::get('/', 'BlogController@index');
    Route::get('/{slug}', 'BlogController@showPost');
});

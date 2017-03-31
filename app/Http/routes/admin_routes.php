<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Route::group(['namespace' => 'Admin','prefix'=>'admin'],function(){ 
    route::get('/','AdminController@index'); 
    route::get('/blog','BlogController@index'); 
});

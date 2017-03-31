<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
Route::group(['namespace' => 'Auth','prefix'=>'auth'],function(){ 
    route::get('/login','AuthController@login'); 
    route::get('/loginout','AuthController@loginout'); 
    route::post('/login','AuthController@auth'); 
});
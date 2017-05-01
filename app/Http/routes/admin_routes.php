<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Route::group(['namespace' => 'Admin','prefix'=>'admin', 'middleware' => 'auth'],function(){
    route::get('/','AdminController@index'); 
    resource('/posts','PostsController'); 
    resource('/catalogues','CataloguesController'); 
    resource('/tags','TagsController'); 
    resource('/attachs','AttachsController'); 
    
    route::get('subcatalogs/{id}','CataloguesController@showSubCatalogs');
}); 

 route::get('/',['middleware' => 'auth'],'AdminController@index'); 
<?php

namespace App\\Model;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $datas=['published_at'];
    
    function setTitleAttribute($title){
    
    	$this->attributes['title']=$title;
    	
    	if(!$this->exists){
    		$this->attributes['slug'] = str_slug($title);
    	}
    }
}

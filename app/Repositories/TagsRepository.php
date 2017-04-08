<?php
namespace App\Repositories;

use App\Model\Tags;
/**
 * Description of TagsRepository
 *
 * @author chenglongliu
 */
class TagsRepository {
    
    protected $tags;
    
    function __construct(Tags $tags){
        $this->tags=$tags;
    }
    function getall(){
        $data=$this->tags->all();
        return $data;
    }
    
}

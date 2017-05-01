<?php
namespace App\Repositories;

use App\Model\Catalogues;
/**
 * Description of CataloguesRepository
 *
 * @author chenglongliu
 */
class CataloguesRepository {
    
    protected $catalogues;
    protected $prepage=5;
    
    function __construct(Catalogues $catalogues){
        $this->catalogues=$catalogues;
    }
    function getAllCatalogues($page=true){
        $data=$this->catalogues;
        return $page?$data->paginate($this->prepage):$data->get();
    }
    function getCatalogues($page=true){
        $data=$this->catalogues;
        $data=$data->where('pid',0);
        return $page?$data->paginate($this->prepage):$data->get();
    }
    function getSubCatalogues($id,$page=true){
        $id=  intval($id);
        $data=$this->catalogues;
        $data=$data->where('pid',$id);
        return $page?$data->paginate($this->prepage):$data->get();
    }
    function createCatalogue($input){
        $catalog=new $this->catalogues;
        foreach ($input as $key => $value) {
            $catalog->$key=$value;
        }
        $catalog->save(); 
    }
    
}

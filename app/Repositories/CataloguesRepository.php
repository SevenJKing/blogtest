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
    function getall(){
        $data=$this->catalogues->paginate($this->prepage);
        return $data;
    }
    function createCatalogue($input){
        $catalog=new $this->catalogues;
        foreach ($input as $key => $value) {
            $catalog->$key=$value;
        }
        $catalog->save(); 
    }
    
}

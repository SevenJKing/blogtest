<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\CataloguesRepository;
use App\Http\Requests\CataloguesRequest;
use Illuminate\Support\Facades\Validator;
class CataloguesController extends Controller
{
    protected $catalogRepo; 
    protected $cataloguesReq;
    function __construct(CataloguesRepository $catalogRepo) {
        $this->cataloguesReq=new CataloguesRequest();
        $this->catalogRepo=$catalogRepo; 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogues=$this->catalogRepo->getall();//dd($catalogues);
        foreach ($catalogues as $key => $value) {
            $value->postcount=0;
        }
        return view('admin.catalogues.index',  compact('catalogues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid=Validator::make($request->except('_token'), $this->cataloguesReq->rules(),$this->cataloguesReq->messages());
        if($valid->passes()){
            $this->catalogRepo->createCatalogue($request->except('_token'));
        } 
        return redirect()->to('admin/catalogues')->withErrors($valid->errors());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

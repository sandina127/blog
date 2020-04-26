<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parc;
use App\Http\Resources\ParcResource;
use App\Type;
use App\Http\Resources\TypeResource;
class ParcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return ParcResource::collection(Parc::all());   
     /*   $parcs=Parc::pluck('types');
        $mes_parcs=explode("|",$parcs);
    
        $skips = ["[","]","\""];
        $test= str_replace($skips, '',$mes_parcs);
      */  

       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

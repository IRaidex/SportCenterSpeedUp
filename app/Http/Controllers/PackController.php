<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Pack;
use App\Card;
use App\user;
use DB;
use Auth;
use Illuminate\Http\Request;

class PackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pack = Pack::all();

        for($i = 0 ; $i<count($pack) ; $i++){
            $servicios = DB::select('SELECT * FROM service, contain WHERE idService = serviceId AND packId ='.$pack[$i]->idPack.';');
            $pack[$i]->servicios = $servicios;
        }

        return $pack;
    }


    public function packs()
    {

        $pack = Pack::all();

        for($i = 0 ; $i<count($pack) ; $i++){
            $servicios = DB::select('SELECT * FROM service, contain WHERE idService = serviceId AND packId ='.$pack[$i]->idPack.';');
            $pack[$i]->servicios = $servicios;
        }

        return view('administrarPacks')
            ->with('packs',$pack);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function selects()
    {
        //        $pack = DB::select('SELECT * FROM pack p , contain c , service s WHERE p.idPack = c.packId AND c.serviceId = p.idPack ;');

        $pack = Pack::all();

        $card = Card::select()
            ->where('userId','=', Auth::user()->idUser)
            ->get();


        return view('inscribete')
            ->with('pack',$pack)
            ->with('tarjetas',$card);
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

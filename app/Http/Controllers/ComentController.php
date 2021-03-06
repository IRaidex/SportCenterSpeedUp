<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Coment;
use Illuminate\Support\Facades\Auth;

class ComentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


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
        $coment = new Coment;
        $coment->content = $request->content;
        $coment->userId = Auth::user()->idUser;
        $coment->articleId = $request->articleId;
        $coment->save();
        
        $fecha = Coment::all();
        $fecha = $fecha->last()->date;
        
        $user = json_encode(array('content'=>$request->content,'nombre'=>Auth::user()->name,'apellido1'=>Auth::user()->firts_surname,'apellido2'=>Auth::user()->second_surname,'picture'=>Auth::user()->picture,'date'=> $fecha));
        
        return $user;

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

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Card;
use App\Contract;
use App\Pack;
use Auth;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $card = new Card;
        
        $card->number_card = $request->numTarjeta;
        $card->titular = $request->dueñoTarjeta;
        $card->month = $request->mesExpira;
        $card->year = $request->anyoExpira;
        $card->userId = Auth::user()->idUser;
        $card->save();
        
        $cost = Pack::find($request->pack);
        
        $contract = new Contract;
        $contract->cost = $cost->price;
        $contract->userId = Auth::user()->idUser;
        $contract->packId = $request->pack;
        
        
        return $contract->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $card = Card::find($id);
        
        return $card;
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

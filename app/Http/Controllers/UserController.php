<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarios = User::all();

        return view('adminPerfil')
            ->with('usuarios',$usuarios);

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = User::find(Auth::user()->idUser);

        return view('perfil')
            ->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //este método debe recibir un id de usuario cierto????
    public function update(Request $request)
    {


        $user = User::find(Auth::User()->idUser);
        $user->name = $request->nombre;
        $user->firts_surname = $request->apellido1;
        $user->second_surname = $request->apellido2;
        $user->email = $request->email; 

        $id=Auth::User()->idUser;

        if($request->picture != null){
            $imagen = $request->picture;
            $imagen->move('perfil','user'. $id.'.'.$imagen->getClientOriginalExtension());
            $user->picture = 'user'. $id.'.'.$imagen->getClientOriginalExtension();
        }



        return $user->save();
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

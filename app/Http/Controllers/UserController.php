<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Address;
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
        $adress = Address::select()
            ->where('userId',Auth::user()->idUser)
            ->get();

        return view('perfil')
            ->with('user',$user)
            ->with('address',$adress);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $adress = Address::select()
            ->where('userId',$id)
            ->get();

        return view('perfil')
            ->with('user',$user)
            ->with('address',$adress);
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
        if($request->via != "" && $request->puerta != "" && $request->provincia != "" && $request->localidad != "" && $request->cp != ""){
            $dir =  Address::where('userId', Auth::User()->idUser)->first();
            if($dir == null){

                $address = new Address;
                $address->number = $request->numero;
                $address->location = $request->localidad;
                $address->via = $request->via;
                $address->door = $request->puerta;
                $address->floor = $request->piso;
                $address->province = $request->provincia;
                $address->type = $request->envio;
                $address->cp = $request->cp;
                $address->userId = Auth::User()->idUser;
                $address->save();

            }else{

                $dir->number = $request->numero;
                $dir->location = $request->localidad;
                $dir->via = $request->via;
                $dir->door = $request->puerta;
                $dir->floor = $request->piso;
                $dir->province = $request->provincia;
                $dir->type = $request->envio;
                $dir->cp = $request->cp;
                $dir->userId = Auth::User()->idUser;
                $dir->save();

            }
        }

        $user = User::find($id);
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
        $user = User::find($id);
        unlink('perfil/'.$user->picture);
        $user->delete();
        
        return redirect('/usuarios/admin');
    }
}

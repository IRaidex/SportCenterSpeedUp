@extends('layouts.master')
@section('content')
<div class="container-fluid">

    <div class="table-responsive m-2">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Primer apellido</th>
                    <th scope="col">Segundo apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">F.Nacimiento</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Foto</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="{{asset('img/lupa.svg')}}" alt="lupa"></td>
                    <td>1</td>
                    <td>Alejandro</td>
                    <td>Salcedo</td>
                    <td>Santamaria</td>
                    <td>alejandrosal1396@gmail.com</td>
                    <td>**************</td>
                    <td>Admin</td>
                    <td>13/02/1996</td>
                    <td><img src="" alt="perfil"></td>
                    <td><img src="{{asset('img/trash.svg')}}" alt="papelera"></td>
                </tr>  
                <tr>
                    <td><img src="{{asset('img/lupa.svg')}}" alt="lupa"></td>
                    <td>2</td>
                    <td>Sandra</td>
                    <td>Alcudia</td>
                    <td>Palomo</td>
                    <td>sandralpa@gmail.com</td>
                    <td>**************</td>
                    <td>Monitora</td>
                    <td>3/12/1996</td>
                    <td><img src="" alt="perfil"></td>
                    <td><img src="{{asset('img/trash.svg')}}" alt="papelera"></td>
                </tr>  
                <tr>
                    <td><img src="{{asset('img/lupa.svg')}}" alt="lupa"></td>
                    <td>3</td>
                    <td>Pau</td>
                    <td>Llores</td>
                    <td>Martinez</td>
                    <td>paulloma@gmail.com</td>
                    <td>**************</td>
                    <td>Loser</td>
                    <td>21/01/1999</td>
                    <td><img src="" alt="perfil"></td>
                    <td><img src="{{asset('img/trash.svg')}}" alt="papelera"></td>
                </tr>  
            </tbody>
        </table>
    </div>
</div>
@stop
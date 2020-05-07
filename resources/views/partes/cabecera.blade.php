<header class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-5 col-12 text-center">
            <div id="logo">
                <a href="{{url('/')}}"><img src="{{asset('img/logo-rojo-recortado.png')}}" alt="logo"></a>
            </div>
        </div>        
        <div class="col-md-5 d-md-none d-none d-lg-block">

            <div class="headerText">
                <h1>Servicio 24h<br>Sin permanencia</h1>
            </div>

        </div>
    </div>
</header>
<nav class="navbar navbar-expand-md">
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target=".opciones">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="collapse navbar-collapse navbar-nav opciones">
        <li class="nav-item d-none d-md-block">
            <a class="navbar-brand" href="{{url('/')}}">
                <img class="logonav" src="{{asset('img/logo-rojo-recortado.png')}}" alt="logo">
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link color" href="{{url('articulos')}}">Articulos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link color" href="{{url('newArticle')}}">Crear Articulo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link color" href="{{url('padel')}}">Pistas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link color" href="{{url('torneo')}}">Torneos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link color" href="{{url('usuarios')}}">Ver Perfiles</a>
        </li>
    </ul>
    <div class="btn-group dropleft">
        <img class="svg mx-3 dropdown-toggle" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false" src="{{asset('img/perfil.svg')}}" alt="perfil">
        <a href="" ><img class="svg mx-3" src="{{asset('img/login.svg')}}" alt="login"></a>  
        <a href="" ><img class="svg mx-3" src="{{asset('img/logout.svg')}}" alt="logout"></a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
        </div>
    </div>
    <div class="form-inline">

    </div>
</nav>
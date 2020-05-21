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
            <a class="nav-link color" href="{{url('articulos/all')}}">Articulos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link color" href="{{url('crearArticulo')}}">Crear Articulo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link color" href="{{url('pistas')}}">Pistas</a>
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
        @if(!Auth::user())
        <div class="dropdown-menu">
            <form class="px-4 py-3" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email" class="font-weight-bold col-form-label text-md-right">{{ __('Correo Electronico') }}</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password" class="font-weight-bold col-form-label text-md-right">{{ __('Contraseña') }}</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Recordar Datos') }}
                    </label>
                </div>
                <button type="submit" class="btn btn-primary mt-3">
                    {{ __('Entrar') }}
                </button>
            </form>
            <div class="dropdown-divider"></div>
            @if (Route::has('password.request'))
            <a class="btn link" href="{{ route('password.request') }}">
                {{ __('¿Has olvidado tu contraseña?') }}
            </a>
            <a class="btn link" href="{{ route('register') }}">
                {{ __('¿Eres Nuevo? Registrarte aquí!') }}
            </a>
            @endif
        </div>
    </div>
    @else
    <div class="dropdown-menu mr-5">
        <a class="dropdown-item link" href="{{ url('/perfil/user') }}">Perfil</a>
        <a class="dropdown-item link" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
            {{ __('Cerrar Session') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    @endif

</nav>
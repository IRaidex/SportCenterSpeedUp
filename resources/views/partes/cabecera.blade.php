<header class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-5 col-12 text-center">
            <div id="logo">
                <a href="{{url('/')}}"><img src="{{asset('img/logo-rojo-recortado.png')}}" alt="logo" class="my-4"></a>
            </div>
        </div>        
        <div class="col-md-5 d-md-none d-none d-lg-block">

            <div class="headerText">
                <h1 class="text-uppercase font-weight-bold">Sin Matrícula<br>Sin permanencia</h1>
            </div>

        </div>
    </div>
</header>
<nav class="navbar navbar-expand-lg colornav">
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
            <a class="nav-link color nav-ins" href="http://127.0.0.1:8000/#scrollInscribete">Inscríbete</a>
        </li>
        <li class="nav-item">
            <a class="nav-link color" href="http://127.0.0.1:8000/#scrollHorario">Horario</a>
        </li>
        <li class="nav-item">
            <a class="nav-link color" href="http://127.0.0.1:8000/#scrollArticulos">Artículos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link color" href="http://127.0.0.1:8000/#scrollGaleria">Galería</a>
        </li>
        <li class="nav-item">
            <a class="nav-link color" href="http://127.0.0.1:8000/#scrollContacto">Contacto</a>
        </li>
        @if(Auth::user())
        @if(Auth::user()->role == 'Admin' or  Auth::user()->role == 'monitor')
        <li class="nav-item">
            <a class="nav-link color" href="{{url('crearArticulo')}}">Crear Artículo</a>
        </li>
        @endif
        @if(Auth::user()->role == 'Admin')
         <li class="nav-item">
            <a class="nav-link color" href="{{url('crearPack')}}">Crear Pack</a>
        </li>
        <li class="nav-item">
            <a class="nav-link color" href="{{url('usuarios/admin')}}">Administrar Perfiles</a>
        </li> 
        <li class="nav-item">
            <a class="nav-link color" href="{{url('articulos/admin')}}">Administrar Artículos</a>
        </li>
                <li class="nav-item">
            <a class="nav-link color" href="{{url('packs/admin')}}">Administrar Packs</a>
        </li>
        @endif
        @endif
    </ul>
    <div class="btn-group dropleft">
        @if(!Auth::user())
        <a href="" data-toggle="modal" data-target="#login" ><img class="svg mx-3" src="{{asset('img/perfil.svg')}}" alt="perfil" id="log"></a>
        @else
        <img class="svg mx-3 dropdown-toggle" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false" src="{{asset('img/perfil.svg')}}" alt="perfil">
        <div class="dropdown-menu mr-2">
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
    </div>
    @endif
    <!-- Modal Login -->
    <div class="modal fade mt-5" id="login" role="dialog">
        <div class="modal-dialog modal-lg mt-5">
            <div class="modal-content">
                <div class="modal-header modalHeader">
                    <h4 class="modal-title">{{__('Login')}}</h4>
                </div>
                <div class="modal-body">
                    <div class="card-body text-center">
                        <form class="px-4 py-3" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group text-left">
                                <label for="email" class="font-weight-bold col-form-label text-md-right">{{ __('Correo Electronico') }}</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="strong">El correo o contraseña son erroneos.</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group text-left">
                                <label for="password" class="font-weight-bold col-form-label text-md-right">{{ __('Contraseña') }}</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="strong">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Recordar Datos') }}
                                </label>
                            </div>
                            <button type="submit text-center" class="btn btn-primary mt-3">
                                {{ __('Entrar') }}
                            </button>
                        </form>
                        <div class="dropdown-divider"></div>
                        @if (Route::has('password.request'))
                        <a class="btn link" href="{{ route('password.request') }}">
                            {{ __('¿Has olvidado tu contraseña?') }}
                        </a>

                        <a class="btn link" href="{{ route('register') }}">
                            {{ __('¿No tienes cuenta? Registrarte aquí!') }}
                        </a>
                        @endif
                    </div>
                </div>
                <div class="modal-footer modalHeader">
                    <button type="button" class="btn btn-leer" data-dismiss="modal">{{__('Cerrar')}}</button>
                </div>
            </div>

        </div>
    </div>
</nav>

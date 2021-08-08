<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid"  width="150">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Pagina Inicial</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <img class="img-flag" src="{{session('locale') ? asset('images/' . session('locale') . '.png') : asset('images/pt_BR.png')}}" style="width: 25px;">
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('i18n', ['locale' => 'pt_BR'])}}" ><img class="img-flag" src="{{asset('images/pt_BR.png')}}" style="width: 25px; margin: 8px"> Português</a>
                            <a class="dropdown-item" href="{{route('i18n', ['locale' => 'en'])}}" ><img class="img-flag" src="{{asset('images/en.png')}}" style="width: 25px; margin: 8px"> English</a>
                        </div>
                    </li>
                    @auth()
                        <li class="nav-item">
                            <div style="display: flex;">
                                <img class="mt-1" style="border-radius: 30%;" src="{{ Auth::user()->image }}" width="30"
                                     height="30" alt="img-fluid">
                                <a class="nav-link" href="#">Olá {{ Auth::user()->twitch_username }}</a>
                            </div>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile') }}">Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Sair</a>
                        </li>
                    @endauth
                    @guest()
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="{{ app(App\Services\TwitchService::class)->generateLink() }}"> <i class="fab fa-twitch"></i> Entrar
                                com a Twitch</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>

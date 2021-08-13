<header>
    <nav class="headerNav">
        <ul>
            <li class="navText arrow"><a href="/"><img class="logo" src="{{ asset('images/logo.png') }}"></a></li>
            <div class="navLang">
                @if (Session::get('locale') === 'pt_BR')
                    <div class="lang">
                        <img class="img-flag" src="{{ asset('images/pt_BR.png') }}">
                        <span class="navItemLang">Português</span>
                    </div>
                @else
                    <div class="lang">
                        <img class="img-flag" src="{{ asset('images/en.png') }}">
                        <span class="navItemLang">English</span>
                    </div>
                @endif
                <div class="langContent">
                    <div class="lang">
                        <img class="img-flag" src="{{ asset('images/pt_BR.png') }}">
                        <a class="itemLang" href="{{ route('i18n', ['locale' => 'pt_BR']) }}">Português</a>
                    </div>
                    <div class="lang">
                        <img class="img-flag" src="{{ asset('images/en.png') }}">
                        <a class="itemLang" href="{{ route('i18n', ['locale' => 'en']) }}">English</a>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="arrowUser" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
            @auth()
                <div class="userContent">
                    <span class="username">{{ Auth::user()->twitch_username }}</span>
                    <div class="userInfo">

                        <span><a class="userProfile" href="{{ route('profile') }}">Perfil</a></span>
                        <span><a class="userProfile" href="{{ route('logout') }}">Sair</a></span>

                    </div>
                    <img class="imgUser" src="{{ Auth::user()->image }}" alt="img-fluid">
                    <svg xmlns="http://www.w3.org/2000/svg" class="arrowUser" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            @endauth
            @guest()
                <a href="{{ app(App\Services\TwitchService::class)->generateLink() }}">
                    <li class="navText twitch">
                        <img class="twitchSvg" src="{{ asset('images/Vector.svg') }}">
                        <span class="twitchText">Entrar com a twitch</span>
                    </li>
                </a>


            @endguest
        </ul>
    </nav>
</header>

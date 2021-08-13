<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <title>Sindicato dos Streamers</title>
    <meta name="title" content="Sindicato dos Streamers">
    <meta name="description" content="Comunidade de streamers com o intuito de melhorias para a plataforma Twitch.tv">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://metatags.io/">
    <meta property="og:title" content="Sindicato dos Streamers">
    <meta property="og:description"
        content="Comunidade de streamers com o intuito de melhorias para a plataforma Twitch.tv">
    <meta property="og:image" content="{{ asset('images/seo.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://metatags.io/">
    <meta property="twitter:title" content="Sindicato dos Streamers">
    <meta property="twitter:description"
        content="Comunidade de streamers com o intuito de melhorias para a plataforma Twitch.tv">
    <meta property="twitter:image" content="{{ asset('images/seo.png') }}">


</head>

<body>
    <header class="headerProfile">
        <div class="container">
            @yield('header', View::make('components.header'))
        </div>
    </header>
    <main>
        <section class="marketing">
            <!-- START THE FEATURETTES -->
            <section class="container">
                <div class="card">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="col-lg-3 col-12">
                        <img src="{{ Auth::user()->image }}" class="img-fluid">
                    </div>

                    <div class="cartaContainer">
                        <a class="buttonCard att" href="">Carta Aberta</a>
                        <a class="buttonCard att">Manifesto</a>
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-lg-9 col-12">
                                <div class="form-group">
                                    <label for="staticEmail" class="formLabel">Twitch ID</label>
                                    <input type="text" readonly="" class="form-control" id="staticEmail"
                                        value="{{ Auth::user()->twitch_id }}">
                                </div>

                                <div class="form-group">
                                    <label for="staticEmail" class="formLabel">Email</label>
                                    <input type="text" readonly="" class="form-control form-email" id="staticEmail"
                                        value="{{ Auth::user()->email }}">

                                </div>
                                <div class="form-group">
                                    <label for="staticEmail" class="formLabel">Username</label>
                                    <input type="text" readonly="" class="form-control" id="staticEmail"
                                        value="{{ Auth::user()->twitch_username }}">

                                </div>
                                <form action="{{ route('me-update') }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleSelect1" class="formLabel">{{ trans('views.profile.form.ocupation') }}</label>
                                        <select class="form-select" id="exampleSelect1" name="role">
                                            <option>----------------</option>
                                            <option class="form-option" value="streamer"
                                                {{ Auth::user()->role == 'streamer' ? 'selected' : '' }}>
                                                Streamer
                                            </option>
                                            <option class="form-option" value="viewer"
                                                {{ Auth::user()->role == 'viewer' ? 'selected' : '' }}>
                                                Viewer
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="exampleSelect1" class="formLabel">
                                            {{ trans('views.profile.form.terms') }}
                                        </label>
                                        <select class="form-select" id="exampleSelect1" name="terms">
                                            <option value="0" {{ !Auth::user()->terms ? 'selected' : '' }}>
                                                {{ trans('views.profile.form.options.yes') }}
                                            </option>
                                            <option value="1" {{ Auth::user()->terms ? 'selected' : '' }}>
                                                {{ trans('views.profile.form.options.no') }}
                                            </option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleSelect1" class="formLabel">
                                            {{ trans('views.profile.form.landing_spot') }}
                                        </label>
                                        <select class="form-select" id="exampleSelect1" name="sent_message">
                                            <option value="0"
                                                {{ !Auth::user()->sent_message ? 'selected' : '' }}>
                                                {{ trans('views.profile.form.options.yes') }}
                                            </option>
                                            <option value="1" {{ Auth::user()->sent_message ? 'selected' : '' }}>
                                                {{ trans('views.profile.form.options.no') }}
                                            </option>
                                        </select>
                                    </div>
                                    <small id="emailHelp" class="form-text text-muted">
                                        {{ trans('views.profile.terms_disclaimer') }}
                                    </small>


                                    <button type="submit" class="buttonProfile att">
                                        {{ trans('views.profile.form.submit') }}
                                    </button>
                                </form>
                                <form action="{{ route('me-delete') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="buttonProfile delete">
                                        {{ trans('views.profile.form.erase') }}
                                    </button>
                                </form>
                                <small id="emailHelp" class="form-text text-muted">
                                    {{ trans('views.profile.gdpr_disclaimer') }}
                                </small>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="userColumn">
                <div>
                    <img src="{{ asset('images/User.svg') }}">
                    <h3 class="titleUserInfo">{{ trans('views.profile.title') }}</h3>
                    <p class="textUserInfo">{{ trans('views.profile.description') }}</p>
                </div>
            </section>
        </section>

        <footer class="footerProfile">
            <section class="container">
                @yield('footer', View::make('components.footer'))
            </section>
        </footer>
        <script src="{{ asset('js/modal.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
                integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </main>
</body>

</html>

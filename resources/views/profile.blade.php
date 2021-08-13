<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://bootswatch.com/5/pulse/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://bootswatch.com/5/pulse/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
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
        <div class="container marketing">
            <!-- START THE FEATURETTES -->
            <hr class="featurette-divider">
            <div class="row featurette">
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
                    <div class="card-header">Informações do Usuário</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-12">
                                <img src="{{ Auth::user()->image }}" class="img-fluid">
                            </div>
                            <div class="col-lg-9 col-12">
                                <div class="form-group">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Twitch ID</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly="" class="form-control" id="staticEmail"
                                            value="{{ Auth::user()->twitch_id }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly="" class="form-control password" id="staticEmail"
                                            value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly="" class="form-control" id="staticEmail"
                                            value="{{ Auth::user()->twitch_username }}">
                                    </div>
                                </div>
                                <form action="{{ route('me-delete') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mt-2">
                                        Apagar Conta
                                    </button>
                                </form>
                                <small id="emailHelp" class="form-text text-muted">
                                    Nós respeitamos a LGPD/GDPR e caso você queira apagar sua conta todos os dados
                                    relacionados serão apagados também!
                                </small>

                            </div>
                        </div>
                    </div>
                    <div class="card-header">Informações do Formulário</div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-12">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet consequatur
                                    corporis explicabo, maiores, molestias quos ratione, reiciendis rem saepe sint sit
                                    tempora voluptate! Commodi cum eum id ipsa optio.
                                </p>
                                <form action="{{ route('me-update') }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleSelect1">Selecione sua ocupaçao?</label>
                                        <select class="form-select" id="exampleSelect1" name="role">
                                            <option>Selecione uma opção</option>
                                            <option disabled>---</option>
                                            <option value="streamer"
                                                {{ Auth::user()->role == 'streamer' ? 'selected' : '' }}>
                                                Streamer
                                            </option>
                                            <option value="viewer"
                                                {{ Auth::user()->role == 'viewer' ? 'selected' : '' }}>
                                                Viewer
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="exampleSelect1">Você concorda com a carta acima?</label>
                                        <select class="form-select" id="exampleSelect1" name="terms">
                                            <option value="0" {{ !Auth::user()->terms ? 'selected' : '' }}>Não
                                            </option>
                                            <option value="1" {{ Auth::user()->terms ? 'selected' : '' }}>Sim
                                            </option>
                                        </select>
                                        <small id="emailHelp" class="form-text text-muted">Você pode desmarcar caso
                                            sinta
                                            que a causa não segue mais nos seus ideais.</small>
                                    </div>
                                    @if (Auth::user()->sent_message)
                                        <div class="alert alert-success mt-3">Sua mensagem foi enviada!</div>
                                    @else
                                        <div class="form-group">
                                            <label for="exampleSelect1">Você gostaria de aparecer na pagina
                                                inicial?</label>
                                            <select class="form-select" id="exampleSelect1" name="sent_message">
                                                <option value="0"
                                                    {{ !Auth::user()->sent_message ? 'selected' : '' }}>Não
                                                </option>
                                                <option value="1" {{ Auth::user()->sent_message ? 'selected' : '' }}>
                                                    Sim
                                                </option>
                                            </select>
                                        </div>
                                        <small id="emailHelp" class="form-text text-muted">Você pode desmarcar caso
                                            sinta
                                            que a causa não segue mais nos seus ideais.</small>
                                    @endif
                                    <button type="submit" class="btn btn-primary mt-2">
                                        Atualizar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-2"></div>
        <footer class="footer">
            <section class="container">
                @yield('footer', View::make('components.footer'))
            </section>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
                integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </main>
</body>

</html>

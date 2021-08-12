<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://bootswatch.com/5/pulse/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <!-- Primary Meta Tags -->
    <title>Sindicato dos Streamers</title>
    <meta name="title" content="Sindicato dos Streamers">
    <meta name="description" content="Comunidade de streamers com o intuito de melhorias para a plataforma Twitch.tv">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://metatags.io/">
    <meta property="og:title" content="Sindicato dos Streamers">
    <meta property="og:description" content="Comunidade de streamers com o intuito de melhorias para a plataforma Twitch.tv">
    <meta property="og:image" content="{{ asset('images/seo.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://metatags.io/">
    <meta property="twitter:title" content="Sindicato dos Streamers">
    <meta property="twitter:description" content="Comunidade de streamers com o intuito de melhorias para a plataforma Twitch.tv">
    <meta property="twitter:image" content="{{ asset('images/seo.png') }}">

</head>
<body>

@yield('header', View::make('components.header'))

<main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/banner-repeat.png') }}"
                      style="filter: blur(8px); background-repeat: repeat-x; " class="bd-placeholder-img">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>{!! trans('views.landing.carousel.streamers', ['streamerCount' => $streamers]) !!}</h1>
                        <p>
                            {!! trans('views.landing.carousel.viewers', ['viewerCount' => $viewers]) !!}
                        </p>
                        @auth()
                            <a class="btn btn-lg btn-primary" target="_blank" href="{{ trans('views.landing.carousel.twitterUrl') }}">
                                <i class="fas fa-check"></i>

                                {!! trans('views.landing.carousel.submitted') !!}
                            </a>
                        @endauth
                        @guest()
                            <p>
                                <a class="btn btn-lg btn-primary" target="_blank" href="{{ app(App\Services\TwitchService::class)->generateLink() }}">
                                    <i class="fab fa-twitch"></i>
                                    {!! trans('views.landing.carousel.join') !!}
                                </a>
                            </p>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container marketing">
        <figure class="text-center">
            <blockquote class="blockquote">
                <p>Lorem Manifesto ipsum dolor sit amet, consectetur adipisicing elit. Delectus, deserunt doloremque
                    eius facere in incidunt laudantium quas tenetur! Aspernatur dolorum ex illo nisi odit perspiciatis
                    quos ratione velit. Dolorem, obcaecati.
                </p>
                <p>
                    Lorem Manifesto ipsum dolor sit amet, consectetur adipisicing elit. Delectus, deserunt doloremque
                    eius facere in incidunt laudantium quas tenetur! Aspernatur dolorum ex illo nisi odit perspiciatis
                    quos ratione velit. Dolorem, obcaecati.
                </p>
            </blockquote>
            <figcaption class="blockquote-footer">
                <cite title="Source Title">Picoca</cite> - Sindicato dos Streamers
            </figcaption>
        </figure>
        <hr class="featurette-divider">
        <h2 class="text-center">{{ trans('views.landing.signatures.title') }}</h2>
        <p class="text-center">{{ trans('views.landing.signatures.description') }}</p>
        <!-- Three columns of text below the carousel -->

        <div class="row">
            @foreach($signs as $sign)
                <div class="col-lg-2 col-2 text-center">
                    <img src="{{ $sign->image }}" class="img-fluid" style="border-radius: 50%">
                    <h5>{{ $sign->twitch_username }}</h5>
                    <i>{{ $sign->signed_at->diffForHumans() }}</i>
                </div>
            @endforeach
        </div>
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">
                    {{ trans('views.landing.sectionTaxes.title') }}
                </h2>
                <p class="lead">

                </p>
            </div>
            <div class="col-md-5">
                <img src="https://i.imgur.com/iS1AQOV.gif" alt="" class="img-fluid img-thumbnail">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">
                    {!! trans('views.landing.sectionVideo.title') !!}
                </h2>
                <p class="lead">
                    {!! trans('views.landing.sectionVideo.lead') !!}
                </p>
            </div>
            <div class="col-md-5 order-md-1">
                <div id="twitch-embed" class="img-fluid" width="300"></div>
            </div>
        </div>
        <div class="row featurette m-2 mt-5">
            {!! trans('views.landing.sectionVideo.content') !!}
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">
                    {!! trans('views.landing.sectionCommunity.title') !!}
                </h2>
                <p class="lead">
                    {!! trans('views.landing.sectionCommunity.lead') !!}
                </p>
            </div>
            <div class="col-md-5">
                <img src="https://i.imgur.com/UOoxRJc.png" alt="" class="img-fluid img-thumbnail">
            </div>
        </div>
        <hr class="featurette-divider">
        <h2 class="text-center">{{ trans('views.landing.sectionSupport.title') }}</h2>
        <p class="text-center">{{ trans('views.landing.sectionSupport.description') }}</p>
        <!-- Three columns of text below the carousel -->
        <div class="row">
            @foreach($famousList as $famous)
                <div class="col-lg-2 text-center">
                    <img src="{{ $famous->image }}" class="img-fluid" style="border-radius: 50%">
                    <h5>{{ $famous->twitch_username }}</h5>
                    <i><strong>{{ number_format($famous->views, 0,',','.') }}</strong> followers</i>
                </div>
            @endforeach
        </div>
        <hr class="featurette-divider">

    </div>
    @yield('footer', View::make('components.footer'))
    <div class="fixed-bottom">
        <iframe width="100" height="100" src="https://www.youtube.com/embed/QNJL6nfu__Q"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>

        </iframe>
    </div>
    <!-- Load the Twitch embed script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="https://player.twitch.tv/js/embed/v1.js"></script>

    <!-- Create a Twitch.Player object. This will render within the placeholder div -->
    <script type="text/javascript">
        new Twitch.Player("twitch-embed", {
            video: "1109252315",
            time: "0h40m33s",
            width: 500,
            height: 500
        });
    </script>

</main>
</body>
</html>

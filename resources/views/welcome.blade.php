<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sindicato dos Streamers</title>
  <link rel="stylesheet" href="{{asset("css/styles.css")}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">

  <style>
    .splide__track {
      height: 400px;
      padding-top: 2rem;
    }

    .splide__slide {
      display: flex;
      justify-content: center;
      transform: scale(0.85);
    }

    .splide__slide.is-active {
      transform: scale(1);
    }

    .splide__arrow {
      background: transparent;
    }

    .splide__arrow>svg {
      fill: #8d42ff;
    }

    .splide__pagination__page {
      display: none;
    }

    .splide__arrow--next {
      right: -2rem
    }

    .splide__arrow--prev {
      left: -2rem
    }
  </style>
</head>

<body>
  <header class="headerContainer">
    <div class="container">
      <nav class="headerNav">
        <ul>
          <li class="navText arrow"><img class="logo" src="{{asset("images/logo.png")}}"></li>
          @auth()
            <div class="userContent">
              <img class="imgUser" src="{{ Auth::user()->image }}" alt="img-fluid">

              <div class="userInfo">
                
                <span class="username">{{ Auth::user()->twitch_username }}</span>
                <span><a class="userProfile" href="{{ route('profile') }}">Perfil</a></span>
                <span><a class="userProfile" href="{{ route('logout') }}">Sair</a></span>

              </div>
            </div>
          @endauth
          @guest()
            <li class="navText twitch"><a href="{{ app(App\Services\TwitchService::class)->generateLink() }}">Entrar com a twitch</a></li>
          @endguest
        </ul>
      </nav>

      <div class="headerTitle">
        <h1 class="title">{!! trans('views.landing.carousel.streamers', ['streamerCount' => $streamers]) !!}</h1>
        <h3 class="subtitle">{!! trans('views.landing.carousel.viewers', ['viewerCount' => $viewers]) !!}</h3>

        <button class="button">Assine agora</button>
      </div>
    </div>
  </header>

  <section class="container">
    <hr class="line">
    <img src="{{asset("images/quote1.svg")}}">
    <blockquote class="quote">
      <q class="quoteText">Lorem Manifesto ipsum dolor sit amet, consectetur adipisicing elit. Delectus, <span
          class="infoPurple">deserunt</span> doloremque eius facere in incidunt laudantium quas tenetur! <span
          class="infoPurple">Aspernatur</span> dolorum ex illo nisi odit perspiciatis quos ratione velit.</q>
      <q class="quoteText">Lorem Manifesto ipsum dolor sit amet, <span class="infoPurple">consectetur</span> adipisicing
        elit. Delectus, deserunt doloremque eius facere in incidunt laudantium quas
        tenetur! Aspernatur dolorum ex illo nisi odit <span class="infoPurple">perspiciatis</span> quos ratione velit.</q>
      <cite class="quoteAuthor">Picoca - Sindicato dos Streamers.</cite>
    </blockquote>
    <div class="quoteImg">
      <img src="{{asset("images/quote2.svg")}}">
    </div>
    <hr class="line">
  </section>

  <section class="container slide">
    <h1 class="titleSlide">Quem está apoiando a causa?</h1>
    <p class="textSlide">Streamers que estão assistindo nosso abaixo assinado</p>

    <div id="splide" class="container splide">
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide">
            <div class="slideCard">
              <div class="headerCard">
                <img class="imgStreamer" src="{{asset("images/dan.png")}}">
              </div>
              <div class="centerCard">
                <p class="streamer">Danielhe4rt</p>
                <img class="imgSlide" src="{{asset("images/Vector.svg")}}">
                <p class="hoursAgo">3 horas atrás</span>
              </div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="slideCard">
              <div class="headerCard">
                <img class="imgStreamer" src="{{asset("images/dan.png")}}">
              </div>
              <div class="centerCard">
                <p class="streamer">Danielhe4rt</p>
                <img class="imgSlide" src="{{asset("images/Vector.svg")}}">
                <p class="hoursAgo">3 horas atrás</span>
              </div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="slideCard">
              <div class="headerCard">
                <img class="imgStreamer" src="{{asset("images/dan.png")}}">
              </div>
              <div class="centerCard">
                <p class="streamer">Danielhe4rt</p>
                <img class="imgSlide" src="{{asset("images/Vector.svg")}}">
                <p class="hoursAgo">3 horas atrás</span>
              </div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="slideCard">
              <div class="headerCard">
                <img class="imgStreamer" src="{{asset("images/dan.png")}}">
              </div>
              <div class="centerCard">
                <p class="streamer">Danielhe4rt</p>
                <img class="imgSlide" src="{{asset("images/Vector.svg")}}">
                <p class="hoursAgo">3 horas atrás</span>
              </div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="slideCard">
              <div class="headerCard">
                <img class="imgStreamer" src="{{asset("images/dan.png")}}">
              </div>
              <div class="centerCard">
                <p class="streamer">Danielhe4rt</p>
                <img class="imgSlide" src="{{asset("images/Vector.svg")}}">
                <p class="hoursAgo">3 horas atrás</span>
              </div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="slideCard">
              <div class="headerCard">
                <img class="imgStreamer" src="{{asset("images/dan.png")}}">
              </div>
              <div class="centerCard">
                <p class="streamer">Danielhe4rt</p>
                <img class="imgSlide" src="{{asset("images/Vector.svg")}}">
                <p class="hoursAgo">3 horas atrás</span>
              </div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="slideCard">
              <div class="headerCard">
                <img class="imgStreamer" src="{{asset("images/dan.png")}}">
              </div>
              <div class="centerCard">
                <p class="streamer">Danielhe4rt</p>
                <img class="imgSlide" src="{{asset("images/Vector.svg")}}">
                <p class="hoursAgo">3 horas atrás</span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <main>
    <section class="container">
      <section class="infoSection">
        <div class="divIframe"><iframe
            src="https://player.twitch.tv?height=500&amp;parent=localhost&amp;referrer=https%3A%2F%2Fsindicatostreamer.com%2F&amp;time=0h40m33s&amp;video=1109252315&amp;width=500"
            allowfullscreen="" scrolling="no" frameborder="0" allow="autoplay; fullscreen" title="Twitch"
            sandbox="allow-modals allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"
            class="infoImg" height="450"></iframe></div>

        <div>
          <h1 class="infoTitle">"Confia" em uma plataforma que não é transparente? <span class="infoPurple">Veja a
              resposta da plataforma</span>.</h1>

          <p class="infoText">A Twitch não apresentou nenhum dado que comprova de fato que a mudança vai ser algo bom a
            longo prazo e também não passou canais que foram testados essa mudança. Veja a resposta da plataforma na
            entrevista dada no dia 05/09/2021 no canal da <span class="infoPurple">TerraGameOn</span> onde a proposta da
            live mudou quando Streamers mostraram sua indignação com a mudança, ficou inviável da apresentadora não
            tocar
            nesse assunto.</p>
        </div>

        <span class="infoText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam beatae debitis et
          iure saepe sunt tenetur. Corporis cumque fugit ipsa, ipsam iusto, maxime nostrum odio omnis, praesentium
          ratione tempora.</span>
      </section>
    </section>

    <section class="breakSection">
      <div class="container breakSectionContainer">
        <div class="textBreakContainer">
          <h2 class="titleBreak">Valor de repasse atualizado, valor de impostos não localizados?</h2>
          <span class="textBreak">Você tem alguma ideia de onde seus impostos estão indo? Por quê outras plataformas
            conseguem fazer o isenção dos impostos norte-americanos e a Twitch não?</span>
        </div>

        <div class="breakImg"><img class="breakImg" src="{{asset("images/iS1AQOV.gif")}}"></div>
      </div>
    </section>

    <section class="container">
      <section class="infoSection">
        <div class="divImg"><img class="infoImg" src="{{asset("images/Rectangle 8.png")}}"></div>
        <div>
          <h1 class="infoTitle">A comunidade brasileira tem menos valor?</h1>

          <p class="infoText">Nós temos vários streamers conhecidos mundialmente, tais como o lendário <span
              class="infoPurple">Gaulês</span> que consta hoje na posição de 46º no ranking global da plataforma. Tal
            como
            o <span class="infoPurple">loud_coringa</span> que consta como <span class="infoPurple">1º no ranking de
              GTA:RP</span> conseguindo uma audiência de <span class="infoPurple">110.000</span> viewers simultâneos na
            parte da madrugada.</p>
          <p class="infoText">A Twitch Brasil hoje conta com pelo menos 1.600 parceiros na plataforma e não há nenhum
            indicio de quantos funcionários atendem essa demanda de parceiros. Agora, se colocarmos os streamers
            afiliados
            na balança, nós vemos que não há a menor condição de haver um bom atendimento da plataforma dada a
            quantidade
            de pessoas atendidas.</p>
        </div>
      </section>
    </section>
  </main>

  <section class="container slide">
    <h1 class="titleSlide">Últimas assinaturas</h1>
    <p class="textSlide">Streamers que estão assistindo nosso abaixo assinado</p>

    <section class="slideContainer">
      <div class="slideCard">
        <div class="headerCard">
          <img class="imgStreamer" src="{{asset("images/dan.png")}}">
        </div>
        <div class="centerCard">
          <p class="streamer">Danielhe4rt</p>
          <img class="imgSlide" src="{{asset("images/Vector.svg")}}">
          <p class="hoursAgo">3 horas atrás</span>
        </div>
      </div>
      <div class="slideCard">
        <div class="headerCard">
          <img class="imgStreamer" src="{{asset("images/dan.png")}}">
        </div>
        <div class="centerCard">
          <p class="streamer">Danielhe4rt</p>
          <img class="imgSlide" src="{{asset("images/Vector.svg")}}">
          <p class="hoursAgo">3 horas atrás</span>
        </div>
      </div>
      <div class="slideCard">
        <div class="headerCard">
          <img class="imgStreamer" src="{{asset("images/dan.png")}}">
        </div>
        <div class="centerCard">
          <p class="streamer">Danielhe4rt</p>
          <img class="imgSlide" src="{{asset("images/Vector.svg")}}">
          <p class="hoursAgo">3 horas atrás</span>
        </div>
      </div>
      <div class="slideCard">
        <div class="headerCard">
          <img class="imgStreamer" src="{{asset("images/dan.png")}}">
        </div>
        <div class="centerCard">
          <p class="streamer">Danielhe4rt</p>
          <img class="imgSlide" src="{{asset("images/Vector.svg")}}">
          <p class="hoursAgo">3 horas atrás</span>
        </div>
      </div>
    </section>
  </section>

  <section class="container faq">
    <h1 class="titleFaq">Perguntas Frequentes</h1>

    <div class="faqQuestion">
      <h3 class="faqQuestionTitle">Lorem Ipsum dolor sit?</h3>

      <p class="faqAnswer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue velit suscipit id vivamus
        nisl tristique turpis. Neque iaculis varius non sed rhoncus tellus id quam. Netus orci suspendisse commodo leo
        facilisis condimentum posuere aliquam. Morbi tortor ut gravida amet. Tellus commodo blandit enim, sed etiam
        ultricies suspendisse dolor sit. Pellentesque et libero pretium, velit non quam. Est rhoncus, interdum enim
        cursus augue. Vitae, dis at id nec. Turpis mollis fermentum scelerisque pellentesque neque. Auctor cursus
        interdum tortor fringilla nulla vel enim fusce. Ac ac tincidunt habitant pretium velit vivamus sem.</p>
    </div>

    <div class="faqQuestion">
      <h3 class="faqQuestionTitle">Lorem Ipsum dolor sit?</h3>

      <p class="faqAnswer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue velit suscipit id vivamus
        nisl tristique turpis. Neque iaculis varius non sed rhoncus tellus id quam. Netus orci suspendisse commodo leo
        facilisis condimentum posuere aliquam. Morbi tortor ut gravida amet. Tellus commodo blandit enim, sed etiam
        ultricies suspendisse dolor sit. Pellentesque et libero pretium, velit non quam. Est rhoncus, interdum enim
        cursus augue. Vitae, dis at id nec. Turpis mollis fermentum scelerisque pellentesque neque. Auctor cursus
        interdum tortor fringilla nulla vel enim fusce. Ac ac tincidunt habitant pretium velit vivamus sem.</p>
    </div>

    <div class="faqQuestion">
      <h3 class="faqQuestionTitle">Lorem Ipsum dolor sit?</h3>

      <p class="faqAnswer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue velit suscipit id vivamus
        nisl tristique turpis. Neque iaculis varius non sed rhoncus tellus id quam. Netus orci suspendisse commodo leo
        facilisis condimentum posuere aliquam. Morbi tortor ut gravida amet. Tellus commodo blandit enim, sed etiam
        ultricies suspendisse dolor sit. Pellentesque et libero pretium, velit non quam. Est rhoncus, interdum enim
        cursus augue. Vitae, dis at id nec. Turpis mollis fermentum scelerisque pellentesque neque. Auctor cursus
        interdum tortor fringilla nulla vel enim fusce. Ac ac tincidunt habitant pretium velit vivamus sem.</p>
    </div>

    <div class="faqQuestion">
      <h3 class="faqQuestionTitle">Lorem Ipsum dolor sit?</h3>

      <p class="faqAnswer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue velit suscipit id vivamus
        nisl tristique turpis. Neque iaculis varius non sed rhoncus tellus id quam. Netus orci suspendisse commodo leo
        facilisis condimentum posuere aliquam. Morbi tortor ut gravida amet. Tellus commodo blandit enim, sed etiam
        ultricies suspendisse dolor sit. Pellentesque et libero pretium, velit non quam. Est rhoncus, interdum enim
        cursus augue. Vitae, dis at id nec. Turpis mollis fermentum scelerisque pellentesque neque. Auctor cursus
        interdum tortor fringilla nulla vel enim fusce. Ac ac tincidunt habitant pretium velit vivamus sem.</p>
    </div>
  </section>

  <div class="fixed-bottom">
    <iframe width="100" height="100" src="https://www.youtube.com/embed/QNJL6nfu__Q"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen=""></iframe>
  </div>

  <footer class="footer">
    <section class="container">
      <div class="searchContainer">
        <h1 class="footerTitle">Saiba se seu <span class="infoPurple">streamer</span> favorito está apoiando a causa!
        </h1>

        <p class="footerText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare aliquam
          fringilla.<br> Suspendisse potenti. Nunc blandit viverra mauris, vel placerat velit finibus et.</p>

        <div class="searchBar">
          <input type="search" class="footerSearch" name="q" aria-label="Procure o seu streamer favorito">

          <button class="footerButton"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>

        <div class="streamerSearch">
          <img class="footerStreamerImg" src="{{asset("images/dan.png")}}">
          <p class="streamerFooter">Danielhe4rt</p>
          <p class="streamerTextFooter">Está apoiando causa</span>
        </div>
      </div>

      <hr class="footerLine">
      <div class="footerContainer">
        <p class="footerBrand">© Sindicato dos Streamers</p>
        <img class="logo" src="{{asset('images/logo.png')}}">
        <p class="github">GitHub - <span class="infoPurple">Sindicato dos Streamers</span></p>
      </div>
    </section>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      new Splide('.splide', {
        type: 'loop',
        perPage: 1,
        focus: 'center',
        fixedWidth: '270px',
        rewind: false,
        drag: false,
        flickMaxPages: 2,
        updateOnMove: true,
      }).mount();

    });
  </script>

  <script>
    let faqDiv = document.querySelectorAll('.faqQuestion');

    Array.from(faqDiv).map((div) => div.addEventListener('click', () => {
      div.children[1].classList.toggle('active');
    }))

    let userImg = document.querySelector('.imgUser');
    let divInfo = document.querySelector('.userInfo');
    let userContent = document.querySelector('.userContent');

    userImg.addEventListener('click', () => {
      divInfo.classList.toggle('userActive');
      userContent.classList.toggle('openMenu');
    })
  </script>

</body>

</html>

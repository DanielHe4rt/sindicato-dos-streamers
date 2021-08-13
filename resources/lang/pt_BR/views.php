<?php

return [
    'locale' => 'Language',
    'header' => [
        'profile' => 'Perfil',
        'logout' => 'Sair',
        'signin' => 'Entrar com a Twitch'
    ],
    'landing' => [
        'quote' => "Você sabia que o seu <span class='infoPurple'>Streamer</span> recebe apenas 20% do valor seu sub? Você paga sub para o streamer ou para a plataforma?",
        'carousel' => [
            'streamers' => '<span class="infoPurple">:streamerCount Streamers</span> assinaram nosso manifesto.',
            'viewers' => '<span class="infoPurple">:viewerCount viewers</span> assinaram nosso manifesto.',
            'submitted' => 'Obrigado por apoiar! Clique para compartilhar',
            'twitterUrl' => 'https://twitter.com/intent/tweet?url=https%3A%2F%2Fsindicatostreamer.com&text=Eu%20acabei%20de%20assinar%20o%20manifesto%20em%20prol%20dos%20streamers%20da%20@TwitchBR&hashtags=TwitchMelhore',
            'join' => 'Baixar Manifesto'
        ],
        'signatures' => [
            'title' => 'Últimas assinaturas',
            'description' => 'Streamers que estão assinando nosso manifesto'
        ],
        'sectionTaxes' => [
            'title' => 'Valor de repasse atualizado, valor de impostos não localizados?',
            'lead' => 'Você tem alguma ideia de onde seus impostos estão indo? Por quê outras plataformas conseguem fazer
                    a isenção dos impostos norte-americanos e a Twitch não? <br>
                    Algo comum ao se receber um valor pago por uma plataforma estrangeira é o pagamento de alíquota ao governo
                    do pais sede da plataforma, porem muitas plataformas relativamente novas no pais ja possuem uma alternativa
                    a essa alíquota, no caso da Twitch o Streamer deve pagar 30% do valor do Sub ao governo Norte Americano diferente de plataformas
                    como TikTok, Youtube, Facebook que ja possuem uma isenção desse imposto, a divisão da Twitch nesse sentido se torna praticamente 80%/20%
                    em relação Empresa-Governo/Produtor de conteúdo. Porque a Twitch não consegue fazer essa isenção?
            '
        ],
        'sectionVideo' => [
            'title' => '"Confia" em uma plataforma que não é transparente?
                    <span class="info-purple">Veja a resposta da plataforma.</span>',
            'lead' => 'A Twitch não apresentou nenhum dado que comprova de fato que a mudança vai ser algo bom a longo
                    prazo
                    e também não passou canais que foram testados essa mudança. <br>

                    Veja a resposta da plataforma na entrevista dada no dia 05/09/2021 no canal da
                    <a class="infoPurple" href="https://twitch.tv/TerraGameOn" target="_blank">TerraGameOn</a>
                    onde a proposta da live mudou quando Streamers mostraram sua indignação com a mudança,
                    ficou inviável da apresentadora não tocar nesse assunto. <br>
                    ',
            'content' => 'O que fica claro para nós, é que eles não liberaram nenhum dado onde mostra um gráfico
                    dos canais testados. Há a suspeita desse teste apenas  no canal do LOUD Coringa, já que foi o único canal que veio a público com os preços reduzidos
                    antes da plataforma formalizar a alteração. A maior dúvida é: será que foi testado em canais pequenos?
                    Queremos muito que a Twitch mostre esses dados e tenha a maior transparência nesse quesito.'
        ],
        'sectionCommunity' => [
            'title' => 'A comunidade brasileira tem menos valor?',
            'lead' => '<p class="infoText">
              Nós temos vários streamers conhecidos mundialmente, tais como o lendário
              <span class="infoPurple">Gaulês</span> que consta hoje na posição de 46º no ranking global da plataforma.
              Tal como o <span class="infoPurple">loud_coringa</span> que consta como <span class="infoPurple">1º no ranking de
              GTA:RP</span> conseguindo uma audiência de <span class="infoPurple">110.000</span> viewers simultâneos na
            parte da madrugada.</p>
          <p class="infoText">
              A Twitch Brasil hoje conta com pelo menos 1.600 parceiros na plataforma e não há nenhum
            indicio de quantos funcionários atendem essa demanda de parceiros. Agora, se colocarmos os streamers
            afiliados na balança, nós vemos que não há a menor condição de haver um bom atendimento da plataforma dada a
            quantidade de pessoas atendidas.
          </p>'
        ],
        'sectionSupport' => [
            'title' => 'Quem está apoiando a causa',
            'description' => 'Streamers famosos que estão apoiando nossa causa'
        ],
        'sectionSeek' => [
            'title' => 'Saiba se seu <span class="infoPurple">streamer</span> favorito está apoiando a causa!',
            'description' => 'Nossa ideia é ser o mais transparente possível, então todos terão a lista de quem apoiou ou não.',
            'notFound' => 'Assinatura não encontrada =/',
            'sendLink' => 'Envie o link da nossa plataforma para seu streamer favorito',
            'tooManyRequestTitle' => 'Muitas Requisições!',
            'tooManyRequestDescription' => 'Aguarde um minuto para pesquisar novamente.'
        ],
        'sectionFaq' => [
            'title' => 'Perguntas Frequentes',
            'faqList' => [
                '1' => [
                    'question' => 'Nós somos um sindicato?',
                    'answer' => 'Não, ultilizamos esse nome em um primeiro momento para chamar atenção, alem disso não existe mecanismo legal que torne possivel um processo de sindicalização de Streamers, ja que criadores de conteudo não possuem um registro legal como trabalho formal.'
                ],
                '2' => [
                    'question' => 'Qual o intuito da plataforma?',
                    'answer' => 'Criamos o site para colher assinatura de todos os usuarios da plataforma Twitch.tv ultilzando a autenticação OAuth para garantir a autenticidade da plataforma, as assinaturas serão colhidas e anexadas ao nosso manifesto, que sera encaminhado a Twitch. O projeto tem seu codigo aberto no Github para todos que quiserem analisa-lo.'
                ],
                '3' => [
                    'question' => 'Vocês querem a volta do antigo valor dos subs?',
                    'answer' => 'No, the fight over the location of the value of the sub has been a long one, and we are happy to be able to provide accessibility to the public. Through this movement, we seek a better transfer condition, considering that currently a streamer with a baseline contract only receives 20% of all income generated on the platform.'
                ]
            ]
        ]
    ],
    'profile' => [
        'title' => 'Configuração de Perfil',
        'description' => 'Você poderá alterar as suas informações a qualquer momento.',
        'manifestUrl' => asset('docs/Manifesto_PT.pdf'),
        'manifest' => 'Clique para baixar o PDF do Manifesto',
        'form' => [
            'ocupation' => 'Selecione sua ocupação',
            'terms' => 'Você concorda com a carta acima?',
            'landing_spot' => 'Você gostaria de aparecer na pagina inicial?',
            'options' => [
                'yes' => 'Sim',
                'no' => 'Não'
            ],
            'submit' => 'Atualizar',
            'erase' => 'Apagar Conta'
        ],
        'terms_disclaimer' => 'Você pode desmarcar caso sinta que a causa não segue mais nos seus ideais.',
        'gdpr_disclaimer' => 'Nós respeitamos a LGPD/GDPR e caso você queira apagar sua conta todos os dados relacionados serão apagados também!',
    ]
];

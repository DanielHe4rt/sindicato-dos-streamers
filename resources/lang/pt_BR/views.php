<?php

return [

    'header' => [
        'profile' => 'Perfil',
        'logout' => 'Sair',
        'signin' => 'Entrar com a Twitch',
        'locale' => 'Português',
        'flag' => asset('images/pt_BR.png'),
    ],
    'landing' => [
        'quote' => "
            <span class='infoPurple'>Porque ainda precisamos pagar imposto aos Estados Unidos com a regionalização do valor?</span> <br><br>
                Há um
                <a href='https://www.irs.gov/pub/irs-pdf/p515.pdf' target='_blank'>
                    IMPOSTO de 30%
                </a>
                que os streamers devem pagar ao governo dos Estados Unidos que é descontado na fonte de cada sub dado ao streamer. <br>
                A separação padrão é 50%/50%: metade para Twitch e a outra metade para o streamer, e com o desconto de 30%, sobram 35% do total para o streamer. <br>
                O imposto sempre existiu, mas com o valor antigo e o valor do prime atrelado ao Tier 1, havia a possibilidade do pequeno/médio streamer ter uma renda. <br>
                Com a diminuição do valor e o repasse se mantendo, isso deixou de ser opção. O objetivo não é aumentar os valores pro anterior, mas sim mudar o
                repasse e a possibilidade da isenção/redução desse imposto, pois, com o pagamento localizado em real, não faz sentido o dinheiro sair do Brasil,
                ir para os EUA, ser tributado, e voltar. <br>
                Outras plataformas de conteúdo possuem um repasse mais justo e o criador de conteúdo não perde os 30% definidos pelo governo dos Estados Unidos.
        ",
        'carousel' => [
            'streamers' => '<span class="infoPurple">:streamerCount Streamers</span> assinaram nosso manifesto.',
            'viewers' => '<span class="infoPurple">:viewerCount viewers</span> assinaram nosso manifesto.',
            'community' => 'A soma das comunidades de todos streamers que assinaram conta com <span class="infoPurple">:viewerCount </span> seguidores.',
            'submitted' => 'Obrigado por apoiar! Clique para compartilhar',
            'twitterUrl' => 'https://twitter.com/intent/tweet?url=https%3A%2F%2Fsindicatostreamer.com&text=Eu%20acabei%20de%20assinar%20o%20manifesto%20em%20prol%20dos%20streamers%20da%20@TwitchBR&hashtags=TwitchMelhore',
            'read' => 'Ler Manifesto',
            'join' => 'Assine o manifesto',
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
                    como TikTok, Youtube, Facebook que ja possuem uma isenção desse imposto. Porque a Twitch não consegue fazer essa isenção?
            '
        ],
        'sectionVideo' => [
            'title' => '"Confia" em uma plataforma que não é transparente?
                    <span class="info-purple">Veja a resposta da plataforma.</span>',
            'lead' => 'A Twitch não apresentou nenhum dado que comprova de fato que a mudança vai ser algo bom a longo
                    prazo
                    e também não passou canais que foram testados essa mudança. <br>

                    Veja a resposta da plataforma na entrevista dada no dia 05/09/2021 no canal da
                    <a class="infoPurple" href="https://twitch.tv/TerraGameOn" target="_blank">TerraGameOn</a>,
                    cuja live mostrou a indignação de diversos Streamers com a mudança. <br>
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
                    'answer' => 'Não. Utilizamos esse nome em um primeiro momento para chamar atenção. Além disso, não existe mecanismo legal que torne possível um processo de sindicalização de Streamers, já que criadores de conteúdo não possuem um registro legal como trabalho formal.'
                ],
                '2' => [
                    'question' => 'Qual o intuito da plataforma?',
                    'answer' => 'Criamos o site para colher assinatura de todos os usuários da plataforma Twitch.tv utilizando a autenticação OAuth para garantir a autenticidade da plataforma. As assinaturas serão colhidas e anexadas ao nosso manifesto, que será encaminhado à Twitch. O projeto tem seu código aberto no Github para todos que quiserem analisá-lo.'
                ],
                '3' => [
                    'question' => 'Vocês querem a volta do antigo valor dos subs?',
                    'answer' => 'Não. A luta pela localização do valor do sub foi longa, e estamos felizes em poder fornecer acessibilidade ao público. Buscamos por meio desse movimento uma melhor condição de repasse, tendo em vista que atualmente um streamer com contrato baseline só recebe 20% de toda renda gerada na plataforma.'
                ],
                '4' => [
                    'question' => 'O que estamos reivindicando?',
                    'answer' => '
                            <p>Isenção dos 30% de impostos pagos ao governo Norte Americano para que o repasse seja mais JUSTO aos Streamers;</p><br>
                            <p>Transparência dos canais onde foram testados o novo preço do sub em cada país/região;</p><br>
                            <p>
                                Gráficos de progressão na dashboard do usuário com DADOS citados pelo Phil Chaves na entrevista da TerraGameOn para que possamos
                                entender o quão longe estamos da nossa renda anterior à mudança;
                            </p><br>
                            <p>Melhores condições para a STAFF da Twitch BR incrementar as pessoas da sua equipe.</p>
                    '
                ],
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
            'sign' => 'Assinar',
            'erase' => 'Apagar Conta'
        ],
        'terms_disclaimer' => 'Você pode desmarcar caso sinta que a causa não segue mais nos seus ideais.',
        'gdpr_disclaimer' => 'Nós respeitamos a LGPD/GDPR e caso você queira apagar sua conta todos os dados relacionados serão apagados também!',
    ]
];

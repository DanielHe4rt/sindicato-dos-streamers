<?php

return [

    'header' => [
        'profile' => 'Profile',
        'logout' => 'Logout',
        'signin' => 'Sign in with Twitch',
        'locale' => 'English',
        'flag' => asset('images/en.png'),
    ],
    'landing' => [
        'quote' => 'Did you know that your <span class="infoPurple">Streamer</span> only receives 20% of your sub? Do you pay sub for the streamer or for the platform?',
        'carousel' => [
            'streamers' => '<span class="infoPurple">:streamerCount Streamers</span> signed our manifest.',
            'viewers' => '<span class="infoPurple">:viewerCount followers</span> signed our manifest.',
            'community' => 'The sum of all streamers communities who signed has <span class="infoPurple">:viewerCount </span> followers.',
            'submitted' => 'Thanks for supporting! Click to share on Twitter!',
            'twitterUrl' => 'https://twitter.com/intent/tweet?url=https%3A%2F%2Fsindicatostreamer.com&text=Eu%20acabei%20de%20assinar%20o%20manifesto%20em%20prol%20dos%20streamers%20da%20@TwitchBR&hashtags=TwitchMelhore',
            'read' => 'Read our Manifest',
            'join' => 'Click and Sign',
        ],
        'signatures' => [
            'title' => 'Latest signatures',
            'description' => 'Streamers who are signing our manifesto'
        ],
        'sectionTaxes' => [
            'title' => 'Changed transfer amount, non-adjusted tax amount?',
            'lead' => 'Do you have any idea where taxes are going? Why are other platforms able to exempt from US taxes and Twitch is not?
            Something common when receiving an amount paid by a foreign platform is the payment of a rate to the government of the country where the platform is hosted, but many relatively new platforms in the country already have an alternative to this rate, in the case of Twitch the Streamer must pay 30% the value of Sub to the North American government different from platforms like TikTok, Youtube, Facebook that already have an exemption from this tax. Why is Twitch unable to make this exemption?
            '
        ],
        'sectionVideo' => [
            'title' => '"Trust" a platform that is not transparent?
                    <span class="text-muted">See platform response.</span>',
            'lead' => 'Twitch has not presented any data that proves in fact that the change will be a good thing in the long term and also did not pass channels that were tested for this change.<br>
                    See the platform\'s response in the interview given on 05 / 09 / 2021 on the channel
                    <a href = "https://twitch.tv/TerraGameOn" target = "_blank" > TerraGameOn</a >
                    where the live proposal changed when Streamers showed their indignation with the change, it was impossible for the presenter not to touch on this subject.'
        ],
        'sectionCommunity' => [
            'title' => 'Does the Brazilian community have less value ? ',
            'lead' => 'We have several world - renowned streamers, such as the legendary <strong>Gaulês</strong>
                    which is currently ranked 46th in the platform\'s global ranking . Like the
                    <strong>loud_coringa</strong >
                    which appears as 1st in the GTA:RP ranking reaching an audience of <strong>110.000 </strong>
                    simultaneous viewers in the dawn part.<br><br>
                    Twitch Brasil currently has at least 1,600 partners on the platform and there is no indication of how many employees meet this demand for partners . Now, if we put the affiliated streamers in the balance,
                    we see that there is no condition to have a good service from the platform given the amount of people served.'
        ],
        'sectionSupport' => [
            'title' => 'Who is supporting the cause',
            'description' => 'Famous streamers who are supporting our cause'
        ],
        'sectionSeek' => [
            'title' => 'Look if your favorite <span class="infoPurple">streamer</span> is supporting the cause!',
            'description' => 'Our idea is to be as transparent as possible, so everyone will have a list of who supported or not.',
            'notFound' => 'Signature not found =/',
            'sendLink' => 'Send this site to your favorite streamer!',
            'tooManyRequestTitle' => 'Too Many Requests!',
            'tooManyRequestDescription' => 'Wait a minute before keep searching.'
        ],
        'sectionFaq' => [
            'title' => 'FAQ',
            'faqList' => [
                '1' => [
                    'question' => 'Are we a syndicate? ',
                    'answer' => 'No, we used this name at first to draw attention, in addition there is no legal mechanism that makes possible a Streamers syndication process, since content creators do not have a legal registration as a formal work.'
                ],
                '2' => [
                    'question' => 'What is the purpose of the platform? ',
                    'answer' => 'We created the website to collect signatures from all Twitch.tv platform users using OAuth authentication to guarantee the authenticity of the platform, the signatures will be collected and attached to our manifest, which will be forwarded to Twitch. The project is open source on Github for anyone who wants to analyze it.'
                ],
                '3' => [
                    'question' => 'Do you want the old price of subs back?',
                    'answer' => 'No, the fight over the location of the value of the sub has been a long one, and we are happy to be able to provide accessibility to the public. Through this movement, we seek a better transfer condition, considering that currently a streamer with a baseline contract only receives 20% of all income generated on the platform.'
                ],
                '4' => [
                    'question' => 'What are we claiming?',
                    'answer' => "
                            <p>Exemption from 30% of taxes paid to the US government to get a fair transfer for the Streamer;</p><br>
                            <p>Transparency of channels where the new sub price was tested in each country/region ;</p><br>
                            <p>
                                User dashboard progression graphs with DATA cited by Phil Chaves in the TerraGameOn
                                 interview so we can understand how far we are from our pre-change income;
                            </p><br>
                            <p>Better conditions for Twitch BR\'s STAFF and all other branches to increase the people on their team.</p>
                    "
                ]
            ]
        ]
    ],
    'profile' => [
        'title' => 'Your Profile',
        'description' => 'You can change your information at any time. ',
        'manifestUrl' => asset('docs/Manifesto_EN.pdf'),
        'manifest' => 'Click here to download the Manifest.pdf',
        'form' => [
            'ocupation' => 'Select your occupation',
            'terms' => 'Do you agree with the letter above? ',
            'landing_spot' => 'Would you like to appear on the home page?',
            'options' => [
                'yes' => 'Yes',
                'no' => 'No'
            ],
            'submit' => 'Update',
            'erase' => 'Delete Account',
            'sign' => 'Sign',
        ],
        'terms_disclaimer' => 'You can uncheck if you feel the cause is no longer in line with your ideals. ',
        'gdpr_disclaimer' => 'We respect LGPD/GDPR and if you want to delete your account all related data will be deleted too! ',
    ]
];


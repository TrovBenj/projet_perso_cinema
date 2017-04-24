<?php

use Carbon\Carbon;

/*function auto-edit profil's description if empty*/
function randomQuote()
{
    $randomNumber = floor(rand(0,9));
    $quotes = ['I don’t want to talk to you no more, you empty headed animal food trough wiper. I fart in your general direction. Your mother was a hamster and your father smelt of elderberries.</q><br/><cite>Monty Python And The Holy Grail</cite>',
        'You see, in this world there\'s two kinds of people, my friend: Those with loaded guns and those who dig. You dig.</q><br/><cite>The Good, the Bad and the Ugly</cite>',
        'In this country, you gotta make the money first. Then when you get the money, you get the power. Then when you get the power, then you get the woman.</q><br/><cite>Scarface</cite>',
        'Has the whole world gone crazy? Am I the only one around here who gives a shit about the rules? Mark it zero!</q><br/><cite>The Big Lebowski</cite>',
        'Ladies and gentleman, this is your stewardess speaking. We regret any inconvenience the sudden cabin movement might have caused. This is due to periodic air pockets we encountered. There’s no reason to be alarmed and we hope you enjoy the rest of your flight. By the way, is there anyone on board who knows how to fly a plane?</q><br/><cite>Airplane!</cite>',
        'Dead or alive you’re coming with me.</q><br/><cite>Robocop</cite>',
        'Nine million terrorists in the world and I gotta kill one with feet smaller than my sister.</q><br/><cite>Die Hard</cite>',
        'I’m the king of the world!</q><br/><cite>Titanic</cite>',
        'No, I am your father.</q><br/><cite>Star Wars: The Empire Strikes Back</cite>',
        'Heeeeeerrrrre’s JOHNNY!</q><br/><cite>The Shining</cite>'
    ];
    $quote = '<q>' . $quotes[$randomNumber];
    return $quote;
}

/*Random fake reviews layout's footer (app.blade)*/
function randomReview()
{
    $randomNumber = floor(rand(0,6));
    $reviews = ['Bravo mon chouchou !</p>',
        "T'as pas 100 balles ?</p>",
        "J'attendais ce site depuis toujours, merci...</p>",
        "Bof, je préfère la musique...</p>",
        "Pour dessiner des blenders t'es fort mais quand il faut tondre la pelouse il ne reste pas grand monde...</p>",
        'OUAF OUAF!</p>',
        "C'est de la balle !</p>"
    ];
    $author = ['<i>Maman</i></p>',
        '<i>Un type dans la rue</i></p>',
        '<i>Mon voisin</i></p>',
        '<i>Ma soeur</i></p>',
        '<i>Mon père</i></p>',
        '<i>Un chien</i></p>',
        '<i>Chuck Norris</i></p>'
    ];
    $openquotes = public_path('images\quotes\openquotes.svg');
    $closequotes = public_path('images\quotes\closequotes.svg');
    /*return url('/images/quotes/openquotes.svg');*/
    $review = '<img src="' . asset("/images/quotes/openquotes.svg") . '"/><p>' . $reviews[$randomNumber] . '<img src="' . asset("/images/quotes/closequotes.svg") . '"/></div><p>' . $author[$randomNumber];
    return $review;
}

/*Replace missing accents in the special typo(mymovies.blade)*/
function replaceAccents($text)
{
    $accents  = array('é', 'è', 'à', 'ê','ï');
    $replace = array('e', 'e', 'a', 'e','i');
    return str_replace($accents, $replace, $text);
}

/*Date for news(news.blade)*/
function diffTime($date)
{
    Carbon::setLocale('fr');
    return $date->format('j M Y');

}
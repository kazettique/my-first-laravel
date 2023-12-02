<?php

use Alexanderpas\Common\HTTP\StatusCode;
use Alexanderpas\Common\HTTP\Method;

enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

function do_stuff(Suit $s)
{
    // ...
}

do_stuff(Suit::Clubs);

$myStatusCode = StatusCode::HTTP_403;
$myRequestMethod = Method::POST;

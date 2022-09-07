<?php

class navLInk
{

    public $text;
    public $href;

    public function __construct($_text, $_href)
    {
        $this->text = $_text;
        $this->href = $_href;
    }
}

return [
    new navLInk('CHARACTERS', '#'),
    new navLInk('COMICS', '#'),
    new navLInk('MOVIE', '#'),
    new navLInk('TV', '#'),
    new navLInk('GAMES', '#'),
    new navLInk('COLECTIBLES', '#'),
    new navLInk('VIDEOS', '#'),
    new navLInk('FANS', '#'),
    new navLInk('NEWS', '#'),
    new navLInk('SHOP', '#'),
];

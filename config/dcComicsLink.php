<?php

class dcComicLink
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
    new dcComicLink('DC', '#'),
    new dcComicLink('COMIC', '#'),
    new dcComicLink('MOVIES', '#'),
    new dcComicLink('DC COMICS', '#'),
    new dcComicLink('TV', '#'),
    new dcComicLink('DC VIDEO', '#'),
    new dcComicLink('DC FANS', '#'),
    new dcComicLink('DC NEWS', '#'),
    new dcComicLink('DC GAME', '#'),
];

<?php

class siteLInk
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
    new siteLInk('SHOP DC', '#'),
    new siteLInk('SHOP COMIC', '#'),
    new siteLInk('SHOP DC', '#'),
    new siteLInk('SHOP COMIC', '#'),
    new siteLInk('SHOP DC', '#'),
];

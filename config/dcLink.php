<?php

class dcLInk
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
    new dcLInk('SHOP DC', '#'),
    new dcLInk('SHOP COMIC', '#'),
    new dcLInk('SHOP DC', '#'),
    new dcLInk('SHOP COMIC', '#'),
    new dcLInk('SHOP DC', '#'),
    new dcLInk('SHOP COMIC', '#'),
    new dcLInk('SHOP DC', '#'),
    new dcLInk('SHOP COMIC', '#'),
    new dcLInk('SHOP DC', '#'),
    new dcLInk('SHOP COMIC', '#'),
    new dcLInk('SHOP DC', '#'),
    new dcLInk('SHOP COMIC', '#'),
];

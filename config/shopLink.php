<?php

class shopLInk
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
    new shopLInk('SHOP DC', '#'),
    new shopLInk('SHOP COMIC', '#'),
];

<?php

class Item
{
    public $ID;
    public $NAME;
    public $PRICE;
    function __construct($i, $n, $p)
    {
        $this->ID = $i;
        $this->NAME = $n;
        $this->PRICE = $p;
    }
}

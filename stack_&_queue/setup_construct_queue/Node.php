<?php

class Node
{
    public $value;
    public $next;

    function readNode($value)
    {
        $this->value = $value;
    }
}

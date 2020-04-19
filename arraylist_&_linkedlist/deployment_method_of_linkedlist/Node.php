<?php

class Node
{
    public $data;

    public $next;

    public $objectData;

    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }

    function getNode($objectData)
    {

    }

    function getData()
    {
        return $this->data;
    }
}

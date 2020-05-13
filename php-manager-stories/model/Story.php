<?php

namespace Model;

class Story
{
    public $name;
    public $category;
    public $teaser;
    public $content;
    public $author;
    public $created;

    public function __construct($name, $category, $teaser, $content, $author, $created)
    {
        $this->name = $name;
        $this->category = $category;
        $this->teaser = $teaser;
        $this->content = $content;
        $this->author = $author;
        $this->created = $created;
    }
}

<?php


class Team
{
    public $name ;
    public $slug ;
    public $description ;
    public $logo ;

    public function __construct($name , $slug , $description , $logo)
    {
        $this->name = $name ;
        $this->slug = $slug ;
        $this->description = $description ;
        $this->logo = $logo ;
    }
}
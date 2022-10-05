<?php

class constructorversibaru
{
    public function __construct(
        public $title, 
        public $level
        ){
            
        }
}

$obj = new constructorversibaru (title: "Constructor Versi Baru", level: "Esay");

echo $obj->title . "<br>";
echo $obj->level . "<hr>";

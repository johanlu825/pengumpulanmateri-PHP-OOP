<?php

class parentclass
{
    public function __construct(public $nameclass = "parent class", 
    public $level = "easy"
    ){}
}

class childclass extends parentclass
{

}
$parentclass = new parentclass(nameclass: "parentclass" ,  "easy");

$childclass = new childclass(nameclass: "childclass" ,  "easy");

echo "name class : " .  $parentclass->nameclass . "<br>" ;
echo "child class : " . $childclass->level . "<br>" ; 
echo "parent class : " . $parentclass->level. "<br>" ;

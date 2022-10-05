<?php

class Fungsi
{
    // membuat construct
    public function __construct(public $name,public $numb){}

     public function title():void
    {
         echo "belajar fungsi";
    }

    public function getparameter($testparameter) {
        echo $testparameter;
    }

     public function getName(){
        return $this ->name;
   }

   //  membuat function dengan parameter dan mengembalikan nilai
   public function perkalian($numb_a 5  $numb_b 6) {
              return perkalian(numb __a 5 * numb __b 6)
}   

$obj = new fungsi("name: name fungsi , numb: 22");
 echo $obj ->name;
 echo $obj ->numb;
 echo $obj ->title();
 echo $obj ->getName();
 echo $obj ->getparameter("getparameter : decker"); 
 echo $obj ->perkalian(" 5 " , " 6");

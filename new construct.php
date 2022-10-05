<?php
class newconstruct{

    // dekralasi data member / variable
   public $name, $level;
   
   public function __construct() {
   
    $this->name  ="newconstruct";
    $this->level ="easy";
   }    
 }
// inisialisasi class objek
$obj = new newconstruct("new construct","esay");

echo   'nama judul: '. $obj->name; 
echo   'level:  '. $obj->level;  
?>
<?php
  //Property and method scope changes
  class Example
{
    var $name = "Michael"; // not reccomend form like public
    public $age = 23;     // opened Property
    protected $usercount; // protected Property

    private function admin() //Closed methods
  {
    //Here will be admin method
  }
}
?>

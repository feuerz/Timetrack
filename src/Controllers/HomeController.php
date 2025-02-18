<?php

namespace Migue\Timetrack\Controllers;

class HomeController{

    public static function  index(){
        $view= new ViewController();
        $view->view("views/home.php");
    }
} 

?>
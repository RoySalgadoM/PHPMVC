<?php

class View{
    public function __construct(){
    }

    function render($viewName){
        require 'views/'.$viewName.'.php';
    }
}
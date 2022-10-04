<?php

class Help extends Controller{
    public function __construct(){
        parent::__construct();
        
        $this -> view -> render("help/index");
    }
}
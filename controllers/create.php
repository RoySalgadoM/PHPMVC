<?php

class Create extends Controller{
    public function __construct(){
        parent::__construct();
        
        $this -> view -> render("create/index");
    }
}
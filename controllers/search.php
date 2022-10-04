<?php

class Search extends Controller{
    public function __construct(){
        parent::__construct();
        
        $this -> view -> render("search/index");
    }
}
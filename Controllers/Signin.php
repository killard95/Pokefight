<?php

class Signin extends Controller {

    public function index() {
        $this->render("Signin_template");
    }

    public function signin() {

        $newUser = new User_DAO ;
        // $newUser->insert($_POST);

        if($newUser->insert($_POST)) {
    
        }
    }

    public function login() {

        $newUser = new User_DAO ;

        if($newUser->login($_POST)) {
    
        }
    }
}
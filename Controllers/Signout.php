<?php

class Signout extends Controller {

     public function index() {
        $this->render('index') ;
    }

    public function signout(){
        $signout = new User_DAO ;
        if($signout->signout($_SESSION['id_user'])){

        // } else {
        //     echo " Pwoblem " ;
        }
    }
}
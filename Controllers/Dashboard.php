<?php

class Dashboard extends Controller {

    public function index() {
        $this->render('Dashboard_template') ;
    }

    public function getpokemon() {
        $getpoke = new Pokemon_DAO ;
        if($getpoke->getPokemon()){
            // $pokemon = $getpoke->getPokemon();
            // $this->set($pokemon) ;
            $this->render('Dashboard_template') ;
        }
    }


}
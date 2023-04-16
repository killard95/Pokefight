<?php

class Statistiques extends Controller {

    public function index() {
        $this->render('Statistiques_template') ;
    }

    public function getStats(){
        $getstats = new Combat_DAO ;
        if($getstats->getAllStats()){
            // $this->render('Statistiques_template') ;
        }
    }

    public function getTotalStats(){
        $getstats = new Combat_DAO ;
        if($getstats->getBestStats()){
            // $this->render('Statistiques_template') ;
        }
    }
}

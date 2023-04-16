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
    public function top3(){
        $top3 = new Combat_DAO ;
        if($top3->getTop3()){
            // $this->render('Home_template') ;
        }
    }

    public function classement(){
        $classement = new Combat_DAO ;
        if($classement->Classement()){
            // $this->render('Statistiques_template') ;
        }
    }
}

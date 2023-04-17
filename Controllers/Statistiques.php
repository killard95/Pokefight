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

    public function bestThreePoke(){
        $bestPoke = new Combat_DAO ;
        if($bestPoke->bestThreePoke()){
            // $this->render('Home_template') ;
        }
    }

    public function bestPokemon(){
        $bestOne = new Combat_DAO ;
        if($bestOne->bestPoke()){
            // $this->render('Home_template') ;
        }
    }
    public function MyBestPoke(){
        $myBestOne = new Combat_DAO ;
        if($myBestOne->MyBestPoke()){
            // $this->render('Statistiques_template') ;
        }
    }
}

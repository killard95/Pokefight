<?php

class Combat extends Controller {

    public function index() {
        $this->render('Combat_template') ;
    }

    public function combat(){
        $combat = new Combat_DAO() ;
        $pokemons = [] ;
        $joueur = [] ;
        $ia = [] ;
        if(isset($_POST['submit'])) {
            

            if(!empty($_POST['joueur'])) {    
                foreach($_POST['joueur'] as $value){
                    array_push($joueur, json_decode($value,true));
                }
            }
            if(!empty($_POST['ia'])) {    
                foreach($_POST['ia'] as $value){
                    array_push($ia, json_decode($value,true));
                }
            }
        
        }

        if($combat->combat($pokemons)){
            $this->render('Combat_template') ;
   
        // } else {
        //     echo " Pwoblem " ;
        }
    }

}


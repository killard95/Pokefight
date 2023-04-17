<?php

class Pokemon {

    public $nom ;
    public $PV ;
    public $PVMax = 200 ;
    public $PC ;
    public $type ;
    public $nbPotions = 1;
    public $image ;
    public $id_pokemon;

    public function __construct($nom, $PV, $PC, $type, $image, $id_pokemon) {
        $this->nom = $nom ;
        $this->PV = $PV ;
        $this->PC = $PC ;
        $this->type = $type ;
        $this->image = $image ;
        $this->id_pokemon = $id_pokemon ;
    }

    public function get($attr) {
        return $this->$attr ;
    }

    public function set($attr, $val) {
        $this->$attr = $val ;
    }
    
    public function EstVivant() {
        if ($this->PV == 0) {
            return FALSE ;
        } else {
            return TRUE ;
        }
    }
    
    public function addPV($gain) {
        if ($this->PV < $this->PVMax-$gain) {
            $this->PV += $gain ;
            echo "<b id='potion'><img class='poke_img' src='".$this->image."'> <img class='poke_img' src='/Views/Assets/Images/potion.jpg'><br> ".$this->nom." a ".$this->PV." PV</b>\n" ;
        }
    }
    

    public function BoitPotion() {
        if($this->nbPotions>0) {
        $this->addPV($this->PVMax*0.1) ;
        $this->nbPotions -- ;
        }
    }

    public function subPV($pokemon) {
        if (($this->type == "feu" && $pokemon->type == "electro") || ($this->type == "eau" && $pokemon->type == "electro")
            || ($this->type == "electro" && $pokemon->type == "feu") || ($this->type == "plante" && $pokemon->type == "electro")){
            $pokemon->PV -= $this->PC ;
            echo $this->nom. " afflige ". $this->PC ." dégâts à ". $pokemon->nom."\n" ;
        } elseif (($this->type == "feu" && ($pokemon->type == "feu" || $pokemon->type == "eau")) || ($this->type == "eau" && ($pokemon->type == "eau" || $pokemon->type == "plante")) 
            || ($this->type == "electro" && ($pokemon->type == "electro" || $pokemon->type == "plante")) || ($this->type == "plante" && ($pokemon->type == "feu" || $pokemon->type == "plante")) ){
            $pokemon->PV -= $this->PC * 0.5 ;
            echo $this->nom. " afflige ". $this->PC *0.5 ." dégâts à ". $pokemon->nom."\n" ;           
        } elseif (($this->type == "feu" && $pokemon->type == "plante") || ($this->type == "eau" && $pokemon->type == "feu") 
            || ($this->type == "plante" && $pokemon->type == "eau") || ($this->type == "electro" && $pokemon->type == "eau") ){
            $pokemon->PV -= $this->PC * 2 ;
            echo $this->nom. " afflige ". $this->PC *2 ." dégâts à ". $pokemon->nom."\n" ;
        }
        

        if($pokemon->PV <= 0){
            $pokemon->PV = 0 ;
        }
        if ($pokemon->PV == 0){
            echo "<b id='dead'><img class='poke_img' src=".$pokemon->image."> <img class='poke_img' src='/Views/Assets/Images/rip.jpg'><br>".$pokemon->nom." is dead  </b>\n" ;
        } else {
            echo "il reste ".$pokemon->PV. " PV a ".$pokemon->nom."\n";
        }
    }

    public function Attaque($pokemon) { 

    
        echo str_repeat($this->nom. " attaque ". $pokemon->nom."\n",1) ;
        $this->subPV($pokemon) ;
        // echo str_repeat(' ', 1024);
        //  flush(); 
        //  usleep(300000); 
                    
        
    }
    
}

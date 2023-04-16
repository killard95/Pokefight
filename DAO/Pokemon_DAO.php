<?php
require "Db_info.php";
class Pokemon_DAO extends Controller{

    private $db_connect ;
    
    public function getPokemon() {

        $this->db_connect = connectToDB() ;
        $db = connectToDb() ;
        $query_pokemons = "
        SELECT * FROM `Pokemon` ORDER BY `Pokemon`.`PC` ";
        $result = $db->query($query_pokemons)->fetchAll(PDO::FETCH_ASSOC) ;
        $count = 0;
        
        echo "<div id='page'><h2>Liste des Pokemons</h2>";
        echo "<form method='POST' action='/Combat/combat'>" ;
        echo "<table class='table table-striped' border=1><thead><tr class='table-primary'><th>IMG</th><th>NOM</th><th>PV</th><th>PV MAX</th><th>PC</th><th>TYPE</th><th>NB POTIONS</th><th>POKEMON JOUEUR</th><th>POKEMON IA</th></tr></thead><tbody>" ;
        foreach($result as $poke){
            $nom['img'] = $poke['img'] ;
            $nom['nom'] = $poke['nom'] ;
            $nom['pv'] = $poke['PV'] ;
            $nom['pv_max'] = $poke['PVMax'] ;
            $nom['pc'] = $poke['PC'] ;
            $nom['type'] = $poke['Type'] ;
            $nom['potions'] = $poke['Nb_potions'] ;
            $nom['id'] = $poke['id_pokemon'] ;
            $pokemons[$count] = array('id_pokemon' => $nom['id'], 'img' => $nom['img'], 'nom' => $nom['nom'], 'PV' => $nom['pv'], 'PVMax' => $nom['pv_max'], 'PC' => $nom['pc'], 'type' => $nom['type'], 'Nb_potions' => $nom['potions']) ;
            
            echo "<tr><td><img class='poke_img' src=".$nom['img']."></td><td>".$nom['nom']."</td><td>".$nom['pv']."</td><td>".$nom['pv_max']."</td><td>".$nom['pc']."</td><td>".$nom['type']."</td><td>".$nom['potions']."</td><td><input type='checkbox' name='joueur[]' value=".json_encode($pokemons[$count])."></td><td><input type='checkbox' name='ia[]' value=".json_encode($pokemons[$count])."></td></tr>" ;
            $count ++;
        }
        echo "</tbody></table><br><br><button class='button'>Lancer le combat</button></form></div>\n" ;
        return TRUE ;
        ?>
        <meta URL=/Dashboard>
        <?php
        ?>
        <a href="/Dashboard"><button class='button'>retour</button></a>
        <?php
    }
}

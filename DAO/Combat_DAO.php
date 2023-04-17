<?php
require("Db_info.php") ;

class Combat_DAO extends Controller {
    
    private $db_connect ;

  
    public function combat($pokemons){
        setlocale(LC_TIME, 'fr_FR');
        date_default_timezone_set('Europe/Paris');
  
        $pokemons = [] ;
        $joueur = [] ;
        $ia = [] ;
        
        
        foreach($_POST['joueur'] as $value){
            array_push($joueur, json_decode($value,true));
        }
        foreach($_POST['ia'] as $value){
                    array_push($ia, json_decode($value, true));
                }

                $p1 = new Pokemon($joueur[0]['nom'], $joueur[0]['PV'], $joueur[0]['PC'], $joueur[0]['type'], $joueur[0]['img'], $joueur[0]['id_pokemon']);
                $p2 = new Pokemon($joueur[1]['nom'], $joueur[1]['PV'], $joueur[1]['PC'], $joueur[1]['type'], $joueur[1]['img'], $joueur[1]['id_pokemon']);
                $p3 = new Pokemon($ia[0]['nom'], $ia[0]['PV'], $ia[0]['PC'], $ia[0]['type'], $ia[0]['img'],$ia[0]['id_pokemon']);
                $p4 = new Pokemon($ia[1]['nom'], $ia[1]['PV'], $ia[1]['PC'], $ia[1]['type'], $ia[1]['img'], $ia[1]['id_pokemon']);
                array_push($pokemons, $p1, $p2, $p3, $p4);
                
        
       
        $tour = 1 ;
        $vainqueur = "";
        $points = "";
        $resultat = "";
  
       


                echo "<pre>";
           while (($p1->EstVivant() || $p2->EstVivant()) || ($p3->EstVivant() || $p4->EstVivant()))  {
 
               echo "<div id='fight'><h3>tour n°".$tour."</h3><br>" ;
               
               
               
               
               
               if ($pokemons[0]->EstVivant()){
                   if($pokemons[0]->PV <= 50 && $pokemons[0]->nbPotions > 0){
                        $pokemons[0]->BoitPotion() ;
                    } else {
                        if($pokemons[2]->EstVivant() && $pokemons[3]->EstVivant()){
                            $pokemons[0]->Attaque($pokemons[rand(2,3)]) ;
                        } elseif ($pokemons[3]->EstVivant()){
                            $pokemons[0]->Attaque($pokemons[3]) ;
                        } elseif ($pokemons[2]->EstVivant()){
                            $pokemons[0]->Attaque($pokemons[2]) ;
                        }  
                    }
           
                }
                
                if ($pokemons[2]->EstVivant()){
                    if($pokemons[2]->PV <= 50 && $pokemons[2]->nbPotions > 0){
                        $pokemons[2]->BoitPotion() ;
                    } else {
                        if($pokemons[0]->EstVivant() && $pokemons[1]->EstVivant()){
                            $pokemons[2]->Attaque($pokemons[rand(0,1)]) ;
                        } elseif ($pokemons[0]->EstVivant()){
                            $pokemons[2]->Attaque($pokemons[0]) ;
                        } elseif ($pokemons[1]->EstVivant()){
                            $pokemons[2]->Attaque($pokemons[1]) ;
                        }
                    }
                }
                
                if ($pokemons[1]->EstVivant()){
                    if($pokemons[1]->PV <= 50 && $pokemons[1]->nbPotions > 0){
                        $pokemons[1]->BoitPotion() ;
                    } else {
                        if($pokemons[2]->EstVivant() && $pokemons[3]->EstVivant()){
                            $pokemons[1]->Attaque($pokemons[rand(2,3)]) ;
                        } elseif ($pokemons[3]->EstVivant()){
                            $pokemons[1]->Attaque($pokemons[3]) ;
                        } elseif ($pokemons[2]->EstVivant()){
                            $pokemons[1]->Attaque($pokemons[2]) ;
                        }
                    }

                }
                
                if ($pokemons[3]->EstVivant()){
                    if($pokemons[3]->PV <= 50 && $pokemons[3]->nbPotions > 0){
                        $pokemons[3]->BoitPotion() ;
                    } else {
                        if($pokemons[0]->EstVivant() && $pokemons[1]->EstVivant()){
                            $pokemons[3]->Attaque($pokemons[rand(0,1)]) ;
                        } elseif ($pokemons[1]->EstVivant()){
                            $pokemons[3]->Attaque($pokemons[1]) ;
                        } elseif ($pokemons[0]->EstVivant()){
                            $pokemons[3]->Attaque($pokemons[0]) ;
                        }
                    }
                }
                
   
                    if ( (($p1->EstVivant() && $p2->EstVivant() ) || ($p1->EstVivant() || $p2->EstVivant() )) && ( ($p3->EstVivant() && $p4->EstVivant()) || ($p3->EstVivant() || $p4->EstVivant() ))){
     
                        $tour ++ ;

                    } else {
                        if (!$p3->EstVivant() && !$p4->EstVivant()){
                            $vainqueur = "\n<b id='result'> Vous avez gagné avec ".$pokemons[0]->get("nom")." <img class='poke_img' src=".$pokemons[0]->get('image')."> & ".$pokemons[1]->get('nom')." <img class='poke_img' src=".$pokemons[1]->get('image')."> FELICITATIONS </b>\n";
                            $points = 3;
                            $resultat = "victoire";
                        }
                        elseif (!$p1->EstVivant() && !$p2->EstVivant()) {
                            $vainqueur = "\n<b id='result'>Désolé mais ".$pokemons[2]->get("nom")." <img class='poke_img' src=".$pokemons[2]->get('image')."> & ".$pokemons[3]->get('nom')." <img class='poke_img' src=".$pokemons[3]->get('image')."> vous ont <span class='red'>défoncés</span> !!! LA HONTE !!!!!!</b>\n";
                            $points = 0;
                            $resultat = "défaite";
                        }    
                        echo "<h1>".$vainqueur."</h1>" ;

                        $this->db_connect = connectToDb();
                        $db = connectToDB() ;
                        $user = $_SESSION['id_user'] ;
                        $poke1 = $p1->Get('nom') ;
                        $poke2 = $p2->Get('nom') ;
                        $poke3 = $p3->Get('nom') ;
                        $poke4 = $p4->Get('nom') ;
                        $nbTour = $tour ;
                        $nbPoints = $points;
                        $resultat = $resultat ;
                        $date = date('d-m-Y H:i:s');
                        $stmt = $db->prepare("
                            INSERT INTO Combat (
                                user,
                                my_poke1,
                                my_poke2,
                                poke_ia1,
                                poke_ia2,
                                nb_tour,
                                points,
                                date,
                                resultat)
                                VALUES (:user, :poke1, :poke2, :poke3, :poke4, :nbTour, :nbPoints, :date, :resultat)"
                                );
                                try {
                                    $stmt->execute(array(
                                        ':user' => $user,
                                        ':poke1' => $poke1,
                                        ':poke2' => $poke2,
                                        ':poke3' => $poke3,
                                        ':poke4' => $poke4,
                                        ':nbTour' => $nbTour,
                                        ':nbPoints' => $nbPoints,
                                        ':date' => $date,
                                        ':resultat' => $resultat
                                    ));
                                    echo "<h1>Vous venez d'obtenir une ".$resultat." et donc vous obtenez ".$points." points.<br> De plus il vous a fallu ".$tour." tours pour terminer ce combat!</h1></div>" ;
                                    return true ;
                                } catch (PDOException $e) {
                                    echo "Erreur : ". $e->getMessage();
                                }
                    
                   
                    }
                } 
            }

            public function getAllStats(){
                $this->db_connect = connectToDb();
                $db = connectToDB() ;
                $user = $_SESSION['id_user'] ;
                $queryAllStats = "
                  SELECT COUNT(DISTINCT id_combat) AS N°combat, my_poke1, my_poke2,
                    poke_ia1, poke_ia2, resultat, points, nb_tour, date
                    FROM Combat
                    WHERE user = $user
                    GROUP BY id_combat;
                ";
                    $stmt = $db->query($queryAllStats)->fetchAll(PDO::FETCH_ASSOC);
                    $count = 0;
                    
                    if ($stmt == null) {
                        echo " ";
                    } else {
                    echo "<h2>Tous mes combats</h2>";
                    echo "<table><thead><tr><th>N° combat</th><th>Mon pokemon N°1</th><th>Mon pokemon N°2</th><th>Pokemon adverse N°1</th><th>Pokemon adverse N°2</th><th>resultat du combat</th><th>Points obtenus</th><th>Nombre de tour</th><th>Date</th></tr></thead><tbody>";
                    foreach($stmt as $stat) {
                        $nom['id'] = $stat['N°combat'];
                        $nom['poke1'] = $stat['my_poke1'];
                        $nom['poke2'] = $stat['my_poke2'];
                        $nom['poke3'] = $stat['poke_ia1'];
                        $nom['poke4'] = $stat['poke_ia2'];
                        $nom['result'] = $stat['resultat'];
                        $nom['points'] = $stat['points'];
                        $nom['nb_tour'] = $stat['nb_tour'];
                        $nom['date'] = $stat['date'];
                        echo "<tr><td>".$nom['id']+$count."</td><td>".$nom['poke1']."</td><td>".$nom['poke2']."</td><td>".$nom['poke3']."</td><td>".$nom['poke4']."</td><td>".$nom['result']."</td><td>".$nom['points']."</td><td>".$nom['nb_tour']."</td><td>".$nom['date']."</td></tr>";
                        $count++;
                    }
                    echo "</tbody></table>";
                    return true;
                    }
            }

            public function getBestStats(){
                $this->db_connect = connectToDb();
                $db = connectToDB() ;
                $user = $_SESSION['id_user'] ;
                $queryAllStats = "
                SELECT user, COUNT(DISTINCT id_combat) AS Nmbr_combat, SUM(points) AS total_points, SUM(nb_tour) AS total_tours
                FROM Combat
                WHERE user = $user
                GROUP BY user;
                ";
                $queryVictory = "
                SELECT COUNT(resultat) AS victory
                FROM Combat
                WHERE user = $user AND resultat LIKE 'victoire';
                ";
                $stmt = $db->query($queryAllStats)->fetchAll(PDO::FETCH_ASSOC);
                $result = $db->query($queryVictory)->fetch(PDO::FETCH_BOTH);
                if($stmt == null) {
                    echo "<p id='noCombat'>Vous n'avez effectué aucun combat !!!</p>";
                    return true;
                } else {
                    echo "<h2>Statistiques générales</h2>
                    ";
                    echo "<table><thead><th>Nombre de combat</th><th>Nombre de victoires</th><th>Ration V/D</th><th>Total de points Obtenus</th><th>Total de tours efféctués</th></thead><tbody>";
                    echo "<tr><td>".$stmt[0]['Nmbr_combat']."</td><td>".$result['victory']."</td><td>".intval(($result['victory']/$stmt[0]['Nmbr_combat'])*100)."%</td><td>".$stmt[0]['total_points']."/".($stmt[0]['Nmbr_combat']*3)."</td><td>".$stmt[0]['total_tours']."</td></tr></tbody></table>";
                    return true;
                }
            }

            public function GetTop3(){
                $this->db_connect = connectToDb();
                $queryStats = "
                SELECT firstname, SUM(points) AS points, COUNT(id_combat) AS nbre_combat
                FROM Combat
                INNER JOIN User ON User.id_user = Combat.user
                GROUP BY firstname
                ORDER BY points DESC
                LIMIT 3 ";
                $stmt = $this->db_connect->query($queryStats)->fetchAll(PDO::FETCH_ASSOC);
                if($stmt == null) {
                    echo " ";
                } else {
                    echo "<h1>Top 3 des meilleurs dresseurs Pokémon du monde</h1>" ;
                    echo "<table><thead><th>Dresseur</th><th>Nombre de points gagnés</th><th>Nombre de combats</th><th>Nombre de victoires</th><th>Ratio V/D</th></thead><tbody>";
                    foreach($stmt as $row){
                        $nom['firstname'] = $row['firstname'];
                        $nom['points'] = $row['points'];
                        $nom['nbre_combat'] = $row['nbre_combat'];
                        echo "<tr><td>".$nom['firstname']."</td><td>".$nom['points']."</td><td>".$nom['nbre_combat']."</td><td>".(($nom['points'])/3)."</td><td>".intval(((($nom['points'])/3)/$nom['nbre_combat'])*100)."%</td></tr>";
                    }
                    echo "</tbody></table>";
                    return true;
            }
        }

        public function classement(){
            $this->db_connect = connectToDb();
            $queryStats = "
            SELECT firstname, SUM(points) AS points, COUNT(id_combat) AS nbre_combat
            FROM Combat
            INNER JOIN User ON User.id_user = Combat.user
            GROUP BY firstname
            ORDER BY points DESC
            ";
            $stmt = $this->db_connect->query($queryStats)->fetchAll(PDO::FETCH_ASSOC);
            if($stmt == null) {
                echo " ";
            } else {
                echo "<h2>Classement des dresseurs Pokémon du monde</h2>" ;
                echo "<table><thead><th>Dresseur</th><th>Nombre de points gagnés</th><th>Nombre de combats</th><th>Nombre de victoires</th><th>Ratio V/D</th></thead><tbody>";
                foreach($stmt as $row){
                    $nom['firstname'] = $row['firstname'];
                    $nom['points'] = $row['points'];
                    $nom['nbre_combat'] = $row['nbre_combat'];
                    echo "<tr><td>".$nom['firstname']."</td><td>".$nom['points']."</td><td>".$nom['nbre_combat']."</td><td>".(($nom['points'])/3)."</td><td>".intval(((($nom['points'])/3)/$nom['nbre_combat'])*100)."%</td></tr>";
                }
                echo "</tbody></table>";
                return true;
            }
        }

        public function bestThreePoke(){
            $this->db_connect = connectToDb();
            $queryThreeBest ="
            SELECT my_poke1, COUNT(my_poke1) AS best 
            FROM Combat
            INNER JOIN Pokemon On Pokemon.nom = Combat.my_poke1 
            WHERE Pokemon.nom LIKE my_poke1
            GROUP BY my_poke1
            ORDER BY best DESC
            LIMIT 3
            ";
            $stmt = $this->db_connect->query($queryThreeBest)->fetchAll(PDO::FETCH_ASSOC);
            echo "<h2>Top 3 des Pokémon les plus utilisé</h2>";
            echo "<table><thead><th>Nom du Pokemon</th><th>Nombre de combat effectués</th></thead><tbody>";
            foreach($stmt as $row){
                $nom['my_poke1'] = $row['my_poke1'];
                $nom['best'] = $row['best'];
                echo "<tr><td>".$nom['my_poke1']."</td><td>".$nom['best']."</td></tr>";
            }
            echo "</tbody></table>";
            return true;
        }

        public function bestPoke(){
            $this->db_connect = connectToDb();
            $queryBest = "
            SELECT Pokemon.img, COUNT(my_poke1) AS best
            FROM Combat
            INNER JOIN Pokemon On Pokemon.nom = Combat.my_poke1 
            WHERE Pokemon.nom LIKE my_poke1
            GROUP BY Pokemon.img
            ORDER BY best DESC
            LIMIT 1
            ";
            $stmt = $this->db_connect->query($queryBest)->fetch(PDO::FETCH_ASSOC);
            echo "<h2>Pokemon ayant le plus combattu</h2>";
            echo "<img class='best_poke' src='".$stmt['img']."' /> ";
            return true;
        }

    }
    


  
    


<?php
include "Header_template.php" ;
?>
<div id="logo">
    <h1 class="title">Dashboard de <?php echo $_SESSION['name'] ; ?> </h1> 
    <div id="user_action">
        <a href="/Update"><button class="button">Modify</button></a>
        <form method="POST" action="/Signout/signout">
            <button class="signout">Sign Out</button>
        </form>
    </div>
    
    <div id="user_action">
        <a href="/Statistiques"><button class="button">Voir mes stats</button></a>
        <a href="/"><button class="signout">Deconnect</button></a>
    </div>
</div>

<p class="rules">Vous vous apprétez à faire un combat de pokémons jusqu'à ce que les pokémons d'une des deux équipes soient térassés.
    Veuillez choisir parmi la liste ci-dessous deux pokémons pour votre équipe et deux pokémons pour l'équipe de l'IA.
    A la fin de ce combat vos statistiques seront enregistrées et vous pourrez les consulter à tout moment en appuyant sur le bouton "voir mes stats"
</p>
<p class="rules">
    Bon combat et que le meilleur dresseur gagne !!!
    N'oubliez pas de lancer le combat avec le bouton "lancer le combat en bas de page."
</p>
<?php
$result = new Pokemon_DAO() ;
$result->getPokemon() ;
include "Footer_template.php" ;
?>




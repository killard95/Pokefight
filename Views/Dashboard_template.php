<?php
include "Header_template.php" ;
?>
<div id="logo">
    <h1>Dashboard de <?php echo $_SESSION['name'] ; ?> </h1> 
    <div id="user_action">
        <a href="/Update"><button>Modify</button></a>
        <form method="POST" action="/Signout/signout">
            <button id="signout">Sign Out</button>
        </form>
    </div>

    <div id="user_action">
        <a href="/"><button>Deconnect</button></a>
    </div>
    <a href="/Statistiques"><button>Voir mes stats</button></a>
</div>

<p class="rules">Vous vous apprétez à faire un combat de pokémons jusqu'à ce qu'il n'en reste qu'un seul en vie.
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
<script>
        var checks = document.querySelectorAll(".check");
var max = 2;
for (var i = 0; i < checks.length; i++)
  checks[i].onclick = selectiveCheck;
function selectiveCheck (event) {
  var checkedChecks = document.querySelectorAll(".check:checked");
  if (checkedChecks.length >= max + 1)
    return false;
}          
</script>



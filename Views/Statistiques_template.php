<?php
include('Header_template.php');
?>
<h1 id='stat'>Mes statistiques</h1>
<div class="main">
<?php
$allStats = new Combat_DAO() ;
$allStats->MyBestPoke();
$allStats->getBestStats();
$allStats->getAllStats();
$allStats->classement();
?>
</div>
<br><br>
<a href="/Dashboard"><button class="button">Retour au dashboard</button></a>

<?php
include('Footer_template.php');
?>
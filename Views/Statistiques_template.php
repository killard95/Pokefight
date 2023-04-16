<?php
include('Header_template.php');
?>
<h1 id='stat'>Mes statistiques</h1>
<?php
$allStats = new Combat_DAO() ;
$allStats->getBestStats();
$allStats->getAllStats();
$allStats->classement();
?>
<br><br>
<a href="/Dashboard"><button class="button">Retour au dashboard</button></a>

<?php
include('Footer_template.php');
?>
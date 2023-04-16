<?php
include("Header_template.php");
?>



<div class="banner">
    <h1 class="title">Welcome to the Pokéfight</h1>
    <div class="form_log bannerText">
        <form method="post" action="Signin/login">
            <input type="text" id="nickname" name="nickname" placeholder="Nickname" required autofocus/>
            <input type="password" id="password" name="password" placeholder="Password" required/>
            <button class="button">Log In</button>
        </form>
    </div>
    <a href="/Signin"><button class="button">Create new account</button></a>
</div>
<div id="main">

    <?php
    $top = new Combat_DAO();
    $top->GetTop3();
    ?>
    <h2>Ici c'est du 2 VS 2</h2>
    <p>Vous vous apprétez à entrer dans la plus merveilleuse des compétitions.</p>
    <p>Mesurez vous à l'IA afin d'apparaitre dans le top 3 du classement des meilleurs dresseurs Pokémon du monde.</p>
    <p>Les régles sont simples : vous choissisez 2 pokémons pour votre équipe et deux autres pour l'équipe adverse.</p>
    <p>Laissez la magie opérer et découvrez le résultat. Une victoire équivaut à 3 points et une défaite à 0 points.</p>
    <p>N'attendez plus et allez immédiatement <a href="/Signin">créer un compte</a></p>
</div>



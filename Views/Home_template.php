<?php
include("Header_template.php");
?>



<div class="banner">
    <h1><b>Welcome to the Pokéfight</b></h1>
    <div class="form_log bannerText">
        <form method="post" action="Signin/login">
            <!-- <label for="nickname">User name : </label> -->
            <input type="text" id="nickname" name="nickname" placeholder="Nickname" required autofocus/>
            <!-- <label for="password">Password : </label> -->
            <input type="password" id="password" name="password" placeholder="Password" required/>
            <button>Log In</button>
        </form>
    </div>
    <a href="/Signin"><button>Create new account</button></a>
</div>



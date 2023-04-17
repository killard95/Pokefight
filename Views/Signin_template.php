<?php
include "Header_template.php" ;
?>
<div class="main">
    <form id="sign" method="POST" action="Signin/signin">
        <label for="firstname">First Name : </label>
        <input type="text" id="firstname" name="firstname" placeholder="First Name" required autofocus>
        <label for="lastname">Last Name : </label>
        <input type="text" id="lastname" name="lastname" placeholder="Last Name" required>
        <label for="nickname">Nickname : </label>
        <input type="text" id="nickname" name="nickname" placeholder="Nickname" required>
        <label for="email">Email : </label>
        <input type="email" id="email" name="mail" placeholder="Email" required>
        <label for="password">Password : </label>
        <input type="password" id="password" name="password" placeholder="Password" required>

        <button class="button">Sign In</button>
    </form>
</div>
<?php
include "Footer_template.php" ;
?>
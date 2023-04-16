<?php
include "Header_template.php" ;
?>

<form id="updateForm" method="POST" action="Update/update">
    <input type="hidden" name=id_user value="<?$_SESSION["id_user"]?>">
    <label for="firstname">First Name : </label>
    <input type="text" id="firstname" name="firstname" placeholder="First Name" required autofocus>
    <label for="lastname">Last Name : </label>
    <input type="text" id="lastname" name="lastname" placeholder="Last Name" required>
    <label for="nickname">Nickname : </label>
    <input type="text" id="nickname" name="nickname" placeholder="Nickname" value="<? echo $_SESSION['name']?>" required>
    <label for="email">Email : </label>
    <input type="email" id="email" name="mail" placeholder="Email" required>
    <label for="password">Password : </label>
    <input type="password" id="password" name="password" placeholder="Password" required>
    <button>Update</button>
</form>

<?php
include "Footer_template.php" ;
?>
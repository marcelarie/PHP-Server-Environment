<?php
session_start();
if (isset($_SESSION['mail'] )) {
    header('Location: validate.php');
}
?>
<link rel="stylesheet" href="css/style.css" type="text/css">
<div class="form__container centered">
    <form action="./validate.php" method="POST" accept-charset="utf-8">
        <input placeholder="username" type="mail" name="mail"/><br><br>
        <input placeholder="password" type="password" name="password"/><br>
        <button type="submit" name="login">Login</button>
    </form>
</div>

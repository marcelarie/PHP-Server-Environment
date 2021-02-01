<link rel='stylesheet' href='css/style.css'>
<?php
session_start();

if (!isset($_SESSION['mail'])) {
    $_SESSION['mail'] = $_POST['mail'];
    $_SESSION['password'] = $_POST['password'];
}

if (isset($_SESSION['mail']) && isset($_SESSION['password']) ){
    echo $_SESSION['mail'];
    echo $_SESSION['password'];
    include 'panel.php';
    print " <form action='logout.php'>
        <button type='submit'>Log out</button>
    </form> ";
}
?>

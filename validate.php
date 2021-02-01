<link rel='stylesheet' href='css/style.css'>
<?php
session_start();

if (isset($_POST['mail']) && isset($_POST['password'])) {
    $_SESSION['mail'] = $_POST['mail'];
    $_SESSION['password'] = $_POST['password'];
}

if (isset($_SESSION['mail']) && isset($_SESSION['password']) ){
    echo "<div class='message'>";
    echo 'Welcome, ';
    echo $_SESSION['mail'];
    include 'panel.php';
}
if (!$_SESSION['mail'] ) {
    header('Location: logout.php');
}
?>

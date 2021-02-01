<link rel='stylesheet' href='css/style.css'>
<pre>
<?php
session_start();


if (isset($_POST['mail']) && isset($_POST['password'])) {
    $_SESSION['mail'] = $_POST['mail'];
    $_SESSION['password'] = $_POST['password'];
} else {
    header('Location: index.php');
}

if (isset($_SESSION['mail']) && isset($_SESSION['password']) ){
    echo 'Welcome, ';
    echo $_SESSION['mail'];
    echo "<br>";
    // echo $_SESSION['password'];
    // echo "<br>";
    include 'panel.php';
}
if (!$_SESSION['mail'] ) {
    header('Location: index.php');
}
?>

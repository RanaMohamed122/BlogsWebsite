<h1>u log out</h1>

<?php

session_start();


session_unset();

session_destroy();

header('location:index.php');

?>
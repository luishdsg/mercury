<?php

SESSION_START();
$nome = $_SESSION['login_user'];

unset($_SESSION['login_user']);
unset($_SESSION['senha_user']);

header('location: index.php');
?>
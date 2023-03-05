<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: https://dashboard-csn.apps.oc.4ks.online/dashboard');
    exit;
}

// User is logged in, display the app content here
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>csn-demo app 1</title>
</head>
<body>
    <h1>Bienvenido a la app demo 1, <?php echo $username; ?>!</h1>
    <p>soy un contenedor con codigo php validadando la configuracion de php session en contenedores separados en openshift. You are logged in and authorized to access this page.</p>
</body>
</html>
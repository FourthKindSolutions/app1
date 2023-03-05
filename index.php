<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Store the current page in a session variable
    $_SESSION['redirect'] = $_SERVER['REQUEST_URI'];
    header('Location: login.php');
    exit;
}

// User is logged in, display the app content here
$username = $_SESSION['username'];

// Clear the redirect session variable if it exists
if (isset($_SESSION['redirect'])) {
    unset($_SESSION['redirect']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>App</title>
</head>
<body>
    <div class="container">
        <div class="embed-responsive embed-responsive-16by9">
        <iframe width="100%" height="100%" class="embed-responsive-item" src="https://app1-csn.apps.oc.4ks.online" allowfullscreen></iframe>
        </div>
    </div>
</body>
</html>

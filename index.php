<!DOCTYPE html>
<html>
<head>
    <title>App</title>
</head>
<body>
    <h1>Welcome to App, <?php echo $username; ?>!</h1>
    <p>This is the content of App. You are logged in and authorized to access this page.</p>
    
    <?php
    // Example link that redirects back to the previous page
    if (isset($_SESSION['redirect'])) {
        echo '<p><a href="' . $_SESSION['redirect'] . '">Go back to the previous page</a></p>';
    }
    ?>
</body>
</html>

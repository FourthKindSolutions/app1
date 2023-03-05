<!DOCTYPE html>
<html>
<head>
    <title>App</title>
</head>
<body>
    <h1>Welcome to App, <?php echo $username; ?>!</h1>
    <p>This is the content of App. You are logged in and authorized to access this page.</p>
    <!--INICIO del cont principal-->
    <div class="container">
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://dashboard-csn.apps.oc.4ks.online" allowfullscreen></iframe>
        </div>
    </div>
       <!--FIN del cont principal-->
    <?php
    // Example link that redirects back to the previous page
    if (isset($_SESSION['redirect'])) {
        echo '<p><a href="' . $_SESSION['redirect'] . '">Go back to the previous page</a></p>';
    }
    ?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<? require_once("../views/partials/htmlHeader.php") ?>
    <link rel="stylesheet" type="text/css" href="/css/index.css">

</head>
<body>
	<? require_once("../views/partials/header.php"); ?>
    <div id="homepage">
        <div id="img">
            <img src="/img/logo.png">
        </div>	
        

        <div id="links">
            <div id="login">
                <a class="center" href="auth.login.php">Log In</a>
            </div>
            <div id="createaccount">
                <a class="center" href="users.create.php">Create Account</a>
            </div>
            <div id="preferences">
                <a class="center" href="users.edit.php">Preferences</a>
            </div>
        </div>
    </div>

	<? require_once("../views/partials/footer.php"); ?>
</body>
</html>
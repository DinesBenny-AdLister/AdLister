<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/index.css">
</head>
<body>
	<? require_once("../views/partials/header.php"); ?>
	<div id="container">
     

        <div id="login">
            <a class="center" href="auth.login.php">Log In</a>
        </div>
        <br>
        <div id="createaccount">
            <a class="center" href="users.create.php">Create Account</a>
        </div>
        <br>
        <div id="preferences">
            <a class="center" href="users.edit.php">Preferences</a>
        </div>
        <br>
		<div id="content">

		</div>
	</div>
	<? require_once("../views/partials/footer.php"); ?>
</body>
</html>
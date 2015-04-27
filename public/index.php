<?
require_once '../bootstrap.php';
if(isset($_POST['modalUsername'])){
    if(isset($_POST['modalPassword'])){
        require_once("../utils/Auth.php");
        $login = Auth::logUser($_POST['modalUsername'], $_POST['modalPassword']);
        if($login){
            $invalid = true;
        }
    }
    else{
        $invalid = true;
    }
}
elseif(isset($_POST['modalPassword'])){
    $invalid = true;
}
    
    session_start();
    $sID = session_id();

    if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]){
        header("Location: ads.index.php");
    }

    if(!isset($invalid)){
        $invalid = false;
    }
    extract([$_GET, $invalid]);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>CragsLast</title>
	<? require_once("../views/partials/htmlHeader.php") ?>
    <link rel="stylesheet" type="text/css" href="/css/index.css">

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

</head>
<body>

    <div id="homepage">
        <div id="imgs">
            <div id="logo">
                <img src="/img/logo.png">
            </div>
            <br>
            <div id="tagline">
                <img src="/img/Tagline.png">
            </div>
        </div>

        <div id="links">
                <div id="login">
                    <a class="center" href="?l=t">Log In</a>
                </div>
            <div id="preferences">
                <a class="center" href="users.edit.php">Preferences</a>
            </div>
        </div>

        <div id="createaccountsection">

            <div id="createaccount">
                Create Account
            </div>

            <div id="createaccountform">
                <form class="pure-form pure-form-stacked" action="index.php" method="post">
                    <fieldset>
                        <legend></legend>

                            <label for="username">Username</label>
                            <input name="username" id="username" type="text" placeholder="Username">

                            <label for="email">Email</label>
                            <input name="email" id="email" type="email" placeholder="Email">

                            <label for="password">Password</label>
                            <input name="password" id="password" type="password" placeholder="Password">

                            <label for="confirmpassword">Confirm Password</label>
                            <input name="confirmpassword" id="confirmpassword" type="password" placeholder="Confirm Password">

                            <label for="phonenumber">Phone Number</label>
                            <input name="phonenumber" id="phonenumber" type="text" placeholder="Phone Number">

                            <label for="remember" class="pure-checkbox">
                                <input name="remember" id="remember" type="checkbox"> Remember me
                            </label>

                            <button type="submit" class="pure-button pure-button-primary">Sign in</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <div id="loginModal" <? if(!isset($_GET['l'])){echo "hidden";}?>>
        <div id="modalBackground">
            <div id="modalForm">
                <form method="Post">
                    <label for="modalUsername">Username/Email</label>
                    <br>
                    <input type="text" id="modalUsername" name="modalUsername" value="">
                    <br>

                    <label for="modalPassword">Password</label>
                    <br>
                    <input type="password" id="modalPassword" name="modalPassword">
                    <br>

                    <button type="submit" id="submitButton">Submit</button>
                    <br>
                    <br>
                    <? if($invalid): ?>
                        <p class="error">Invalid Username/Password.</p>
                    <? endif; ?>
                </form>
                <a id="closeModal" href="/">X</a>
            </div>

        </div>
    </div>

	<? require_once("../views/partials/footer.php"); ?>
    <? require_once("../views/partials/jscriptFooter.php"); ?>
    <script type="text/javascript">
        $("#login").click(function(event){
            console.log("Log In Clicked");
            $("#loginModal").slideToggle();
        });

        $("#closeModal").click(function(event){
            $("#loginModal").slideToggle();
        });
    </script>
</body>
</html>
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
                <a class="center" href="auth.login.php">Log In</a>
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
                <form class="pure-form pure-form-stacked">
                    <fieldset>
                        <legend></legend>

                            <label for="username">Username</label>
                            <input id="username" type="text" placeholder="Username">

                            <label for="email">Email</label>
                            <input id="email" type="email" placeholder="Email">

                            <label for="password">Password</label>
                            <input id="password" type="password" placeholder="Password">

                            <label for="confirmpassword">Confirm Password</label>
                            <input id="confirmpassword" type="password" placeholder="Confirm Password">

                            <label for="phonenumber">Phone Number</label>
                            <input id="phonenumber" type="text" placeholder="Phone Number">

                            <label for="remember" class="pure-checkbox">
                                <input id="remember" type="checkbox"> Remember me
                            </label>
                            
                            <button type="submit" class="pure-button pure-button-primary">Sign in</button>
                    
                    </fieldset>
                </form>

            </div>
        </div>
    </div>

	<? require_once("../views/partials/footer.php"); ?>
    <? require_once("../views/partials/jscriptFooter.php"); ?>
</body>
</html>
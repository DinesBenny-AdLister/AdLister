<!DOCTYPE html>
<html>
<head>
	<title></title>
	<? require_once("../views/partials/htmlHeader.php") ?>
</head>
<body>
	<? require_once("../views/partials/header.php"); ?>
	<div id="container">
		<? require_once("../views/partials/sidebar.php");  ?>

		<div id="content">

            // location (zip code - required)
            // location (address - not required -- can be placed on map)
            // post type
            // contact method (email, phone -- )
            
            // item name
            // item price
            // picture - not required
            // description 



            <form class="pure-form pure-form-stacked">
                <fieldset>
                    <legend>A Stacked Form</legend>

                    <label for="email">Email</label>
                    <input id="email" type="email" placeholder="Email">

                    <label for="password">Password</label>
                    <input id="password" type="password" placeholder="Password">

                        <label for="contacttype">Contact Type</label>
                        <select id="contact">
                            <option>email</option>
                            <option>phone</option>
                            
                        </select>

                        <label for="remember" class="pure-checkbox">
                            <input id="remember" type="checkbox"> Remember me
                        </label>

                    <button type="submit" class="pure-button pure-button-primary">Sign in</button>
                </fieldset>
            </form>


		</div>
	</div>
	<? require_once("../views/partials/footer.php"); ?>
</body>
</html>
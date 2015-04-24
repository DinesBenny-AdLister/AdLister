<!DOCTYPE html>
<html>
<head>
	<title>Edit Account</title>
	<? require_once("../views/partials/htmlHeader.php") ?>
	<link rel="stylesheet" type="text/css" href="/css/index.css">

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

</head>
<body>
	<? require_once("../views/partials/header.php"); ?>
	<div id="container">
		<? require_once("../views/partials/sidebar.php");  ?>

			<div id="content">
				<div id="editaccountsection">

	            <div id="editaccount">
	                Edit Account
	            </div>

	            <div id="editaccountform">
	                <form class="pure-form pure-form-stacked">
	                    <fieldset>

	                        	<div id="leftColumn">
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

	                        	</div>

	                            <div id="rightColumn">
	                            	<!-- picture -->
	                            	<img id="pic" src="/img/crag.jpg" height="202" width="202">
	                            	<input id="picInput" type="file" name="pic" accept="image/*">

	                            	<!-- textarea -->
	                            	<label for="about">About</label>
	                            	<textarea id="about" name="about" rows="2" cols="30"></textarea>
	                            </div>


	                            <button id="submitbutton" type="submit" class="pure-button pure-button-primary">Update!</button>	                    
	                    </fieldset>
	                </form>
	            </div>
	        </div>
		</div>
	</div>

	<? require_once("../views/partials/footer.php"); ?>
	<? require_once("../views/partials/jscriptFooter.php"); ?>

<script type="text/javascript">
	$("#picInput").change(function(event){
		// $("#pic").attr("src", this.value)
		console.log(this);
	});
</script>

</body>
</html>
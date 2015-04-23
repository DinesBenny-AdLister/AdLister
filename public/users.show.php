<? require_once("../views/partials/phpHeader.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<? require_once("../views/partials/htmlHeader.php") ?>
	<style type="text/css">
		p{
			margin: 10%;
			font-size: 24px;
		}
		label{
			text-decoration: underline;
		}
		#profPic{
			
			height: 200px;
			width: 200px;
			margin-top: 131px;
		}

		#profPicDiv{
			float: right;
			margin-right: 10%;
			margin-top: 5%;
		}

		#userInfo{
			float: left;
			margin-top: 5%;
			margin-left: 0;
		}
	</style>
</head>
<body>
	<? require_once("../views/partials/header.php"); ?>
	<div id="container">
		<? require_once("../views/partials/sidebar.php");  ?>

		<div id="content">
			<div id="userInfo">
				<label>Username:</label>
				<p id="username">1234567890123456789012345</p>
				<label>Email:</label>
				<p id="email">1234567890123456789012345</p>
				<label>Phone Number:</label>
				<p id="phone_number">1234567890123456789012345</p>
				<label>About:</label>
				<p id="about">1234567890123456789012345</p>
			</div>
			<div id="profPicDiv" >
				<img id="profPic" src="img/crag.jpg">
			</div>
		</div>
	</div>
	<? require_once("../views/partials/footer.php"); ?>
	<? require_once("../views/partials/jscriptFooter.php"); ?>
</body>
</html>
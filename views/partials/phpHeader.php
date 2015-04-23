<?
	session_start();
	$sID = session_id();

	$data = [];

	if(!$_SESSION["loggedIn"]){
		header("Location: /index.php");
	}
	else
	{
		$data["username"] = $_SESSION['username'];
		$data["email"] = $_SESSION['email'];
		$data["phone_number"] = $_SESSION['phone_number'];
		$data["about"] = $_SESSION['about'];
		$data["profPic"] = $_SESSION['profPic'];
	}






	extract($data);
?>
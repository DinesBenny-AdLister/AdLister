<?php
	require_once("../models/User.php");
	require_once("Logger.php");

	class Auth{
		public static function logUser($username, $password){
			$log = new Logger();

			$log::info("$username attempted to log in");

			$userInfo = User::search('username', $username);

			if (isset($userInfo) && $userInfo->password == $password){
				$log::loginAttempt("$username succussfully logged in\n");
				header("Location: ads.index.php");
				exit;
			}
			else{
				$log::loginAttempt("$username log in failed\n");
				return false;
			}
		}

		private function __construct(){}
	}
?>
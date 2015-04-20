<?php
	require_once("../models/User.php");
	require_once("Logger.php");

	class Auth{
		public static function logUser($username){
			$log = new Logger();
				
			$log::info("$username attempted to log in");
		
			$userInfo = User::search('username', $username);
		
			if (isset($userInfo->'password') && $userInfo->'password' == $password){
				$log::loginAttempt("$username succussfully logged in");
				header("Location: ads.index.php");
				exit;
			}
			else{
				$log::loginAttempt("$username log in failed");
				return = false;
			}
		}

		private function __construct(){}
	}
?>
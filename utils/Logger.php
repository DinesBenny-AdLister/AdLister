<?php

	class Logger{

		protected static $fileName;

		// constructor
		public function __construct($prefix = "log", $suffix = "txt"){
			static::$fileName = "../data/{$prefix}-".date("Y-m-d").".{$suffix}";
		}

		// general logger
		public static function log($message, $level){
			$handle = fopen($fileName, 'a');
			fwrite($handle, date("H:i:s")." ".$logLevel." ".$message."\n");
			fclose($handle);
		}
		// error logger
		public static function error($message){
			log($message, "error");
		}

		// info logger
		public static function info($message){
			log($message, "info");
		}

		public static function addAd($message){
			log($message, "ad creation");
		}

		public static function loginAttempt($message){
			log($message, "login attempt");
		}
	}

?>
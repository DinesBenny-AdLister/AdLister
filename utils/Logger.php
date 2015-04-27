<?php

	class Logger{

		public $fileName;

		// constructor
		public function __construct($prefix = "log", $suffix = "txt"){
			$this->fileName = "../data/{$prefix}-".date("Y-m-d").".{$suffix}";
		}

		// general logger
		public static function log($message, $level){
			$fileName = "../data/log-".date("Y-m-d").".txt";
			$handle = fopen($fileName, 'a');
			fwrite($handle, date("H:i:s")." ".$level." ".$message."\n");
			fclose($handle);
		}
		// error logger
		public static function error($message){
			Logger::log($message, "error");
		}

		// info logger
		public static function info($message){
			Logger::log($message, "info");
		}

		public static function addAd($message){
			Logger::log($message, "ad creation");
		}

		public static function loginAttempt($message){
			Logger::log($message, "login attempt");
		}
	}

?>
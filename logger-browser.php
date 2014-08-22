<?php
define("version", "1.1.0");

final class Logger{
	private static $enable  = true;
	private static $mode_error = "Error";
	private static $mode_debug = "Debug";
	private static $mode_info  = "Info";
	private static $color = array(
		"Error" =>"red"
		,"Debug" =>"green"
		,"Info" =>"blue"
	);


	public static function enableLog($enable){
		self::$enable = $enable;
	}

	public static function e($msg){
		self::output(self::$mode_error,$msg);
	}

	public static function e_var_dump($msg){
		self::output(self::$mode_error,$msg,true);
	}

	public static function d($msg){
		self::output(self::$mode_debug,$msg);
	}

	public static function d_var_dump($msg){
		self::output(self::$mode_debug,$msg,true);
	}

	public static function i($msg){
		self::output(self::$mode_info,$msg);
	}

	public static function i_var_dump($msg){
		self::output(self::$mode_info,$msg,true);
	}

	private static function output($mode,$msg,$isVarDump = false){
		if(!self::$enable)
			return;
		$now = getdate();
		//hours:minutes:seconds
		$header_info  = $now["hours"] . ":" . $now["minutes"] . ":" . $now["seconds"] . " ";
		$header_info .= $mode . ":<br>";

		$log_string = $msg . "<br>";
		echo '<span style="color:'.self::$color[$mode] . '">'.$header_info . "</span>";
		if($isVarDump){
			var_dump($msg);
			echo "<br>";
		}
		else
			echo $log_string;
	}

}

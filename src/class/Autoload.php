<?php

class Autoload
{
	public static function load()
	{
		spl_autoload_register([__CLASS__, 'mon_autoload']);
	}

	public static function mon_autoload($className)
	{
		if (file_exists('src/class/' . $className . '.php')) {
			require_once 'src/class/' . $className . '.php';
		} else if (file_exists('src/orms/' . $className . '.php')) {
			require_once 'src/orms/' . $className . '.php';
		} else if (file_exists('src/models/' . $className . '.php')) {
			require_once 'src/models/' . $className . '.php';
		} else if (file_exists('src/controllers/' . $className . '.php')) {
			require_once 'src/controllers/' . $className . '.php';
		}
	}
}

<?php

class DefaultController
{
	public static function render($vue, $vars = [])
	{
		extract($vars);

		ob_start();

		require 'src/views/' . $vue . '.php';

		$contenu = ob_get_clean();
		echo $contenu;
	}

	public function get404()
	{
		self::render('404');
	}
}

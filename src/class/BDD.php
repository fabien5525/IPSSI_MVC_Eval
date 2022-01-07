<?php

class BDD
{
	const HOST = 'localhost';
	const DBNAME = 'ipssi_202122_SQYBD22.1_evaluation';
	const USER = 'root';
	const PWD = '';

	private $co;

	public function __construct()
	{
		try {
			$this->co = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::DBNAME, self::USER, self::PWD);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function getConnexion()
	{
		return $this->co;
	}
}

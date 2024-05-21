<?php

class Database
{
	private $dbhost;
	private $dbname;
	private $dbusername;
	private $dbpassword;
	public $conn;

	public function __construct()
	{
		$config = require('/home/u185586784/private/ondemand.php');

		$this->dbhost = $config['host'];
		$this->dbname = $config['db'];
		$this->dbusername = $config['user'];
		$this->dbpassword = $config['pass'];
	}

	public function getConnection()
	{
		$this->conn = null;

		try {
			$this->conn = new PDO("mysql:host=" . $this->dbhost . ";dbname=" . $this->dbname, $this->dbusername, $this->dbpassword);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo "Problema na conexão: " . $e->getMessage();
		}

		return $this->conn;
	}
}

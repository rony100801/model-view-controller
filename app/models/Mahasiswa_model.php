<?php

class Mahasiswa_model
{

	private $dbh, $stmt;

	public function __construct()
	{
		// data source name
		$dsn = 'mysql:host=localhost;dbname=db_phpmvc';
		try {
			$this->dbh = new PDO($dsn, 'root', '123');
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getAllMahasiswa()
	{
		$this->stmt = $this->dbh->prepare("SELECT * FROM tbl_mahasiswa");
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

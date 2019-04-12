<?php


class BDDconnect
{
    private $BDDName = 'posts';
  private $TableName = 'posts';
  private $IdMyAdmin = 'root';
  private $PwdMyAdmin = 'FUdYla3dPuA8u2qh';
  private $db;

	public function __construct()
	{
		$this->BDDConnect();
	}

	public function getConnect()
	{
		return $this->db;
	}

	private function BDDConnect()
	{
		try
		{
			$this->db = new PDO('mysql:host=localhost;dbname='.$this->BDDName.';charset=utf8', $this->IdMyAdmin , $this->PwdMyAdmin);
		}
		catch (PDOException $e)
		{
			echo 'Connexion échouée : ' . $e->getMessage();
		}
	}
}

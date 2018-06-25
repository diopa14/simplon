<?php
class ClientDB extends Model //model permet d'ajouter modifier lister supprimer un cpte
{
	public function __construct()
	{
		parent::__construct(); //appeler le constructeur car il hérite du model

	}
	public function add($nom, $prenom, $adresse) //fonction permettant d'ajouter des client dans la db
	{
		$sql = "INSERT INTO client VALUES(Null, '$nom', '$prenom', '$adresse')";

		if ($this->db != null)
		{
			return $this->db->exec($sql);

		} 
		else
		{
			return null;

		}
	}
	public function listeClient()
	{
		$sql = "SELECT * FROM client";
		if($this->db != null)
		{
			return $this->db->query($sql)->fetchAll();

		}else{
			return null;
		}
	}

}
?>
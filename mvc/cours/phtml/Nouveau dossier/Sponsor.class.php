<?php


class Sponsor
{
private $id;
private $nom;
private $description;
private $adresse;
private $participation;

private $sponsor;// new UserManager(?) -> $db
private $db;// $db -> obligatoire pour accéder au manager


	public function __construct($db)// <-- constructeur
	{
		$this->db = $db;
	}

	public function getId()
	{
		return $this->id;
	}
	/*public function getId()
	{
		return $this->id;
	}*/
	public funtion getName()
	{
		return $this->name;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function getAdresse()
	{
		return $this->adresse;
	}
	public function getParticipation()
	{
		return $this->participation;
	}


	public function setSponsor(sponsor $sponsor)// Type hinting : obliger le paramètre à être de la classe souhaitée
	{
		$this->id_sponsor = $sponsor->getId();
		$this->sponsor = $sponsor;
	}

	public funtion setName()
	{
		$this->name=$nom;
	}
	public function setDescription()
	{
		$this->description=$description;
	}
	public function setAdresse()
	{
		$this->adresse=$adresse;
	}
	public function setParticipation()
	{
		$this->participation=$participation;
	}

}
?>
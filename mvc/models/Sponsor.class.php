<?php


class Sponsor
{
private $id;
private $nom;
private $description;
private $adresse;
private $participation;

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
	public function getNom()
	{
		return $this->nom;
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

/*
	public function setSponsor(Sponsor $sponsor)// Type hinting : obliger le paramètre à être de la classe souhaitée
	{
		$this->id_sponsor = $sponsor->getId();
		$this->sponsor = $sponsor;
	}*/

	public function setNom($nom)
	{
		$this->nom=$nom;
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
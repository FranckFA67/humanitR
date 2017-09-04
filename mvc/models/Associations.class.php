<?php

class Associations
{
private $id
private $id_sponsors
private $description
private $adresse
private $nom



public function getId()
{
	return $this->id;
	}
	public funtion getSponsors()
	{
		return $this->idSponsors;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function getAdresse()
	{
		return $this->adresse;
	}
	public function getNom()
	{
		return $this->nom;
	}




	public function setidSponsors()
	{
		$this->idSponsors=$idSponsors;
	}
	public function setDestcription()
	{
		$this->description=$description;
	}
	public function setAdresse()
	{
		$this->adresse=$adresse;
	}
	public function setNom()
	{
		$this->nom=$nom;
	}

}
?>
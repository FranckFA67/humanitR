<?php


class Sponsor
{
private $id;
private $nom;
private $description;
private $adresse;
private $participation;


public function getId()
{
		return $this->id;
	}
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
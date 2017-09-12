<?php

class Association
{
private $id;
private $id_sponsors;
private $description;
private $adresse;
private $nom;

private $user;// new UserManager(?) -> $db
private $db;// $db -> obligatoire pour accéder au manager

public function __construct($db)// <-- constructeur
{
	$this->db = $db;
}
	
public function getId()
{
	return $this->id;
}


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
	public function getAssociation()
	{
		//
		$manager = new UserManager($this->db);
		$this->author = $manager->findById($this->id_article);
		return $this->article;
	}
	
	public function setUser(Article $user)// Type hinting : obliger le paramètre à être de la classe souhaitée
	{
		$this->id_user = $article->getId();
		$this->article = $article;
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
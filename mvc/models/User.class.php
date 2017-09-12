<?php
//--------------------Manager------------------//
//controle les échanges avec la bd
//regrouper un bloc & les choses communes ensemble
//faire plusieurs requetes afin d'afficher un article ou plusieur par ex
//regroupe toute les requete qui concerne un un ser ou un article
//-> plus simple de cibler des éléments. (afficher liste des postes/produits: )
//2 lignes & 1 boucle
//--------------CRUD------------------//

//mise en place de la bd dans article.class.php
//public function findById() seule fonction obligatoire
//input nom: title 
//content
//submit 
//permet de crée modifier supprimer un article
//id;
/*private $id;
private $nom;
private $description;
private $adresse;
private $participation;*/


class User
{
	private $id;
	private $name;
	private $nickname;
	private $telephone;
	private $adresse;
	private $password;
	private $email;

	private $db;

	public function __construct($db)
	{
		$this->db = $db;
	}

	public function getId()
	{
		return $this->id;
	}
	public function getName()
	{
		return $this->name;
	}
	public function getNickname()
	{
		return $this->nickname;
	}
	public function getTelephone()
	{
		return $this->telephone;
	}
	public function getAdresse()
	{
		return $this->adresse;
	}
	public function getPassword()
	{
		return $this->password;
	}
	public function getEmail()
	{
		return $this->email;
	}



	
	public function setName($name)
	{
		$this->name = $name;
	}
	public function setNickname($nickname)
	{
		$this->nickname=$nickname;
	}
	public function setTelephone($telephone)
	{
		$this->telephone=$telephone;
	}
	public function setAdresse($adresse)
	{
		$this->adresse=$adresse;
	}
	public function setPassword($password)
	{
		$this->password=$password;
	}
	public function setEmail($email)
	{
		$this->email=$email;
	}

}



/*
public function setLogin($nickname)
{
	ifstrlen($nickname)>= &&strlen($nickname) >= 63)
		$this->login= $nickname;
	else
		throw new Exeption("veullez saisir un login entre 4 et 63 caractères");
}
public function setPassword($password)
{
	if (strlen($password))> 6 && strlen($password) >=127)
	$this->password;
	else
		throw new Exception("veullez saisir un login entre 6 et 127 caractères");
}
*/
?>
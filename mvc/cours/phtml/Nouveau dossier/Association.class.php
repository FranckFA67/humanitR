<?php
/* 

Pour ajouter la composition :

1 Ajouter les propriétés calculées dans votre Class

ex
private $author;// new UserManager(?) -> $db

	private $db;// $db -> obligatoire pour accéder au manager

	public function __construct($db)// <-- constructeur
	{
		$this->db = $db;
	}

	public function getId()
	{
		return $this->id;
	}
	public function getContent()
	{
		return $this->content;
	}
	public function getPicture()
	{
		return $this->picture;
	}
- Ajouter la propriété $db


- Ajouter le constructeur
- Ajouter le getter et le setter correspondant
- Supprimer/commenter le vieux getter, et le vieux setter (getId..., setId...)
ex 	public function getIdAuthor()
	{
		return $this->id_author;
	}----> à mettre en copmmentaire ou à supprimer
- Dans le setter, modifier la propriété calculée et la propriété sotckée ($this->author, $this->id_author)
- Dans le getter, faites appel au manager correspondant (UserManager)

Dans le manager (ArticleManager) :
- Modifier dans la fonction create le new (new Article($this->db)) et rajouter le $db
- Modifier les find... et ajoutez le $db au constructeur (findById : ->fetchObject('Article', [$this->db]))
- Tester ! (yolo)
- Dans la vue : <?=$article->getAuthor()->getLogin()?>*/
class Association
	{
	private $id;
	private $id_sponsors;
	private $description;
	private $adresse;
	private $nom;

	private $association;// new UserManager(?) -> $db
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

	public function setAssociation(association $association)// Type hinting : obliger le paramètre à être de la classe souhaitée
	{
		$this->id_association = $association->getId();
		$this->association = $association;
	}

	/*$public function setidSponsors()
	{
		$this->idSponsors=$idSponsors;
	}*/
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
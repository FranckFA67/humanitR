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
class article
{
	private $id;
	private $id_user;
	private $title;
	private $content;
	private $date;
	private $images;

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
	/*public funtion getIdUser()
	{
		return $this->id_user;
	}*/
	public function getTitle()
	{
		return $this->title;
	}
	public function getContent()
	{
		return $this->content;
	}
	public function getDate()
	{
		return $this->date;
	}
	public function getImages()
	{
		return $this->images;
	}
	public function getUser()
	{
		//
		$manager = new UserManager($this->db);
		$this->author = $manager->findById($this->id_user);
		return $this->user;
	}
	public function setUser(User $user)// Type hinting : obliger le paramètre à être de la classe souhaitée
	{
		$this->id_user = $user->getId();
		$this->user = $user;
	}


	/*public function setIdUser()
	{
		$this->id_user=$id_user;
	}*/
	public function setTitle()
	{
		$this->title=$title;
	}
	public function setContent()
	{
		$this->content=$content;
	}
	public function setDate()
	{
		$this->date=$date;
	}
	public function setImages()
	{
		$this->images=$images;
	}
}
?>
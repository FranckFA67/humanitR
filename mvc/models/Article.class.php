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
class Article
{
	private $id;
	private $id_user;
	private $title;
	private $content;
	private $date;
	private $images;

	private $comments;

	private $user;// new UserManager(?) -> $db
	private $db;// $db -> obligatoire pour accéder au manager

	public function __construct($db)// <-- constructeur
	{
		$this->db = $db;
	}

	public function getComments()
	{
		$manager = new CommentManager($this->db);
		$this->comments = $manager->findByArticle($this);
		return $this->comments;
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
		$this->user = $manager->findById($this->id_user);
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
	public function setTitle($title)
	{
		$this->title=$title;
	}
	public function setContent($content)
	{
		$this->content=$content;
	}
	public function setDate($date)
	{
		$this->date=$date;
	}
	public function setImages($images)
	{
		$this->images=$images;
	}
}
?>
<?php


class Comment

{
	private $id;
	private $id_article;
	private $id_user;
	private $content;
	private $date;
	private $state;

	private $article;// new UserManager(?) -> $db
	private $user;
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
	/*
	public funtion getIdArticle()
	{
		return $this->id_article;
	}*//*
	public function getIdUser()
	{
		return $this->id_user;
	}*/
	public function getArticle()
	{
		$manager = new articleManager($this->db);
		$this->author = $manager->findById($this->id_article);
		//return $this->article;
	}
	public function getUser()
	{
		$manager = new UserManager($this->db);
		$this->author = $manager->findById($this->id_user);
		return $this->user;
	}
	public function getContent()
	{
		return $this->content;
	}
	public function getDate()
	{
		return $this->date;
	}/*
	public function setComment(comment $comment)// Type hinting : obliger le paramètre à être de la classe souhaitée
	{
		$this->id_comment = $comment->getId();
		$this->comment = $comment;
	}*/
	/*public funtion setIdArticle()
	{
		$this->id_article=$id_article;
	}*/
	/*
	public function setIdUser()
	{
		$this->id_user=$id_user;
	}*/
	public function setArticle(Article $article)
	{
		$this->id_article = $article->getId();
		$this->article = $article;
		// manque des trucs
		//$this->article=$article;
	}
	public function setUser(User $user)
	{
		$this->id_user = $user->getId();
		$this->user = $user;
		// manque des trucs
		//$this->article=$article;
	}
	/*public funtion setArticle()
	{
		// manque des trucs
		$this->user=$content;
	}*/
	public function setContent($content)
	{
		$this->content=$content;
	}
	public function setDate($date)
	{
		$this->date=$date;
	}

}
?>
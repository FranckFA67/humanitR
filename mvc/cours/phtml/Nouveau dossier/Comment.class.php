<?php


class Comment

{
	private $id;
	private $id_article;
	private $id_user;
	private $content;
	private $date;
	private $state;

	private $comment;// new UserManager(?) -> $db
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
	public funtion getIdArticle()
	{
		return $this->id_article;
	}
	public function getIdUser()
	{
		return $this->id_user;
	}
	public function getContent()
	{
		return $this->content;
	}
	public function getDate()
	{
		return $this->date;
	}
	public function setComment(comment $comment)// Type hinting : obliger le paramètre à être de la classe souhaitée
	{
		$this->id_comment = $comment->getId();
		$this->comment = $comment;
	}

	/*public funtion setIdArticle()
	{
		$this->id_article=$id_article;
	}*/
	public function setIdUser()
	{
		$this->id_user=$id_user;
	}

	public funtion setContent()
	{
		$this->content=$content;
	}
	public function setDate()
	{
		$this->date=$date;
	}

}
?>
<?php


class Comments

{
	private $id
	private $id_article
	private $id_user
	private $content
	private $date
	private $state




	public function getId()
	{
		return $this->id;
	}
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


	public funtion setIdArticle()
	{
		$this->id_article=$id_article;
	}
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
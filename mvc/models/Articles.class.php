<?php

class articles
{
	private $id
	private $id_user
	private $title
	private $content
	private $date
	private $images


	public function getId()
	{
		return $this->id;
	}
	public funtion getIdUser()
	{
		return $this->id_user;
	}
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



	public funtion setIdUser()
	{
		$this->id_user=$id_user;
	}
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
<?php
class Article
{
	private $id;
	private $title;
	private $content;
	private $picture;
	private $id_author;
	private $date;

	private $db;
	private $author;

	public function __construct($db)
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
	public function getIdAuthor()
	{
		return $this->id_author;
	}
	public function getDate()
	{
		return $this->date;
	}

	public function getAuthor()
	{
		return $this->author;
	}

	public function setContent($content)
	{
		$this->content = $content;
	}
	public function setPicture($picture)
	{
		$this->picture = $picture;
	}
	public function setIdAuthor($id_author)
	{
		$this->id_author = $id_author;
	}

	public function setAuthor($author)
	{
		$this->author = $author;
	}
}
?>
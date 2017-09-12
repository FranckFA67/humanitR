<?php
class ArticleManager
{
	private $db;

	public function __construct($db)
	{
		$this->db = $db;
	}

	public function findById($id)
	{
		$sql = "SELECT * FROM articles WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$id]);
		$article = $query->fetchObject('Article');
		return $article;
	}

	public function create($title, $content, $picture, $author)
	{
		$article = new Article();
		$article->setTitle($title);
		$article->setContent($content);
		$article->setPicture($picture);
		$article->setAuthor($author);

		$sql = "INSERT INTO articles (title, content, picture, author) VALUES(?, ?, ?, ?)";
		$query = $this->db->prepare($sql);
		$query->execute([$article->getTitle(),
						$article->getContent(),
						$article->getPicture(),
						$article->getAuthor()]);
		$id = $this->db->lastInsertId();
		return $this->findById($id);
	}

	public function remove(Article $article)
	{
		$sql = "DELETE FROM articles WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$id]);
	}

	public function update(Article $article)
	{
		$sql = "UPDATE articles SET title=?, content=?, picture=?, author=? WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$article->getTitle(),
						$article->getContent(),
						$article->getPicture(),
						$article->getAuthor(),
						$article->getId()]);
		return $this->findById($article->getId());
	}
}
?>
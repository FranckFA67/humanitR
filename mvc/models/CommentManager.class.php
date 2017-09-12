<?php
class CommentManager
{
	private $db;

	public function __construct($db)
	{
		$this->db = $db;
	}

	public function findByArticle(Article $article)
	{
		$sql = "SELECT * FROM comments WHERE id_article=?";
		$query = $this->db->prepare($sql);
		$query->execute([$article->getId()]);
		$comments = $query->fetchAll(PDO::FETCH_CLASS, 'Comment', [$this->db]);// <-----
		return $comments;
	}

	public function findById($id)
	{
		$sql = "SELECT * FROM comments WHERE id=?"; 
		$query = $this->db->prepare($sql);
		$query->execute([$id]);
		$comment = $query->fetchObject('Comment', [$this->db]);
		return $comment;
	}

	public function create()
	{

		$comment = new Comment($this->db);
		$comment->setIdArticle($id_article);
		$comment->setIdUser($id_user);
		$comment->setContent($content);
		$comment->setState($state);

		$sql = "INSERT INTO comments (id_article, id_user, content, state) VALUES(?, ?, ?, ?)"; 
		$query = $this->db->prepare($sql);
		$query->execute([
						$comment->getIdArticle(),
						$comment->getIdUser(),
						$comment->getContent(),
						$comment->getState()]);
		$id = $this->db->lastInsertId();
		return $this->findById($id);
	}

	public function remove(Comment $comment) 
	{
		$sql = "DELETE FROM comments WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$comment->getId()]);
	}

	public function update(Comment $comment)
	{
		$sql = "UPDATE comments SET title=?, content=?, state=? WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([
						$comment->getTitle(),
						$comment->getContent(),
						$comment->getState(),
						$comment->getId()]);
		return $this->findById($comment->getId());
	}
}
?>
<?php
//--------------------Manager------------------//
//controle les échanges avec la bd
//regrouper un bloc & les choses communes ensemble
//faire plusieurs requetes afin d'afficher un article ou plusieur par ex
//regroupe toute les requete qui concerne un un ser ou un article
//-> plus simple de cibler des éléments. (afficher liste des postes/produits: )
//2 lignes & 1 boucle
//--------------CRUD------------------//

//mise en place de la bd dans article.class.php
//public function findById() seule fonction obligatoire
//input nom: title 
//content
//submit 
//permet de crée modifier supprimer un article
//id;

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
		$article = $query->fetchObject('Article',[$this->db]);
		return $article;
	}
	public function findAll()
	{
		$sql = "SELECT * FROM articles";
		$query = $this->db->prepare($sql);
		$query->execute();
		$articles = $query->fetchAll(PDO::FETCH_CLASS, 'Article', [$this->db]);// <-----
		return $articles;
	}

	public function create( $id_user, $title, $content, $images)
	{
		$article = new Article($this->db);
		$article->setIdUser($id_user);
		$article->setTitle($title);
		$article->setContent($content);
		$article->setImages($images);

		$sql = "INSERT INTO articles (id_user, title, content, images) VALUES(?, ?, ?, ?)";
		$query = $this->db->prepare($sql);
		$query->execute([
						$article->getIdUser(),
						$article->getTitle(),
						$article->getContent(),
						$article->getImages()]);
		$id = $this->db->lastInsertId();
		return $this->findById($id);
	}

	public function remove(Article $article)
	{
		$sql = "DELETE FROM articles WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$article->getId()]);
	}

	public function update(Article $article)
	{
		$sql = "UPDATE articles SET id_User=?, title=?, content=?, images=? WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([
						$article->getIdser(),
						$article->getTitle(),
						$article->getContent(),
						$article->getImages(),
						$article->getId()]);
		return $this->findById($article->getId());
	}
}
?>
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
//input nom:
//submit 
//permet de crée modifier supprimer un article
//id;
/*private $id;
private $nom;
private $description;
private $adresse;
private $participation;*/
class SponsorManager
{
	private $db;

	public function __construct($db)
	{
		$this->db = $db;
	}
	// R : read
	public function findById($id)
	{
		$sql = "SELECT * FROM sponsors WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$id]);
		$sponsor = $query->fetchObject('Sponsor',[$this->db]);
		return $sponsor;
	}
	// C : create
	public function create($nom, $description, $adresse, $participation)
	{
		$sponsor = new Sponsor($this->db);
		$sponsor->setNom($nom);
		$sponsor->setDescription($description);
		$sponsor->setAdresse($adresse);
		$sponsor->setParticipation($participation);

		$sql = "INSERT INTO sponsors (nom, description, adresse, participation) VALUES(?, ?, ?, ?)";
		$query = $this->db->prepare($sql);
		$query->execute([$sponsor->getNom(),
						$sponsor->getDescription(),
						$sponsor->getAdresse(),
						$sponsor->getParticipation()]);
		$id = $this->db->lastInsertId();
		return $this->findById($id);
	}
	// D : delete
	public function remove(Sponsor $sponsor)
	{
		$sql = "DELETE FROM sponsors WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$sponsor->getId()]);
	}
	// U : update
	public function update(Sponsor $sponsor)
	{
		$sql = "UPDATE sponsors SET nom=?, description=?, adresse=?, participation=? WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$sponsor->getNom(),
						$sponsor->getDescription(),
						$sponsor->adresse(),
						$sponsor->getParticipation(),
						$sponsor->getId()]);
		return $this->findById($sponsor->getId());
	}
}
?>
<?php
class AssociationManager
{
/*	private $id;
private $id_sponsors;
private $description;
private $adresse;
private $nom;
*/
	private $user;
	private $db;

	public function __construct($db)
	{
		$this->db = $db;
	}

	public function findById($id)
	{
		$sql = "SELECT * FROM associations WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$id]);
		$association = $query->fetchObject('Association',[$this->db]);
		return $association;
	}
	public function findAll()
	{
		$sql = "SELECT * FROM associations";
		$query = $this->db->prepare($sql);
		$query->execute();
		$associations = $query->fetchAll(PDO::FETCH_CLASS, 'Association', [$this->db]);// <-----
		return $associations;
	}

	public function create()
	{
		$association = new Association($this->db);
		$association->setIdSponsor($id_sponsor);
		$association->setDescription($description);
		$association->setAdresse($adresse);
		$association->setNom($date);
	

		$sql = "INSERT INTO associations (id_sponsor, description, adresse, nom) VALUES(?, ?, ?, ?)";
		$query = $this->db->prepare($sql);
		$query->execute([
						$association->getIdSponsor(),
						$association->getDescription(),
						$association->getAdresse(),
						$association->getNom()]);

		$id = $this->db->lastInsertId();
		return $this->findById($id);
	}

	public function remove(Association $association)
	{
		$sql = "DELETE FROM associations WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$association->getId()]);
	}

	public function update(Association $association)
	{
		$sql = "UPDATE associations SET id_sponsor=?, description=?, adresse=?, nom=? WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([
						$association->getIdSponsor(),
						$association->getDescription(),
						$association->getAdresse(),
						$association->getNom(),
						$association->getId()]);
		return $this->findById($association->getId());
	}
}
?>
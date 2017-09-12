
<?php
class UserManager
{
	private $db;// $pdo;

	public function __construct($db)
	{
		$this->db = $db;
	}

	public function findAll()
	{
		$sql = "SELECT * FROM users";
		$query = $this->db->prepare($sql);
		$query->execute([$id]);
		$users = $query->fetchAll(PDO::FETCH_CLASS, 'User');
		return $users;
	}
	//read
	public function findById($id)// OBLIGATOIRE
	{
		$sql = "SELECT * FROM users WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$id]);
		$user = $query->fetchObject('User');
		return $users;
	}

	public function findByNickname($nickname)
	{
		$sql = "SELECT * FROM users WHERE nickname=?";
		$query = $this->db->prepare($sql);
		$query->execute([$nickname]);
		$user = $query->fetchObject('User');
		return $user;
	}
	//create
	public function create($name, $nickname, $telephone, $adresse, $password, $email)// CA DEPEND DU PROJET
	{
		/* Début de la faille spatio-temporelle */
		$user = new User();
		/*try
		{*/
			$user->setName($name);
			$user->setNickname($nickname);
			$user->setTelephone($telephone);
			$user->setAdresse($adresse);
			$user->setPassword($password);
			$user->setEmail($email);
		/*}
		catch (Exception $e)
		{
			$error = $e->getMessage();
		}*/
		/* Fin de la faille */
		$sql = "INSERT INTO users (name, nickname, telephone, adresse, password, email) VALUES(?, ?, ?, ?, ?, ?)";
		$query = $this->db->prepare($sql);
		$query->execute([
			$user->getName(),
			$user->getNickname(),
			$user->getTelephone(),
			$user->getAdresse(),
			$user->getPassword(),
			$user->getEmail()
		]);
		$id = $this->db->lastInsertId();
		return $this->findById($id);
	}
/*
	public function remove(User $user)// EN GENERAL, CA SUPPRIME PAS
	{
		$sql = "DELETE FROM users WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$user->getId()]);
	}

	public function update(User $user)
	{
		$sql = "UPDATE users SET login=?, password=?, email=? WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$user->getLogin(), $user->getPassword(), $user->getEmail(), $user->getId()]);
		return $this->findById($user->getId());
	}*/
}
?>
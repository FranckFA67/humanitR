<?php
class User
{
	private $id;
	private $login;
	private $password;
	private $email;

	public function getId()
	{
		return $this->id;
	}
	public function getLogin()
	{
		return $this->login;
	}
	public function getPassword()
	{
		return $this->password;
	}
	public function getEmail()
	{
		return $this->email;
	}

	public function setLogin($login)
	{
		if (strlen($login) >= 4 && strlen($login) <= 63)
			$this->login = $login;
		else
			throw new Exception("Login invalide (taille doit être comprise entre 4 et 63 caractères)");
	}
	public function setPassword($password)
	{
		if (strlen($password) >= 6 && strlen($password) <= 127)
			$this->password = $password;
		else
			throw new Exception("Password invalide (taille doit être comprise entre 6 et 127 caractères)");
	}
	public function setEmail($email)
	{
		// http://php.net/manual/fr/function.filter-var.php
		$this->email = $email;
	}
}
?>
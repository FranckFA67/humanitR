<?php


class Users
{
	private $id;
	private $password;
	private $name;
	private $nickname;
	private $telephone;
	private $adresse;
	private $password;
	private $email;


	public function getId()
	{
		return $this->id;
	}
	public funtion getName()
	{
		return $this->name;
	}
	public function getNickname()
	{
		return $this->nickname;
	}
	public function getTelephone()
	{
		return $this->telephone;
	}
	public function getAdresse()
	{
		return $this->adresse;
	}
	public function getPassword()
	{
		return $this->password;
	}
	public function getEmail()
	{
		return $this->email;
	}




	public funtion setName($name)
	{
		$this->name = $name;
	}
	public function setNickname()
	{
		$this->nickname=$nickname;
	}
	public function setTelephone()
	{
		$this->telephone=$telephone;
	}
	public function setAdresse()
	{
		$this->adresse=$adresse;
	}
	public function setPassword()
	{
		$this->password=$password;
	}
	public function setEmail()
	{
		$this->email=$email;
	}

}



//------------------crud--------------------------------

public function setLogin($nickname)
{
	ifstrlen($nickname)>= &&strlen($nickname) >= 63)
		$this->login= $nickname;
	else
		throw new Exeption("veullez saisir un login entre 4 et 63 caractères");
}
public function setPassword($password)
{
	if (strlen($password))> 6 && strlen($password) >=127)
	$this->password;
	else
		throw new Exception("veullez saisir un login entre 6 et 127 caractères");
}
public function setEmail($email){
	$this->email;
}

?>
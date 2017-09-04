<?php


class Users
{
	private $id;
	private $password;
	private $name;
	private $nickname;
	private $telephone;
	private $adresse;

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
}
?>
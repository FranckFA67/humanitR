<?php
var_dump($_POST);
if (isset($_GET['page']) && $page =='logout')
{
	$_SESSION = [];
	session_destroy();
	header("location: index.php");
	exit;
}
if (isset($_POST['action']))
{
	$action = $_POST['action'];
	if ($action =='create')
	{
		if (isset($_POST['name'], $_POST['nickname'], $_POST['telephone'], $_POST['adresse'], $_POST['password'], $_POST['email']))
		{
			$manager = new UserManager($db);
			$user = $manager->create($_POST['name'], $_POST['nickname'],$_POST['telephone'], $_POST['adresse'], $_POST['password'], $_POST['email']);
			header('Location: index.php?page=login');
			exit;
		}
	}
	else if ($action =='login')
	{
		if (isset($_POST['nickname'], $_POST['password']))
		{
			$manager = new UserManager($db);
			$user = $manager->findByNickname($_POST['nickname']);
			if ($user)
			{
				if ($user->getPassword()==$_POST['password'])
				{
					// passDb==passpass $_POST
					$_SESSION["id"]=$user->getId();
					header('Location: index.php');
					exit;
				}
				else
				{
					header('Location: index.php?page=login');
					exit;
				}
			}
			else
				$error = 'Nickname incorrect';
		}
	}
	/*
	else if ($action == 'update')
		{
		if (isset($_POST['name'], $_POST['nickname'], $_POST['telephone'], $_POST['adresse'], $_POST['password'], $_POST['email']))
		{
			$manager = new UserManager($db);
			$article = $manager->findById($_POST['id']);
			if ($user)
			{
				$user->setTitle($_POST['name']);
				$user->setContent($_POST['nickname']);
				$user->setPicture($_POST['telephone']);

				header('Location: index.php?page=user&id='.$user->getId());
				exit;
			}
			else
				$error = "L'user n'existe pas.";
		}
	}
	else if ($action == 'delete')
	{
		if (isset($_POST['id']))
		{
			$manager = new userManager($db);
			$user = $manager->findById($_POST['id']);
			if ($user)
			{
				$manager->remove($user);
				header('Location: index.php?page=users');
				exit;
			}
			else
				$error = "L'user n'existe pas.";
		}
	}*/
}
?>
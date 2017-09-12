<?php
// images
// traitement user
var_dump($_POST);
//traitement_article
if (isset($_POST['action']))
{
	$action = $_POST['action'];
	if ($action == 'create')
	{
		if (isset($_POST['id_user'],$_POST['title'], $_POST['content'], $_POST['images']))
		{
			$manager = new ArticleManager($db);
			$article = $manager->create($_POST['id_user'], $_POST['title'], $_POST['content'], $_POST['images']);
			header('Location: index.php?page=article&id='.$article->getId());
			exit;
		}
	}
//
//

	/*
	else if ($action == 'update')
	{
		if (isset($_POST['id'], $_POST['title'], $_POST['content'], $_POST['date']))
		{
			$manager = new ArticleManager($db);
			$article = $manager->findById($_POST['id']);
			if ($article)
			{
				$article->setTitle($_POST['title']);
				$article->setContent($_POST['content']);
				$article->setDate($_POST['date']);
				$article->setImage($_POST['image']);
				header('Location: index.php?page=article&id='.$article->getId());
				exit;
			}
			else
				$error = "L'article n'existe pas.";
		}
	}
	else if ($action == 'delete')
	{
		if (isset($_POST['id']))
		{
			$manager = new ArticleManager($db);
			$article = $manager->findById($_POST['id']);
			if ($article)
			{
				$manager->remove($article);
				header('Location: index.php?page=articles');
				exit;
			}
			else
				$error = "L'article n'existe pas.";
		}
	}*/
}
?>
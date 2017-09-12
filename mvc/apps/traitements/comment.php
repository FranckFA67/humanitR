<?php
// title
//comment
var_dump($_POST);

if (isset($_POST['action']))
{
	$action = $_POST['action'];
	if ($action == 'create')
	{
		if (isset($_POST['id_article'], $_SESSION['id'], $_POST['content']))
		{
			$manager = new ArticleManager($db);
			$article = $manager->findById($_POST['id_article']);
			if ($article)
			{
				$manager = new UserManager($db);
				$user = $manager->findById($_SESSION['id']);
				if ($user)
				{
					$manager = new CommentManager($db);
					$comment = $manager->create($article, $user, $_POST['content']);
					header("location: index.php?page=article&id=".$comment->getArticle()->getId());
					exit;
				}
			}
		}
	}
}
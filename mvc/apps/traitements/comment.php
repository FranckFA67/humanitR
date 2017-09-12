<?php
// title
//comment
if (isset($_POST['action']))
{
	$action == $_POST['action'];
	if ($action == 'create')
	{
		if (isset($_POST['id_article'], $_POST['id_user'], $_POST['content'], $_POST['date'], $_POST['state']))
		{
			$manager = new CommentManager($db);
			$manager = $manager->create($_POST['id_article'], $_POST['id_user'], $_POST['content'], ['date'], ['state']);
			header("location: index.php?page=comment&id=id".$comment->getId());
			exit;
		}
	}
}
<?php
// id_article -> id_sponsor
if (isset($_POST['action']))
{
	$action == $_POST['action'];
	if ($action == 'create')
	{
		if (isset($_POST['id_sponsor'], $_POST['description'], $_POST['adresse'], $_POST['nom']))
		{
			$manager = new AssociationManager($db);
			$manager = $manager->create($_POST['id_sponsor'], $_POST['description'], $_POST['adresse'], $_POST['nom']);
			header("location: index.php?page=association&id=id".$association->getId());
			exit;
		}
	}
}
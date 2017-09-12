<?php
// nom ?
if (isset($_POST['action']))
{
	$action == $_POST['action'];
	if ($action == 'create')
	{
		if (isset($_POST['nom'], $_POST['description'], $_POST['adresse'], $_POST['participation']))
		{
			$manager = new SponsorManager($db);
			$manager = $manager->create($_POST['nom'], $_POST['description'], ['adresse'], ['participation']);
			header("location: index.php?page=sponsor&id=id".$sponsor->getId());
			exit;
		}
	}
}
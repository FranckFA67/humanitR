
<?php
$manager = new AssociationManager($db);
$associations = $manager->findAll();
foreach ($associations as $association) {
	require('views/associations.phtml');
}

?>


<?php
$manager = new SponsorManager($db);
$sponsors = $manager->findAll();
foreach ($sponsors as $sponsor) {
	require('views/sponsors.phtml');
}

?>
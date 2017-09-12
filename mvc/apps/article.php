<?php
if (isset($_GET['id']))
{
	$manager = new ArticleManager($db);
	$article = $manager->findById($_GET['id']);
	require('views/article.phtml');
}
?>
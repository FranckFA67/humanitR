<?php
$manager = new ArticleManager($db);
$articles = $manager->findAll();
foreach ($articles as $article) {
	require('views/articles.phtml');
}

?>
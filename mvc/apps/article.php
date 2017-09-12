<?php
$id = 3;
$manager = new ArticleManager($db);
$article = $manager->findById($id);
require('views/article.phtml');
?>
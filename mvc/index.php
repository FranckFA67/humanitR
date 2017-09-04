<?php

$errors = [];

$db = new PDO('mysql:dbname=blog;host=192.168.1.23', 'blog', 'blog', [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);

$page = 'articles';

if (isset($_GET['page']))
	$page = $_GET['page'];

require('apps/traitements/article.php');

require('apps/skel.php');
?>
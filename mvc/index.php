<?php
session_start();
var_dump($_SESSION);
$errors = [];
function __autoload($classname)
{
	require('models/'.$classname.'.class.php');
	// inclu directement les classe qui ne sont pas encore utilisés et qui n'existe pas encore pour php.
}
$db = new PDO('mysql:dbname=humanitary;host=192.168.1.62', 'humanitary', 'humanitary', [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);

$access = ['home', 'article', 'articles', 'create_article','associations',
	'create_association', 'create_comment', 'create_sponsor', 'sponsors',
	'create_user','inscription', 'login'];
$page = 'home';

if (isset($_GET['page']))
{
	if (in_array($_GET['page'], $access))
		$page = $_GET['page'];
}
$accessTraitement = ["create_article" => "article",
					"create_association" => "association",
					"create_comment" => "comment",
					"article" => "comment",
					"create_sponsor" => "sponsor",
					"inscription" => "user",
					"login" => "user"];
if (isset($accessTraitement[$page]))
{
	require('apps/traitements/'.$accessTraitement[$page].'.php');
}
/*
require('apps/traitements/article.php');
require('apps/traitements/association.php');
require('apps/traitements/comment.php');
require('apps/traitements/sponsor.php');
require('apps/traitements/user.php');*/
require('apps/skel.php');
?>
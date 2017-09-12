<?php
foreach ($article->getComments() AS $comment)
{
	require('views/comment_loop.phtml');
}
?>
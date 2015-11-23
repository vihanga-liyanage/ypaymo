<?php 

include "assets/app/config.php";
include "assets/app/detect.php";

if ($page_name=='') {
	include 'index.html';
	}
elseif ($page_name=='index.html') {
	include 'index.html';
	}
elseif ($page_name=='preview.html') {
	include 'preview.html';
	}
elseif ($page_name=='about.html') {
	include 'about.html';
	}
elseif ($page_name=='delivery.html') {
	include 'delivery.html';
	}
elseif ($page_name=='news.html') {
	include 'news.html';
	}
elseif ($page_name=='contact.html') {
	include 'contact.html';
	}
elseif ($page_name=='contact-post.html') {
	include 'contact.html';
	}
else
	{
		include 'index.html';
	}

?>

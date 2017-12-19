<?php

require_once 'vendor/autoload.php';


use MVC\View\View;

define('DIR_PATH', __DIR__);

$new = new View();

/*$loader = new Twig_Loader_Filesystem('web');
$twig = new Twig_Environment($loader);

$twig->render('index.html.twig', array(

	'gallery' => 'web/gallery.html.twig',
	'about' => 'web/about.html.twig'
	'about' => 'web/about.html.twig'
	'contact' => 'web/contact.html.twig'

));*/
<?php

define('KIRBY_HELPER_DUMP', false);
define('KIRBY_HELPER_GO', false);

require 'kirby/bootstrap.php';

$kirby = new Kirby();

$staticSiteGenerator = new D4L\StaticSiteGenerator($kirby, [], null);
$staticSiteGenerator->setCustomRoutes([
	[
		'path' => '404.html',
		'page' => page('error')
	],
]);
$fileList = $staticSiteGenerator->generate($outputFolder = '__build', $baseUrl = '/', $preserve = []);

echo A::join($fileList, "\n");

// ray(page('error')->render());
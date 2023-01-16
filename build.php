<?php

use Kirby\Cms\App;
use Kirby\Toolkit\A;

define('KIRBY_HELPER_DUMP', false);
define('KIRBY_HELPER_GO', false);

require __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/site/plugins/static-site-generator/class.php';

$kirby = new App();

$staticSiteGenerator = new D4L\StaticSiteGenerator($kirby, [], null);
// $staticSiteGenerator->setCustomRoutes([
// 	[
// 		'path' => '404.html',
// 		'page' => page('error')
// 	],
// ]);
$fileList = $staticSiteGenerator->generate($outputFolder = '__build', $baseUrl = '/', $preserve = []);

shell_exec('mv __build/error/index.html __build/404.html; rm -fr __build/error');

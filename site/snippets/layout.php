<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<?php if(option('debug')): ?><meta name="robots" content="noindex, nofollow"><?php endif ?>

	<title><?= $page->title() . ' • ' . $site->title() ?></title>
	<script type="module">
		document.documentElement.classList.remove('no-js');
		document.documentElement.classList.add('js');
	</script>

	<link rel="icon" href="/favicon.png">
	<link rel="icon" href="/favicon.svg" type="image/svg+xml">
</head>

<body class="antialiased dark:bg-gray-900 dark:text-white">
	<?= $slot ?>
</body>
</html>

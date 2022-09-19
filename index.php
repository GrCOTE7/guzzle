<?php

require_once './vendor/autoload.php';
require_once './tools/helpers.php';
require_once './config/settings.php';

// Re-init Database
// require_once './tools/database/initDB.php'; initDB(1);

$loader = new \Twig\Loader\FilesystemLoader('./views');
$twig   = new \Twig\Environment($loader, [
	'cache' => APP['twigCache'],
	'debug' => APP['twigDebug'],
]);

switch (getUri()) {
	case '/':
		$page = 'home';

		break;
	case '/cal':
		$page = 'calendar';

		break;
	case '/mob':
		$page = 'monthCalendar';

		break;
	case '/compte':
		$page = 'forms';

		break;
	case '/guzzle':
		$page = 'guzzle';

		break;
	case '/t':
		$page = 'test';

		break;
	default:
		$page = 'error';
}

require_once controllers($page);
$template = $twig->load('pages/' . $page . 'View.twig');

echo $template->render(
	[
		'title' => $title ?? null,
		'data'  => $data ?? null,
	]
);
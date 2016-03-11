<?php
return [
	'id' => 'crmapp-console',
	'basePath' => realpath(__DIR__),
	'components' => [
		'db' => require (__DIR__ . '/db.php'),
	],
];
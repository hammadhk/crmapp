<?php
return [
	'id' => 'crmapp',
	'basePath' => realpath(__DIR__ . '/../'),
	'components' => [
		'db' => require (__DIR__ . '/db.php'),
		'request' => [
			'cookieValidationKey' => '$3cR3t',
		],
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
		]
	]
];
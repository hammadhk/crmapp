<?php
return [
	'id' => 'crmapp',
	'basePath' => realpath(__DIR__ . '/../'),
	'components' => [
		'request' => [
			'cookieValidationKey' => '$3cR3t',
		],
	]
];
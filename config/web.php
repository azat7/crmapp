<?php
return [
	'id' 		=> 'crmapp',
	'basepath'  =>  realpath(__DIR__.'/../'),
	'components'=> [
		'request'   => [
			'cookieValidationkey' => 'your secret key here',
		],
	]
];
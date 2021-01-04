<?php
	return [
		'company' => [
			'name' => 'Vandelay Industries',
			'email' => 'info@vandelay-industries.example',
			'url' => 'https://www.vandelay-industries.example',
			'phone' => 'KL5-2390',
			'street' => '129 West 81st Street',
			'zip' => '10024',
			'city' => 'New York'
		],
		'contactForm' => [
			'maxFileSize' => 4,							// in MB
			'maxFileCount' => 2,
			'fileTypes' => [
				'jpg' => 'image/jpeg',
				'jpeg' => 'image/jpeg',
				'png' => 'image/png',
				'gif' => 'image/gif',
				'pdf' => 'application/pdf',
				'bmp' => 'image/bmp',
				'psd' => 'application/octet-stream',
				'psd2' => 'image/psd',
				'psd3' => 'image/vnd.adobe.photoshop',
				'tiff' => 'image/tiff',
				'tif' => 'image/tif'
			]
		],
		// PHPMailer settings
		'mail' =>[
			'debug' => 0,								//0-4
			'useSMTP' => true,							//false: use php mail function
			'smtpAuth' => true,							// true|false
			'host' => '',
			'user' => '',
			'password' => '',
			'secure' => 'ssl',							//false|tls|ssl
			'port' => 465
		],
        'meta' =>[
            //Google TagManager ID
            //'gtm' => 'GTM-xxx',
        ],
    ];
?>
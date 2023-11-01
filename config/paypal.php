<?php
return array(

	/**
	 * Set our Sandbox and Live credentials
	 */

	'client_id' => 'AcMXghx1jAdjWfWMtqUlZ56sDxtsJpy-99YlSl3qmjta7lxDvTmzfvVI5MjIJoAQTreDxmyyL2tRPeap',
	'secret' => 'EOuFyNYJk_UZHR1_anTlWsQ05evFZIffk17_XC9xFcHuFIEKS2RONDuiZnebIXjxYpLs8r8wVKOyqZVS',

	/*
	 * SDK configuration settings
	*/

	'settings' => array(
		'mode'=>'sandbox',
		'http.ConnectionTimeOut' => 30,
		'log.LogEnabled' => true,
		'log.FileName' => storage_path() . '/logs/paypal.log',
		'log.LogLevel' => 'FINE'
	),
);

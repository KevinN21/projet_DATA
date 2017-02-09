<?php

if($_SERVER['REMOTE_ADDR'] == "127.0.0.1"){
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_DATA', 'accueil');
	define('PREFIX_DB', '');

	define('PREFIX_PORTAL', 'musee');
	define('URL_PORTAL', 'http://localhost/'.PREFIX_PORTAL.'/');

	define('FOLD_EMAIL', 'template/email/');
	define('FOLD_TEMPLATE', 'inc/template');

	define('EXT_MU_TPL', '.html');
	define('CUSTOM_KEY_MDP', 'f6dcade5c83aaed162b7ddd44ff5effef76b6f1a');
}
else{
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_DATA', 'database');
	define('PREFIX_DB', 'MUSEE_');

	define('PREFIX_PORTAL', '');
	define('URL_PORTAL', 'http://www.domain.com/'.PREFIX_PORTAL.'/');

	define('FOLD_EMAIL', 'template/mail/');
	define('FOLD_TEMPLATE', 'inc/template');

	define('EXT_MU_TPL', '.html');
	define('CUSTOM_KEY_MDP', ''); //f6dcade5c83aaed162b7ddd44ff5effef76b6f1a
}

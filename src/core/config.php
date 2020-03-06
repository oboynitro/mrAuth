<?php

namespace Oboynitro\MrAuth\Core;

//sets the database driver to use, default is 'mysql'
define('DB_DRIVER', 'mysql');

//sets the database host, default is 'localhost'
define('DB_HOST', 'localhost');

//sets the database username, default is 'root'
define('DB_USER', 'root');

//sets the database password, default is ''
define('DB_PASSWORD', '');

//sets the database name, defaults is 'users'
define('DB_NAME', 'mr_auth');

//path to auth forms and index file
define('REGISTRATION_FORM', __DIR__.'/register.php');
define('LOGIN_FORM', __DIR__.'/login.php');
define('INDEX_FILE', __DIR__.'/index.php');
<?php
require dirname(__DIR__) . '/config/config.php';
require CORE . '/funcs.php';

require CORE . '/classes/Db.php';
$dbConfig = require CONFIG . '/db.php';
$db = new Db($dbConfig);

require CORE . '/router.php';


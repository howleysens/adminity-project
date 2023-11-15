<?php

$title = 'Adminity';
$adminsList = $db->query("SELECT * FROM admins_list ORDER BY ADMIN_LVL DESC");
$newAdmins = $db->query("SELECT * FROM admins_list ORDER BY id DESC LIMIT 7");

require_once VIEWS . '/index.tpl.php';
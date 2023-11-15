<?php

$id = (int)$_GET['id'] ?? 0;

$admin = current($db->query("SELECT * FROM admins_list WHERE id= ? LIMIT 1", [$id])->fetchAll());
if (!$admin) {
    abort(404);
}
$title = "Adminity — {$admin['nickname']}";

require_once VIEWS . '/admin.tpl.php';

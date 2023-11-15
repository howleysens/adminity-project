<?php
/**
 * @var Db $db ;
 *
 */
$errors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty(trim($_POST['nickname']))) {
            $errors[] = 'Введите имя';
    }
    if(!filter_var($_POST['avatar'], FILTER_VALIDATE_URL)) {
        $errors[] = 'Некорректный формат ссылки';
    }
    if(!is_numeric($_POST['admin_lvl']) || $_POST['admin_lvl'] < 1 || $_POST['admin_lvl'] > 7) {
        $errors[] = 'Введите корректный ЛВЛ';
    }
    if(empty($errors)) {
        $db->query("INSERT INTO `admins_list` (`avatar`, `nickname`, `admin_lvl`, `rebuke`) VALUES (?, ?, ?, ?)", [
            $_POST['avatar'], $_POST['nickname'], $_POST['admin_lvl'], 0
        ]);
        echo 'Успешно!';
    } else {
        echo 'Заполните поля';
    }
}

$title = "Adminity — New Admin";

require_once VIEWS . '/admins-create.tpl.php';




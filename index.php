<?php

header("Content-Type:text/html;charset=UTF8");
//подключаем файл конфигурации
include 'config.php';
include 'functions.php';


$result = get_statti();
$cat = get_cat();

$menu = render('menu',array('cat'=>$cat));
$content = render('content',array('result'=>$result));

echo render('main', array('menu'=>$menu,'content'=>$content));

?>

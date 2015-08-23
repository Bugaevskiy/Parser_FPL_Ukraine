<?php
//Подключили библиотеку simple_html_dom_parser.php
require_once "inc/simple_html_dom.php";
//Подключили автолоадер composer`a
require './vendor/autoload.php';
//Подключили наши функции
require_once "inc/functions.inc.php";
//Подключили скрипт парсера
require_once "inc/parser.inc.php";

//Создали объект для шаблонизатора
$smarty = new Smarty;
//Передаем параметры(результаты работы парсера)
$smarty->assign("teams",$teams);
$smarty->assign("links_for_teams_preview",$links_for_teams_preview);
$smarty->assign("last_tour_results",$last_tour_results);
//Проверяем существует ли шаблон
if( !$smarty->templateExists('data.tpl')){
    exit('Такого шаблона не существует');
}else{
    $smarty->display("data.tpl");
}
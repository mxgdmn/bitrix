<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;
$asset = Asset::getInstance();

$asset->addJs(DEFAULT_TEMPLATE_PATH . '/js/bootstrap.bundle.js');
?>

<!doctype html>
<html lang="en">
<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php $APPLICATION->ShowHead() ?>
    <title><?php $APPLICATION->ShowTitle()?></title>

</head>
<body>

<?php $APPLICATION->ShowPanel()?>

<header class="site-header sticky-top py-1">
    <?php $APPLICATION->IncludeComponent("bitrix:menu", "bootstrap_v5", Array(
        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
            "COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
            "COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
            "DELAY" => "N",	// Откладывать выполнение шаблона меню
            "MAX_LEVEL" => "1",	// Уровень вложенности меню
            "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
            "MENU_CACHE_TYPE" => "N",	// Тип кеширования
            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
            "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
            "COMPONENT_TEMPLATE" => "bootstrap_v4",
            "MENU_THEME" => "site",	// Тема меню
        ),
        false
    ); ?>
</header>

<main>

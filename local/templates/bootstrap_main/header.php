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

<div id="header"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.jpg" id="header_logo" height="105" alt="" width="508" border="0"/>
    <div id="header_text"><?$APPLICATION->IncludeFile(
            $APPLICATION->GetTemplatePath("include_areas/company_name.php"),
            Array(),
            Array("MODE"=>"html")
        );?> </div>

    <a href="/" title="Главная" id="company_logo"></a>

    <div id="header_menu"><?$APPLICATION->IncludeFile(
            $APPLICATION->GetTemplatePath("include_areas/header_icons.php"),
            Array(),
            Array("MODE"=>"php")
        );?> </div>

</div>

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

<div id="zebra"></div>

<table id="content">
    <tbody>
    <tr>
        <td class="left-column">
            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                ".default",
                array(
                    "ROOT_MENU_TYPE" => "left",
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "left",
                    "USE_EXT" => "Y",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(
                        0 => "SECTION_ID",
                        1 => "page",
                    ),
                )
            ); ?>

            <!-- SOCIALNETWORK -->

            <div class="content-block">
                <div class="content-block-head">Поиск по сайту</div>

                <div class="content-block-body"><? $APPLICATION->IncludeComponent(
                        "bitrix:search.form",
                        ".default",
                        array(
                            "PAGE" => "/search/"
                        )
                    ); ?> </div>
            </div>

            <div class="content-block">
                <div class="content-block-head">Авторизация</div>

                <div class="content-block-body"><? $APPLICATION->IncludeComponent(
                        "bitrix:system.auth.form",
                        ".default",
                        array(
                            "REGISTER_URL" => "/auth/",
                            "PROFILE_URL" => "/personal/profile/"
                        )
                    ); ?></div>
            </div>

            <!--SUBSCRIBE-->

            <!--BANNER_LEFT-->

            </div>
        </td>
        <td class="main-column">
            <div id="navigation"><? $APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    ".default",
                    array(
                        "START_FROM" => "0",
                        "PATH" => "",
                        "SITE_ID" => ""
                    )
                ); ?> </div>

            <h1 id="pagetitle"><? $APPLICATION->ShowTitle(false) ?></h1>



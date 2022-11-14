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
    <title><?php $APPLICATION->ShowTitle()?></title>
    <?php $APPLICATION->ShowHead() ?>

</head>
<body>

<?php $APPLICATION->ShowPanel()?>

<header class="site-header sticky-top py-1">
    <?php $APPLICATION->IncludeComponent(
        "bitrix:menu",
        "bootstrap_v5",
        array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "COMPOSITE_FRAME_MODE" => "A",
            "COMPOSITE_FRAME_TYPE" => "AUTO",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(
            ),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "top",
            "USE_EXT" => "N",
            "COMPONENT_TEMPLATE" => "bootstrap_v4",
            "MENU_THEME" => "site"
        ),
        false
    ); ?>
</header>

<main>

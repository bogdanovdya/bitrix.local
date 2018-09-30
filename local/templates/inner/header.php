<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <?php $APPLICATION->ShowHead(); ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <?php
    Asset::getInstance()->addCss('/local/templates/.default/template_style.css');

    Asset::getInstance()->addJs('/local/templates/.default/js/jquery-1.8.2.min.js');
    Asset::getInstance()->addJs('/local/templates/.default/js/slides.min.jquery.js');
    Asset::getInstance()->addJs('/local/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js');
    Asset::getInstance()->addJs('/local/templates/.default/js/functions.js');
    ?>
    <!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
<?php $APPLICATION->ShowPanel(); ?>
<div class="wrap">
    <div class="hd_header_area">
        <?php include_once($_SERVER['DOCUMENT_ROOT']."/local/templates/.default/include/header.php");?>
    </div>

    <!--- // end header area --->
    <?$APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "nav_chain",
        Array(
            "COMPONENT_TEMPLATE" => ".default",
            "PATH" => "",
            "SITE_ID" => "s1",
            "START_FROM" => "0"
        )
    );?>
    <div class="main_container page">
        <div class="mn_container">
            <div class="mn_content">
                <div class="main_post">
                    <div class="main_title">
                        <p class="title"><?php $APPLICATION->ShowTitle(); ?></p>
                    </div>
                    <!-- workarea -->

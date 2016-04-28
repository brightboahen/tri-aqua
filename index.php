<?php
/**
 * Created by PhpStorm.
 * User: Bright
 * Date: 28/04/2016
 * Time: 12:11
 */
include 'modules/header.php';
include_once 'modules/main.php';
include_once 'modules/pages/homepage.php';
include_once 'modules/sidebar.php';
$mainPage = new homepage();
$sidebar = new sidebar();
$newMain = new main($mainPage,$sidebar);
$newMain->renderMainHtml();
include 'modules/footer.php';
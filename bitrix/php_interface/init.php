<?php
if (file_exists($_SERVER['DOCUMENT_ROOT'].'/bitrix/php_interface/include/functions.php'))
    require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/php_interface/include/functions.php');

if (file_exists($_SERVER['DOCUMENT_ROOT'].'/bitrix/php_interface/include/event_handlers.php'))
    require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/php_interface/include/event_handlers.php');

if (file_exists($_SERVER['DOCUMENT_ROOT'].'/bitrix/php_interface/include/agents.php'))
    require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/php_interface/include/agents.php');

define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/log/" . date("Ymd") . ".log");

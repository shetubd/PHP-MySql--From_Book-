<?php
session_start();
include ($_SERVER["DOCUMENT_ROOT"]."/src/header.php");
include ($_SERVER["DOCUMENT_ROOT"]."/script/function.php");
PreArray($_SESSION);
$_SESSION = array();
PreArray($_SESSION);
session_destroy();
PreArray($_SESSION);

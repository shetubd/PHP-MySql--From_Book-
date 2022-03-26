<?php
include ($_SERVER["DOCUMENT_ROOT"]."/src/header.php");
include ($_SERVER["DOCUMENT_ROOT"]."/script/function.php");
include ($_SERVER["DOCUMENT_ROOT"]."/script/class/database.php");


//echo  $_GET['delete'] ;

if (isset($_GET['delete'])){
    $data =$_GET['delete'];
    $a = new deleteUser($data);
    $a->deleteUser();
    PreArray($a);
}
?>



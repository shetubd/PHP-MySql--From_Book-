<?php
// first page
session_start();
include ($_SERVER["DOCUMENT_ROOT"]."/src/header.php");
include ($_SERVER["DOCUMENT_ROOT"]."/script/function.php");
// register some session variables
$_SESSION['username'] = 'deathsbane';
$_SESSION['role'] = 'admin';
echo "https://www.php.net/manual/en/book.session.php";
$a = <<<A
134 How to Do Everything with PHP & MySQL
A;
echo BR;
echo $a;
?>
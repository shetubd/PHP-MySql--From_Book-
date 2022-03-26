<?php // (Include file add 21 March 2022)
define("SRC", $_SERVER["DOCUMENT_ROOT"] . '/src');
define("SCRIPT", $_SERVER["DOCUMENT_ROOT"] . '/script');
include_once(SRC . "/header.php"); // Headr page
include_once(SCRIPT . "/function.php"); // Common Function 
echo "\n";
?>
<div>
        <?PHP
        $namesArray = array("Joe", "Kishor", "Musa", "Robin");
        $namesArray[] = "Jene";
        $namesArray[2] = (array)"13, shetu, 100, (int) 10";
        PreArray($namesArray);
        $var = "Shetu";
        echo "This is \$var called \"$var\".\n";
        echo "<br>";
        cssName("/bible/session/1.php");
        ?>
</div>

<?php include_once(SRC . '/footer.php'); ?>
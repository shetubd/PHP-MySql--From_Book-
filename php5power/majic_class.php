<?php
namespace myNamespace;
include($_SERVER["DOCUMENT_ROOT"] . "/src/header.php");
include($_SERVER["DOCUMENT_ROOT"] . "/script/function.php");
echo "<link rel=\"stylesheet\" href=\"css/mystyle.css\">";

class testFunction {
	public function getNamespace() {
		return __CLASS__;
	}
}
$a = new testFunction;
echo $a->getNamespace();
$a = array("PHP_SELF", "argv", "argc");
echo "<table cellpadding='10'>";
foreach ($a as $value) {
	if(isset($_SERVER["$value"])){
		echo "<tr><td>" . $value;
		echo "</td></td>";
		echo $_SERVER["$value"]. "</td></td>";
	} else {
		echo "<tr><td>". $value;
		echo "</td></td>-";
		echo "</td></td>";
	}
}
echo "</table>";
?>
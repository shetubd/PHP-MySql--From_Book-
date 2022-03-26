<?PHP
session_start();
define("SRC", $_SERVER["DOCUMENT_ROOT"].'/src');
define("SCRIPT", $_SERVER["DOCUMENT_ROOT"].'/script');
include (SCRIPT."/function.php");
include (SRC."/header.php");
echo "<pre>";
    echo `ls -la  "../../src/css"`;
    echo "</pre>";
// Database Connection
$b = new database("sristy");
$query = "show tables";
echo "uninstall netstat -tulnp";
$sql = $b->connect()->query("$query");

while($row = $sql->fetch_array(MYSQLI_ASSOC)){
    PreArray($row);
    echo $row["Tables_in_sristy"].BR;

}


include_once (SRC."/footer.php");
?>


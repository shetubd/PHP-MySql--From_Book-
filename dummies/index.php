<?php
include ($_SERVER["DOCUMENT_ROOT"]."/src/header.php");
include ($_SERVER["DOCUMENT_ROOT"]."/script/function.php");
$s="email@net.com";
$html = <<<EMAIL
$s Hello World
EMAIL;
$str = "transmission sshd[13578]: Accepted password for root from 192.168.25.1 port 2306 ssh2";
echo "Pattern Modifier, ^ ,|,  [a-zA-Z], b\word\b, \'n, \'t, \'v, multiline";
$pattern = "/^transmission sshd:*| Accepted password/";
echo BR;
echo preg_match_all($pattern, $str, $a);
PreArray($a);
echo BR;
//$preg= preg_match($pattern, $html);

//preg_match('(foo)(bar)(baz)',$email, NULL);
var_dump($preg);


// database Connection with DB called "dummies"
$x=array(1=>"ss", 2=>"33434");
$y = serialize($x);
$z = unserialize($y);
PreArray($y);

$a = new database("dummies");
$conn= $a->Connect();

//$sql = "SHOW TABLES";
$sql = "SELECT * FROM info";

//$sql = "create table $table";
/*
$table = "
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
";
*/
//$sql = "CREATE TABLE `dummies`.`info` ( `id` INT NOT NULL AUTO_INCREMENT , `firstname` VARCHAR(255) NOT NULL , `middlename` VARCHAR(255) NOT NULL , `lastname` VARCHAR(255) NOT NULL , `address` TEXT NOT NULL , `city` VARCHAR(100) NOT NULL , `state` VARCHAR(100) NOT NULL , `zipcode` INT(10) NOT NULL , PRIMARY KEY (`id`(4))) ENGINE = InnoDB";
//db query
$result = $conn->query($sql);
//var_dump($result);
//Fetch table from database
while($row = $result->fetch_array(MYSQLI_ASSOC)){
    echo "<table border ='1' style='width: 50%' >";
    echo "
        <tr>
            <th>Id</th>
            <th>Firstname</th>
            <th>middlename</th>
            <th>lastname</th>
            <th>address</th>
            <th>city</th>
            <th>state</th>
            <th>zipcode</th>
            <th>Action</th>
        </tr>";
    echo "<td> $row[id] </td>";
    echo "<td> $row[firstname] </td>";
    echo "<td> $row[middlename] </td>";
    echo "<td> $row[lastname] </td>";
    echo "<td> $row[address] </td>";
    echo "<td> $row[city] </td>";
    echo "<td> $row[state] </td>";
    echo "<td> $row[zipcode] </td>";

    echo "<td> <a href=#> Edit </a>";
    echo "<a href=curd.php?delete=". $row['id']. ">Delete </a></td>";
    echo "</table>";
}

echo BR;
echo date("Y-M-d", time());
echo BR;

$details = array("firstname" => "Khandaker",
                "middlename" => "Shahriar",
                "lastname" => "Amin",
                "address" => "Biswas Betka",
                "city" => "Tangail",
                "state" => "N/A",
                "zipcode" => "1900",
                );
//PreArray($details);
$x = new insert("dummies");

if(isset($_POST["submit"])){
   $x->insertDb($_POST);
}

?>

<form action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method = "POST">
First Name :  <input type = "text" name = "firstname" value = ""> <br/>
Middle Name : <input type = "text" name = "middlename" value = ""> <br/>
Last Name : <input type = "text" name = "lastname" value = ""> <br/>
Street Address : <input type = "text" name = "address" value = ""> <br/>
City : <input type = "text" name = "city" value = ""> <br/>
State : <input type = "text" name = "state" value = ""> <br/>
Zipcode : <input type = "text" name = "zipcode" value = ""> <br/>


<input type = "submit" name="submit" value="submit">

</form>

<?php
include ($_SERVER["DOCUMENT_ROOT"]."/src/footer.php");
?>

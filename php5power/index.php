<?php
include($_SERVER["DOCUMENT_ROOT"] . "/src/header.php");
include($_SERVER["DOCUMENT_ROOT"] . "/script/function.php");
echo "<link rel=\"stylesheet\" href=\"css/mystyle.css\">";
?>

<form class="table1" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
  Name: <input type="text" name="name" value=""><br />
  Enter Date: <input type="date" name="date" value=""><br />
  Enter Time: <input type="time" name="time" value=""><br />
  <input type="submit" name="submit" value="submit">
</form>
<br />
<?php
$cars = array("volvo", "BMW");
print_r($cars);
echo BR;
$db = new database("test");
$db = $db->connect();
PreArray($db);

echo BR;
echo __DIR__;
echo "<hr>";
echo "https://www.youtube.com/watch?v=jMSNo_UFb9M";

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $date = $_POST["date"];
  $time = $_POST["time"];
}

echo "<hr>";

echo BR;

if ($_conn->affected_rows > 0) {
  echo BR;
  echo "<table id='tableBill'>";
  echo "
  <tr>
      <th>No</th>
      <th>Date</th>
      <th>Name</th>
      <th>Amount</th>
  </tr>";
  while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $no = 1;
    echo "<tr>";
    echo "<td>";
    echo $row["id"];
    echo "</td>";
    echo "<td>" . $row["date"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["amount"] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "nO data There";
}


echo BR;
?>


<?php
include($_SERVER["DOCUMENT_ROOT"] . "/src/footer.php");
?>
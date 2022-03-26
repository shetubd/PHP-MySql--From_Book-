<?php
include ($_SERVER["DOCUMENT_ROOT"]."/src/header.php");
include ($_SERVER["DOCUMENT_ROOT"]."/script/function.php");
# Page Number

echo "Page Number: 103/170";
echo BR;

class test {
    public $name;
    static $age = 45;

    public function output($name){
        echo $this->name = $name;
        echo BR;
    }
}

class test1 extends test {
    public function show(){
        echo test::$age;
    }
}

echo test::$age;





echo BR;

$a = new database("sristy");
$sql = "Show tables";
$conn = $a->Connect();
$result = $conn->query($sql);
var_dump($result);





//echo "Returned rows are: " . $result -> num_rows;

// Array echo
function arrayEcho($array){
    for ($i=0;$i<count($array);$i++){
        echo "Array Eliment is : ". $array[$i]. "\n";
    }
}

function labelHome($title, $details =  "Here is details of work"){
    $details = "
        <<<DETAILS
    ";
    echo "<h1> Today wokr - $title";
    echo $details;
}
?>

<?php
echo "<hr>";
//echo "<a href=''> File Path </a>";
include "../src/footer.php";

$Book1 = "Core PHP Programming";
$writerOfBook1 = "Leon Atkinson";
$Book1File = "e:\Shetu\P H P Outline\book\Most Advanced\Object-Oriented Programming with PHP5 (2007) _-_ Hayder, Hasin.pdf";
$NextBook = new NextBook($Book1);
$NextBook->ShowBook($Book1, $writerOfBook1,$Book1File);
echo $NextBook->bookname. "<br/>";
echo $NextBook->writer. "<br/>";
echo "<a href = '$NextBook->fileLink'>$NextBook->bookname</a>";
//echo $NextBook->bookname;
//var_dump($NextBook);
?>

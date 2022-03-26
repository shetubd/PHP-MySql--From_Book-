<?php
include_once "session.inc.php";
$path = $_SERVER["DOCUMENT_ROOT"]; $path .="/src/"; include_once $path. "header.php"; include_once $_SERVER["DOCUMENT_ROOT"] . "/script/function.php"; ?>
<?php 
$_SESSION["44"] = "444";
PreArray($_SESSION);
$a = new retangle; 
$a->set_size("5", "5");
echo $a->get_perimeter();
echo BR;
//___unset($a);adssss 
//var_dump($a);
echo "<h1>258</h1>";
class retangle
{
    /*
     * get_size()
     * get_area()
     * get_perimeter()
     * is_squre()
     */
    private $height;
    private $width;

    public function set_size($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }
    public function get_area()
    {
        return ($this->height * $this->width);
    }
    public function get_perimeter()
    {
        return (($this->height + $this->width) * 2);
    }
    public function is_squre()
    {
        if ($this->height == $this->width) {
            return true;
        } else {
            return false;
        }
    }
}

class HelloWorld
{
    function language($language)
    {
        switch ($language) {
            case "English":
                echo "Good Morning! You select English";
                break;
            case "Bangla":
                echo "Ok. You select Bangla";
                break;
            default:
                echo "What is your languge";
                break;
        }
    }
}



echo "<HR>";
$a = new nextBook("ss");
$a->ShowBook("PHP 5 Visual Advanced Book ", "Larray Ullman", "21");
echo $a->bookname;
echo $a->writer;

?>



<?php
include "../../src/footer.php";
?>
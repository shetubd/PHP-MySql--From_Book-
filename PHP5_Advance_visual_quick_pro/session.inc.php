<?php 
$path = $_SERVER["DOCUMENT_ROOT"]; $path .="/src/"; 
include_once $_SERVER["DOCUMENT_ROOT"] . "/script/function.php";
$sdbc = new database("php5vqg");
function open_session() {
    global $sdbc;
    $sdbc->connect();
    return true;
}
function close_session() {
    global $sdbc;
    $sdbc->close();
    return $sdbc;
}

function read_session($data) {
    global $sdbc;
    $query = sprinf('select data from sessions WHERE id="%s"',
        mysqli_real_escape_string($sdbc,$session_id) );
    $result = $sdbc->query($query);
    if ($result->mysqli_num_rows==1){
        list($data)=mysqli_fetch_array($result, MYSQLI_NUM);
        return $data;
    } else{
        return "";
    }
}

function write_session($session_id,$data){
    global $sdbc;
    $query = sprinf('REPLACE INTO sessions (id, data) VALUES
            ("%s", "%s")', mysqli_real_escape_string($sdbc, $session_id),
        mysqli_real_escape_string($sdbc,$data));
    $result = $sdbc->query($query);
}

function delete_session($session_id) {
    global $sdbc;
    $query = sprintf("DELETE FROM sessions where id='%s'",
        mysqli_real_escape_string($sdbc,$session_id));
    $result = $sdbc->query($query);
    $_SESSION=array();
    return mysqli_affected_rows($sdbc);
}
function clean_session($expire) {
    global $sdbc;
    $query=sprinf("DELETE FROM sessions WHERE DATE_ADD(last_accessed,
            INTERVAL %d SECOND) < NOW()", (int) $expire);
    $result = $sdbc->query($query);
    return mysqli_affected_rows($sdbc);
}

//session_set_save_handler("open_session","close_session","read_session","write_session","destroy_session","clean_session");

session_start();
?>
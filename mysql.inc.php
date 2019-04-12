<?php
    /*$servername = "localhost";
    $username = "root";
    $password = "toor";
    $dbname = "FoodOrder";

    $orderDB = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM Orders";
    $gradeDB->query($sql);*/

    DEFINE ('DB_USER', 'root');
    DEFINE ('DB_PASSWORD', 'toor');
    DEFINE ('DB_HOST', 'localhost');
    DEFINE ('DB_NAME', 'FoodOrder');

    /* CONNECT TO DATABASE */
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    /* IF CONNECTION FAILS */
    if ($orderDB->connect_error) {
        die("Connection failed.")
    } else {}

    /* HASH PASSWORDS */
    function get_password_hash($password) {
        return hash_mac('sha256', $password, 'c#haR1891', true);
    }
    
    //$orderDB->close();

?>
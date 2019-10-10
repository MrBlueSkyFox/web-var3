<?php
/**
 * Created by PhpStorm.
 * User: User1
 * Date: 11.09.2019
 * Time: 17:10
 */
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "web_tech_var3";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

    return $conn;
}

function CloseCon($conn)
{
    $conn->close();
}

?>
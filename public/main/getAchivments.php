<?php
/**
 * Created by PhpStorm.
 * User: User1
 * Date: 11.09.2019
 * Time: 19:10
 */
include 'db_connection.php';

$q = $_REQUEST["q"];

$hint = array();

if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    $query1 = "SELECT * FROM achievement Where id_programm = " . $q;
    $conn = OpenCon();
    $result1 = mysqli_query($conn, $query1)
    or die(mysqli_error($conn));
    while ($row1 = mysqli_fetch_array($result1)) {
        array_push($hint, $row1['Date_publication']);

        /*$hint .= $row1['id_picture'];*/
    }
    CloseCon($conn);
    mysqli_free_result($result1);
    $data = json_encode($hint);
    echo $data;
    /*echo $hint === "" ? "deep shit" : $hint;*/
}
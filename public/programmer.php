<?php
include 'main/db_connection.php';
$conn = OpenCon();
$query1 = "SELECT * FROM programmer";

$resForSelect = mysqli_query($conn, $query1);
$resForSelect2 = mysqli_query($conn, $query1);
echo "<div>";
echo "<select onchange='onChangeSelect(this.value)'>";
while ($tabVal = mysqli_fetch_array($resForSelect)) {
    echo "<option value= " . $tabVal['id_programmer'] . ">" . $tabVal['First_name'] . "</option>";
}
echo "</select>";
echo "<select id='responseSelectBox'>";
echo "</select>";
echo "</div>";
mysqli_free_result($resForSelect);
while ($row1 = mysqli_fetch_array($resForSelect2)) {
    echo "<div style='display: flex;padding: 15px' >";
    echo "<img  src=" . $row1['img_src'] . " style='max-height:300px;padding-right: 30px;'" . " />";
    echo "<div>";
    echo "<p>" . $row1['First_name'] . "</p>";
    echo "<p>" . $row1['Last_name'] . "</p>";
    echo "<p>" . $row1['Date_birth'] . "</p>";
    echo "</div>";

    echo "<div style='max-width: 70%;display: flex'>";// Див для достижения
    $query2 = "SELECT * FROM achievement WHERE id_programm=" . $row1['id_programmer'];
    $resultAch = mysqli_query($conn, $query2) or die (mysqli_error());
    $resultAch2 = mysqli_query($conn, $query2) or die (mysqli_error());
    $resultAch3 = mysqli_query($conn, $query2) or die (mysqli_error());
    echo "<div>";
    while ($rowDescrtption=mysqli_fetch_array($resultAch)){
        echo "<div>";
        echo "<p>" . $rowDescrtption['Description'] . "</p>";
        echo "</div>";
    }
    mysqli_free_result($resultAch);
    echo "</div>";
    echo "<div>";
    while ($rowDate=mysqli_fetch_array($resultAch2)){
        echo "<div>";
        echo "<p>" . $rowDate['Date_publication'] . "</p>";
        echo "</div>";
    }
    mysqli_free_result($resultAch2);
    echo "</div>";
    echo "<div>";
    while ($rowImg=mysqli_fetch_array($resultAch3)){
        echo "<div>";
        echo "<img  src=" . $rowImg['img_src'] . " style='max-height:300px;padding-right: 30px;'" . "  alt=' ' >";
        echo "</div>";
    }
    mysqli_free_result($resultAch3);
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";  echo "</div>";
    echo "</div>";
    echo "</div>";

}
mysqli_free_result($resForSelect2);
CloseCon($conn);

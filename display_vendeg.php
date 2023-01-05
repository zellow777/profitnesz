<?php

require 'database_connection.php';

$vendeg_index = $_POST['vendeg_index'];

$sql = "SELECT `nev` FROM `vendegek` WHERE `index` = '".$vendeg_index."'";
$result = $con->query($sql);

$arr = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $arr[] = $row["nev"];
    }
    $data = array(
        'status' => true,
        'msg' => implode("; ", $arr)
    );
}
echo json_encode($data);
?>


<?php
require 'database_connection.php';

$vendeg_index = $_POST['vendeg_index'];
$vendeg_nev = $_POST['vendeg_nev'];

$insert_query = "insert into `vendegek`(`index`,`nev`) values ('".$vendeg_index."','".$vendeg_nev."')";
if(mysqli_query($con, $insert_query))
{
    $data = array(
        'status' => true,
        'msg' => 'User added successfully!'
    );
}
else
{
    $data = array(
        'status' => false,
        'msg' => 'Sorry, User not added.'
    );
}
echo json_encode($data);
?>

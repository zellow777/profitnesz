<?php

require 'database_connection.php';

$event_id = $_POST['event_id'];

$sql = "DELETE FROM `vendegek` WHERE `index` = '".$event_id."'";
$result = $con->query($sql);

$arr = array();

$data = array(
    'status' => true,
    'msg' => 'Event deleted successfully!');

echo json_encode($data);
?>
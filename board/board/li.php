<?php
include_once "../module/conn.php";

$date = date('Y-m-d H:i:s');
$sql = " INSERT INTO board SET ";
$sql .= " title = 'test 2', ";
$sql .= " content = 'test 2', ";
$sql .= " wdate = '$date', ";
$sql .= " writer = 'tony2', ";
$sql .= " readnum = 2 ";
echo $sql;
mysqli_query($conn, $sql);
?>
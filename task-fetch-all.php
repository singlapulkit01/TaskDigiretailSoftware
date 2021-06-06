<?php
include_once("task-mysql-connection.php");
$query="select distinct uname from users";
$table=mysqli_query($conn,$query);
$ary=array();
while($record=mysqli_fetch_array($table)) {
    $ary[]=$record;
}
echo json_encode($ary);
?>

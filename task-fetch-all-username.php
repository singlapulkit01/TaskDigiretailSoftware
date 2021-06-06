<?php
include_once("task-mysql-connection.php");
$uname=$_GET["uname"];
$query="select * from users where uname='$uname'";
$table=mysqli_query($conn,$query);
$ary=array();
while($record=mysqli_fetch_array($table)) {
    $ary[]=$record;
}
echo json_encode($ary);
?>

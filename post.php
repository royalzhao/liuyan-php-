<?php

include("config.php"); 

$name= $_POST['username'];

$title= $_POST['title'];

$content = $_POST['content'];


mysql_select_db("message", $con);

$sql = "insert into message values (null,'$name','$title','$content')";

mysql_query($sql);

echo "<script>alert('提交成功返回首页'); location.href='index.php';</script>";

?>






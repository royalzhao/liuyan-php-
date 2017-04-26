<?php
include("config.php"); 
?>

<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf8" />

<body>

<table width="678" align="center">

<tr>

<td colspan="2"><h1>留言板</h1></td>

</tr>

<tr>

<td width="586"><a href="index.php">主页</a> | <a href="liuyan.php">留言</a></td>

</tr>

</table>



<?php
				     $sql="select * from message";
				     $query=mysql_query($sql);
				     while($row=mysql_fetch_array($query)){ 
?>

<table width="678" border="1" align="center" cellpadding="1" cellspacing="1">

<tr>

<td width="178">Name:<?php echo $row['user'] ?></td>

<td width="223">title:<?php echo $row['title'] ?></td>

</tr>

<tr>

<td colspan="4" height="50"><?php echo $row['content'] ?></td>

</tr>


</table>

<?php

}

?>

</body>

</html>
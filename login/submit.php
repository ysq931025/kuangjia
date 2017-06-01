<?php
// submit.php
  $user=$_GET["user"];
  $pass=$_GET["pass"];
  $mysqli=new mysqli("localhost","root","","1610-2");
  $sql="insert into `user`(`username`,`password`) values('{$user}','{$pass}')";
  $mysqli->query($sql);
  if($mysqli->affected_rows==1){
  	echo 1;
  }
?>
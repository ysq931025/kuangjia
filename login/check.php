<?php
// check.php
   $user=$_GET["user"];
   $mysqli=new mysqli("localhost","root","","1610-2");
   $sql="select `username` from `user` where username='${user}'";
   $result=$mysqli->query($sql);
   $result=$result->fetch_all(MYSQLI_ASSOC);
   if(empty($result)){
   	 echo "1";
   }else{
   	 echo "0";
   }
?>
<?php
 // login.php 
  $user=$_GET["user"];
  $pass=$_GET["pass"];   
  $mysqli=new mysqli("localhost","root","","1610-2");
  $sql="select `username`,`password` from `user` where username='{$user}'";
  $result=$mysqli->query($sql);
  $result=$result->fetch_all(MYSQLI_ASSOC);
  $length=count($result);
  if(empty($result)){
  	 echo "0";
  }else{
    for($i=0;$i<$length;$i++){
    	if($result[$i]["password"]==$pass){
           echo "2";
    	}else{
    	   echo "1";
    	}
    }
  }
?>
<?php
$host="localhost";
$user="root";
$pass="";
$db="test";

$connection=new mysqli($host,$user,$pass,$db);

 $count=count($_POST["skill"]);

 if ($count>=1) {
 	$result='';
 	for($i=0;$i<$count;$i++){
 		if(trim($_POST["skill"][$i]!='')){
           $sql="insert into skill(skill) values('{$_POST["skill"][$i]}');";
           $result=$connection->query($sql);
 		}
 	}
 	if($result){
 		echo"Data Submit Successfully";
 	}else{
 		echo"Please Insert data";
 	}
 	
 }
 

?>
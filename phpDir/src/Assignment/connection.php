
<?php

$host='db';
$user='root';
$pass='lionPass';
$dbname='assignment';


 //check the MYSQL connection status
 $conn=new mysqli($host,$user, $pass, $dbname);

//  if($conn->connect_error){
//   die('Connection failed: '. $conn->connect_error);
//  }else{
//   echo 'Connected to MySQL server successfully';
//  }


?>
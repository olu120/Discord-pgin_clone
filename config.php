<?php


//host
$host = "localhost";


//dbname
$dbname = "eBaluwa_Auth";


//user
$user = "root";

//pass
$pass = "";

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}



//if($conn == true) {
  //echo "it's working fine";
//} else{
 //echo "connection is wrong: err";
//}


?>
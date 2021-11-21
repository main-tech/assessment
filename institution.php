<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
 
  if (empty( $_POST['aname'])) {
    echo "Name is empty";
  } 
  
  else {


try{
require "connection.php";
 
   $stmt = $conn->prepare("INSERT INTO Institution VALUES (:value)");
   $stmt->bindParam(':value', $institutionname);
    $institutionname = $_POST['aname'];
   $stmt->execute();
  }
 
   catch(PDOException $e) {
   echo " <br>";
  echo "Institution already exists in the database : " ;

}
    
}
}
?>

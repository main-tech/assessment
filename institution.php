<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $institutionname = $_POST['aname'];
  if (empty($name)) {
    echo "Name is empty";
  } 
  
  else {


try{
require "connection.php";
 
   $stmt = $conn->prepare("INSERT INTO assessment VALUES (:institution)");
   $stmt->bindParam(':institution', $institution);
   
   $institution=$institutioname;
   $stmt->execute();
  }
 
   catch(PDOException $e) {
   echo " <br>";
  echo $sql . "<br>" . $e->getMessage();

}
    echo $institutionname;
}
?>

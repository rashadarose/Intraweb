<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");
$servername = "localhost";
$username   = "bakka";
$password   = "Dragon420!";
$dbname     = "divineaccess";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM tblBuilds";
//$sql = "SELECT * FROM accounts";
$result = mysqli_query($conn,$sql); 
$myArray = array();

    if(!isset($_GET['BuildID'])){
         if ($result->num_rows > 0) {

            // output data of each row
                while($row = $result->fetch_assoc()) {
                    $myArray[] = $row;
                }
                 print json_encode($myArray); 
                //echo $_GET['name'];
            } 

            else 
            {
                echo "0 results 0";
            }
     }    
     else{
            $s = $_GET['BuildID'];
            $ql = "SELECT * FROM tblBuilds WHERE BuildID=$s";
            $result2 = mysqli_query($conn,$ql); 
            $myArr = array();

        if ($result2->num_rows > 0) {
            
            // output data of each row
                while($row2 = $result2->fetch_assoc()) {
                    $myArr[] = $row2;
                }
                print json_encode($myArr);
                //echo "hello";
            } 

            else 
            {
                echo "0 results GUY";
            }
     }

?>
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");
$servername = "localhost";
$username   = "bakka";
$password   = "Dragon420!";
$dbname     = "divineaccess";


/*$item = $_POST["item"];
$customer = $_POST["customer"];
$salesorder = $_POST["salesorder"];
$customerpurchaseorder = $_POST["customerpurchaseorder"];
$quantityordered = $_POST["quantityordered"];
$dateentered = $_POST["dateentered"];
$promisedate = $_POST["promisedate"];
$shipdate = $_POST["shipdate"];
$shipto = $_POST["shipto"];
$statusselect = $_POST["statusselect"];*/
$bi = $_POST["bi"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


   // if (isset($_POST['item'])) {
   echo $bi;
    $sql = "DELETE FROM tblBuilds WHERE BuildID='$bi'";

		/*$sql = "INSERT INTO tblBuilds (DateEntered, 
		                               Status, 
		                               Item, 
		                               QuantityOrdered, 
		                               Customer, 
		                               SalesOrder, 
		                               PromiseDate, 
		                               ShipTo, 
		                               ShipDate, 
		                               CustomerPurchaseOrder) VALUES (?,?,?,?,?,?,?,?,?,?)";*/
		                               
        		
        if (mysqli_query($conn, $sql)) {
          echo "Record deleted successfully";
        } else {
          echo "Error deleting record: " . mysqli_error($conn);
        }
        
        mysqli_close($conn);
    //} else{echo json_encode(array('success' => 0));}
?>
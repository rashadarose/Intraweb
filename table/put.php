<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");

$servername = "localhost";
$username   = "bakka";
$password   = "Dragon420!";
$dbname     = "divineaccess";

$itemupdate = $_POST["item"];
$customer = $_POST["customer"];
$salesorder = $_POST["salesorder"];
$status = $_POST["status"];
$customerpurchaseorder = $_POST["customerpurchaseorder"];
$quantityordered = $_POST["quantityordered"];
$dateentered = $_POST["dateentered"];
$promisedate = $_POST["promisedate"];
$shipdate = $_POST["shipdate"];
$shipto = $_POST["shipto"];
$shipvia = $_POST["shipvia"];
$pulled = $_POST["pulled"];
$quantitymade = $_POST["quantitymade"];
$complete = $_POST["complete"];
$completedate = $_POST["completedate"];
$remain = $_POST["remain"];
$tracking = $_POST["tracking"];
$audited = $_POST["audited"];
$auditdate = $_POST["auditdate"];
$auditedby = $_POST["auditedby"];
$notes = $_POST["notes"];
$bi = $_POST["bi"];


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


 //if (isset($_POST['bi'])) {
  
        echo $itemupdate;
	     $sql = "UPDATE tblBuilds SET DateEntered='$dateentered', 
	                                  Status='$status', 
	                                  Item='$itemupdate', 
	                                  QuantityOrdered='$quantityordered', 
	                                  Customer='$customer', 
	                                  SalesOrder='$salesorder', 
	                                  PromiseDate='$promisedate', 
	                                  ShipTo='$shipto',
	                                  ShippedVia='$shipvia',
	                                  Shipdate='$shipdate',
	                                  CustomerPurchaseOrder='$customerpurchaseorder',
	                                  QuantityMade='$quantitymade',
	                                  Pulled='$pulled',
	                                  Completed='$complete',
	                                  CompletedDate='$completedate',
	                                  Tracking='$tracking',
	                                  Audited='$audited',
	                                  AuditedDate='$auditdate',
	                                  AuditedBy='$auditedby',
	                                  Notes='$notes',
	                                  QuantityRemaining='$remain' WHERE BuildID='$bi'";
	    //$sql = "UPDATE tblBuilds SET DateEntered='$date' WHERE BuildID='$bi'";
	   // $sql = "SELECT * FROM tblBuilds";
		
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			echo 'no';
		}
		
        mysqli_stmt_bind_param($stmt, "sssssisssssssssssssss", $dateentered,
                                                              $status,
                                                              $itemupdate,
                                                              $quantityordered,
                                                              $customer,
                                                              $salesorder,
                                                              $promisedate,
                                                              $shipto,
                                                              $shipvia,
                                                              $shipdate,
                                                              $customerpurchaseorder,
                                                              $quantitymade,
                                                              $pulled,
                                                              $complete,
                                                              $completedate,
                                                              $tracking,
                                                              $audited,
                                                              $auditdate,
                                                              $auditedby,
                                                              $notes,
                                                              $remain);
	 
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	//	header("location:https://divinelighting.net/table/home.php");
	
		echo json_encode("succesfully entered ");
		exit();

   /* } 
    else {
    echo json_encode(array('success' => 0));
   }*/
 
?>
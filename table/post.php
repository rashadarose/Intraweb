<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");
$servername = "localhost";
$username   = "bakka";
$password   = "Dragon420!";
$dbname     = "divineaccess";


$statusselect = $_POST["statusselect"];
$pulled = $_POST["pulled"];
$dateentered = $_POST["dateentered"];
$item = $_POST["item"];
$quantityordered = $_POST["quantityordered"];
$quantitymade = $_POST["quantitymade"];
$quantityremaining = $_POST["quantityremaining"];
$customer = $_POST["customer"];
$salesorder = $_POST["salesorder"];
$promisedate = $_POST["promisedate"];
$notes = $_POST["notes"];
$needbackoreder = $_POST["needbackorder"];
$completed = $_POST["completed"];
$completeddate = $_POST["completeddate"];
$shipto = $_POST["shipto"];
$shipdate = $_POST["shipdate"];
$shipvia = $_POST["shipvia"];
$tracking = $_POST["tracking"];
$audited = $_POST["audited"];
$auditeddate = $_POST["auditeddate"];
$auditedby = $_POST["auditedby"];
$isbackorder = $_POST["isbackorder"];
$customerpurchaseorder = $_POST["customerpurchaseorder"];


// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


    if (isset($_POST['item'])) {
  
		$sql = "INSERT INTO tblBuilds (Status, 
		                               Pulled,
		                               DateEntered, 
		                               Item, 
		                               QuantityOrdered,
		                               QuantityMade,
		                               QuantityRemaining,
		                               Customer, 
		                               SalesOrder, 
		                               PromiseDate,
		                               Notes,
		                               NeedsBackOrder,
		                               Completed,
		                               CompletedDate,
		                               ShipTo, 
		                               ShipDate,
		                               ShippedVia,
		                               Tracking,
		                               Audited,
		                               AuditedDate,
		                               AuditedBy,
		                               IsBackOrder,
		                               CustomerPurchaseOrder) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		                               
		                               
		
		/* prepared statement*/
	
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			//header("location:../signup.php?error=stmtfailed");
			echo 'not working';
			exit();
			
		}

		//$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
		//stmt prepare bind then execute, close
		
        echo $shipto . "hello";
		mysqli_stmt_bind_param($stmt, "ssssssssissssssssssssss", $statusselect,
		                                                         $pulled,
		                                                         $dateentered,
		                                                         $item,
		                                                         $quantityordered,
		                                                         $quantitymade,
		                                                         $quantityremaining,
		                                                         $customer, 
		                                                         $salesorder, 
		                                                         $promisedate,
		                                                         $notes,
		                                                         $needbackoreder,
		                                                         $completed,
		                                                         $completeddate,
		                                                         $shipto, 
		                                                         $shipdate,
		                                                         $shipvia,
		                                                         $tracking,
		                                                         $audited,
		                                                         $auditeddate,
		                                                         $auditedby,
		                                                         $isbackorder,
		                                                         $customerpurchaseorder);
		                                                         
		  
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		//header("location:../signup.php?error=none");
		
		echo json_encode("succesfully entered ");
		exit();

        
  
    } else {
    echo json_encode(array('success' => 0));
}
?>
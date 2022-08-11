<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title><?php echo $page_title; ?></title>
            <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
            <!-- Font Awesome icons (free version)-->
            <!--<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>-->
            <!-- Google fonts-->
            <!--<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />-->
            <!--<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />-->
            <!--<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />-->
            
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
            <!-- Core theme CSS (includes Bootstrap)-->
            <link href="css/rstyles.css" rel="stylesheet" />
            <link href="css/styles.css" rel="stylesheet" />
        </head>
        
        

                       <div  style="margin-bottom: .5%; margin-top: .5%;">
                          <!--<label class="container" style="display: inline; font-size: 12px;">Include Date Filter?
                            <input type="checkbox" checked="checked" >
                            <span class="checkmark"></span>
                          </label>      


                          <label class="container" style="display: inline; font-size: 12px;">Start Date
                            <input type="text" placeholder="9/22/2020">
                            <span class="checkmark"></span>
                          </label>   

                          <label class="container" style="display: inline; font-size: 12px;">Stop Date
                            <input type="text" placeholder="2/11/2021">
                            <span class="checkmark"></span>
                          </label>   -->

                           <label class="container" style="display: inline; font-size: 12px;">
                           <button data-toggle='modal' data-target='#exampleModal'>New Build</button>
                            <span class="checkmark"></span>
                          </label> 

                          <!-- <label class="container" style="display: inline; font-size: 12px;">
                           <button>New Fab Item</button>
                            <span class="checkmark"></span>-->

                             <label class="container" style="display: inline; font-size: 12px;">
                           <button data-toggle='modal' data-target='#BOModal'>Back Orders</button>
                            <span class="checkmark"></span>
                            </label> 
                            
                            <!--<label class="container" style="display: inline; font-size: 12px; float: right;">
                           <button>Add Order</button>
                            <span class="checkmark"></span>
                            
                             <label class="container" style="display: inline; font-size: 12px;">
                           <button>Update Orders</button>
                            <span class="checkmark"></span>
                            
                             <label class="container" style="display: inline; font-size: 12px;">
                           <button>Delete Orders</button>
                            <span class="checkmark"></span>-->
                       </div>


<div class="">
  
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" style="font-size: 12px;" href="#ps">Production Schedule</a>
    </li>
   <li class="nav-item">
      <a class="nav-link" style="font-size: 12px;" href="#ph">Production History</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="font-size: 12px;" href="#">Production Reports</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " style="font-size: 12px;" href="#">Shipping Schedule</a>
    </li>
     <li class="nav-item">
      <a class="nav-link " style="font-size: 12px;" href="#">Shipping History</a>
    </li>
     <li class="nav-item">
      <a class="nav-link " style="font-size: 12px;" href="#">Shipping Reports</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " style="font-size: 12px;" href="#fab">Fabrication</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " style="font-size: 12px;" href="#admin">Administration</a>
    </li>

  </ul>
</div>  

<div class="tab-content">

  <!-- Production Schedule Tab--->
  <div id="ps"class="tab-pane active">

  <nav class="navbar navbar-expand-lg navbar-dark">
                         
                                <!--<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/companylogo.png" alt="" /></a>
                                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                                    Menu
                                    <i class="fas fa-bars ml-1"></i>
                                </button>-->
                                <div class="navbar" id="navbarResponsive">
                                    <ul class="navbar-nav ">
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;"href="#team">By Customer</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;"href="#contact">By SO#</a></li>
                                         <li class="nav-item" ><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px; " href="#services">By PO#</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;" href="#portfolio">By ShipTo</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;" href="#about">By Model</a></li>
                                        <!--<li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;"href="#team">Daily Audit</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;"href="#contact">0 Pulls</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;"href="#contact">Unscheduled</a></li>-->
                                    </ul>
                               </div>
                       </nav>
                       
                     <!-- Button trigger modal 
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                          Launch demo modal
                        </button>-->
                        
<?php

//session_start(); 

define('DB_SERVER', "localhost");
define('DB_USERNAME', "bakka");
define('DB_PASSWORD', "Dragon420!");
define('DB_NAME', "divineaccess");
 
/*connect to MySQL database 
$conn = mysqli_connect("localhost","bakka","Dragon420!","divineaccess");*/
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if(!$conn){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT * FROM tblBuilds_Active";

/*SELECT * FROM sheet1 WHERE CUSTOMER = "PABLO";*/
  /*$stmt = mysqli_stmt_init($link);
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location:../signup.php?error=stmtfailed");
    exit();
  }*/
  /*echo "<a class='nav-link active' style='font-size: 20px; display: inline;' href='create.php'>Create Row</a>";*/

       if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                          


                            echo "<table id='myTable2' class='table table-bordered table-striped' style='width: 100%;' >";
                                echo "<thead style='background-color: #6495ed'>";
                                    echo "<tr>";
                                        echo "<th onclick='sortTable(0)'>BUILD#</th>";
                                        echo "<th onclick='sortTable(1)'>STATUS</th>";
                                        echo "<th onclick='sortTable(2)'>DATE ENTERED</th>";
                                        echo "<th onclick='sortTable(3)'>ITEM</th>";
                                        echo "<th onclick='sortTable(4)'>QUANTITY ORDERED</th>";
                                        echo "<th onclick='sortTable(5)'>QUANTITY MADE</th>";
                                        echo "<th onclick='sortTable(6)'>QUANTITY REMAINING</th>";
                                        echo "<th onclick='sortTable(7)'>CUSTOMER</th>";
                                        echo "<th onclick='sortTable(8)'>SO</th>";
                                        echo "<th onclick='sortTable(9)'>PO</th>";
                                        echo "<th onclick='sortTable(9)'>AUDITED</th>";
                                        echo "<th onclick='sortTable(10)'>PROMISED</th>";
                                        echo "<th onclick='sortTable(11)'>NEEDSBACKORDER</th>";
                                         echo "<th onclick='sortTable(12)'>COMPLETED DATE</th>";
                                        echo "<th onclick='sortTable(13)'>SHIP TO</th>";

                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr data-toggle='modal' data-target='#itemModal' onclick='grabSO(this)' data-id=". $row['SalesOrder'] .">";
                                        echo "<td >". $row['BuildID'] . "</td>";
                                        echo "<td st>". $row['Status'] . "</td>";
                                        echo "<td>". $row['DateEntered'] . "</td>";
                                        echo "<td>" . $row['Item'] . "</td>";
                                        echo "<td>" . $row['QuantityOrdered'] . "</td>";
                                        echo "<td>" . $row['QuantityMade'] . "</td>";
                                        echo "<td>" . $row['QuantityRemaining'] . "</td>";
                                        echo "<td>" . $row['Customer'] . "</td>";
                                        echo "<td onclick='grabSO(this)' data-id=". $row['SalesOrder'] .">" . $row['SalesOrder'] . "</td>";
                                        /*echo "<td style='width: 1% important!;'>" . $row['CustomerPurchaseOrder'] . "</td>";*/
                                        echo "<td>" . $row['CustomerPurchaseOrder'] . "</td>";
                                         echo "<td>" . $row['Audited'] . "</td>";
                                        echo "<td>" . $row['Promised'] . "</td>";
                                        echo "<td>" . $row['NeedsBackOrder'] . "</td>";
                                        echo "<td>" . $row['CompletedDate'] . "</td>";
                                        echo "<td style='width: 10%;'>" . $row['ShipTo'] . "</td>";
                                     
                                        
                                        
                                   
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
                    // Close connection
                    mysqli_close($conn);
                    ?>


  <!--New Build  Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content">
                              <!--Header -->
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New Build</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <!--Modal Body-->
                              <div class="modal-body">
                                    <form>
                                      <div class="form-row">
                                        <div class="form-group col-md-3">
                                          <label for="inputEmail4">Customer</label>
                                          <input type="email" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="form-group col-md-3">
                                          <label for="inputPassword4">Sales Order</label>
                                          <input type="password" class="form-control" id="inputPassword4">
                                        </div>
                                         <div class="form-group col-md-3">
                                          <label for="inputPassword4">Customer PO</label>
                                          <input type="password" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="form-group col-md-1">
                                          <label for="inputState">Status</label>
                                          <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                          </select>
               
                                           
                                        </div>
                                      </div>
                                      
                                      <div class="form-row">
                                          <div class="form-group col-md-4">
                                            <label for="inputAddress">Item</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="">
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="inputAddress2">Notes</label>
                                            <input type="text" class="form-control" id="inputAddress2" placeholder="">
                                          </div>
                                          <div class="form-group col-md-2">
                                            <label for="inputAddress2">Quantities Ordered</label>
                                            <input type="text" class="form-control" id="inputAddress2" placeholder="">
                                          </div>
                                      </div>
                                      
                                      <div class="form-row">
                                        <div class="form-group col-md-2">
                                          <label for="inputCity">Dates Entered</label>
                                          <input type="text" class="form-control" id="inputCity">
                                        </div>
                                        <!--<div class="form-group col-md-4">
                                          <label for="inputState">Promised</label>
                                          <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                          </select>
                                        </div>-->
                                        <div class="form-group col-md-2">
                                          <label for="inputZip">Promised</label>
                                          <input type="text" class="form-control" id="inputZip">
                                        </div>
                                        
                                         <div class="form-group col-md-2">
                                          <label for="inputZip">Scheduled</label>
                                          <input type="text" class="form-control" id="inputZip">
                                        </div>
                                        
                                      </div>
                                         <div class="form-row">
                                        <div class="form-group col-md-2">
                                          <label for="inputCity">Ship To</label>
                                          <input type="text" class="form-control" id="inputCity">
                                        </div>
                                        <!--<div class="form-group col-md-4">
                                          <label for="inputState">Promised</label>
                                          <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                          </select>
                                        </div>-->
                                       
                                        
                                      </div>
                                      
                                      
                                      <!--<div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="gridCheck">
                                          <label class="form-check-label" for="gridCheck">
                                            Check me out
                                          </label>
                                        </div>
                                      </div>
                                      <button type="submit" class="btn btn-primary">Sign in</button>-->
                                      
                                    </form>
                              </div>
                              
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        
<!--Item  Modal -->
                    <div class="modal fade" id="itemModal" tabindex="-1" aria-labelledby="itemModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content">
                              <!--Header -->
                              <div class="modal-header">
                                <h5 class="modal-title" id="itemModalLabel">Item</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <!--Modal Body-->
                              <div class="modal-body">
                                  <!--<div class="">
  
                                      <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                          <a class="nav-link active" style="font-size: 12px;" href="#ps">Production Schedule</a>
                                        </li>
                                       <li class="nav-item">
                                          <a class="nav-link" style="font-size: 12px;" href="#ph">Production History</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" style="font-size: 12px;" href="#">Production Reports</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link " style="font-size: 12px;" href="#">Shipping Schedule</a>
                                        </li>
                                         <li class="nav-item">
                                          <a class="nav-link " style="font-size: 12px;" href="#">Shipping History</a>
                                        </li>
                                         <li class="nav-item">
                                          <a class="nav-link " style="font-size: 12px;" href="#">Shipping Reports</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link " style="font-size: 12px;" href="#fab">Fabrication</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link " style="font-size: 12px;" href="#admin">Administration</a>
                                        </li>
                                      </ul>
                                    </div> -->
                                  
                                  
                                    <form>
                                        
                                        
                                      <div class="form-row">
                                        <div class="form-group col-md-3">
                                          <label for="inputEmail4">Customer</label>
                                          <input type="email" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="form-group col-md-3">
                                          <label for="inputPassword4">Sales Order</label>
                                          <input type="password" class="form-control" id="inputPassword4">
                                        </div>
                                         <div class="form-group col-md-3">
                                          <label for="inputPassword4">Customer PO</label>
                                          <input type="password" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="form-group col-md-2">
                                          <label for="inputState">Status</label>
                                          <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                          </select>
                                          
                                                   <?php

                                                    //session_start(); 
                                                    
                                                    define('DB_SERVER', "localhost");
                                                    define('DB_USERNAME', "bakka");
                                                    define('DB_PASSWORD', "Dragon420!");
                                                    define('DB_NAME', "divineaccess");
                                                     
                                                    /*connect to MySQL database */
                                                 
                                                    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
                                                     
                                                    // Check connection
                                                    if(!$conn){
                                                        die("ERROR: Could not connect. " . mysqli_connect_error());
                                                    }
                                                    
                                                    $sql = "SELECT * FROM tblBuilds_Active";
                                                    
                                                  
                                                    
                                                   $result = mysqli_query($conn, $sql);
                                                                   
                                                     // echo $result;
                                                     //echo hello;
                            
                            
                                                      $row = mysqli_fetch_row($result);
                                                      echo $row[9];
                                                           
                                                            //while($row = mysqli_fetch_array($result)){
                                                                //echo "<tr data-toggle='modal' data-target='#itemModal'>";
                                                                
                                                                   // echo "<td>" . $row['SalesOrder'] .  "</td>";
                                                                    /*echo "<td style='width: 1% important!;'>" . $row['CustomerPurchaseOrder'] . "</td>";*/
                                                                    //echo "<td>" . $row['CustomerPurchaseOrder'] . "</td>";
                                                                   
                                                                 
                                                                    
                                                                    
                                                               
                                                               // echo "</tr>";
                                                          
                                                            //echo "</tbody>";                            
                                                        //echo "</table>";
                                                        // Free result set
                                                        mysqli_free_result($result);
                                           
                                                mysqli_close($conn);
                                                ?>
                                          
                                          
                                        </div>
                                      </div>
                                      
                                      <div class="form-row">
                                          <div class="form-group col-md-4">
                                            <label for="inputAddress">Item</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="">
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="inputAddress2">Notes</label>
                                            <input type="text" class="form-control" id="inputAddress2" placeholder="">
                                          </div>
                                          <div class="form-group col-md-2">
                                            <label for="inputAddress2">Quantities Ordered</label>
                                            <input type="text" class="form-control" id="inputAddress2" placeholder="">
                                          </div>
                                      </div>
                                      
                                      <div class="form-row">
                                        <div class="form-group col-md-2">
                                          <label for="inputCity">Dates Entered</label>
                                          <input type="text" class="form-control" id="inputCity">
                                        </div>
                                        <!--<div class="form-group col-md-4">
                                          <label for="inputState">Promised</label>
                                          <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                          </select>
                                        </div>-->
                                        <div class="form-group col-md-2">
                                          <label for="inputZip">Promised</label>
                                          <input type="text" class="form-control" id="inputZip">
                                        </div>
                                        
                                         <div class="form-group col-md-2">
                                          <label for="inputZip">Scheduled</label>
                                          <input type="text" class="form-control" id="inputZip">
                                        </div>
                                        
                                      </div>
                                         <div class="form-row">
                                        <div class="form-group col-md-2">
                                          <label for="inputCity">Ship To</label>
                                          <input type="text" class="form-control" id="inputCity">
                                        </div>
                                        <!--<div class="form-group col-md-4">
                                          <label for="inputState">Promised</label>
                                          <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                          </select>
                                        </div>-->
                                       
                                        
                                      </div>
                                      
                                      
                                      <!--<div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="gridCheck">
                                          <label class="form-check-label" for="gridCheck">
                                            Check me out
                                          </label>
                                        </div>
                                      </div>
                                      <button type="submit" class="btn btn-primary">Sign in</button>-->
                                     
                                    </form>
                              </div>
                              
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                              
                            </div>
                          </div>
                    </div>        
                    
<!--Back Order Modal -->    
 <div class="modal fade" id="BOModal" tabindex="-1" aria-labelledby="itemModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content">
                              <!--Header -->
                              <div class="modal-header">
                                <h5 class="modal-title" id="itemModalLabel">Back Orders</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <!--Modal Body-->
                              <div class="modal-body">
                                  
                                   </div>
                              
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                              
                            </div>
                          </div>
                    </div>        

<!--<table  class="table table-light table-striped " style="width: 100%;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Build#</th>
      <th scope="col">Status</th>
      <th scope="col">Fab</th>
      <th scope="col">Paint</th>
       <th scope="col">Parts</th>
      <th scope="col">Qty</th>
      <th scope="col">Pulled</th>
      <th scope="col">Promised</th>
       <th scope="col">Produce</th>
      <th scope="col" style="width: 50%;">Item</th>
      <th scope="col">Made</th>
      <th scope="col">Rem</th>
       <th scope="col">Customer</th>
      <th scope="col">S/O:</th>
      <th scope="col">P/O</th>
      <th scope="col">Ship To</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>

    </tr>

     <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>

    </tr>

     <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>

    </tr>

     <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>

    </tr>

     <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>-->

<!---------------------------------- Production History Tab----------------------------------->
<div id="ph" class="tab-pane fade">

  <nav class="navbar navbar-expand-lg navbar-dark">
                         
                                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/companylogo.png" alt="" /></a>
                                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                                    Menu
                                    <i class="fas fa-bars ml-1"></i>
                                </button>
                               <!-- <div class="navbar" id="navbarResponsive">
                                    <ul class="navbar-nav ">
                                        <li class="nav-item" ><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px; " href="#services">Today</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;" href="#portfolio">Yesterday</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;" href="#about">This Week</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;"href="#team">Between</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;"href="#contact">By Customer</a></li>
                                         <li class="nav-item" ><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px; " href="#services">By SO#</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;" href="#portfolio">By PO#</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;" href="#about">By Model</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;"href="#team">By ShipTo</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;"href="#contact">0 Pulls</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;"href="#contact">Unscheduled</a></li>
                                    </ul>
                                         
                               </div>
                          
                       </nav>-->




          <table  class="table table-light table-striped " style="width: 100%;">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Build#</th>
              <th scope="col">Status</th>
              <th scope="col">Fab</th>
              <th scope="col">Paint</th>
               <th scope="col">Parts</th>
              <th scope="col">Qty</th>
              <th scope="col">Pulled</th>
              <th scope="col">Promised</th>
               <th scope="col">Produce</th>
              <th scope="col" style="width: 10%;">Item</th>
              <th scope="col">Made</th>
              <th scope="col">Rem</th>
               <th scope="col">Customer</th>
              <th scope="col">S/O:</th>
              <th scope="col">P/O</th>
              <th scope="col">Ship To</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>@mdo</td>
            </tr>

            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>@mdo</td>
            </tr>


            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>@mdo</td>
            </tr>


            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>@mdo</td>
            </tr>

             <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>@mdo</td>
            </tr>





            </tbody>
        </table>
    </div>

    <!--------------------------------- Fab Tab----------------------------------

                  <div id="fab"class="tab-pane fade">
                       <nav class="navbar navbar-expand-lg navbar-dark">-->
                         
                                <!--<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/companylogo.png" alt="" /></a>
                                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                                    Menu
                                    <i class="fas fa-bars ml-1"></i>
                                </button>
                                <div class="navbar" id="navbarResponsive">
                                    <ul class="navbar-nav ">
                                        <li class="nav-item" ><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px; " href="#services">All Active</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;" href="#portfolio">This Week</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;" href="#about">Ruben</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;"href="#team">Leo</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;"href="#contact">Pablo</a></li>
                                         <li class="nav-item" ><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px; " href="#services">Stock</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;" href="#portfolio">Rdy 4 Paint</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;" href="#about">At Painters</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;"href="#team">Unscheduled</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;"href="#contact">HFR</a></li>
                                        
                                    </ul>
                                         
                               </div>-->

                              
                          
                      

                         <!-- <table  class="table table-light table-striped " style="width: 100%;">
                                        <thead class="thead-dark">
                                              <tr>
                                                <th scope="col">Build#</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Fab</th>
                                                <th scope="col">Paint</th>
                                                 <th scope="col">Parts</th>
                                                <th scope="col">Qty</th>
                                                <th scope="col">Pulled</th>
                                                <th scope="col">Promised</th>
                                                 <th scope="col">Produce</th>
                                                <th scope="col" style="width: 50%;">Item</th>
                                                <th scope="col">Made</th>
                                                <th scope="col">Rem</th>
                                                 <th scope="col">Customer</th>
                                                <th scope="col">S/O:</th>
                                                <th scope="col">P/O</th>
                                                <th scope="col">Ship To</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>

                                              </tr>
                                              <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                              </tr>

                                              </tbody>
                                          </table>


                  </div>-->
                  <!-------------------------- Admin Tab-------------------------------

                          <div id="admin"class="tab-pane fade">

                              <nav class="navbar navbar-expand-lg navbar-dark">-->
                         
                                <!--<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/companylogo.png" alt="" /></a>
                                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                                    Menu
                                    <i class="fas fa-bars ml-1"></i>
                                </button>
                                <div class="navbar" id="navbarResponsive">
                                    <ul class="navbar-nav ">
                                        <li class="nav-item" ><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px; " href="#services">Information</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;" href="#portfolio">Admin</a></li>
                                        <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: #000000; font-size: 12px;" href="#about">Edit Report</a></li>
                                           
                                            </ul>
                                                 
                                       </div>
                               </nav>


                                <table  class="table table-light table-striped " style="width: 100%;">
                                        <thead class="thead-dark">
                                              <tr>
                                                <th scope="col">Build#</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Fab</th>
                                                <th scope="col">Paint</th>
                                                 <th scope="col">Parts</th>
                                                <th scope="col">Qty</th>
                                                <th scope="col">Pulled</th>
                                                <th scope="col">Promised</th>
                                                 <th scope="col">Produce</th>
                                                <th scope="col" style="width: 50%;">Item</th>
                                                <th scope="col">Made</th>
                                                <th scope="col">Rem</th>
                                                 <th scope="col">Customer</th>
                                                <th scope="col">S/O:</th>
                                                <th scope="col">P/O</th>
                                                <th scope="col">Ship To</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>

                                              </tr>
                                              <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                              </tr>

                                              </tbody>
                                          </table>
                          </div>-->
</div> <!--End Content tabs-->


 <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
         <script src="js/r.js"></script>

        <script>
$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
});
</script>
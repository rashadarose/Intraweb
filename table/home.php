<?php
session_start();
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Credentials: true");
if(isset($_SESSION['Uid'])){
    //echo 'yes';
}else{header("location:../login.php");}
echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> Divine Lighting Access</title>
    <!--<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />-->
    <!-- Font Awesome icons (free version)-->
   
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  </head>
  <!--New Build  Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <!--Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">New Build</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearNewItem()">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Modal Body-->
        <div class="modal-body">
          <form method="post" action="https://divinelighting.net/table/post.php">
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="">Customer</label>
                <input type="text" class="form-control" id="customerName" name="customer" >
              </div>
              <div class="form-group col-md-3">
                <label for="">Sales Order</label>
                <input type="text" class="form-control" id="salesOrderNumber" name="salesorder">
              </div>
              <div class="form-group col-md-3">
                <label for="">Customer PO</label>
                <input type="text" class="form-control" id="customerPurchaseOrder" name="customerpurchaseorder">
              </div>
              <div class="form-group col-md-2">
                <label for="">Status</label>
                <select  class="form-control" id="statusSelect" name="statusselect">
                  <option value="none" selected>Choose Status...</option>
                  <option style="background-color: red;color:white;">1|Rush</option>
                  <option style="background-color: darkred; color:white;">2|Back Orders</option>
                  <option style="background-color: green;color:white;">3|Normal</option>
                  <option style="background-color: yellow; color:black;">4|Waiting On</option>
                  <option style="background-color: darkblue; color:white;">5|Hold4Release</option>
                  <option style="background-color: blue; color:white;">6|Customer Hold</option>
                  <option style="background-color: lightblue; color:black;">7|Credit Hold</option>
                  <option style="background-color: orange; color:white;">8|Pulls</option>
                  <option style="background-color: black; color:white;">9|Entered</option>
                  <option style="background-color: grey; color:white;">10|Cancelled</option>
                  
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="">Item</label>
                <input type="text" class="form-control" id="itemName" name="item" placeholder="">
              </div>
              <div class="form-group col-md-4">
                <label for="inputAddress2">Notes</label>
                <input type="text" class="form-control" id="notes" name="notes" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="inputAddress2">Quantities Ordered</label>
                <input type="text" class="form-control" id="quantityOrdered" name="quantityordered" placeholder="">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-2">
                <label for="">Date Entered</label>
                <input type="text" class="form-control" id="dateEntered" name="dateentered">
              </div>
              <div class="form-group col-md-2">
                <label for="">Promised</label>
                <input type="text" class="form-control" id="promiseDate" name="promisedate">
              </div>
              <div class="form-group col-md-2">
                <label for="">Scheduled</label>
                <input type="text" class="form-control" id="shipDate" name="shipdate">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-2">
                <label for="">Ship To</label>
                <input type="text" class="form-control" id="shipTo" name="shipto">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearNewItem()">Close</button>
          <button type="submit" class="btn btn-info" onclick="saveContinue()" ><i class="fa fa-share" aria-hidden="true"></i> Save/Continue</button>
          <button type="submit" class="btn btn-info" onclick="postItem()" name="loginBtn" id="loginBtn" value="Login"><i class="fa fa-archive" aria-hidden="true"></i> Save Item</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Item  Modal -->
  <div class="modal fad" id="itemModal" aria-labelledby="itemModalLabel" aria-hidden="true"></div>
  
  
  <!-- Back Order Modal   -->             
 <div class="modal fade" id="BOModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-xl">
         <div class="modal-contents">
             <div class="modal-header">
                 <h5 class="modal-title" id="ModalLabel">Back Orders</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button></div>
                     <div class="modal-body" id="backOrderModal"></div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <!--<button type="button" class="btn btn-info">Save changes</button>-->
                         </div>
                        </div>
                    </div>
                </div>
                
                <!--By Modals-->

<!-- By Customer Modal   -->  
 <div class="modal fade" id="ByCustomerModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="ModalLabel">Search By Customer</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button></div>
                     <div class="modal-body">
                         <form>
                            <div class="form-row">
                              <div class="form-group col-md-10" style="padding-left: 16%;">
                                <label for="">Customer</label>
                                <input type="text" class="form-control" id="customerSearch">
                              </div>
                            </div>
                        </form>            
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-info" onclick="getCustomer()">Search</button>
                         </div>
                        </div>
                    </div>
                </div>
                
 <!-- By Sales Order Modal   -->  
 <div class="modal fade" id="BySalesOrderModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="ModalLabel">Search By Sales Order</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button></div>
                     <div class="modal-body">
                          <form>
                            <div class="form-row">
                              <div class="form-group col-md-10" style="padding-left: 16%;">
                                <label for="inputEmail4">Sales Order</label>
                                <input type="text" class="form-control" id="salesOrderSearch">
                              </div>
                            </div>
                        </form>            
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-info" onclick="getSO()">Search</button>
                         </div>
                        </div>
                    </div>
                </div>  
 <!-- By Purchase Order Modal   -->  
 <div class="modal fade" id="ByPurchaseOrderModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="ModalLabel">Search By Purchase Order</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button></div>
                     <div class="modal-body">
                         <form>
                            <div class="form-row">
                              <div class="form-group col-md-10" style="padding-left: 16%;">
                                <label for="inputEmail4">Customer Purchase Order</label>
                                <input type="text" class="form-control" id="purchaseOrderSearch" >
                              </div>
                            </div>
                        </form>         
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-info" onclick="getPO()">Search</button>
                         </div>
                        </div>
                    </div>
                </div>  
  <!-- By Ship To Modal   -->  
 <div class="modal fade" id="ByShipToModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="ModalLabel">Search By Ship To</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button></div>
                     <div class="modal-body">
                         <form>
                            <div class="form-row">
                              <div class="form-group col-md-10" style="padding-left: 16%;">
                                <label for="">Ship To</label>
                                <input type="text" class="form-control" id="shiptoSearch" >
                              </div>
                            </div>
                        </form>     
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-info" onclick="getShipTo()">Search</button>
                         </div>
                        </div>
                    </div>
                </div>                
   <!-- By Item Modal   -->  
 <div class="modal fade" id="ByItemModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="ModalLabel">Search By Item</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button></div>
                     <div class="modal-body">
                         <form>
                            <div class="form-row">
                              <div class="form-group col-md-10" style="padding-left: 16%;">
                                <label for="">Item</label>
                                <input type="text" class="form-control" id="itemSearch">
                              </div>
                            </div>
                        </form>     
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-info" onclick="getItem()" >Search</button>
                         </div>
                        </div>
                    </div>
                </div>                               



<!--Start of Body-->                
    <body>
  <!-- <div>-->
     <div id="searchBar" style="margin-bottom: .5%; margin-top: .5%; padding-left: 5%; padding-right: 5%;">
         <label class="container" style="display: inline; font-size: 12px;">
             <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal" tabindex="-1"><i class="fa fa-plus-square" aria-hidden="true"></i> New Build</button>
             </label>
    	<!-- <label class="container" style="display: inline; font-size: 12px;"><button>New Fab Item</button><span class="checkmark"></span>-->
      <label class="container" style="display: inline; font-size: 12px;">
        <!--<button class="btn btn-sm btn-info" data-toggle="modal" data-target="#BOModal" onclick="getBackOrders()">Back Orders</button>-->
        <button class="btn btn-sm btn-info"  onclick="getBackOrders()"><i class="fa fa-history" aria-hidden="true"></i> Back Orders</button>
      </label>
       <!--<label class="container" style="display: inline; font-size: 12px;">
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">-->
            <!--<button type="button" class="btn btn-secondary">1</button>
            <button type="button" class="btn btn-secondary">2</button>-->
            
       <!-- <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
              <a class="dropdown-item" href="#">Dropdown link</a>
              <a class="dropdown-item" href="#">Dropdown link</a>
            </div>
        </div>
    </div>
    </label>-->
      
     
      <div style="float: right;">
       <label class="container" style="display: inline; font-size: 12px;">
        <button id="refresh" style="margin-left: 0%; margin-bottom: 5%;" class="btn  btn-sm btn-info" onclick="refreshData()" data-toggle="tooltip" data-placement="top" title="Refresh Button"><i class="fas fa-redo fa-md" id="refreshBtn" ></i> Refresh </button>
      </label>
      <form action=".././includes/logout.inc.php" method="post">
      <label class="container" style="display: inline; font-size: 12px;">
      <button style="margin-bottom: 2%;" type="submit" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Logout"><i class="fa fa-user" aria-hidden="true"></i> <span id="fullNameField" style="text-align: center;" value="'.$_SESSION['fullname'].'">'.$_SESSION['fullname'].'</span></button>
      </label>
      </form>
      
      </div>
     </div>
    
    
 
     
      
        <nav class="navbar navbar-expand-lg navbar-dark" style="padding-left: .3%;" >
          <!--<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/companylogo.png" alt="" /></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>-->
          <div class="navbar" id="navbarResponsive" style="padding-left: 5%; padding-right: 5%;">
            <ul class="navbar-nav ">
             <li class="nav-item">
                <a class="nav-link js-scroll-trigger " style="color: #000000; font-size: 12px;"><i class="fa fa-search" aria-hidden="true"></i> Search:</a>
              </li>
           
              <li class="nav-item" id="customerFocus">
                <a class="nav-link js-scroll-trigger nav-itemize " style="color: #000000; font-size: 12px; font-weight: bold;" data-toggle="modal" data-target="#ByCustomerModal">By Customer</a>
              </li>
              <li class="nav-item"> 
                <a class="nav-link js-scroll-trigger nav-itemize" style="color: #000000; font-size: 12px; font-weight: bold;" data-toggle="modal" data-target="#BySalesOrderModal" >By SO#</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger nav-itemize" style="color: #000000; font-size: 12px; font-weight: bold;" data-toggle="modal" data-target="#ByPurchaseOrderModal">By PO#</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger nav-itemize" style="color: #000000; font-size: 12px; font-weight: bold;" data-toggle="modal" data-target="#ByShipToModal">By ShipTo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger nav-itemize" style="color: #000000; font-size: 12px; font-weight: bold;" data-toggle="modal" data-target="#ByItemModal">By Item</a>
              </li>
            
            </ul>
          </div>
        </nav>
      
        
        
        <!--<button onclick="getAll()">Refresh List</button>-->
       <!-- <p >Date: <input type="text" id="datepicker"></p>-->
           
        <div id="getCall" class="table-responsive" style="padding-left: 5%; padding-right: 5%;"></div>
      
    
      <!-- Bootstrap core JS-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Third party plugin JS-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
      <!-- Contact form JS-
            <script src="assets/mail/jqBootstrapValidation.js"></script><script src="assets/mail/contact_me.js"></script>->
    												<!-- Core theme JS-->
      <script src="js/scripts.js"></script>
      <script src="js/r.js"></script>
      <script>
        $(document).ready(function() {
          $(".nav-tabs a").click(function() {
            $(this).tab("show");
          });
          
          $(".ui-datepicker").hide();
          
        
          
         
        });
      </script>
      </body>
    </html>';
    
    
?>
 <script>
    var session = (<?php echo json_encode($_SESSION); ?>);
   /* if(session.fullname == 'Rhonda'){
    $('#refresh').css("margin-left", "51%");
    }*/
    
</script>

<script src="js/access.js"></script>

  

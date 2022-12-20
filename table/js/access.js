let myContent = ''; 

let tableHeader =  "<table class='table table-striped table-bordered table-res'>" +
                   "<thead style='background-color: #81c2cc'><tr><th>BuildID</th><th>Status</th><th>DateEntered</th>"+
                   "<th>Item</th><th>QO</th><th>QM</th><th>QR</th>"+
                   "<th>Customer</th><th>SalesOrder</th><th>PO</th>"+
                    "<th>Completed</th><th>Notes</th><th>ShipTo</th>"+
                   "</thead>" +
                   "<tbody>";
let tableFooter = "</tr></tbody></table>";
let tableContent = " ";  
let backOrderContent = "";
let customerContent = "";

let ra = 'biddognigga';
let newFix = 'newest shit';
let testCommit = 'new commit to test'
const howdy = 5;
<<<<<<< HEAD
let lalal = 'lalala';
=======
let master = 'master';
>>>>>>> master

var BI = 0; //BuildID (Unique Indetifier. for each build)
let dataObj = {}; //Object with all data

//use template literals
//make this a map/hash map
let shipViaObj = {dp: 'Divine (Penske)',
                dd: 'Divine (Dodge)',
                d150: 'Divine (150)',
                db : 'Divine (Budget)',
                ups: 'UPS/UPS Freight',
                fedex: 'Fedex/Fedex Freight',
                cenTran : 'Central Transport',
                cenFre: 'Central Freight',
                saia: 'SAIA',
                sw: 'SouthWestern',
                se: 'SouthEastern',
                aaa: 'AAA Cooper',
                maj: 'Majewski',
                hc: 'HC Trucking',
                ve: 'Vitran Express',
                rl: 'R&L Express',
                rr: 'Roadrunner'} 

 
             
 const month = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];               
                const d = new Date();
                let year = d.getFullYear();
                let day = d.getDate();
                let monName = month[d.getMonth()];
              const mydate = (day+"-"+monName+"-"+(year - 2000));
//staus color map/object/array

//write more comments for the code
//documentation


//This function calls all items from the DB based on BI(BuildID)
   function grabBI(s){
        BI = s.getAttribute("data-id");
         
              $.ajax({
                type: "GET",
                dataType: "json",
                url: "https://divinelighting.net/intraweb/table/get.php?BuildID="+BI,
                success: function(data) {
                    myContent = '';
                    $('#itemMoadl').html(myContent);
                   
                   myContent = "<div class='modal-dialog modal-dialog-centered modal-xl'>"+
                    "<div class='modal-content'>"+
                     "<div class='modal-header'>"+
                    "<h4 class='modal-title' id='itemModalLabel'>Item</h4>"+
                    "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>"+
                    "<span aria-hidden='true'>&times;</span></button></div>"+ 
                    "<div class='modal-body'>"+
                    "<h6 style='margin: 0 auto; width: 250px;'>Sales Order: "+ data[0].SalesOrder +"</h6>"+
                    "<ul class='nav nav-tabs' role='tablist'>"+
                    "<li role='presentation' class='nav-item active'>"+
                    "<a  class='nav-link' href='#home' aria-controls='home' role='tab' data-toggle='tab'>Main</a></li>"+
                    "<li role='presentation' class='nav-item'><a class='nav-link' href='#complete' aria-controls='complete' role='tab' data-toggle='tab'>Completing</a></li>"+
                    "<li role='presentation' class='nav-item'><a class='nav-link' href='#shipping' aria-controls='shipping' role='tab' data-toggle='tab'>Shipping</a></li>"+
                    "<li role='presentation' class='nav-item'><a class='nav-link' href='#audtingTab' aria-controls='audtingTab' role='tab' data-toggle='tab'>Auditing</a></li>"+
                    "</ul><br>"+
                    "<div class='tab-content'>"+
                    
                        "<div role='tabpanel' class='tab-pane active' id='home'>"+
                        
                        "<form id='myForm' method='post'>"+
                        "<div class='form-row'>"+
                        "<div class='form-group col-md-3'>"+
                        "<label>Customer</label>"+
                        "<input class='form-control' id='customerUpdate' name='customerupdate' placeholder='" + data[0].Customer +  "'value='"+data[0].Customer+"'></div>"+
                        "<div class='form-group col-md-3'>"+
                        "<label>Sales Order</label>"+
                        "<input class='form-control' id='orderUpdate' name='orderupdate' placeholder='"+ data[0].SalesOrder +  "'value='"+data[0].SalesOrder+"'></div>"+
                        "<div class='form-group col-md-3'>"+
                        "<label>Customer PO</label>"+
                        "<input class='form-control' id='purchaseOrderUpdate' name='purchaseorderupdate' placeholder='" + data[0].CustomerPurchaseOrder + "'value='"+data[0].CustomerPurchaseOrder+"' ></div>"+
                        "<div class='form-group col-md-2'>"+
                        "<label>Status</label>"+
                        "<select class='form-control' id='statusOption'>"+
                        "<option selected >" + data[0].Status + "</option><option style='background-color: red;color:white;'>1|Rush</option>"+
                        "<option style='background-color: darkred; color:white;'>2|Back Orders</option><option style='background-color: green;color:white;'>3|Normal</option><option style='background-color: yellow; color:black;'>4|Waiting On</option>"+
                        "<option style='background-color: darkblue; color:white;'>5|Hold4Release</option><option style='background-color: blue; color:white;'>6|Customer Hold</option><option style='background-color: lightblue; color:black;'>7|Credit Hold</option>"+
                        "<option style='background-color: orange; color:white;'>8|Pulls</option><option style='background-color: black; color:white;'>9|Entered</option><option style='background-color: grey; color:white;'>10|Cancelled</option></select></div>"+
                        "</div>"+
                        "<div class='form-row'>"+
                        "<div class='form-group col-md-4'>"+
                        "<label>Item</label>"+
                        "<input type='text' class='form-control' id='itemUpdate' name='itemupdate' placeholder='" + data[0].Item + "' value='"+data[0].Item+"'></div>"+
                        "<div class='form-group col-md-4'>"+
                        "<label>Notes</label>"+
                        "<input type='text' class='form-control' id='notesUpdate' name='notesupdate' placeholder='" + data[0].Notes + "' value='"+data[0].Notes+"' ></div>"+
                        "<div class='form-group col-md-2'>"+
                        "<label>Quantities Ordered</label>"+
                        "<input type='text' class='form-control' id='readQuantityOrderedUpdate' name='orderedupdate' placeholder='" + data[0].QuantityOrdered + "' value='"+data[0].QuantityOrdered+"' readonly></div>"+
                        "</div>"+
                        "<div class='form-row'>"+
                        "<div class='form-group col-md-2'>"+
                        "<label>Dates Entered</label>"+
                        "<input type='text' class='form-control' id='dateEnteredUpdate' name='dateenteredupdate' placeholder='" + data[0].DateEntered + "'value='"+data[0].DateEntered+"'></div>"+
                        "<div class='form-group col-md-2'>"+
                        "<label>Promised</label>"+
                        "<input type='text' class='form-control' id='promisedUpdate' name='promiseupdate' placeholder='" + data[0].PromiseDate + "'value='"+data[0].PromiseDate+"'></div>"+
                        "<div class='form-group col-md-2'>"+
                        "<label>Scheduled</label>"+
                        "<input type='text' class='form-control' id='scheduledUpdate' name='scheduledupdate' placeholder='" + data[0].CompletedDate + "'value='"+data[0].CompletedDate+"'></div>"+
                        "</div>"+
                        "<div class='form-row'>"+
                        "<div class='form-group col-md-2'>"+
                        "<label >Ship To</label>"+
                        "<input type='text' class='form-control' id='shipToUpdateRead' name='shiptoupdateread' placeholder='" + data[0].ShipTo + "'value='"+data[0].ShipTo+"' readonly></div>"+
                        "</div>"+
                        "</form>"+ 
                        
                        "</div>"+
                       
                       "<div role='tabpanel' class='tab-pane' id='complete'>"+
                        
                        "<form id='cForm' method='post'>"+
                        "<div class='form-row'>"+
                        "<div class='form-group col-md-1'>"+
                        "<label>Ordered</label>"+
                        "<input type='text' class='form-control' id='quantityOrderedUpdate' name='quantityorderedupdate' placeholder='" + data[0].QuantityOrdered + "' value='"+data[0].QuantityOrdered+"'></div>"+
                        "<div class='form-group col-md-1'>"+
                        "<label>Pulled</label>"+
                        "<input type='text' class='form-control' id='pulledUpdate' name='pulledupdate' placeholder='" + data[0].Pulled + "'value='"+data[0].Pulled+"'></div>"+
                        "<div class='form-group col-md-1'>"+
                        "<label>Made</label>"+
                        "<input type='text' class='form-control' id='quantityMadeUpdate' name='madeupdate' placeholder='" + data[0].QuantityMade + "' value='"+data[0].QuantityMade+"'></div>"+
                        "<div class='form-group col-md-1'>"+
                        "<label>Remain</label>"+
                        "<input type='text' class='form-control' id='quantityRemainUpdate' name='quantityremainupdate' placeholder='" + data[0].QuantityRemaining + "' value='"+ data[0].QuantityRemaining +"'readonly></div>"+
                        "</div>"+
                        /*(parseInt(data[0].QuantityOrdered) - parseInt(data[0].QuantityMade))*/
                        
                        "<div class='form-row'>"+
                        
                         "<div class='form-group col-md-2'>"+
                        "<label>Complete</label>"+
                        "<input type='text' class='form-control' id='completeUpdate' name='completeupdate' placeholder='" + data[0].Completed + "'value='"+data[0].Completed+"' readonly></div>"+
                        
                        "<div class='form-group col-md-2'>"+
                        "<label>Completed Date</label>"+
                        "<input type='text' class='form-control' id='completedateUpdate' name='completedateupdate' placeholder='" + data[0].CompletedDate + "'value='"+data[0].CompletedDate+"'></div>"+
                        
                       
                         /*"<div class='form-group col-md-2'>"+
                        "<label class='form-check-label' for='exampleRadios1'>Complete"+
                          "</label>"+
                        "<input style='margin-left: 4%; margin-top:4%;' class='form-check-input' type='radio' name='exampleRadios' value='"+ data[0].Completed +"' onclick='updateComplete()'>"+
                         
                        "</div>"+*/
                        
                        "</div>"+
                        
                        "<div class='form-row'>"+
                        "<div class='form-group col-md-8'>"+
                         "<button id='togglePro' style='margin-bottom: 1%;' type='button' class='btn btn-success' onclick='toggleProduction()'>Undo Production</button><br>"+
                        
                        "</div>"+
                        
                        "</div>"+
                        
                        "</form>"+
                        
                        "</div>"+
                        
                        "<div role='tabpanel' class='tab-pane' id='shipping'>"+
                        
                        "<form id='jForm' method='post'>"+
                        "<div class='form-row'>"+
                        "<div class='form-group col-md-2'>"+
                        "<label>Ship To</label>"+
                        "<input type='text' class='form-control' id='shipToUpdate' name='shiptoupdate' placeholder='" + data[0].ShipTo + "' value='"+data[0].ShipTo+"'></div>"+
                         "<div class='form-group col-md-2'>"+
                        "<label>Shipped Via</label>"+
                        "<input type='text' class='form-control' id='shipViaUpdate' name='shipviaupdate' placeholder='" + data[0].ShippedVia + "' value='"+data[0].ShippedVia+"'></div>"+
                        "<div class='form-group col-md-2'>"+
                        "<label>Ship Date</label>"+
                        "<input type='text' class='form-control' id='shipDateUpdate' name=shipdateupdate' placeholder='" + data[0].ShipDate + "' value='"+data[0].ShipDate+"'></div>"+
                       
                        "<div class='form-group col-md-2'>"+
                        "<label>Tracking</label>"+
                        "<input type='text' class='form-control' id='trackingUpdate' name='trackingupdate' placeholder='" + data[0].Tracking + "' value='"+data[0].Tracking+"'></div>"+
                        "</div>"+
                        "<div class='form-row' style='padding:1%;'>"+
                 
                        
                        "<div class='form-group form-check col-md-2'>"+
                        "<div class='form-check'>"+
                          "<input class='form-check-input' type='radio' name='exampleRadios' id='Radios1' value='"+shipViaObj.dp+"' onclick='updateShipVia()'>"+
                          "<label class='form-check-label' for='exampleRadios1'>Divine (Penske)"+
                          "</label>"+
                        "</div>"+
                        "<div class='form-check'>"+
                          "<input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios2' value='Divine(Dodge)' onclick='updateShipVia()'>"+
                          "<label class='form-check-label' for='exampleRadios2'>Divine (Dodge)"+
                          "</label>"+
                            "</div>"+
                            "<div class='form-check'>"+
                              "<input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios3' value='Divine(Flatbed)' onclick='updateShipVia()'>"+
                              "<label class='form-check-label' for='exampleRadios3'>Divine (Flatbed)"+
                              "</label>"+
                            "</div>"+
                             "<div class='form-check'>"+
                              "<input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios3' value='Divine(Budget)'onclick='updateShipVia()'>"+
                              "<label class='form-check-label' for='exampleRadios3'>Divine (Budget)"+
                              "</label>"+
                            "</div>"+
                             "<div class='form-check'>"+
                              "<input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios3' value='UPS/UPS Freight' onclick='updateShipVia()'>"+
                              "<label class='form-check-label' for='exampleRadios3'>UPS/UPS Freight"+
                              "</label>"+
                            "</div>"+
                             "<div class='form-check'>"+
                              "<input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios3' value='FedEx/FedEx Freight' onclick='updateShipVia()'>"+
                              "<label class='form-check-label' for='exampleRadios3'>FedEx/FedEx Freight"+
                              "</label>"+
                            "</div>"+
                             "<div class='form-check'>"+
                              "<input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios3' value='SAIA' onclick='updateShipVia()'>"+
                              "<label class='form-check-label' for='exampleRadios3'>SAIA"+
                              "</label>"+
                            "</div>"+
                             "<div class='form-check'>"+
                              "<input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios3' value='Central Transport' onclick='updateShipVia()'>"+
                              "<label class='form-check-label' for='exampleRadios3'>Central Transport"+
                              "</label>"+
                            "</div>"+
                            
                               "<div class='form-check'>"+
                          "<input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios1' value='Central Freight' onclick='updateShipVia()'>"+
                          "<label class='form-check-label' for='exampleRadios1'>Central Freight"+
                          "</label>"+
                        "</div>"+
                         "</div>"+   
                         
                         "<div class='form-group form-check col-md-2'>"+
                       
                        "<div class='form-check'>"+
                          "<input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios1' value='SouthWestern' onclick='updateShipVia()'>"+
                          "<label class='form-check-label' for='exampleRadios1'>SouthWestern"+
                          "</label>"+
                        "</div>"+
                        "<div class='form-check'>"+
                          "<input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios2' value='SouthEastern' onclick='updateShipVia()'>"+
                          "<label class='form-check-label' for='exampleRadios2'>SouthEastern"+
                          "</label>"+
                            "</div>"+
                            "<div class='form-check'>"+
                              "<input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios3' value='AAA Cooper' onclick='updateShipVia()'>"+
                              "<label class='form-check-label' for='exampleRadios3'>AAA Cooper"+
                              "</label>"+
                            "</div>"+
                             "<div class='form-check'>"+
                              "<input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios3' value='Majewski' onclick='updateShipVia()'>"+
                              "<label class='form-check-label' for='exampleRadios3'>Majewski"+
                              "</label>"+
                            "</div>"+
                            "<div class='form-check'>"+
                              "<input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios3' value='HC Trucking' onclick='updateShipVia()'>"+
                              "<label class='form-check-label' for='exampleRadios3'>HC Trucking"+
                              "</label>"+
                            "</div>"+
                             "<div class='form-check'>"+
                              "<input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios3' value='Vitran Express' onclick='updateShipVia()'>"+
                              "<label class='form-check-label' for='exampleRadios3'>Vitran Express"+
                              "</label>"+
                            "</div>"+
                             "<div class='form-check'>"+
                              "<input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios3' value='R&L Carriers' onclick='updateShipVia()'>"+
                              "<label class='form-check-label' for='exampleRadios3'>R&L Carriers"+
                              "</label>"+
                            "</div>"+
                             "<div class='form-check'>"+
                              "<input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios3' value='Roadrunner' onclick='updateShipVia()'>"+
                              "<label class='form-check-label' for='exampleRadios3'>Roadrunner"+
                              "</label>"+
                            "</div>"+
                            "<div class='form-check'>"+
                              "<input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios3' value=' ' onclick='updateShipVia()'>"+
                              "<label class='form-check-label' for='exampleRadios3'>Blank"+
                              "</label>"+
                            "</div>"+
                         "</div>"+     
                       
                        
                        
                        "</div>"+ //end row
                        "</form>"+ //end form
                       
                        "</div>"+
                        
                        "<div role='tabpanel' class='tab-pane' id='audtingTab'>"+
                        
                        "<form id='tForm'>"+
                        "<div class='form-row'>"+
                        "<div class='form-group col-md-2'>"+
                        "<label>Ordered</label>"+
                        "<input type='text' class='form-control' id='quantityOrderedUpdateRead' name='quantityorderedupdateread' placeholder='" + data[0].QuantityOrdered + "' value='"+data[0].QuantityOrdered+"' readonly></div>"+
                        "<div class='form-group col-md-2'>"+
                        "<label>Made</label>"+
                        "<input type='text' class='form-control' id='madeUpdateRead' name='quantitymadeupdate' placeholder='" + data[0].QuantityMade + "'value='"+data[0].QuantityMade+"' readonly></div>"+
                        "<div class='form-group col-md-2'>"+
                        "<label>Remain</label>"+
                        "<input type='text' class='form-control' id='quantityRemainUpdateRead' name='quantityremainupdateread' placeholder='" + data[0].QuantityRemaining + "' value='"+ data[0].QuantityRemaining +"' readonly></div>"+
                        /*"<div class='form-group col-md-2'>"+
                        "<label>BackOrder</label>"+
                        "<input type='text' class='form-control' id='backOrderUpdate' name='backorderupdate' placeholder='" + data[0].NeedsBackOrder + "' value='"+ data[0].NeedsBackOrder +"'></div>"+*/
                         "<div class='form-group col-md-2'>"+
                        "<label>Completed Date</label>"+
                        "<input type='text' class='form-control'  id='completedateUpdateRead' name='completedateupdateread' placeholder='" + data[0].CompletedDate + "' value='"+data[0].CompletedDate+"'readonly></div>"+
                        "</div>"+
                        "<div class='form-row'>"+
                        
                        "<div class='form-group col-md-2'>"+
                        "<label>Audited</label>"+
                        "<input type='text' class='form-control' id='auditedUpdate' name='auditedupdate' placeholder='" + data[0].Audited + "' value='"+data[0].Audited+"' readonly></div>"+
                        
                        "<div class='form-group col-md-2'>"+
                        "<label>Date</label>"+
                        "<input type='text' class='form-control' id='auditedDateUpdate' name='auditeddateupdate' placeholder='" + data[0].AuditedDate + "' value='"+data[0].AuditedDate+"'></div>"+
                        
                        "<div class='form-group col-md-2'>"+
                        "<label>Audited By</label>"+
                        "<input type='text' class='form-control' id='auditedByUpdate' name='auditedbyupdate' placeholder='" + data[0].AuditedBy + "' value='"+data[0].AuditedBy+"'></div>"+
                        
                        
                        
                        /*"<div class='form-group col-md-2'>"+
                        
                        "<button type='submit' class='btn btn-success' name='' onclick='' >Audit</button></div>"+*/
                        "</div>"+
                        "<div class='form-row'>"+
                        "<div class='form-group col-md-2'>"+
                        "<label>Audit Order</label>"+
                        "<button id='toggleAuditbtn' type='button' class='btn btn-success' onclick='toggleAudit()'>Audit Order</button></div>"+
                        
                        "<div class='form-group col-md-2'>"+
                        "<label>Create Back Order</label>"+
                        "<button type='button' class='btn btn-success' name='submit' onclick='createBackOrder()' >Create B/O</button>"+
                        /*"<input type='text' class='form-control'  placeholder='' value=''></div>"+*/
                        "</div>"+
                        "</div>"+
                        "</form>"+
                        
                     
                        "</div>"+
                "</div>"+
                        "<div class='modal-footer'>"+
                            "<button type='button' class='btn btn-secondary btn1' data-dismiss='modal'>Close</button>"+
                              "<button type='button' class='btn btn-info' name='delete' onclick='deleteItem()' ><i class='fa fa-trash' aria-hidden='true'></i> Delete Item</button>"+
                              "<button type='submit' class='btn btn-info' name='submit' onclick='updateItem()' ><i class='fa fa-archive' aria-hidden='true'></i> Save Changes</button>"+
                        "</div>"+
                    "</div>"+
                "</div>"
           
                     $('#itemModal').html(myContent);
                     
                       if($("#completeUpdate").val() == "NO" || $("#completeUpdate").val() == " " ){
                         $("#togglePro").text("Production Done");}
                         
                         if($("#auditedUpdate").val() == "YES" ){
                          $('#toggleAuditbtn').text('Undo Audit');}
               
                    
                     $("#auditedDateUpdate").datepicker({ dateFormat: "dd-M-y" });
                     $( "#dateEnteredUpdate" ).datepicker({ dateFormat: "dd-M-y" });
                     $( "#promisedUpdate" ).datepicker({ dateFormat: "dd-M-y" });
                     $( "#scheduledUpdate" ).datepicker({ dateFormat: "dd-M-y" });
                     $( "#shipDateUpdate" ).datepicker({ dateFormat: "dd-M-y" });
                     $( "#completedateUpdate" ).datepicker({ dateFormat: "dd-M-y" });
                     
                     if($("#auditedDateUpdate").val() == ' '){
                         $("#auditedDateUpdate").val(mydate);
                     }else{}
                    
                    
   
                }
            
            });  
   }   

//This is the main function, it calls (Reads) all items from DB and saves them in dataObj, populates table  
    function getAll() {
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://divinelighting.net/intraweb/table/get.php",
            success: function(data) {
                for (let i = 0; i < data.length; i++) {
                    tableContent += "<tr class='highlight' onclick='grabBI(this)' data-toggle='modal' data-target='#itemModal' data-id='"+ data[i].BuildID +"'>"+ 
                        "<td>" + data[i].BuildID + "</td>" +
                        "<td id='"+ data[i].BuildID +"' class='statusClass'>" + data[i].Status + "</td>" +
                        "<td>" + data[i].DateEntered + "</td>" +
                        "<td>" + data[i].Item + "</td>" +
                        "<td>" + data[i].QuantityOrdered + "</td>" +
                        "<td>" + data[i].QuantityMade + "</td>" +
                        "<td>" + data[i].QuantityRemaining + "</td>" +
                        "<td>" + data[i].Customer + "</td>" +
                        "<td>" + data[i].SalesOrder + "</td>" +
                        "<td>" + data[i].CustomerPurchaseOrder + "</td>" +
                        //"<td>" + data[i].PromiseDate + "</td>" +
                        "<td>" + data[i].Completed + "</td>" +
                        "<td>" + data[i].Notes + "</td>" +
                        "<td>" + data[i].ShipTo + "</td></tr>";
                }
    
                $('#getCall').html(tableHeader + tableContent + tableFooter);
                dataObj = data;
                statusColor(dataObj);
                                
               
                //console.log(dataObj);
                
            }
    
        });
    
    }
    
    function clearNewItem(){
     $('#statusSelect').val("none");
      $('#quantityOrdered').val(' ');
      $('#itemName').val(' ');
      $('#shipDate').val(' ');
      $('#promiseDate').val(' ');
      $('#notes').val(' ');
      $('#customerName').val(' ');
      $('#salesOrderNumber').val(' ');
      $('#customerPurchaseOrder').val(' ');
      //$('#dateEntered').val(' ');
      $('#shipTo').val(' ');
}

function clearSearchItems(){
    $('#customerSearch').val('');
    //$('#salesOrderSearch').val('');
    $('#purchaseOrderSearch').val('');
    $('#shiptoSearch').val('');
    $('#itemSearch').val('');
}

function clearSO(){
   
    $('#salesOrderSearch').val('');
   
}

function toggleProduction(){
    if($('#completeUpdate').val() == 'YES'){
        $('#completeUpdate').val('NO');
        $('#togglePro').text('Production Done');
    }else{$('#completeUpdate').val('YES')
        $('#togglePro').text('Undo Production');
    }
}

function toggleAudit(){
    if($('#auditedUpdate').val() == 'YES'){
        $('#auditedUpdate').val('NO');
        $('#auditedByUpdate').val(' ');
        $('#toggleAuditbtn').text('Audit Order');
    }else{$('#auditedUpdate').val('YES')
        $('#auditedByUpdate').val(session.fullname)
        $('#toggleAuditbtn').text('Undo Audit');
    }
}
 

    
 //This is an ajax call that Creates a new item
  function postItem(){
     let itemInput = $('#itemName').val();
     let customerInput = $('#customerName').val();
     let salesOrderInput = $('#salesOrderNumber').val();
     let customerPurchaseOrderInput = $('#customerPurchaseOrder').val();
     let quantityOrderedInput = $('#quantityOrdered').val();
     let dateEnteredInput = $('#dateEntered').val();
     let promiseDateInput = $('#promiseDate').val();
     let shipDateInput = $('#shipDate').val();
     let shipToInput = $('#shipTo').val();
     let notesInput = $('#notes').val();
     
     let e = document.getElementById("statusSelect");
     let statusInput = e.options[e.selectedIndex].text;
     
     console.log(statusInput.split('|')[0]);

                      
   let accessObj ={statusselect: statusInput.split('|')[0],
                     pulled: ' ',
                     dateentered: dateEnteredInput,
                     item: itemInput,
                     quantityordered: quantityOrderedInput,
                     quantitymade : ' ',
                     quantityremaining: ' ',
                     customer: customerInput,
                     salesorder: salesOrderInput,
                     promisedate: promiseDateInput,
                     notes: notesInput,
                     needbackorder: ' ',
                     completed: ' ',
                     completeddate: ' ',
                     shipto: shipToInput,
                     shipdate: shipDateInput,
                     shipvia: ' ',
                     tracking: ' ',
                     audited: ' ',
                     auditeddate: ' ',
                     auditedby: ' ',
                     isbackorder: ' ',
                     customerpurchaseorder: customerPurchaseOrderInput};
     clearNewItem();
     $('#exampleModal').modal('hide');
     
             $.ajax({
                    type: "POST",
                    url: "https://divinelighting.net/intraweb/table/post.php",
                    data: accessObj,
                    success: function(response)
                    {  
                        
                        
                    }
                   
               });
}

  function saveContinue(){
      
     let itemInput = $('#itemName').val();
     let customerInput = $('#customerName').val();
     let salesOrderInput = $('#salesOrderNumber').val();
     let customerPurchaseOrderInput = $('#customerPurchaseOrder').val();
     let quantityOrderedInput = $('#quantityOrdered').val();
     let dateEnteredInput = $('#dateEntered').val();
     let promiseDateInput = $('#promiseDate').val();
     let shipDateInput = $('#shipDate').val();
     let shipToInput = $('#shipTo').val();
     let notesInput = $('#notes').val();
     
     let e = document.getElementById("statusSelect");
     let statusInput = e.options[e.selectedIndex].text;
     
                      
   let accessObj ={statusselect: statusInput.split('|')[0],
                     pulled: ' ',
                     dateentered: dateEnteredInput,
                     item: itemInput,
                     quantityordered: quantityOrderedInput,
                     quantitymade : ' ',
                     quantityremaining: ' ',
                     customer: customerInput,
                     salesorder: salesOrderInput,
                     promisedate: promiseDateInput,
                     notes: notesInput,
                     needbackorder: ' ',
                     completed: ' ',
                     completeddate: ' ',
                     shipto: shipToInput,
                     shipdate: shipDateInput,
                     shipvia: ' ',
                     tracking: ' ',
                     audited: ' ',
                     auditeddate: ' ',
                     auditedby: ' ',
                     isbackorder: ' ',
                     customerpurchaseorder: customerPurchaseOrderInput};

    
             $.ajax({
                    type: "POST",
                    url: "https://divinelighting.net/intraweb/table/post.php",
                    data: accessObj,
                    success: function(response)
                    {  
                     
                    }
                   
                      
               });
               
                     $('#quantityOrdered').val(' ');
                      $('#itemName').val(' ');
                      $('#shipDate').val(' ');
                      $('#promiseDate').val(' ');
                      $('#notes').val(' ');
}


 function updateItem(){
     let itemUpdate = $('#itemUpdate').val();
     let customerUpdate = $('#customerUpdate').val();
     let salesOrderUpdate = $('#orderUpdate').val();
     let customerPurchaseOrderUpdate = $('#purchaseOrderUpdate').val();
     let quantityOrderedUpdate = $('#quantityOrderedUpdate').val();
     let dateEnteredUpdate = $('#dateEnteredUpdate').val();
     let promiseDateUpdate = $('#promisedUpdate').val();
     let shipDateUpdate = $('#shipDateUpdate').val();
     let shipToUpdate = $('#shipToUpdate').val();
     let pulledUpdate = $('#pulledUpdate').val();
     let quantityMadeUpdate = $('#quantityMadeUpdate').val();
     let completeUpdate =  $('#completeUpdate').val();
     let completedateUpdate = $('#completedateUpdate').val();
     let shipViaUpdate  = $('#shipViaUpdate').val();
     let trackingUpdate = $('#trackingUpdate').val();
     let quantityRemainUpdate = $('#quantityOrderedUpdate').val() - $('#quantityMadeUpdate').val(); 
     let auditedUpdate = $('#auditedUpdate').val();
     let auditedDateUpdate = $('#auditedDateUpdate').val();
     let auditedByUpdate = $('#auditedByUpdate').val(); 
     let notesUpdate = $('#notesUpdate').val();
     let backOrderUpdate = $('#backOrderUpdate').val();
    
     let e = document.getElementById("statusOption");
     let statusOption = e.options[e.selectedIndex].text;
     
     let updateObj ={item: itemUpdate,
                  customer: customerUpdate,
                  status: statusOption.split('|')[0],
                  salesorder: salesOrderUpdate,
                  customerpurchaseorder: customerPurchaseOrderUpdate,
                  quantityordered: quantityOrderedUpdate,
                  dateentered: dateEnteredUpdate,
                  promisedate: promiseDateUpdate,
                  shipdate: shipDateUpdate,
                  shipto: shipToUpdate,
                  shipvia: shipViaUpdate,
                  pulled: pulledUpdate,
                  quantitymade: quantityMadeUpdate,
                  remain: quantityRemainUpdate,
                  complete: completeUpdate,
                  completedate: completedateUpdate,
                  tracking: trackingUpdate,
                  audited: auditedUpdate,
                  auditdate: auditedDateUpdate,
                  auditedby: auditedByUpdate,
                  notes: notesUpdate,
                  backorder: backOrderUpdate,
                  bi: BI};
             
                 //console.log(updateObj.itemupdate);
                 let radioValue= $("input[type='radio']:checked").val();
                 console.log(radioValue);
                 console.log(statusOption.split('|')[0]);
                 $('#itemModal').modal('hide');
                 setTimeout(() => {
                    //refreshData();
                    getSO();
                }, "500")
     
   $.ajax({
                    type: "POST",
                    url: "https://divinelighting.net/intraweb/table/put.php/?BuildID="+BI,
                    data: updateObj,
                    success: function(response)
                    {
                        //refreshData();
                       
                    }
                   //push data into dataObj
                   
               });

}


function createBackOrder(){
     let itemUpdate = $('#itemUpdate').val();
     let customerUpdate = $('#customerUpdate').val();
     let salesOrderUpdate = $('#orderUpdate').val();
     let customerPurchaseOrderUpdate = $('#purchaseOrderUpdate').val();
     let quantityOrderedUpdate = $('#quantityOrderedUpdate').val();
     let dateEnteredUpdate = $('#dateEnteredUpdate').val();
     let promiseDateUpdate = $('#promisedUpdate').val();
     let shipDateUpdate = $('#shipDateUpdate').val();
     let shipToUpdate = $('#shipToUpdate').val();
     let pulledUpdate = $('#pulledUpdate').val();
     let quantityMadeUpdate = $('#quantityMadeUpdate').val();
     let completeUpdate =  $('#completeUpdate').val();
     let completedateUpdate = $('#completedateUpdate').val();
     let shipViaUpdate  = $('#shipViaUpdate').val();
     let trackingUpdate = $('#trackingUpdate').val();
     let quantityRemainUpdate = $('#quantityRemainUpdate').val(); 
     let auditedUpdate = $('#auditedUpdate').val();
     let auditedDateUpdate = $('#auditedDateUpdate').val();
     let auditedByUpdate = $('#auditedByUpdate').val(); 
     let notesUpdate = $('#notesUpdate').val();
     let backOrderUpdate = $('#backOrderUpdate').val();
    
     let e = document.getElementById("statusOption");
     let statusOption = e.options[e.selectedIndex].text;
     
     let boObj ={item: itemUpdate,
                  customer: customerUpdate,
                  status: statusOption.split('|')[0],
                  salesorder: salesOrderUpdate,
                  customerpurchaseorder: customerPurchaseOrderUpdate,
                  quantityordered: quantityRemainUpdate,
                  dateentered: dateEnteredUpdate,
                  promisedate: promiseDateUpdate,
                  shipdate: shipDateUpdate,
                  shipto: shipToUpdate,
                  shipvia: shipViaUpdate,
                  pulled: pulledUpdate,
                  quantitymade: '',
                  remain: '',
                  complete: completeUpdate,
                  completedate: completedateUpdate,
                  tracking: trackingUpdate,
                  audited: auditedUpdate,
                  auditdate: auditedDateUpdate,
                  auditedby: auditedByUpdate,
                  notes: notesUpdate,
                  backorder: backOrderUpdate,
                  bi: BI};
             
                 //console.log('hello');
                 /*let radioValue= $("input[type='radio']:checked").val();
                 console.log(radioValue);
                 console.log(statusOption.split('|')[0]);
                 $('#itemModal').modal('hide');
                 setTimeout(() => {
                    refreshData();
                }, "1000")*/
     
   $.ajax({
                    type: "POST",
                    url: "https://divinelighting.net/intraweb/table/post.php",
                    data: boObj,
                    success: function(response)
                    {
                        //refreshData();
                       
                    }
                   //push data into dataObj
                   
               });
//refreshData();
 //getAll();
 // make a new php or use post.php
}

//This is an ajax call that Deletes an item
 function deleteItem(){
 
      var confirmation = confirm("ARE YOU SURE YOU WANT TO DELTE THIS ITEM?");
      
      let deleteObj ={bi: BI};
    
    if (confirmation) {
             $('#itemModal').modal('hide');
             
              setTimeout(() => {
                    //refreshData();
                    getSO();
                }, "500")
             
             
         $.ajax({
                    type: "POST",
                    url: "https://divinelighting.net/intraweb/table/delete.php/?BuildID="+BI,
                    data: deleteObj,
                    success: function(response)
                    {   
                         alert('removed');
                         
                     
                   }
                    
                   
               })
               
              
            }
           console.log('working');
        // refreshData()
           
     
 }
 
//This is a function that gets all Back Orders
 function getBackOrders(){
      backOrderContent = " ";
      $('#getCall').html(backOrderContent);
      //$('#backOrderModal').html(backOrderContent);
      
     for(let i=0; i < dataObj.length; i++ ){
         if(dataObj[i].QuantityRemaining != 0 || dataObj[i].QuantityRemaining == ' '){
           
            backOrderContent += "<tr class='highlight' onclick='grabBI(this)' data-toggle='modal' data-target='#itemModal' data-id='"+ dataObj[i].BuildID +"'>"+ 
                        "<td>" + dataObj[i].BuildID + "</td>" +
                        //"<td>" + dataObj[i].Status + "</td>" +
                        "<td id='"+ dataObj[i].BuildID +"' class='statusClass'>" + dataObj[i].Status + "</td>" +
                        "<td>" + dataObj[i].DateEntered + "</td>" +
                        "<td>" + dataObj[i].Item + "</td>" +
                        "<td>" + dataObj[i].QuantityOrdered + "</td>" +
                        "<td>" + dataObj[i].QuantityMade + "</td>" +
                        "<td>" + dataObj[i].QuantityRemaining + "</td>" +
                        "<td>" + dataObj[i].Customer + "</td>" +
                        "<td>" + dataObj[i].SalesOrder + "</td>" +
                        "<td>" + dataObj[i].CustomerPurchaseOrder + "</td>" +
                       // "<td>" + dataObj[i].PromiseDate + "</td>" +
                        "<td>" + dataObj[i].Completed + "</td>" +
                        "<td>" + dataObj[i].Notes + "</td>" +
                        "<td>" + dataObj[i].ShipTo + "</td></tr>";
         }
     }
     //$('#backOrderModal').html(tableHeader + backOrderContent + tableFooter);
     $('#getCall').html(tableHeader + backOrderContent + tableFooter);
     statusColor(dataObj);
 }


//This is a function that gets all Customers
 function getCustomer(){
      var x = $("#customerSearch").val();
      customerContent = "";
      $('#getAll').html(customerContent);
     for(let i=0; i < dataObj.length; i++ ){
        // if(dataObj[i].Customer == x){
        if((dataObj[i].Customer).toLowerCase().includes(x.toLowerCase())){ 
             console.log(x + "true")
             customerContent += "<tr class='highlight' onclick='grabBI(this)' data-toggle='modal' data-target='#itemModal' data-id='"+ dataObj[i].BuildID +"'>"+ 
                        "<td>" + dataObj[i].BuildID + "</td>" +
                        //"<td>" + dataObj[i].Status + "</td>" +
                        "<td id='"+ dataObj[i].BuildID +"' class='statusClass'>" + dataObj[i].Status + "</td>" +
                        "<td>" + dataObj[i].DateEntered + "</td>" +
                        "<td>" + dataObj[i].Item + "</td>" +
                        "<td>" + dataObj[i].QuantityOrdered + "</td>" +
                        "<td>" + dataObj[i].QuantityMade + "</td>" +
                        "<td>" + dataObj[i].QuantityRemaining + "</td>" +
                        "<td>" + dataObj[i].Customer + "</td>" +
                        "<td>" + dataObj[i].SalesOrder + "</td>" +
                        "<td>" + dataObj[i].CustomerPurchaseOrder + "</td>" +
                       // "<td>" + dataObj[i].PromiseDate + "</td>" +
                        "<td>" + dataObj[i].Completed + "</td>" +
                        "<td>" + dataObj[i].Notes + "</td>" +
                        "<td>" + dataObj[i].ShipTo + "</td></tr>";
             
         }
         else{console.log('No Results Found');}
     } 
      $('#ByCustomerModal').modal('hide');
      $('#getCall').html(tableHeader + customerContent + tableFooter);
      statusColor(dataObj);
      
 }
 
//This is a function that gets all Sales Orders
/*  function getSO(){
      var y = $("#salesOrderSearch").val();
      tableContent = "";
      $('#getAll').html(tableContent);
     for(let i=0; i < dataObj.length; i++ ){
         if(dataObj[i].SalesOrder == y){
             console.log(y + "true")
             tableContent += "<tr class='highlight' onclick='grabBI(this)' data-toggle='modal' data-target='#itemModal' data-id='"+ dataObj[i].BuildID +"'>"+ 
                        "<td>" + dataObj[i].BuildID + "</td>" +
                        //"<td>" + dataObj[i].Status + "</td>" +
                        "<td id='"+ dataObj[i].BuildID +"' class='statusClass'>" + dataObj[i].Status + "</td>" +
                        "<td>" + dataObj[i].DateEntered + "</td>" +
                        "<td>" + dataObj[i].Item + "</td>" +
                        "<td>" + dataObj[i].QuantityOrdered + "</td>" +
                        "<td>" + dataObj[i].QuantityMade + "</td>" +
                        //"<td>" + dataObj[i].QuantityRemaining + "</td>" +
                        "<td>" + dataObj[i].Customer + "</td>" +
                        "<td>" + dataObj[i].SalesOrder + "</td>" +
                        "<td>" + dataObj[i].CustomerPurchaseOrder + "</td>" +
                        //"<td>" + dataObj[i].PromiseDate + "</td>" +
                        "<td>" + dataObj[i].Completed + "</td>" +
                        "<td>" + dataObj[i].CompletedDate + "</td>" +
                        "<td>" + dataObj[i].ShipTo + "</td></tr>";
             
         }
         else{console.log('No Results Found');}
     }
      $('#BySalesOrderModal').modal('hide');
      $('#getCall').html(tableHeader + tableContent + tableFooter);
      statusColor(dataObj);
 }*/
 
 
  function getSO() {
      var y = $("#salesOrderSearch").val();
      tableContent = "";
      $('#getAll').html(tableContent);
      
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://divinelighting.net/intraweb/table/get.php",
            success: function(data) {
                for (let i = 0; i < data.length; i++) {
                    if(data[i].SalesOrder === y){
                    tableContent += "<tr class='highlight' onclick='grabBI(this)' data-toggle='modal' data-target='#itemModal' data-id='"+ data[i].BuildID +"'>"+ 
                        "<td>" + data[i].BuildID + "</td>" +
                        "<td id='"+ data[i].BuildID +"' class='statusClass'>" + data[i].Status + "</td>" +
                        "<td>" + data[i].DateEntered + "</td>" +
                        "<td>" + data[i].Item + "</td>" +
                        "<td>" + data[i].QuantityOrdered + "</td>" +
                        "<td>" + data[i].QuantityMade + "</td>" +
                        "<td>" + data[i].QuantityRemaining + "</td>" +
                        "<td>" + data[i].Customer + "</td>" +
                        "<td>" + data[i].SalesOrder + "</td>" +
                        "<td >" + data[i].CustomerPurchaseOrder + "</td>" +
                        //"<td>" + data[i].PromiseDate + "</td>" +
                        "<td id='b"+ data[i].BuildID +"'>" + data[i].Completed + "</td>" +
                        "<td>" + data[i].Notes + "</td>" +
                        "<td>" + data[i].ShipTo + "</td></tr>";}
                }
    
                    $('#BySalesOrderModal').modal('hide');
                    $('#getCall').html(tableHeader + tableContent + tableFooter);
                    statusColor(data);
                    
                
            }
    
        });
    
    }
 
/*Get PO (purchase order) stub*/ 
 function getPO(){
      var p = $("#purchaseOrderSearch").val();
      tableContent = "";
      $('#getAll').html(tableContent);
     for(let i=0; i < dataObj.length; i++ ){
         if((dataObj[i].CustomerPurchaseOrder).toLowerCase().includes(p.toLowerCase())||dataObj[i].CustomerPurchaseOrder == p){
             console.log(p + "true")
             tableContent += "<tr class='highlight' onclick='grabBI(this)' data-toggle='modal' data-target='#itemModal' data-id='"+ dataObj[i].BuildID +"'>"+ 
                        "<td>" + dataObj[i].BuildID + "</td>" +
                        //"<td>" + dataObj[i].Status + "</td>" +
                        "<td id='"+ dataObj[i].BuildID +"' class='statusClass '>" + dataObj[i].Status + "</td>" +
                        "<td>" + dataObj[i].DateEntered + "</td>" +
                        "<td>" + dataObj[i].Item + "</td>" +
                        "<td>" + dataObj[i].QuantityOrdered + "</td>" +
                        "<td>" + dataObj[i].QuantityMade + "</td>" +
                        "<td>" + dataObj[i].QuantityRemaining + "</td>" +
                        "<td>" + dataObj[i].Customer + "</td>" +
                        "<td>" + dataObj[i].SalesOrder + "</td>" +
                        "<td>" + dataObj[i].CustomerPurchaseOrder + "</td>" +
                       // "<td>" + dataObj[i].PromiseDate + "</td>" +
                        "<td>" + dataObj[i].Completed + "</td>" +
                        "<td>" + dataObj[i].Notes + "</td>" +
                        "<td>" + dataObj[i].ShipTo + "</td></tr>";
             
         }
         else{console.log('No Results Found');}
     }
      $('#ByPurchaseOrderModal').modal('hide');
      $('#getCall').html(tableHeader + tableContent + tableFooter);
      statusColor(dataObj);
      
 }


/*Get ShipTo stub */
 function getShipTo(){
    var s = $("#shiptoSearch").val();
      tableContent = "";
      $('#getAll').html(tableContent);
     for(let i=0; i < dataObj.length; i++ ){
         //if(dataObj[i].ShipTo == s){
          if((dataObj[i].ShipTo).toLowerCase().includes(s.toLowerCase())){
             console.log(s + "true")
             tableContent += "<tr class='highlight' onclick='grabBI(this)' data-toggle='modal' data-target='#itemModal' data-id='"+ dataObj[i].BuildID +"'>"+ 
                        "<td>" + dataObj[i].BuildID + "</td>" +
                        //"<td>" + dataObj[i].Status + "</td>" +
                        "<td id='"+ dataObj[i].BuildID +"' class='statusClass'>" + dataObj[i].Status + "</td>" +
                        "<td>" + dataObj[i].DateEntered + "</td>" +
                        "<td>" + dataObj[i].Item + "</td>" +
                        "<td>" + dataObj[i].QuantityOrdered + "</td>" +
                        "<td>" + dataObj[i].QuantityMade + "</td>" +
                        "<td>" + dataObj[i].QuantityRemaining + "</td>" +
                        "<td>" + dataObj[i].Customer + "</td>" +
                        "<td>" + dataObj[i].SalesOrder + "</td>" +
                        "<td>" + dataObj[i].CustomerPurchaseOrder + "</td>" +
                        //"<td>" + dataObj[i].PromiseDate + "</td>" +
                        "<td>" + dataObj[i].Completed + "</td>" +
                        "<td>" + dataObj[i].Notes + "</td>" +
                        "<td>" + dataObj[i].ShipTo + "</td></tr>";
             
         }
         else{console.log('No Results Found');}
     }
     $('#ByShipToModal').modal('hide');
      $('#getCall').html(tableHeader + tableContent + tableFooter); 
      statusColor(dataObj);
     
 }


/*Get Item stub */
 function getItem(){
     var m = $("#itemSearch").val();
      tableContent = "";
      $('#getAll').html(tableContent);
     for(let i=0; i < dataObj.length; i++ ){
        // if(dataObj[i].Item == m){
        if((dataObj[i].Item).toLowerCase().includes(m.toLowerCase())){
             console.log(m + "true")
             tableContent += "<tr class='highlight' onclick='grabBI(this)' data-toggle='modal' data-target='#itemModal' data-id='"+ dataObj[i].BuildID +"'>"+ 
                        "<td>" + dataObj[i].BuildID + "</td>" +
                        //"<td>" + dataObj[i].Status + "</td>" +
                        "<td id='"+ dataObj[i].BuildID +"' class='statusClass'>" + dataObj[i].Status + "</td>" +
                        "<td>" + dataObj[i].DateEntered + "</td>" +
                        "<td>" + dataObj[i].Item + "</td>" +
                        "<td>" + dataObj[i].QuantityOrdered + "</td>" +
                        "<td>" + dataObj[i].QuantityMade + "</td>" +
                        "<td>" + dataObj[i].QuantityRemaining + "</td>" +
                        "<td>" + dataObj[i].Customer + "</td>" +
                        "<td>" + dataObj[i].SalesOrder + "</td>" +
                        "<td>" + dataObj[i].CustomerPurchaseOrder + "</td>" +
                        //"<td>" + dataObj[i].PromiseDate + "</td>" +
                        "<td>" + dataObj[i].Completed + "</td>" +
                        "<td>" + dataObj[i].Notes + "</td>" +
                        "<td>" + dataObj[i].ShipTo + "</td></tr>";
             
         }
         else{console.log('No Results Found');}
     }
      $('#ByItemModal').modal('hide');
      $('#getCall').html(tableHeader + tableContent + tableFooter); 
      statusColor(dataObj);
      
 }
 
 function refreshData(){
  
    tableContent = "";
    $('#getAll').html(tableContent);
    /* for (let i = 0; i < dataObj.length; i++) {
                    tableContent += "<tr class='highlight' onclick='grabBI(this)' data-toggle='modal' data-target='#itemModal' data-id='"+ dataObj[i].BuildID +"'>"+ 
                        "<td>" + dataObj[i].BuildID + "</td>" +
                      
                        "<td id='"+ dataObj[i].BuildID +"' class='statusClass'>" + dataObj[i].Status + "</td>" +
                        "<td>" + dataObj[i].DateEntered + "</td>" +
                        "<td>" + dataObj[i].Item + "</td>" +
                        "<td>" + dataObj[i].QuantityOrdered + "</td>" +
                        "<td>" + dataObj[i].QuantityMade + "</td>" +
                       
                        "<td>" + dataObj[i].Customer + "</td>" +
                        "<td>" + dataObj[i].SalesOrder + "</td>" +
                        "<td>" + dataObj[i].CustomerPurchaseOrder + "</td>" +
                       
                        "<td>" + dataObj[i].Completed + "</td>" +
                        "<td>" + dataObj[i].CompletedDate + "</td>" +
                        "<td>" + dataObj[i].ShipTo + "</td></tr>";
                      if(dataObj[i].NeedsBackOrder == 'TRUE' && dataObj[i].Status == '1' ){
                     $('#'+dataObj[i].BuildID+'').removeClass("green");
                   }  
                }
              
                $('#getCall').html(tableHeader + tableContent + tableFooter);*/ //just refreshes thew same info
                
                getAll();//calls db
                statusColor(dataObj);
 }
 
 //make a switch case
 function statusColor(obj){
     
     //$("td:first-child").addClass("green");
     //use a map/hash map for colors and numbers or array
     for (let i = 0; i < obj.length; i++) {
         if(obj[i].Status == '1'){
             //console.log(typeof(obj[i].Status),obj[i].Status)
             $('#'+obj[i].BuildID+'').addClass("red");
         }
        else if(obj[i].Status == "2"){
             //console.log(typeof(obj[i].Status),obj[i].Status)
             $('#'+obj[i].BuildID+'').addClass("darkred");
         }
         else if(obj[i].Status == "3"){
             //console.log(typeof(obj[i].Status),obj[i].Status)
             //$('#'+obj[i].BuildID+'').removeClass("green");
             $('#'+obj[i].BuildID+'').addClass("green");
         }
         else if(obj[i].Status == "4"){
             //console.log(typeof(obj[i].Status),obj[i].Status)
             //$('#'+obj[i].BuildID+'').removeClass("yellow");
             $('#'+obj[i].BuildID+'').addClass("yellow");
         }
          else if(obj[i].Status == '5'){
             //console.log(typeof(obj[i].Status),obj[i].Status)
             $('#'+obj[i].BuildID+'').addClass("darkblue");
            
         }
         else if(obj[i].Status == '6'){
             //console.log(typeof(obj[i].Status),obj[i].Status)
             $('#'+obj[i].BuildID+'').addClass("blue");
            
         }
         else if(obj[i].Status == '7'){
             //console.log(typeof(obj[i].Status),obj[i].Status)
             $('#'+obj[i].BuildID+'').addClass("lightblue");
            
         }
         else if(obj[i].Status == '8'){
             //console.log(typeof(obj[i].Status),obj[i].Status)
             $('#'+obj[i].BuildID+'').addClass("orange");
            
         }
         else if(obj[i].Status == '9'){
             //console.log(typeof(obj[i].Status),obj[i].Status)
             $('#'+obj[i].BuildID+'').addClass("black");
            
         }
         else if(obj[i].Status == '10'){
             //console.log(typeof(obj[i].Status),obj[i].Status)
             $('#'+obj[i].BuildID+'').addClass("grey");
            
         }
         else if(obj[i].Status == null){
             //console.log(typeof(obj[i].Status),obj[i].Status)
             //$('#'+obj[i].BuildID+'').removeClass("green");
             //$('#'+obj[i].BuildID+'').addClass("blue");
         }
         else{}
         
         if(obj[i].Audited === 'YES'){
             //console.log(typeof(obj[i].Status),obj[i].Status)
             $('#b'+ obj[i].BuildID +'').addClass("green");
         }
         
  }      
 }
 
//Main call gets all items when pages loads
getAll();


//Date picker calls
$( "#dateEntered" ).datepicker({ dateFormat: "dd-M-y" });
$( "#promiseDate" ).datepicker({ dateFormat: "dd-M-y" });
$( "#shipDate" ).datepicker({ dateFormat: "dd-M-y" });


    $("#dateEntered").val(mydate);
  
                    
 
//makes these one function
  $('#ByCustomerModal').on('shown.bs.modal', function () {
    $('#customerSearch').focus();
});

$('#BySalesOrderModal').on('shown.bs.modal', function () {
    $('#salesOrderSearch').focus();
});  

$('#ByPurchaseOrderModal').on('shown.bs.modal', function () {
    $('#purchaseOrderSearch').focus();
}); 

$('#ByShipToModal').on('shown.bs.modal', function () {
    $('#shiptoSearch').focus();
});  

$('#ByItemModal').on('shown.bs.modal', function () {
    $('#itemSearch').focus();
});  
 
//makes these one function
//Fire search Functions on Enterpress
$('#customerSearch').keypress(function (e) {
  if (e.which == 13) {
    getCustomer();
    clearSearchItems();
     e.preventDefault();
  }
});

$('#salesOrderSearch').keypress(function (e) {
  if (e.which == 13) {
    getSO();
    clearSearchItems();
     e.preventDefault();
  }
});

$('#purchaseOrderSearch').keypress(function (e) {
  if (e.which == 13) {
    getPO();
    clearSearchItems();
     e.preventDefault();
  }
});

$('#shiptoSearch').keypress(function (e) {
  if (e.which == 13) {
    getShipTo()
    clearSearchItems();
     e.preventDefault();
  }
});

$('#itemSearch').keypress(function (e) {
  if (e.which == 13) {
    getItem();
    clearSearchItems();
     e.preventDefault();
  }
});


function updateShipVia(){
 if($('input[type="radio"]:checked')) {
    $('#shipViaUpdate').val($('input[type="radio"]:checked').val());
  }
        
};

function updateComplete(){
 if($('input[type="radio"]:checked')) {
    $('#completeUpdate').val("TRUE");
  }
  else{ $('#completeUpdate').val("FALSE");}
        
};

//fix table quantity ordered
/*
UPDATE tblBuilds
SET QuantityRemaining = QuantityOrdered - QuantityMade

UPDATE tblBuilds
SET QuantityRemaining = ABS(QuantityRemaining)
where QuantityRemaining < 0
*/

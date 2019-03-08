<?php 
session_start();
include_once '../../templates/api/api_params.php';
include_once '../../templates/api/api_js.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin : Live Support</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/dist/sb-admin-2.css" rel="stylesheet">
    <!-- Bootstrap Toggle -->
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <div id="wrapper">

        <?php include_once 'templates/panelheader.php'; ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header"><b>Customers - Create New Order</b></h4>
                </div>
            </div>	
			<div class="row">
			   <div class="col-lg-6">
			     <div id="customer-createNewOrder-emailOrCustomerId-warnings" class="form-group"></div>
			   </div>
			</div>	
			<div class="row">  
               <div class="col-lg-6">
				  <div class="input-group">
				    <input type="text" id="customer-createNewOrder-emailOrCustomerId" class="form-control" placeholder="Enter Customer Email Address/ Customer Id"/>
					<span class="input-group-addon curpoint" onclick="javascript:customer_createNewOrder_getOrderForm();"><b>Get Order Form</b></span>
				  </div>
			   </div>
			</div>
			<div id="customer-createNewOrder-form" class="hide-block">
			  <div id="customer-createNewOrder-form-customerInfo"></div>
			<div class="row mtop15p">
                <div class="col-lg-12">
				  <hr/><div class="pad3" style="background-color:#eee;"><h5><b>&nbsp;&nbsp;ORDER INFORMATION</b></h5></div><hr/>
				</div>
			</div>
			<div class="row mtop15p">
                <div class="col-lg-6">
				
				 <!-- Topic : Start -->
				 <div class="col-lg-12">
				 <div class="form-group">
					<label>Topic</label>
					<input id="createNewOrder-topic" type="text" class="form-control" placeholder="Enter your Topic Title"/>
				 </div>
				 </div>
				 <!-- Topic : End -->
				 
				 <!-- Topic Description : Start -->
				 <div class="col-lg-12">
				  <div class="form-group">
					<label>Topic Description</label>
					<textarea id="createNewOrder-topicDesc" class="form-control" placeholder="Enter Topic Description"></textarea>
				  </div>
				 </div>
				 <!-- Topic Description : End -->
				 
				</div>
				<div class="col-lg-6">
				   
				 <!-- Expected Time to complete : Start -->
				 <div class="col-lg-12">
				 <div class="form-group">
					<label>Expected Time to complete</label>
					<div class="container-fluid">
					  <div class="row">
						<div class="col-xs-6 pad0">
							<input id="createNewOrder-expdate" type="date" class="form-control"/>
						</div><!-- col-xs-6 -->
						<div class="col-xs-6 pad0">
							<input id="createNewOrder-exptime" type="time" class="form-control"/>
						</div><!-- col-xs-6 -->
					  </div><!-- row -->
					</div><!-- container-fluid -->
				 </div>
				 </div>
				 <!-- Expected Time to complete : End -->
				 
				 <!-- Type of work : Start -->
				 <div class="col-lg-6">
				 <div class="form-group">
				   <label>Type of work</label>
				   <select id="createNewOrder-typeOfWork" class="form-control" onchange="javascript:createNewOrder_typeOfWork();">
					 <option value="">Select type of work</option>
					 <option value="DOCUMENT">Document</option>
					 <option value="WEB_DESIGN">Web Design</option>
					 <option value="QUIZ">Quiz</option>
					 <option value="OTHER">Other</option> 
					</select>
				 </div>
				 </div>
				 <!-- Type of work : End -->
				 
				 <!-- Type of work(Dependency) : Start -->
				 <div class="col-lg-6">
				   <div id="createNewOrder-div-wordcount" class="form-group hide-block">
					 <label>Word Count</label>
				     <input id="createNewOrder-wordcount" type="text" class="form-control" placeholder="Enter your word count"/>
				   </div>

				   <div id="createNewOrder-div-pleaseSpecify" class="form-group hide-block">
					 <label>Please Specify</label>
					 <input id="createNewOrder-pleaseSpecify" type="text" class="form-control" placeholder="Enter your choice"/>
				   </div>
				 </div>
				 <!-- Type of work(Dependency) : End -->
				 
				  
				</div>
			</div>
			<div class="row">
                <div class="col-lg-12">
				  <hr/><div class="pad3" style="background-color:#eee;"><h5><b>&nbsp;&nbsp;ADD SUPPORTING FILES</b></h5></div><hr/>
				</div>
			</div>
			<div id="customer-createNewOrder-form-addSupportingFilesList" class="row mtop15p mbot15p">
			  
			  
			  
			</div>
			<div class="row mtop15p mbot15p">
                <div class="col-lg-12">
				  <!-- Add Supporting Files : Start -->
				  <div class="col-lg-12">
				   <div class="form-group">
					<button class="btn btn-default pull-right" onclick="javascript:createNewOrder_addDoc();">
						<b>Add Supporting Files - {Only Zip Files} <span class="font-red">*</span></b>
					</button>
					<form name="fileuploadForm" id="fileuploadForm" action="#" method="POST" enctype="multipart/form-data">
				     <input id="createNewOrder_uploadFile" name="uploadFile" type="file" style="visibility:hidden;" 
					 onchange="javascript:customer_createNewOrder_getOrderForm_fileUpload();" 
					 accept=".zip"/>
					</form>
				  </div>
				 </div>
				 <!-- Add Supporting Files : End -->
				 
				</div>
			</div>
			<div class="row">
                <div class="col-lg-12">
				  <hr/><div class="pad3" style="background-color:#eee;"><h5><b>&nbsp;&nbsp;MILESTONES</b></h5></div><hr/>
				</div>
			</div>
			<div class="row mtop15p">
			  <div class="col-lg-12">
                <div class="col-lg-3">
				   <!-- -->
				     <div class="form-group">
					   <label>Add Milestones</label>
					   <select class="form-control">
					     <option value="">Select your Choice</option>
						 <option value="YES">Yes</option>
						 <option value="NO">No</option>
					   </select>
					 </div>
				   <!-- -->
				</div>
				
				<div class="col-lg-3">
				   <!-- -->
				     <div class="form-group">
					   <label>Number of Milestones</label>
					   <select class="form-control">
					     <option value="">Select Number</option>
						 <option value="1">1</option>
						 <option value="2">2</option>
						 <option value="3">3</option>
						 <option value="4">4</option>
						 <option value="5">5</option>
					   </select>
					 </div>
				   <!-- -->
				</div>
			  </div>
			</div>
			<div class="row">
			  <div class="col-lg-12">
				<div class="col-lg-4">
				   <div class="list-group">
					  <div class="list-group-item">
					    <!-- -->
						<div class="container-fluid">
						  <div class="row">
						    <div align="center" class="col-lg-12">
							  <h5><b>MILESTONE#1</b></h5><hr/>
							</div>
						  </div>
						  <div class="row">
						    <!-- -->
						    <div class="form-group">
							  <label>Target Date</label>
							  <input type="date" class="form-control"/>
							</div>
							<!-- -->
							<!-- -->
							<div class="form-group">
							  <label>Target Task</label>
							  <textarea class="form-control" placeholder="Enyer your Target Task"></textarea>
							</div>
							<!-- -->
						  </div>
						</div>
						<!-- -->
				      </div>  
				   </div>  
				</div>	
			    <div class="col-lg-4">
				   <div class="list-group">
					  <div class="list-group-item">
					    <!-- -->
						<div class="container-fluid">
						  <div class="row">
						    <div align="center" class="col-lg-12">
							  <h5><b>MILESTONE#2</b></h5><hr/>
							</div>
						  </div>
						  <div class="row">
						    <!-- -->
						    <div class="form-group">
							  <label>Target Date</label>
							  <input type="date" class="form-control"/>
							</div>
							<!-- -->
							<!-- -->
							<div class="form-group">
							  <label>Target Task</label>
							  <textarea class="form-control" placeholder="Enyer your Target Task"></textarea>
							</div>
							<!-- -->
						  </div>
						</div>
						<!-- -->
				      </div>  
				   </div>  
				</div>	
			    <div class="col-lg-4">
				   <div class="list-group">
					  <div class="list-group-item">
					    <!-- -->
						<div class="container-fluid">
						  <div class="row">
						    <div align="center" class="col-lg-12">
							  <h5><b>MILESTONE#3</b></h5><hr/>
							</div>
						  </div>
						  <div class="row">
						    <!-- -->
						    <div class="form-group">
							  <label>Target Date</label>
							  <input type="date" class="form-control"/>
							</div>
							<!-- -->
							<!-- -->
							<div class="form-group">
							  <label>Target Task</label>
							  <textarea class="form-control" placeholder="Enyer your Target Task"></textarea>
							</div>
							<!-- -->
						  </div>
						</div>
						<!-- -->
				      </div>  
				   </div>  
				</div>	
			    <div class="col-lg-4">
				   <div class="list-group">
					  <div class="list-group-item">
					    <!-- -->
						<div class="container-fluid">
						  <div class="row">
						    <div align="center" class="col-lg-12">
							  <h5><b>MILESTONE#4</b></h5><hr/>
							</div>
						  </div>
						  <div class="row">
						    <!-- -->
						    <div class="form-group">
							  <label>Target Date</label>
							  <input type="date" class="form-control"/>
							</div>
							<!-- -->
							<!-- -->
							<div class="form-group">
							  <label>Target Task</label>
							  <textarea class="form-control" placeholder="Enyer your Target Task"></textarea>
							</div>
							<!-- -->
						  </div>
						</div>
						<!-- -->
				      </div>  
				   </div>  
				</div>	
			    <div class="col-lg-4">
				   <div class="list-group">
					  <div class="list-group-item">
					    <!-- -->
						<div class="container-fluid">
						  <div class="row">
						    <div align="center" class="col-lg-12">
							  <h5><b>MILESTONE#5</b></h5><hr/>
							</div>
						  </div>
						  <div class="row">
						    <!-- -->
						    <div class="form-group">
							  <label>Target Date</label>
							  <input type="date" class="form-control"/>
							</div>
							<!-- -->
							<!-- -->
							<div class="form-group">
							  <label>Target Task</label>
							  <textarea class="form-control" placeholder="Enyer your Target Task"></textarea>
							</div>
							<!-- -->
						  </div>
						</div>
						<!-- -->
				      </div>  
				   </div>  
				</div>	
			    <div class="col-lg-4">
				   <div class="list-group">
					  <div class="list-group-item">
					    <!-- -->
						<div class="container-fluid">
						  <div class="row">
						    <div align="center" class="col-lg-12">
							  <h5><b>MILESTONE#6</b></h5><hr/>
							</div>
						  </div>
						  <div class="row">
						    <!-- -->
						    <div class="form-group">
							  <label>Target Date</label>
							  <input type="date" class="form-control"/>
							</div>
							<!-- -->
							<!-- -->
							<div class="form-group">
							  <label>Target Task</label>
							  <textarea class="form-control" placeholder="Enyer your Target Task"></textarea>
							</div>
							<!-- -->
						  </div>
						</div>
						<!-- -->
				      </div>  
				   </div>  
				</div>	
			  </div> 
			</div>
			
			<div class="row">
			 <div class="col-lg-12"><hr/></div>
			</div>
			<div class="row">
                <div class="col-lg-12">
				  <!-- -->
				  <div align="center" class="col-lg-12">
				   <div class="btn-group mtop15p mbot15p">
				     <button class="btn btn-success"><b>Create New Order</b></button>
					 <button class="btn btn-danger"><b>Reset</b></button>
				   </div>
				  </div>
				  <!-- -->
				</div>
			</div>
		  </div>
		</div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/bootstrap/js/bootstrap.min.js"></script>

	<!-- Bootstrap Toggle -->
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/vendor/metisMenu/metisMenu.min.js"></script>

	<script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/dist/load-data-on-scroll.js"></script>
	
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/jquery.ui.chatbox.js"></script>
    <script type="text/javascript" src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/cookies.js"></script>
    <link type="text/css" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery.ui.chatbox.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/jquery-ui.css">
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>backend/dist/sb-admin-2.js"></script>
<script type="text/javascript">
function createNewOrder_typeOfWork(){
 var typeOfWork = document.getElementById("createNewOrder-typeOfWork").value;
 if(typeOfWork==='DOCUMENT'){
    document.getElementById("createNewOrder-div-wordcount").style.display='block';
	document.getElementById("createNewOrder-div-pleaseSpecify").style.display='none';
 } else if(typeOfWork==='OTHER'){
    document.getElementById("createNewOrder-div-wordcount").style.display='none';
	document.getElementById("createNewOrder-div-pleaseSpecify").style.display='block';
 } else {
    document.getElementById("createNewOrder-div-wordcount").style.display='none';
	document.getElementById("createNewOrder-div-pleaseSpecify").style.display='none';
 }
 // 
 // 
}
function createNewOrder_addDoc(){
 document.getElementById("createNewOrder_uploadFile").click();
}
$(document).ready(function(){

});
var ACCOUNT_ID;
function customer_createNewOrder_getOrderForm(){
 var emailOrCustomerId = document.getElementById("customer-createNewOrder-emailOrCustomerId").value;
 if(emailOrCustomerId.length>0){
   js_ajax('GET', PROJECT_URL+'backend/php/dac/controller.customers.authentication.php',
   { action:'CUSTOMER_GETACCOUNTINFOBYEMAILORID', emailOrCustomerId:emailOrCustomerId },
   function(response){ 
    console.log(response); 
    customer_createNewOrder_getOrderForm_loadCustomerInfo(response);
   });
 } else { div_display_warning('customer-createNewOrder-emailOrCustomerId-warnings','W021'); } // W021: Missing Email Id or Customer Id
}
function customer_createNewOrder_getOrderForm_loadCustomerInfo(response){
 htmlElementVisiblility('customer-createNewOrder-form','show');
 response=JSON.parse(response);
 ACCOUNT_ID = response[0].account_Id;
 var name = response[0].name;
 var gender = response[0].gender;
 var email_Id = response[0].email_Id;
 var country = response[0].country;
 var tz = response[0].tz;
 var currency = response[0].currency;
 var content='<div class="row mtop15p">';
     content+='<div class="col-lg-12">';
	 content+='<hr/><div class="pad3" style="background-color:#eee;">';
	 content+='<h5><b>&nbsp;&nbsp;CUSTOMER INFORMATION</b></h5></div><hr/>';
	 content+='</div>';
	 content+='</div>';
	 content+='<div class="row mtop15p">';
	 content+='<div class="col-lg-12">';
	 content+='<div class="col-lg-4">';
	 content+='<div class="form-group">';
	 content+='<label>Account Id</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item" style="border-radius:4px;">';
	 content+='<span class="font-grey">'+ACCOUNT_ID+'</span>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 
	 content+='<div class="col-lg-4">';
	 content+='<div class="form-group">';
	 content+='<label>Name</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item" style="border-radius:4px;">';
	 content+='<span class="font-grey">'+name+'</span>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
     content+='</div>';
	 
	 content+='<div class="col-lg-4">';
	 content+='<div class="form-group">';
	 content+='<label>Gender</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item" style="border-radius:4px;">';
	 content+='<span class="font-grey">'+gender+'</span>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 
	 content+='<div class="col-lg-4">';
	 content+='<div class="form-group">';
	 content+='<label>Email</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item" style="border-radius:4px;">';
	 content+='<span class="font-grey">'+email_Id+'</span>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';

	 content+='<div class="col-lg-4">';
	 content+='<div class="form-group">';
	 content+='<label>Country</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item" style="border-radius:4px;">';
	 content+='<span class="font-grey">'+country+'</span>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	
	 content+='<div class="col-lg-4">';
	 content+='<div class="form-group">';
	 content+='<label>Timezone</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item" style="border-radius:4px;">';
	 content+='<span class="font-grey">'+tz+'</span>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	
	 content+='<div class="col-lg-4">';
	 content+='<div class="form-group">';
	 content+='<label>Currency</label>';
	 content+='<div class="list-group">';
	 content+='<div class="list-group-item" style="border-radius:4px;">';
	 content+='<span class="font-grey">'+currency+'</span>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 
	 content+='</div>';
	 content+='</div>';
  document.getElementById("customer-createNewOrder-form-customerInfo").innerHTML=content;		
}
function customer_createNewOrder_getOrderForm_fileUpload(){
  var form = $('#fileuploadForm')[0];
  var formData = new FormData(form);
      formData.append("account_Id",ACCOUNT_ID);
  $.ajax({type: "POST", enctype: 'multipart/form-data', url:PROJECT_URL+"backend/php/dac/controller.app.files.uploader.php",
  data: formData, processData: false, contentType: false, cache: false, timeout: 600000, success: function (response) {  
  console.log("SUCCESS : "+response);customer_createNewOrder_listOfSupportingFiles(); }, 
  error: function (e) { console.log("ERROR : "+e); } });
}

function customer_createNewOrder_listOfSupportingFiles(){
var order_Id='CA2011140089861';
js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.customers.orders.php',
{ action:'GET_SUPPORTINGFILES_ON_ORDER', order_Id:order_Id, path:'temp' }, function(response){
 console.log(response);
 response=response.split('|');
 var content='';
 for(var index=0;index<response.length;index++){
   if(response[index].trim().length>0){
   content+='<div align="center" class="col-lg-2">';
   content+='<div><i class="fa fa-5x fa-file-archive-o" aria-hidden="true"></i></div>';
   content+='<div class="mtop15p">'+response[index]+'</div>';
   content+='<div class="mtop15p"><button class="btn btn-default" ';
   content+='onclick="javascript:customer_createNewOrder_deleteSupportFiles(\''+order_Id+'\',\''+response[index]+'\');">';
   content+='Remove&nbsp;<i class="fa fa-close"></i></button></div>';
   content+='</div>';
   }
 }
 document.getElementById("customer-createNewOrder-form-addSupportingFilesList").innerHTML=content;
});			 
}
function customer_createNewOrder_deleteSupportFiles(order_Id,fileName){
js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.customers.orders.php',
 { action:'DELETE_SUPPORTINGFILES_ON_ORDER', order_Id:'CA2011140089861', fileName:fileName, path:'temp' },
 function(response){ console.log(response);customer_createNewOrder_listOfSupportingFiles(); });
}
</script>
</body>

</html>

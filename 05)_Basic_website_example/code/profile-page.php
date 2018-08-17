
<?php

include('connection.php');

session_start();
$id= $_SESSION['ID'];
?>

<?php
/**
<?php
if (isset($_POST['editbasic'])){
	$transport= $_POST['trans_name'];
	$fname= $_POST['first_name'];
	$last= $_POST['last_name'];
	$fullName = $fname.$last; 
	$mobil= $_POST['mobile']; 
	$landline= $_POST['landline'];
	$reg_address= $_POST['reg_addr'];
	
	
	
	$qry="SELECT Transport_Name,Director_Name,Mobile_No,Landline_No,Registered_Address FROM `register-company` where id = '$id'";
        print "$qry";
	
	$result= mysqli_query($conn,$qry);
	 
      
	while($row= mysqli_fetch_array($result)){

            $up = "Update 'register-company' SET Transport_Name = '".$_POST['trans_name']."',Director_Name = '$fullName' , Mobile_No= '$mobil',Landline_No ='$landline',Registered_Address='$reg_address' WHERE id = '$id'" ;
            $rs= mysqli_query($conn,$up);
           
	if($rs){
            
            $_SESSION['Trans_name']= $transport;
            $_SESSION['firstname'] = $fname;
            $_SESSION['lastname']  = $last;
            $_SESSION['mobile']  = $mobil;
            $_SESSION['landline'] = $landline;
            $_SESSION['registered_addr'] =$reg_address;
        }else{
            echo "Error updating record: " . mysqli_error($conn);
        }
        }
                               
	
        mysqli_close($conn);

}	
 
**/


if (isset($_POST['operational_details'])){
    
    $usrname= mysqli_real_escape_string(htmlspecialchars($_POST['auth_name']));
    $a_no=mysqli_real_escape_string(htmlspecialchars($_POST['auth_no']));
    
    $qy="SELECT Authorized_person, authorized_number FROM `register-company` where id = '$id'";
    $result= mysqi_query($conn,$qy);
    while($row= mysqli_fetch_array($result)){
        $up= "Update `register-company` SET Authorized_person= $usrname, authorized_number= $a_no ";
        $rs= mysqli_query($conn,$up);
        if($rs){
         $_SESSION['username']= $usrname;
         $_SESSION['auth_number']= $a_no;
         
        }else{
            echo "error updating record:". mysqli_error($conn);
        }
        }
    }
    mysqli_close($conn);



?>


<head>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
	
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
</head>

<body id="page-top" class="other">

    <!-- Navigation -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <a class="navbar-brand page-scroll" href="index.php"><img src="images/logowhite.png" alt="" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div>
                <ul class="nav navbar-nav navbar-right text-white">
                    <li>
                        <i class="fa fa-envelope fa-2x"></i>  <i class="fa fa-phone fa-flip-horizontal fa-2x"></i>   +91-9990509727 
                    </li>
                    <li>
                        <a class="btn btn-default btn-login" href="login.php">Login</a>
                        
                    </li>
                    <li>
                        <a class="btn btn-default" href="register-company.php">Register</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="javascript:void(0);" data-toggle="dropdown" role="button" aria-haspopup="true"><i class="fa fa-navicon fa-2x"></i></a>
                         <ul class="dropdown-menu" aria-labelledby="dLabel">
                         		<li><a href="#">Why Us</a></li>
                                <li><a href="#">Why Us</a></li>
                                <li><a href="#">Why Us</a></li>
                                <li><a href="#">Why Us</a></li>
                                <li><a href="#">Why Us</a></li>
                         </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


 <!-- content area -->
   <section class="content-area profile-area clearfix">
   		<!-- sidebar start -->
   		<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar">
        	<div class="user-info">
            	<div class="user-img">
                	<img src="http://localhost/cargo/images/<?php echo $_SESSION['profile_img'];?>" alt="username" />
                </div>
                <div class="user-data">
                	<p><?php echo $_SESSION['username'];?></p>
                    <p><?php echo $_SESSION['email']?></p>
                </div>
            </div>
            <div class="row list-navigation">
                <nav class="navbar-collapse collapse">
                    <ul class="nav nav-stacked">
    
                        <li class="active"><a href="profile-page.php">Profile</a></li>
                        <li><a href="#">Documents</a></li>
                        <li><a href="open-tender.php">Open Tenders</a></li>
                        <li><a href="open-bids.php">Open Bids</a></li>
                        <li><a href="#">Status Of Placed Bid</a></li>
                        <li><a href="#">History</a></li>
                        <li><a href="in-transit.php">In Transit</a></li>
                        <li><a href="share-load.php">Share The Load</a></li>
                        <li><a href="logout.php">Logout</a></li>
    
                    </ul>
                </nav>
            </div>
        </div>
        <!-- sidebar end -->
        
        <!-- main content start -->
        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 main-content">
        	<div class="content-title">
            	Profile
            </div>
            <div class="content-data">
            	<div class="padding4020">
                    <div role="tabpanel">
                    
                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs nav-tabs-justified" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#basic" aria-controls="basic" role="tab" class="tab1" data-toggle="tab">
                                        Basic details
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#operation" aria-controls="operation" role="tab" data-toggle="tab">
                                       Operational details
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#other" aria-controls="other" role="tab" data-toggle="tab">
                                       Other details
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                                       Profile image
                                    </a>
                                </li>
                                
                          </ul>
                        
                          <!-- Tab panes -->
                          <div class="tab-content text-center">
                                <div role="tabpanel" class="tab-pane active" id="basic">
                                	<h3 class="text-uppercase text-grey">basic details</h3>
                                	<form method= "post" action = "">
                                        <div class="row editings">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                	<label class="control-label">Transport Name :</label>
                                                    <span class="to-b-hidden"><?php echo $_SESSION['Trans_name'];?></span>
                                                    <input type="text" name="trans_name" value="" class="hidden form_component form-control" />
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">First Name :</label>
                                                    <span class="to-b-hidden">  <?php echo $_SESSION['firstname'];?> </span>
                                                    <input type="text" name="first_name" value="" class="hidden form_component form-control" />
													
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">Last Name : </label>
                                                    <span class="to-b-hidden"><?php echo $_SESSION['lastname'];?></span>
                                                    <input type="text" name="last_name" value="" class="hidden form_component form-control" />
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">Mobile No :   </label>
                                                    <span class="to-b-hidden"><?php echo $_SESSION['mobile'];?></span>
                                                    <input type="text" name="mobile" value="" class="hidden form_component form-control noalpha phone" />
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                               <div class="form-group">
                                                	<label class="control-label">Registered Address : </label>
                                                    <span class="to-b-hidden"> <?php echo $_SESSION['registered_addr'];?></span>
                                                    <input type="text" name="reg_addr" value="" class="hidden form_component form-control" />
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">Landline No. : </label>
                                                    <span class="to-b-hidden"> <?php echo $_SESSION['landline'];?></span>
                                                    <input type="text" name="landline" value="" class="hidden form_component form-control phone noalpha" />
                                                </div>
                                            </div>
                                            
                                                                                         
                                            <div class="text-center clearfix">
                                                <a href="javascript:;" class="btn btn-danger btn-lg edit_button to-b-hidden">Edit</a>
                                    			<button class="btn btn-danger btn-lg form_component hidden" type="submit" name= "editbasic">Submit</button>
                                            </div>
                                        </div>
                                    </form>
									
                                    
                                </div>
                                <!-- basic detail tab end -->
                                
                                <div role="tabpanel" class="tab-pane" id="operation">
                                	<h3 class="text-uppercase text-grey">operational details</h3>
                                	<form name="sentMessage">
                                        <div class="row editings">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                	<label class="control-label">Person Auithorized To Manage Operations :</label>
                                                    <span class="to-b-hidden"> <?php echo $_SESSION['username'];?> </span>
                                                    <input type="text" name="auth_name" value="" class="hidden form_component form-control" />
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                	<label class="control-label">Contact No. Of Person Authorized :</label>
                                                    <span class="to-b-hidden"><?php echo $_SESSION['auth_number'];?> </span>
                                                    <input type="text" name="auth_no" value="" class="hidden form_component form-control phone noalpha" />
                                                </div>
                                            </div>
                                                                           
                                            <div class="text-center clearfix">
                                                <a href="javascript:;" class="btn btn-danger btn-lg edit_button to-b-hidden">Edit</a>
                                    			<button class="btn btn-danger btn-lg form_component hidden" type="submit" name="operational_details">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                                <!-- operational detail tab end -->
                                
                                <div role="tabpanel" class="tab-pane" id="other">
                                	<h3 class="text-uppercase text-grey">other details</h3>
                                	<form name="sentMessage">
                                        <div class="row editings">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">Service Tax No. :</label>
                                                    <span class="to-b-hidden"><?php echo $_SESSION['tax'];?> </span>
                                                    <input type="text" name="tax" value="" class="hidden form_component form-control" />
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">PAN No. :</label>
                                                    <span class="to-b-hidden"> <?php echo $_SESSION['PAN'];?> </span>
                                                    <input type="text" name="pan" value="" class="hidden form_component form-control" />
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">Website : </label>
                                                    <span class="to-b-hidden"> <?php echo $_SESSION['web'];?></span>
                                                    <input type="url" name="website" value="" class="hidden form_component form-control" />
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">Transporter/Company Registration Number :   </label>
                                                    <span class="to-b-hidden"><?php echo $_SESSION['company_reg_no'];?></span>
                                                    <input type="text" name="reg_no" value="" class="hidden form_component form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                	<label class="control-label">Upload Documents : </label>
                                                    <span class="to-b-hidden"> <?php echo $_SESSION['Documents'];?></span>
                                                    <input type="file" name="doc" value="" class="hidden form_component form-control" />
                                                </div>
                                            </div>
                                            
                                                                                         
                                            <div class="text-center clearfix">
                                                <a href="javascript:;" class="btn btn-danger btn-lg edit_button to-b-hidden">Edit</a>
                                    			<button class="btn btn-danger btn-lg form_component hidden" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- other detail tab end -->
                                
                                <div role="tabpanel" class="tab-pane" id="profile">
                                	<h3 class="text-uppercase text-grey">other details</h3>
                                	<form name="sentMessage">
                                        <div class="row editings">
                                            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                	<label class="control-label">Profile Pic : </label>
                                                    <span class="to-b-hidden"> <img src="http://localhost/cargo/images/<?php echo $_SESSION['profile_img'];?>" alt="profile pic" class="img-responsive" /></span>
                                                    <input type="file" name="profilepic" value="" class="hidden form_component form-control" accept="image/*" />
                                                </div>
                                            </div>
                                            
                                                                                         
                                            <div class="text-center clearfix">
                                                <a href="javascript:;" class="btn btn-danger btn-lg edit_button to-b-hidden">Edit</a>
                                    			<button class="btn btn-danger btn-lg form_component hidden" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- profile pic tab end -->
                                
                          </div>
                    
                    </div>
                </div>
            </div>
			
        </div>
        <!-- main content end -->
		
   </section>
  
   
   <!-- content area end -->
   
  <?php include 'footer.php'?>
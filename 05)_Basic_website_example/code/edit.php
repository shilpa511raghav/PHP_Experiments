<?php
include("connection.php");
session_start();
$id= $_SESSION['ID'];

?>
<?php
	 
if(isset($_POST['editbasic'])){
	$transport= $_POST['trans'];
	//$fname= $_GET['first_name'];
	//$last= $_GET['last_name'];
	//$fullname = $fname.$last;
        
	$mobil= $_POST['mobile']; 
	$landline= $_POST['landline'];
	$reg_address= $_POST['reg_addr'];

        
        $qry="SELECT Transport_Name, Mobile_No, Landline_No ,Registered_Address FROM `register-company` where id = '$id'";
       
        $resultone= mysqli_query($conn,$qry);
	
		while($rowone= mysqli_fetch_array($resultone)){

				$upda = "Update 'register-company' SET Transport_Name = '$transport' , Mobile_No= '$mobil', `Landline_No` = '$landline' ,`Registered_Address` ='$reg_address' WHERE `id` = '$id'" ;
				$rs= mysqli_query($conn,$upda);
			   
				if($rs){
						
						echo"basic details successfully updated";
					}else{
						echo $rowone[2];
						echo "Error updating record: " . mysqli_error($conn);
					}
			}
								   
	
}

?>	
 
<?php
if (isset($_POST['operational_details'])){
    
    $usrname= $_POST['auth_name'];
    $a_no= $_POST['auth_no'];
    
    $qy="SELECT Authorized_person, authorized_number FROM `register-company` where id = '$id'";
    $resulttwo= mysqli_query($conn,$qy);
    
    while($rowtwo= mysqli_fetch_array($resulttwo)){
        $up= "Update `register-company` SET Authorized_person= '$usrname', authorized_number= $a_no where id= '$id'";
        $r= mysqli_query($conn,$up);
        if($r){
            
            echo"operational details updated successfully";
         
        }else{
            echo "error updating record:". mysqli_error($conn);
        }
        }
    }
    mysqli_close($conn);
?>
<?php
if (isset($_POST['other_details'])){
    $tx= $_POST['tax'];
    $pan= $_POST['pan'];
    $web= $_POST['website'];
    $r_no= $_POST['reg_no'];
    
	
	$doc= $_FILES["doc"]["name"];
	$target_folder= "documents/".$doc;
	$allowedExtn=array("docx","doc","pdf","jpg","jpeg","png");
	$temp= explode(".",$_FILES["doc"]["name"]);
	$extension= strtolower(end($temp));
		
		if( in_array($extension,$allowedExtn)){
			if ($_FILES["fileToUpload"]["size"] >100000){
				echo "<script>alert('Document File size should be less than 100kb');window.location.href='edit.php';</script>";
				exit;	
			}  
		}else{
			echo "<script>alert('Upload appropriate document file format.. jpeg,jpg,pdf,docx is allowed ');window.location.href='edit.php';</script>";
			exit;   
		}
		move_uploaded_file($_FILES['doc']['tmp_name'],$target_folder);
    
    $oq="SELECT `Tax`, `PAN_No`, `Website`, `Company_Registration_Number`, `upload_file` FROM `register-company` where id = '$id'";
    $resul= mysqli_query($conn,$oq);
    while($rowthree= mysqli_fetch_array($resul)){
        $upd= "Update `register-company` SET `Tax`='$tx',`PAN_No`='$pan',`Website`='$web',`Company_Registration_Number`= '$r_no' ,upload_file= '$doc' where id = '$id'" ;
		
		
			$rslt= mysqli_query($conn,$upd);
			if($rslt){
				echo"other details successfully updated";
			}else{
				echo "error updating record:". mysqli_error($conn);
			}
        }
    mysqli_query($conn);
}

?>
<?php
								if(isset($_POST['picture']))
								{
							
								$profile_name= $_FILES['profile']['name'];
								
								$dir="images/".$profile_name;
								
								$imageType= pathinfo($profile_name,PATHINFO_EXTENSION);
								
								if(move_uploaded_file($_FILES['profile']['tmp_name'], $dir))
								{
								echo "uploaded succesfully" ;
								
								$querry="SELECT `profile_pic` FROM `register-company` WHERE id='$id'" or die(mysqli_error());
								$result=mysqli_query($querry) or die(mysqli_error());
								$row=mysqli_fetch_assoc($result) or die(mysqli_error());
								$oldimage=$row['profile_pic'];
								unlink('images/'.$oldimage);
								/* $deleter = "DELETE FROM users WHERE image = '$oldimage'";
								 if(mysql_query($deleter)) {
								echo "Successful!";
								 } */
								
								$sql="UPDATE register-company SET profile_pic='$fileName' WHERE profile_pic='$oldimage'";
								$result=mysqli_query($sql) or die(mysqli_error());
								if($result)
								{
								echo "created successfully";
								echo "<br>";
								echo "<a href='profile-page.php'></a>";
								}
								else
								{
								echo "cant create";
								}
								}
								}
								?>







    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
	
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    


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
                	<img src="http://localhost/mycargo/images/<?php echo $_SESSION['profile_img'];?>" alt="username" />
                </div>
                <div class="user-data">
                	<p><?php echo $_SESSION['username'];?></p>
                    <p><?php echo $_SESSION['email'];?></p>
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
                        <li><a href="history.php">History</a></li>
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
                                	<form method= "post" action = "#">
                                        <div class="row editings">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                	<label class="control-label">Transport Name :</label>
                                                   
                                                    <input type="text" name="trans" value="" class="form_component form-control" />
                                                </div>
                                            </div>
                                          
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">Mobile No :   </label>
                                                    
                                                    <input type="text" name="mobile" value="" class="form_component form-control noalpha phone" />
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                               <div class="form-group">
                                                	<label class="control-label">Registered Address : </label>
                                                   
                                                    <input type="text" name="reg_addr" value="" class=" form_component form-control" />
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">Landline No : </label>
                                                    
                                                    <input type="tel" name= "landline" value="" class=" form_component form-control phone noalpha" />
                                                </div>
                                            </div>
                                            
                                                                                        
                                            <div class="text-center clearfix">
                                                
                                    		<button class="btn btn-danger btn-lg form_component" type="submit" name= "editbasic">Submit</button>
                                            </div>
                                        </div>
                                    </form>
									
                                    
                                </div>
                                <!-- basic detail tab end -->
                                
                                <div role="tabpanel" class="tab-pane" id="operation">
                                	<h3 class="text-uppercase text-grey">operational details</h3>
                                	<form name="sentMessage" method="post" action = "#">
                                        <div class="row editings">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                	<label class="control-label">Person Auithorized To Manage Operations :</label>
                                                    
                                                    <input type="text" name="auth_name" value="" class="form_component form-control" />
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                	<label class="control-label">Contact No. Of Person Authorized :</label>
                                                    
                                                    <input type="text" name="auth_no" value="" class="form_component form-control phone noalpha" />
                                                </div>
                                            </div>
                                                                           
                                            <div class="text-center clearfix">
                                               
                                    			<button class="btn btn-danger btn-lg form_component" type="submit" name="operational_details">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                                <!-- operational detail tab end -->
                                
                                <div role="tabpanel" class="tab-pane" id="other">
                                	<h3 class="text-uppercase text-grey">other details</h3>
                                	<form name="sentMessage" action=" #">
                                        <div class="row editings">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">Service Tax No. :</label>
                                                    
                                                    <input type="text" name="tax" value="" class="form_component form-control" />
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">PAN No. :</label>
                                                    
                                                    <input type="text" name="pan" value="" class="form_component form-control" />
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">Website : </label>
                                                   
                                                    <input type="url" name="website" value="" class="form_component form-control" />
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">Transporter/Company Registration Number :   </label>
                                                   
                                                    <input type="text" name="reg_no" value="" class="form_component form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                	<label class="control-label">Upload Documents : </label>
                                                    
                                                    <input type="file" name="doc" class="form_component form-control"  />
                                                </div>
                                            </div>
                                            
                                                                                         
                                            <div class="text-center clearfix">
                                               
                                    			<button class="btn btn-danger btn-lg form_component" type="submit" name= "other_details">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- other detail tab end -->
                                
                                <div role="tabpanel" class="tab-pane" id="profile">
                                	<h3 class="text-uppercase text-grey">Profile image</h3>
                                	<form name="sentMessage" method="post" action ="#">
                                        <div class="row editings">
                                            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                	<label class="control-label">Profile Pic : </label>
                                                    
                                                    <input type="file" name= "profile" class=" form_component form-control" accept="image/*" />
                                                </div>
                                            </div>
                                            
                                                                                         
                                            <div class="text-center clearfix">
                                               
                                    			<button class="btn btn-danger btn-lg form_component" type="submit" name = "picture">Submit</button>
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
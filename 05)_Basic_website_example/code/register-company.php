<?php include('connection.php');
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	if (isset($_POST['submit'])){
		$transporter= test_input($_POST['transporter']);
		$director= test_input($_POST['director']);
		$mobile= test_input($_POST['mobile']);
		$landline= test_input($_POST['landline']);
		$email= test_input($_POST['email']);
		$password= test_input($_POST['otp']);
		$year= test_input($_POST['year']);
		$address=test_input($_POST['address']);
		$pincode=test_input($_POST['pincode']);
		$authorized_name= test_input($_POST['auth_name']);
		$auth_contact= test_input($_POST['auth_no']);
		
		$tax= test_input($_POST['tax']);
		$pan=test_input($_POST['pan']);
		$web=test_input($_POST['web']);
		$reg=test_input($_POST['reg']);
		
		$file= $_FILES["fileToUpload"]["name"];
		$target_folder= "documents/".$file;
		$allowedExtn=array("docx","doc","pdf","jpg","jpeg","png","gif");
		$temp= explode(".",$_FILES["fileToUpload"]["name"]);
		$extension= end($temp);
		
                
		$profile_pic= $_FILES['profile_pic']['name']; 
                $target= "images/".$profile_pic;
		$allowed_ext= array("jpeg", "jpg", "png");
		$ext = pathinfo($profile_pic, PATHINFO_EXTENSION);
	
		
	
		
		if ($_POST['transporter'] == "" || $_POST['director'] == "" || $_POST['mobile'] == ""|| $_POST['landline'] == "" || $_POST['email'] == ""
		|| $_POST['otp'] == "" || $_POST['year'] == ""|| $_POST['address'] == "" || $_POST['pincode'] == "" || $_POST['auth_name']== ""
		|| $_POST['auth_no'] == "" || $_POST['tax'] == "" || $_POST['pan'] == "" || $_POST['web'] == "" ||  $_POST['reg'] == "" 
		|| $_FILES['fileToUpload']['name'] == "" || $_FILES['profile_pic']['name']== "")
		{
			
			echo "<script>alert('Please fill all the fields');window.location.href='register-company.php';</script>";
			exit;
		}else{
			$check_email_query= "SELECT * FROM `register-company` WHERE `Email_address`='$email'";
			$run_query= mysqli_query($conn,$check_email_query);
			if (mysqli_num_rows($run_query)>0){
				echo "<script>alert('Email $email already exists in database !! Please try another one..');window.location.href='register-company.php';</script>";
				exit;
			
			}
		}
			
                        if( in_array($extension,$allowedExtn)){
                            if ($_FILES["fileToUpload"]["size"] >100000){
                                echo "<script>alert('Document File size should be less than 100kb');window.location.href='register-company.php';</script>";
                                exit;	
                            }  
                        }else{
                            echo "<script>alert('Upload appropriate document file format.. jpeg,jpg,pdf,docx is allowed ');window.location.href='register-company.php';</script>";
                            exit;   
                        }
                        
                        if (in_array($ext,$allowed_ext)){
                            if ($_FILES["profile_pic"]["size"]>20000){
                                echo "<script>alert('profile picture should be less than 20kb');window.location.href='register-company.php';</script>";
                                exit;	
                            }  
                        }else{
                            echo "<script>alert('Upload appropriate profile pic format ');window.location.href='register-company.php';</script>";
                            exit;
                        }
                            
                        
                            
                            move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_folder) ;
                            echo "documents are Stored in: " . "documents/" . $_FILES["fileToUpload"]["name"]; 
                            move_uploaded_file($_FILES['profile_pic']['tmp_name'],$target);
                            echo "profile pics are Stored in: " . "images/" . $_FILES["profile_pic"]["name"];
                            
                            
                            $query= "INSERT INTO `register-company`(`Transport_Name`, `Director_Name`, `Mobile_No`, `Landline_No`, `Email_address`, `password`,
                            `Establishment_Year`, `Registered_Address`, `Pin_Code`, `Authorized_person`, `authorized_number`, `Tax`, `PAN_No`, `Website`, 
                            `Company_Registration_Number`, `upload_file`, `profile_pic`) 
                            VALUES ('$transporter','$director','$mobile','$landline','$email','$password','$year','$address','$pincode','$authorized_name',
                            '$auth_contact','$tax','$pan','$web','$reg','$file','$profile_pic')";
                            $result= mysqli_query($conn,$query);
                            echo "<script>alert('user registered')</script>";
                            if(!$result){

                                    echo"data is not added in database";
                            }else{

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
	
    

</head>
<body id="page-top" class="other">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><img src="images/logowhite.png" alt="" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div>
                <ul class="nav navbar-nav navbar-right text-white">
                    <li>
                        <i class="fa fa-envelope fa-2x"></i>  <i class="fa fa-phone fa-flip-horizontal fa-2x"></i>   +91-9990509727 
                    </li>
                    <li>
                        <a class="btn btn-default" href="login.php">Login</a>
                    </li>
                    <li>
                        <a class="btn btn-default" href="register-company.php">Register</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="dropdown" role="button" aria-haspopup="true"><i class="fa fa-navicon fa-2x"></i></a>
                         <ul class="dropdown-menu">
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
   <section class="content-area">
   		<div class="container">
        	<h2 class="text-grey main-heading">Register as Company</h2>
            <!-- registration form start -->
			
            	<form name="sentMessage" class="register_form" action = "register-company.php" method = "post" enctype="multipart/form-data">
                    <!-- form section 1 start -->
                    <div class="row form-section">
                    	<h3 class="form-section_head">Basic Details</h3>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Transport Name</label>
                                <input type="text" name="transporter" value="" class="form-control nodigi" required/>
								
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Partner / Director Name</label>
                                <input type="text" name="director" value="" class="form-control nodigi" required />
								
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Mobile No.</label>
                                <input type="tel" name="mobile" value="" class="form-control noalpha phone" required/>
								
								
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="landline">Landline No.</label>
                                <input type="tel" name="landline" value="" class="form-control noalpha phone" required/>
								
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="email">Email address:</label>
                                 <input type="email" id="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" required>
								 
                            </div>
                        </div>
						<div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="otp">Enter OTP*</label>
                                <input type="password" name="otp" value="" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="year">Establishment Year</label>
                                <input type="text" name="year" value="" class="form-control noalpha" required/>
								
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="name">Registered Address</label>
                                <input type="text" name="address" value="" class="form-control" required />
								
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="name">Pin Code</label>
                                <input type="text" name="pincode" value="" class="form-control noalpha pin" required />
                            </div>
                        </div>
                  </div>
                  <!-- form section 1 end -->
                  
                  <!-- form section 2 start -->
                  <div class="row form-section">
                    	<h3 class="form-section_head">Operational Details</h3>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="auth">Person Auithorized To Manage Operations</label>
                                <input type="text" name="auth_name" value="" class="form-control nodigi" required />
								
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="auth">Contact No. Of Person Authorized</label>
                                <input type="text" name="auth_no" value="" class="form-control noalpha phone" required/>
								
                            </div>
                        </div>
                 </div>
                 <!-- form section 2 end -->
                  
                  <!-- form section 3 start -->
                  <div class="row form-section">
                    	<h3 class="form-section_head">Other Details</h3>
                 		<div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="tax">Service Tax No.</label>
                                <input type="text" name="tax" value="" class="form-control noalpha" />
								
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="pan">PAN No.</label>
                                <input type="text" name="pan" value="" class="form-control noalpha" />
								
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="web">Website</label>
                                 <input type="url" class="form-control" name="web">
								 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="reg">Transporter/Company Registration Number</label>
                                <input type="text" name="reg" value="" class="form-control noalpha" />
								
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="fileToUpload">Upload Documents</label>
                                <input type="file" name="fileToUpload" value="" class="form-control" />
								
								
                            </div>
                        </div>
                        
                  </div>
                  <!-- form section 3 end -->
                  
                  <!-- form section 4 start -->
                  <div class="row form-section">
                    	<h3 class="form-section_head">Profile Image</h3>
                        <p class="text-black padd15">Add/Edit Profile Picture</p>
                        <div class="col-md-6">
                        		<img id="blah" src="images/Register-As-A-company_03.png" alt="your image" />
                                <label class="control-label" for="profile_pic">Profile Image</label>
                                <input type="file" name="profile_pic" value="" id="imgInp" accept="image/*" />
   								
                            </div>
                        </div>                     
                        
                   </div>
                   <!-- form section 4 end -->
                   
                   <div class="row form-section text-center">
                        <button type="submit" class="btn btn-danger btn-lg" name = "submit">Submit</button>
                   </div>
                </form>
            <!-- reg form end -->
        </div>
   </section>
   <!-- content area end -->
   
   <?php include('footer.php');?>
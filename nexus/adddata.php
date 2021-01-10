<?php

		 if(isset($_POST['register']))
			{
				  $username=$_POST['username'];
				  $capital=$_POST['capital'];
				  $plan=$_POST['plan'];
				  $starting_date=$_POST['starting_date'];
				  $last_date=$_POST['last_date'];
				  $status=1;
			      include("connect.php");
				  mysqli_query($con,"insert into data(username,capital,plan,starting_date,last_date,status) values('$username','$capital','$plan','$starting_date','$last_date','$status')");
		           if(mysqli_affected_rows($con)==1)
			        {   ?><script> alert(" Data Uploaded Successfully");
								window.location="showdata.php";
							</script><?php
			        }
				   else
				  {
					?><script> alert(" Data  not Uploaded ");
							window.location="adddata.php";
					</script><?php
				  }
			}	
		  ?>
	
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />

    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
</head>
<body>
    <div id="wrapper">
          <?php 
		    include("navigation.php");
			?>
			
		<!--------------------------Main body--------------------------------------->
		 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Data</small></h1>
                </div>
            </div>
         </div> 
		 <!--------------------------------------------------------------->
		 <section class="banner-area relative about-banner" id="home" >	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Add Data
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Dashboard </a> 
						</div>	
					</div>
				</div>
			</section>
            <br><br>
			
           
			<section class="info-area pb-40">
				<div class="container-fluid">
				    <div class="col-md-12">
					  <form method="POST" action="" enctype = "multipart/form-data">
				<table class="table">
				
				<tr>
					<td>Username:</td>
					<td>
						<input type="text" name="username" id="username" class="form-control" data-validation="required">
					</td>
				</tr>
				
				<tr>
					<td>Capital:</td>
					<td>
						<input type="text" name="capital" id="capital" class="form-control" data-validation="required">
					</td>
				</tr>
				<tr>
                    <td>Plan:</td>
                    <td>
                        <input type="text" name="plan" id="plan" class="form-control" data-validation="required">
                    </td>
                </tr>
                <tr>
                    <td>Starting Date:</td>
                    <td>
                        <input type="text" name="starting_date" id="starting_date" class="form-control" data-validation="required">
                    </td>
                </tr>
                <tr>
                    <td>Last Date:</td>
                    <td>
                        <input type="text" name="last_date" id="last_date" class="form-control" data-validation="required">
                    </td>
                </tr>

				<tr>
					<td></td>
					<td><input class="btn btn-primary" type="submit"  name="register" 
					value="Submit"></td>
				</tr>
			</table>
			</form>
		</div>
		
					</div>
				</div>	
			</section>
			 <script src="js/sb-admin-2.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
			<script>
$.validate({
    lang: 'en',
	modules : 'security'
  });
			</script>
			<!-- End info Area -->

</body>
</html>
<?php
include('include\conn.php');
$verification_id=mysqli_real_escape_string($conn,$_GET['id']);
$sql1="UPDATE `complaints` set status='1' where verification_id='$verification_id'";
$query1=mysqli_query($conn,$sql1);
if($query1){
	echo '<script>alert("Grievance Recorded");</script>';
}
else{
	echo '<script>alert("Grievance Failed");</script>';
}


$sql="SELECT * from `complaints` where verification_id=$verification_id";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
if($row['status']=='1'){
	$msg="Your Grievence Has been Recorded We will Get Back to you soon ";
}
else{
	$msg="Your Grievance is not recorded please rewrite";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Favicon-->
	<link rel="icon" href="./assets/images/aitamlogo.png" type="image/gif" sizes="16x16">
    <!-- Page title -->
	<title>AITAM - Grievance Cell</title>
	<!-- Font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- Main CSS -->
	<link href="./assets/css/main.css" rel="stylesheet" /> 
</head>
<body>
    <!--header-->
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#5cb85c">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img src="./assets/images/aitam_logo.jpg" alt="" width="40" height="32"></a>
			<div class="justify-content-space-between">
				<div class="text-white text-top" href="#">
					<h3 class="ms-5">GRIEVANCE CELL</h3> </div>
			</div>
			<div class="nav-item d-flex"> <a href="index.php" class="nav-link text-white h5">Home</a> <a class="nav-link text-white h5">about</a> <a class="nav-link text-white h5">Contact</a> </div>
		</div>
	</nav>
    <!--header-->
	<div class="container">
			<div class="row">
				<div class="col-sm-9 mt-5">
					<div class="container mt-3 ">
						<!--header row-->
						<div class="row ">
							<div class="col d-flex justify-content-center">
								<div class="col-sm-1 "> <i class="far fa-user-circle ms-3" style="font-size: 3rem;"></i> </div>
								<div class="col-sm-11 ">
									<p class="ms-1 fw-lighter text-success" style="font-size:32px;">Grievance Response</p>
								</div>
							</div>
						</div>
						<!--end header row-->
						<div class="row d-flex justify-content-center">
						
							<div class="col-sm-12 text-center border mt-5 shadow shadow-regular">
								<p class="ms-1 fw-lighter text-success p-5" style="font-size:32px;"><?php echo htmlentities($msg) ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 mt-5 p-2">
					<h3 class="text-success">About Grievance Cell</h3> Our organization has a Grievance Redressal Cell / Faculty Feedback to redress the grievances / Faculty Feedback of its students/Faculty regarding academic matters, library, canteen, hostels, and other central services.</br> Students/Faculty may also post their grievances in the Grievance boxes available in the campus & Feedback facility of students and faculty is also available in AICTE web-portal.</br> &nbsp;
					<h4 class="text-success">Grievance Cell Committee</h4> 1. Dr D.Vishnu Murthy - Convener</br> 2. Dr D.Azad - Member</br> 3. Sri. Ch.Rajasekhar Rao - Member</br> 4. Sri T.Prabhakara Rao - Member</br> 5. Sri B.Kishore Kumar - Member</br> 6. Dr.M.V.Subba Rao - Member</br>
					<div class="mb-5"></div>
				</div>
			</div>
		</div>
    <!-- Footer -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="./assets/js/script.js"></script>
	<!-- jQuery Custom Scroller CDN -->
	<script src="./assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    
</body>
</html>
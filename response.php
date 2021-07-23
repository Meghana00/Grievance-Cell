<?php
include('include\conn.php');
$verification_id=mysqli_real_escape_string($conn,$_GET['id']);

$sql="SELECT * from `complaints` where verification_id=$verification_id";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);

$mailHtml="Please confirm your account registration by clicking the button or link below: <a href='http://localhost/grievance-cell/mailer.php?id=$verification_id'>http://localhost/grievance-cell/mailer.php?id=$verification_id</a>";
$subject='Account Verification';
$Email=$row['Email'];
require './include/PHPMailer.php';
require './include/SMTP.php';
require './include/Exception.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail= new PHPMailer();
$mail->isSMTP();
$mail->Host="smtp.gmail.com";
$mail->SMTPAuth="true";
$mail->SMTPSecure="tls";
$mail->Port="587";
$mail->Username="dtearthmovers1026@gmail.com";
$mail->Password="anand@123";
$mail->Subject=$subject;
$mail->setFrom("dtearthmovers1026@gmail.com");
$mail->Body=$mailHtml;
$mail->addAddress($Email);
if($mail->send())
$msg="We've just sent a verification link to $Email. Please check your inbox and click on the link to get started. If you can't find this email (which could be due to spam filters), just request a new one here.";
else
echo '<script>alert("mail failed");</script>';
$mail->smtpClose();

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
		<link href="./assets/css/main.css" rel="stylesheet" /> </head>

	<body>
		<!--header-->
		<main>
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
		</main>
		<!--header-->
		<div class="container">
			<div class="row">
				<div class="col-sm-9 mt-5">
					<div class="container mt-3 shadow-regular ">
						<!--header row-->
						<div class="row">
							<div class="col-sm-1"> <i class="far fa-user-circle ms-3" style="font-size: 3rem;"></i> </div>
							<div class="col-sm-11">
								<p class="ms-1 fw-lighter text-success" style="font-size:32px;">Write Your Grievances Here</p>
							</div>
						</div>
						<!--end header row-->
            
						<form method="POST">
							<div class="container">
								<!--row1-->
								<div class="row mt-3">
									<div class="col-sm-6 ">
										<div class=" col-auto mb-3 mt-3">
											<label for="Fullname" class="form-label">Full Name</label>
											<input type="text" class="form-control shadow-none border-success" id="Fullname" name="Fullname" placeholder="Enter Fullname" readonly value="<?php echo htmlentities($row['Fullname']) ?>" > </div>
									</div>
									<div class="col-sm-6">
										<div class=" col-auto mb-3 mt-3">
											<label for="Rollno" class="form-label">RollNo/Employee Id</label>
											<input type="text" class="form-control shadow-none border-success" id="Rollno" name="Rollno" placeholder="Enter Rollno" readonly value="<?php echo htmlentities($row['Rollno']) ?>"> </div>
									</div>
								</div>
								<!--end row-->
								<!--row2--->
								<div class="row ">
									<div class="col-sm-6 ">
										<div class=" col-auto mb-3 ">
											<label for="Gender" class="form-label">Gender</label>
											<input type="text" class="form-control shadow-none border-success" id="Gender" name="Gender" placeholder="Gender" readonly value="<?php echo htmlentities($row['Gender']) ?>">
											
										</div>
									</div>
									<div class="col-sm-6">
										<div class=" col-auto mb-3">
											<label for="email" class="form-label">Email<span class="ms-2">(Use your domain mail)</span></label>
											<input type="email" class="form-control shadow-none border-success" id="Email" name="Email" placeholder="youremail@domain.com" readonly value="<?php echo htmlentities($row['Email']) ?>"> </div>
									</div>
								</div>
								<!--end row2-->
								<!--row3-->
								<div class="row mb-3">
									<div class="mb-3">
										<label for="yourgrievance" class="form-label">Your Grievance</label>
										<textarea class="form-control shadow-none border-success" value="" id="grievance" name="grievance" rows="5" placeholder="Give a brief note of your grievance" readonly  ><?php echo htmlentities($row['grievance']) ?></textarea>
									</div>
								</div>
								<!--end row3-->
								<div class="mb-3 text-center d-none">
									<button name="send" type="submit" class="btn  btn-success shadow-none border-none w-25" style="background-color: #5cb85c;"><i class="far fa-paper-plane"></i><span class="ms-2">Send</span></button>
								</div>
								<?php
                                if($msg){?>
									<div class="mb-3 text-center">
										<h5 class="text-danger "><?php echo htmlentities("$msg"); ?></h5> </div>
									<?php } ?>
							</div>
              
						</form>
            
					</div>
				</div>
				<div class="col-sm-3 mt-5 p-2">
					<h3 class="text-success">About Grievance Cell</h3> Our organization has a Grievance Redressal Cell / Faculty Feedback to redress the grievances / Faculty Feedback of its students/Faculty regarding academic matters, library, canteen, hostels, and other central services.</br> Students/Faculty may also post their grievances in the Grievance boxes available in the campus & Feedback facility of students and faculty is also available in AICTE web-portal.</br> &nbsp;
					<h4 class="text-success">Grievance Cell Committee</h4> 1. Dr D.Vishnu Murthy - Convener</br> 2. Dr D.Azad - Member</br> 3. Sri. Ch.Rajasekhar Rao - Member</br> 4. Sri T.Prabhakara Rao - Member</br> 5. Sri B.Kishore Kumar - Member</br> 6. Dr.M.V.Subba Rao - Member</br>
					<div class="mb-5"></div>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>

</html>
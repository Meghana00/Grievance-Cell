<?php
session_start();
include('C:\xampp\htdocs\Grievance-Cell\include\conn.php');
// $error='';
// $msg='';
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE `username` = '$username' ";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);

    if($username==$row['username'])
    {
        if($password==$row['password']){
            $_SESSION['sess_user'] = $row['username'];
            echo '<script>alert("logedin");</script>';
        }
        else{
            echo '<script>alert("password incorrect");</script>';
        }
            
    }
    else
    {
    //   $error="UserName Or Password Incorrect";
    echo '<script>alert("username incorrect");</script>';
      // echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
		<!-- Required meta tags -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Favicon-->
		<link rel="icon" href="./assets/images/aitamlogo.png" type="image/gif" sizes="16x16">
		<!-- Page title -->
		<title>AITAM Admin - Grievance Cell</title>
		<!-- Font awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<!-- Main CSS -->
		<link href="./assets/css/main.css" rel="stylesheet" /> 
	</head>

        <form method="POST">
            <div class="container">
                <!--row1-->
                <div class="row mt-3">
                    <div class="col-sm-6 ">
                        <div class=" col-auto mb-3 mt-3">
                            <label for="Fullname" class="form-label">User Name</label>
                            <input type="text" class="form-control shadow-none border-success" id="Fullname" name="username" placeholder="Enter Username"> </div>
                    </div>
                    <div class="col-sm-6">
                        <div class=" col-auto mb-3 mt-3">
                            <label for="Rollno" class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none border-success" id="Rollno" name="password" placeholder="Enter Password"> </div>
                    </div>
                </div>
                <!--end row1-->
                
              
                <div class="mb-3 text-center">
                    <button name="login" type="submit" class="btn  btn-success shadow-none border-none w-25" style="background-color: #5cb85c;"><i class="far fa-paper-plane"></i><span class="ms-2">login</span></button>
                </div>
                
            </div>
        </form>
<body>
    
</body>
</html>
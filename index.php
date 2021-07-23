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
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#5cb85c">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="./assets/images/aitam_logo.jpg" alt="" width="40" height="32"></a>
              
              <div class="justify-content-space-between">
                <div class="text-white text-top"href="#">
                    <h3 class="ms-5">GRIEVANCE CELL</h3>
                </div>
              </div>
              <div class="nav-item d-flex">
                <a class="nav-link text-white h5">Home</a>
                <a class="nav-link text-white h5">about</a>
               <a class="nav-link text-white h5">Contact</a>
             </div>
           </div>
       
                
              </div>
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
                       <div class="col-sm-1">
                        <i class="far fa-user-circle ms-3" style="font-size: 3rem;"></i>
                       </div>
                       <div class="col-sm-11">
                        <p class="ms-1 fw-lighter text-success" style="font-size:32px;">Write Your Grievances Here</p>
                       </div>
                    </div>
                    <!--end header row-->
                    <form>
                    <div class="container">
                        <!--row1-->
                        <div class="row mt-3">
                            <div class="col-sm-6 ">
                                <div class=" col-auto mb-3 mt-3">
                                    <label for="Fullname" class="form-label">Full Name</label>
                                    <input type="text" class="form-control shadow-none border-success" id="Fullname" name="Fullname" placeholder="Enter Fullname">
                                  </div>
                            </div>
                            <div class="col-sm-6">
                                <div class=" col-auto mb-3 mt-3">
                                    <label for="Rollno" class="form-label">RollNo/Employee Id</label>
                                    <input type="text" class="form-control shadow-none border-success" id="Rollno" name="Rollno" placeholder="Enter Rollno">
                                  </div>
                            </div>
                        </div>
                        <!--end row1-->
                        <!--row2--->
                        <div class="row ">
                            <div class="col-sm-6 ">
                                <div class=" col-auto mb-3 ">
                                    <label for="Gender" class="form-label">Gender</label>
                                    <select class="form-select shadow-none border-success" aria-label="Default select example" name="Gender" id="Gender">
                                        <option selected>--select--</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-sm-6">
                                <div class=" col-auto mb-3">
                                    <label for="email" class="form-label">Email<span class="ms-2">(Use your domain mail)</span></label>
                                    <input type="email" class="form-control shadow-none border-success" id="Email" name="Email" placeholder="youremail@domain.com">
                                  </div>
                            </div>
                        </div>
                        <!--end row2-->
                        <!--row3-->
                        <div class="row mb-3">
                            <div class="mb-3">
                                <label for="yourgrievance" class="form-label">Your Grievance</label>
                                <textarea class="form-control shadow-none border-success" id="grievance" name="grievance" rows="5" placeholder="Give a brief note of your grievance"></textarea>
                              </div>
                        </div>
                        <!--end row3-->
                        <div class="mb-3 text-center">
                            <button class="btn  btn-success shadow-none border-none " style="background-color: #5cb85c;"><i class="far fa-paper-plane"></i><span class="ms-2">Send</span></button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-3 mt-5 p-2">
                <h3 class="text-success">About Grievance Cell</h3>
                Our organization has a Grievance Redressal Cell / Faculty Feedback to redress the grievances / Faculty Feedback of its students/Faculty regarding academic matters, library, canteen, hostels, and other central services.</br>
                Students/Faculty may also post their grievances in the Grievance boxes available in the campus & Feedback facility of students and faculty is also available in AICTE web-portal.</br>
                &nbsp;
                <h4 class="text-success">Grievance Cell Committee</h4>
                1. Dr D.Vishnu Murthy - Convener</br>
                2. Dr D.Azad - Member</br>
                3. Sri. Ch.Rajasekhar Rao - Member</br>
                4. Sri T.Prabhakara Rao - Member</br>
                5. Sri B.Kishore Kumar - Member</br>
                6. Dr.M.V.Subba Rao - Member</br>
                <div class="mb-5"></div>
            </div>
        </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    
    
</body>
</html>


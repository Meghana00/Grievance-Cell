<!DOCTYPE html>
<html lang="en">
<head>
<meta charset='utf-8'>
    <!--Favicon-->
    <link rel="icon" href="./assets/images/aitamlogo.png" type="image/gif" sizes="16x16">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>DashBoard-Aitam</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
	<link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
	
    <link rel="stylesheet" href="./assets/style.css">
    <!-- table-->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    

<body oncontextmenu='return false' class='snippet-body'>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Grievance Cell</span> </a>
                <div class="nav_list">
                    <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Grievants</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Grievances</span> </a>
                    <!-- <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a> -->
                    <!-- <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a> -->
                    <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a>
                </div>
            </div>
            <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class=" overview bg-light">
        <h4 class="mt-5">Greivance Overview </h4> 
   
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-blue order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Greivances Recieved</h6>
                                <h2 class="order-card "><i class="fa fa-th-list" aria-hidden="true"></i><span class="f-right">486</span></h2>
                               
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-green order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Greivances Redressed</h6>
                                <h2 class=" order-card"><i class="fa fa-th-list" aria-hidden="true"></i><span class="f-right" >486</span></h2>
                               
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-yellow order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Greivances Pending</h6>
                                <h2 class=" order-card"><i class="fa fa-th-list" aria-hidden="true"></i><span class="f-right">486</span></h2>
                               
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-pink order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Greivances In Progress</h6>
                                <h2 class=" order-card"><i class="fa fa-th-list" aria-hidden="true"></i><span class="f-right">486</span></h2>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!--Container Main end-->
    <!-- table container -->
    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Grievence List</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-14">
					<div class="table-wrap">
						<table class="table table-responsive-xl">
						  <thead>
						    <tr>
						      <th>Slno</th>
						      <th>Email</th>
						      <th>Fullname</th>
                              <th>Gender</th>
                              <th>Grievance</th>
						      <th>Status</th>
                              <th>Solution</th>
						      <th>Action</th>
						    </tr>
						  </thead>
						  <tbody>
							  <!-- row1 -->
						    <tr class="alert" role="alert">
						    	<td>1</td>
						      	<td class="d-flex align-items-center">
						      		<div class="pl-3 email">
						      			<span>markotto@email.com</span>
						      			<span>Added: 01/03/2020</span>
						      		</div>
						     	</td>
						      	<td>Markotto89</td>
                                <td>Male</td>
                                <td>Please make changes</td>
						      	<td class="status"><span class="active">Active</span></td>
                                <td>We are working</td>
						      	<td>
						      		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            		<span aria-hidden="true"><i class="fa fa-close"></i>Write</span>
				          			</button>
				        		</td>
						    </tr>
							<!-- end row1 -->
                            <tr class="alert" role="alert">
						    	<td>1</td>
						      	<td class="d-flex align-items-center">
						      		<div class="pl-3 email">
						      			<span>markotto@email.com</span>
						      			<span>Added: 01/03/2020</span>
						      		</div>
						     	</td>
						      	<td>Markotto89</td>
                                <td>Male</td>
                                <td>Please make changes</td>
						      	<td class="status"><span class="waiting">Pending</span></td>
                                <td>We are working</td>
						      	<td>
						      		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            		<span aria-hidden="true"><i class="fa fa-close"></i>Write</span>
				          			</button>
				        		</td>
						    </tr>


                            <tr class="alert" role="alert">
						    	<td>1</td>
						      	<td class="d-flex align-items-center">
						      		<div class="pl-3 email">
						      			<span>markotto@email.com</span>
						      			<span>Added: 01/03/2020</span>
						      		</div>
						     	</td>
						      	<td>Markotto89</td>
                                <td>Male</td>
                                <td>Please make changes</td>
						      	<td class="status"><span class="waiting">Pending</span></td>
                                <td>We are working</td>
						      	<td>
						      		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            		<span aria-hidden="true"><i class="fa fa-close"></i>Write</span>
				          			</button>
				        		</td>
						    </tr>
							
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- table container -->
 
 
    <script type='text/javascript' src='./assets/script.js'></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'> </script>
</body>
</html>
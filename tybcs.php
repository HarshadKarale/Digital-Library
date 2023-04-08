<?php
	include 'connection.php';
	// if($_SERVER['REQUEST_METHOD']=='POST'){
	// 	$email=$_POST['email'];
	// 	$phone=$_POST['phone'];
	// 	$password=$_POST['password'];
	// 	$rpassword=$_POST['rpassword'];
	// }
	// if($conn){
    //     extract($_POST);
    //     if($password==$rpassword)
    //     {
    //          $sql="INSERT INTO tybcs_downloads VALUES ('','$email','$phone','$password')";
    //     }
    //     else{
    //         echo"Check the Password And Confirm Password are not Same!";
    //     }
    // }
    // else{
    //     echo"Something Went Wrong...";
    // }
    // $res=mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<?php
			include "cdn.html";
		?>
	</head>
	<body class="bg-secondary">
		<style>
			<?php
				include "style.css";
			?>
			</style>
		<!-- Navbar  -->
		<?php
			include "navbar.php";
		?>
		<!-- Navbar End -->

	<h1 class="text-center mt-4 text-dark" id="tybcs"><u>Welcome To TYBSc(Computer Science) Library</u></h1>
	<div class="container-fluid mt-3">
		<div class="row">
			<div class="col-md-12">
				<!-- <img src="images/get_in_touch.jpg" class="w-100" style="height:200px"/> -->
			</div>
		</div>
	</div>
	<div class="container mt-3">

		<!-- library First row -->

		<div class="row">
			<div class="col-md-12">
				<div class="card card-light responsive1 mt-5">
					<div class="card-header">
						<h6 class="fw-bolder">Theorotical Computer Science</h6 class="text-danger">
					</div>
					<div class="card-body">
						<img src="images/tybcs/theorotical_computer_science.jpg" class="books_img" style="height:250px;width:90%">
					</div>
					<div class="card-footer">
						<!-- View Button Design -->
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#view_book_tcs">
  						View
						</button>

						<!--  View Button Modal -->
						<div class="modal fade" id="view_book_tcs" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  						<div class="modal-dialog">
    						<div class="modal-content">
      						<div class="modal-header">
								<div class="col-md-11">
        							<h5 class="modal-title fw-bolder" id="staticBackdropLabel">Computer Science Book</h5>
								</div>
								<div class="col-md-1">
        							<button type="button" class="bg-danger btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        						</div>
	   						</div>
      						<div class="modal-body">
	  							<div class="col-md-6 float-end">
		  							<img src="images/tybcs/theorotical_computer_science.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3>Book Name</h3>
									<h5>Description</h5>
									<p>Topics</p>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						<button class="btn btn-danger float-left" data-bs-toggle="modal" data-bs-target="#download_book_tcs">Download</button>
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button Modal End -->
						<button class="btn btn-danger float-left" data-bs-toggle="modal" data-bs-target="#download_book_tcs">Download</button>
						<!-- Download  Modal Started-->
						<div class="modal fade" id="download_book_tcs" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  						<div class="modal-dialog">
    						<div class="modal-content">
      						<div class="modal-header bg-danger">
								<div class="col-md-11">
        							<h5 class="modal-title fw-bolder text-light" id="staticBackdropLabel">Registration Form</h5>
								</div>
								<div class="col-md-1">
        							<button type="button" class="bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        						</div>
	   						</div>
      						<div class="modal-body">
	  							<h5><u><span class="text-danger">Register Here</span> To Download The Book</u></h5>
								  	<div class="col-md-12">
                        <!-- <h3 class="fw-bolder mt-3 text-warning">SignUp Here</h3> -->
                        				<form action="tybcs.php" method="post">
                            				<label class="fw-bolder mt-3">Email</label>
                            				<input class="form-control" type="text" name="email" id="email" placeholder="Enter Your Email" class="w-100" required/>
                            				<label class="fw-bolder mt-3">Phone</label>
                            				<input class="form-control" type="text" name="phone" id="phone" placeholder="Enter Your Phone" class="w-100" required/>
                            				<label class="fw-bolder mt-3">Password</label>
                            				<input class="form-control" type="password" name="password" id="password" placeholder="Enter Password" class="w-100" required/>
                            				<label class="fw-bolder mt-3">Confirm Password</label>
                            				<input class="form-control" type="password" name="rpassword" id="rpassword" placeholder="Confirm Password" class="w-100" required/>
                        				</form>
                    				</div>
      							</div>
      						<div class="modal-footer bg-danger">
        						<button type="button" class="btn btn-dark text-light" data-bs-target="submit_form">Register And Download</button>
      						</div>
    						</div>
  						</div>
						</div>

						<!-- Download Modal End  -->


					</div>
				</div>
				<div class="card card-light responsive1 mt-5">
					<div class="card-header">
						<h6 class="fw-bolder">Foundation Of Data Science</h6>
					</div>
					<div class="card-body">
						<img src="images/tybcs/FDS.jpg" class="books_img" style="height:250px;width:90%">
					</div>
					<div class="card-footer">
						<!-- View Button Design -->
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#view_book_fds">
  						View
						</button>

						<!-- Modal -->
						<div class="modal fade" id="view_book_fds" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  						<div class="modal-dialog">
    						<div class="modal-content">
      						<div class="modal-header">
								<div class="col-md-11">
        							<h5 class="modal-title fw-bolder" id="staticBackdropLabel">Computer Science Book</h5>
								</div>
								<div class="col-md-1">
        							<button type="button" class="bg-danger btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        						</div>
	   						</div>
      						<div class="modal-body">
	  							<div class="col-md-6 float-end">
		  							<img src="images/tybcs/FDS.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3>Book Name</h3>
									<h5>Description</h5>
									<p>Topics</p>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						<button class="btn btn-danger float-left" data-bs-toggle="modal" data-bs-target="#download_book_fds">Download</button>
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button End -->

						<!-- download button started here -->
						<button class="btn btn-danger float-left" data-bs-toggle="modal" data-bs-target="#download_book_fds">Download</button>
						<!-- download Modal -->
						<div class="modal fade" id="download_book_fds" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  						<div class="modal-dialog">
    						<div class="modal-content">
      						<div class="modal-header bg-danger">
								<div class="col-md-11">
        							<h5 class="modal-title fw-bolder text-light" id="staticBackdropLabel">Registration Form</h5>
								</div>
								<div class="col-md-1">
        							<button type="button" class="bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        						</div>
	   						</div>
      						<div class="modal-body">
	  							<h5><u><span class="text-danger">Register Here</span> To Download The Book</u></h5>
								  	<div class="col-md-12">
                        <!-- <h3 class="fw-bolder mt-3 text-warning">SignUp Here</h3> -->
                        				<form action="contact_us_submit.php" method="post">
                            				<label class="fw-bolder mt-3">Email</label>
                            				<input class="form-control" type="text" name="email" id="email" placeholder="Enter Your Email" class="w-100" required/>
                            				<label class="fw-bolder mt-3">Phone</label>
                            				<input class="form-control" type="text" name="phone" id="phone" placeholder="Enter Your Phone" class="w-100" required/>
                            				<label class="fw-bolder mt-3">Password</label>
                            				<input class="form-control" type="password" name="password" id="password" placeholder="Enter Password" class="w-100" required/>
                            				<label class="fw-bolder mt-3">Confirm Password</label>
                            				<input class="form-control" type="password" name="password" id="password" placeholder="Confirm Password" class="w-100" required/>
                        				</form>
                    				</div>
      							</div>
      						<div class="modal-footer bg-danger">
        						<button type="button" class="btn btn-dark text-light">Register And Download</button>
      						</div>
    						</div>
  						</div>
						</div>

					</div>
				</div>
				<div class="card card-light responsive1 mt-5">
					<div class="card-header">
						<h6 class="fw-bolder">Operating System</h6>
					</div>
					<div class="card-body">
						<img src="images/tybcs/operating_system1.jpg" class="books_img" style="height:250px;width:90%">
					</div>
					<div class="card-footer">
						<!-- View Button Design -->
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#view_book_os">
  						View
						</button>

						<!-- Modal -->
						<div class="modal fade" id="view_book_os" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  						<div class="modal-dialog">
    						<div class="modal-content">
      						<div class="modal-header">
								<div class="col-md-11">
        							<h5 class="modal-title fw-bolder" id="staticBackdropLabel">Computer Science Book</h5>
								</div>
								<div class="col-md-1">
        							<button type="button" class="bg-danger btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        						</div>
	   						</div>
      						<div class="modal-body">
	  							<div class="col-md-6 float-end">
		  							<img src="images/tybcs/operating_system1.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3>Book Name</h3>
									<h5>Description</h5>
									<p>Topics</p>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						<button class="btn btn-danger float-left" data-bs-toggle="modal" data-bs-target="#download_book_os">Download</button>
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button End -->
						<!-- download button started here -->
						<button class="btn btn-danger float-left" data-bs-toggle="modal" data-bs-target="#download_book_os">Download</button>
						<!-- Download  Modal Started-->
						<div class="modal fade" id="download_book_os" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  						<div class="modal-dialog">
    						<div class="modal-content">
      						<div class="modal-header bg-danger">
								<div class="col-md-11">
        							<h5 class="modal-title fw-bolder text-light" id="staticBackdropLabel">Registration Form</h5>
								</div>
								<div class="col-md-1">
        							<button type="button" class="bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        						</div>
	   						</div>
      						<div class="modal-body">
	  							<h5><u><span class="text-danger">Register Here</span> To Download The Book</u></h5>
								  	<div class="col-md-12">
                        <!-- <h3 class="fw-bolder mt-3 text-warning">SignUp Here</h3> -->
                        				<form action="contact_us_submit.php" method="post">
                            				<label class="fw-bolder mt-3">Email</label>
                            				<input class="form-control" type="text" name="email" id="email" placeholder="Enter Your Email" class="w-100" required/>
                            				<label class="fw-bolder mt-3">Phone</label>
                            				<input class="form-control" type="text" name="phone" id="phone" placeholder="Enter Your Phone" class="w-100" required/>
                            				<label class="fw-bolder mt-3">Password</label>
                            				<input class="form-control" type="password" name="password" id="password" placeholder="Enter Password" class="w-100" required/>
                            				<label class="fw-bolder mt-3">Confirm Password</label>
                            				<input class="form-control" type="password" name="password" id="password" placeholder="Confirm Password" class="w-100" required/>
                        				</form>
                    				</div>
      							</div>
      						<div class="modal-footer bg-danger">
        						<button type="button" class="btn btn-dark text-light">Register And Download</button>
      						</div>
    						</div>
  						</div>
						</div>

						<!-- Download Modal End  -->

					</div>
				</div>
				<div class="card card-light responsive1 mt-5">
					<div class="card-header">
						<h6 class="fw-bolder">Web Techologies -1</h6>
					</div>
					<div class="card-body">
						<img src="images/tybcs/web_technology1.jpg" class="books_img" style="height:250px;width:90%">
					</div>
					<div class="card-footer">
						<!-- View Button Design -->
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#view_book_wt">
  						View
						</button>

						<!-- Modal -->
						<div class="modal fade" id="view_book_wt" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  						<div class="modal-dialog">
    						<div class="modal-content">
      						<div class="modal-header">
								<div class="col-md-11">
        							<h5 class="modal-title fw-bolder" id="staticBackdropLabel">Computer Science Book</h5>
								</div>
								<div class="col-md-1">
        							<button type="button" class="bg-danger btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        						</div>
	   						</div>
      						<div class="modal-body">
	  							<div class="col-md-6 float-end">
		  							<img src="images/tybcs/web_technology1.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3>Book Name</h3>
									<h5>Description</h5>
									<p>Topics</p>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						<button class="btn btn-danger float-left" data-bs-toggle="modal" data-bs-target="#download_book_wt_1">Download</button>
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button End -->
						<!-- download button started here -->
						<button class="btn btn-danger float-left" data-bs-toggle="modal" data-bs-target="#download_book_wt_1">Download</button>
						<!-- Download  Modal Started-->
						<div class="modal fade" id="download_book_wt_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  						<div class="modal-dialog">
    						<div class="modal-content">
      						<div class="modal-header bg-danger">
								<div class="col-md-11">
        							<h5 class="modal-title fw-bolder text-light" id="staticBackdropLabel">Registration Form</h5>
								</div>
								<div class="col-md-1">
        							<button type="button" class="bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        						</div>
	   						</div>
      						<div class="modal-body">
	  							<h5><u><span class="text-danger">Register Here</span> To Download The Book</u></h5>
								  	<div class="col-md-12">
                        <!-- <h3 class="fw-bolder mt-3 text-warning">SignUp Here</h3> -->
                        				<form action="contact_us_submit.php" method="post">
                            				<label class="fw-bolder mt-3">Email</label>
                            				<input class="form-control" type="text" name="email" id="email" placeholder="Enter Your Email" class="w-100" required/>
                            				<label class="fw-bolder mt-3">Phone</label>
                            				<input class="form-control" type="text" name="phone" id="phone" placeholder="Enter Your Phone" class="w-100" required/>
                            				<label class="fw-bolder mt-3">Password</label>
                            				<input class="form-control" type="password" name="password" id="password" placeholder="Enter Password" class="w-100" required/>
                            				<label class="fw-bolder mt-3">Confirm Password</label>
                            				<input class="form-control" type="password" name="password" id="password" placeholder="Confirm Password" class="w-100" required/>
                        				</form>
                    				</div>
      							</div>
      						<div class="modal-footer bg-danger">
        						<button type="button" class="btn btn-dark text-light">Register And Download</button>
      						</div>
    						</div>
  						</div>
						</div>

						<!-- Download Modal End  -->

					</div>
				</div>
				<div class="card card-light responsive1 mt-5">
					<div class="card-header">
						<h6 class="fw-bolder">Blockchain Technology</h6>
						<br>
					</div>
					<div class="card-body">
						<img src="images/tybcs/blockchain_technology1.jpg" class="books_img" style="height:250px;width:90%">
					</div>
					<div class="card-footer">
						<!-- View Button Design -->
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#view_book_bt">
  						View
						</button>

						<!-- Modal -->
						<div class="modal fade" id="view_book_bt" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  						<div class="modal-dialog">
    						<div class="modal-content">
      						<div class="modal-header">
								<div class="col-md-11">
        							<h5 class="modal-title fw-bolder" id="staticBackdropLabel">Computer Science Book</h5>
								</div>
								<div class="col-md-1">
        							<button type="button" class="bg-danger btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        						</div>
	   						</div>
      						<div class="modal-body">
	  							<div class="col-md-6 float-end">
		  							<img src="images/tybcs/blockchain_technology1.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3>Book Name</h3>
									<h5>Description</h5>
									<p>Topics</p>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						<button class="btn btn-danger float-left" data-bs-toggle="modal" data-bs-target="#download_book_bct">Download</button>
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button End -->
						<!-- download button started here -->
						<button class="btn btn-danger float-left" data-bs-toggle="modal" data-bs-target="#download_book_bct">Download</button>
						<!-- Download  Modal Started-->
						<div class="modal fade" id="download_book_bct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  						<div class="modal-dialog">
    						<div class="modal-content">
      						<div class="modal-header bg-danger">
								<div class="col-md-11">
        							<h5 class="modal-title fw-bolder text-light" id="staticBackdropLabel">Registration Form</h5>
								</div>
								<div class="col-md-1">
        							<button type="button" class="bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        						</div>
	   						</div>
      						<div class="modal-body">
	  							<h5><u><span class="text-danger">Register Here</span> To Download The Book</u></h5>
								  	<div class="col-md-12">
                        <!-- <h3 class="fw-bolder mt-3 text-warning">SignUp Here</h3> -->
                        				<form action="contact_us_submit.php" method="post">
                            				<label class="fw-bolder mt-3">Email</label>
                            				<input class="form-control" type="text" name="email" id="email" placeholder="Enter Your Email" class="w-100" required/>
                            				<label class="fw-bolder mt-3">Phone</label>
                            				<input class="form-control" type="text" name="phone" id="phone" placeholder="Enter Your Phone" class="w-100" required/>
                            				<label class="fw-bolder mt-3">Password</label>
                            				<input class="form-control" type="password" name="password" id="password" placeholder="Enter Password" class="w-100" required/>
                            				<label class="fw-bolder mt-3">Confirm Password</label>
                            				<input class="form-control" type="password" name="password" id="password" placeholder="Confirm Password" class="w-100" required/>
                        				</form>
                    				</div>
      							</div>
      						<div class="modal-footer bg-danger">
        						<button type="button" class="btn btn-dark text-light">Register And Download</button>
      						</div>
    						</div>
  						</div>
						</div>

						<!-- Download Modal End  -->

					</div>
				</div>
			

		<!-- First Row of library end here -->

		<!-- Library Second Row Started -->

				<div class="card card-light responsive1 mt-5">
					<div class="card-header">
						<h6 class="fw-bolder">Computer Network -2</h6>
					</div>
					<div class="card-body">
						<img src="images/tybcs/computer_network2.jpg" class="books_img" style="height:250px;width:90%">
					</div>
					<div class="card-footer">
						<!-- View Button Design -->
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#view_book_cn2">
  						View
						</button>

						<!-- Modal -->
						<div class="modal fade" id="view_book_cn2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  						<div class="modal-dialog">
    						<div class="modal-content">
      						<div class="modal-header">
								<div class="col-md-11">
        							<h5 class="modal-title fw-bolder" id="staticBackdropLabel">Computer Science Book</h5>
								</div>
								<div class="col-md-1">
        							<button type="button" class="bg-danger btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        						</div>
	   						</div>
      						<div class="modal-body">
	  							<div class="col-md-6 float-end">
		  							<img src="images/tybcs/computer_network2.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3>Book Name</h3>
									<h5>Description</h5>
									<p>Topics</p>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						<button class="btn btn-danger float-left" data-bs-toggle="modal" data-bs-target="#download_book_cn_2">Download</button>
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button End -->
						<!-- download button started here -->
						<button class="btn btn-danger float-left" data-bs-toggle="modal" data-bs-target="#download_book_cn_2">Download</button>
						<!-- Download  Modal Started-->
						<div class="modal fade" id="download_book_cn_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  						<div class="modal-dialog">
    						<div class="modal-content">
      						<div class="modal-header bg-danger">
								<div class="col-md-11">
        							<h5 class="modal-title fw-bolder text-light" id="staticBackdropLabel">Registration Form</h5>
								</div>
								<div class="col-md-1">
        							<button type="button" class="bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        						</div>
	   						</div>
      						<div class="modal-body">
	  							<h5><u><span class="text-danger">Register Here</span> To Download The Book</u></h5>
								  	<div class="col-md-12">
                        <!-- <h3 class="fw-bolder mt-3 text-warning">SignUp Here</h3> -->
                        				<form action="contact_us_submit.php" method="post">
                            				<label class="fw-bolder mt-3">Email</label>
                            				<input class="form-control" type="text" name="email" id="email" placeholder="Enter Your Email" class="w-100" required/>
                            				<label class="fw-bolder mt-3">Phone</label>
                            				<input class="form-control" type="text" name="phone" id="phone" placeholder="Enter Your Phone" class="w-100" required/>
                            				<label class="fw-bolder mt-3">Password</label>
                            				<input class="form-control" type="password" name="password" id="password" placeholder="Enter Password" class="w-100" required/>
                            				<label class="fw-bolder mt-3">Confirm Password</label>
                            				<input class="form-control" type="password" name="password" id="password" placeholder="Confirm Password" class="w-100" required/>
                        				</form>
                    				</div>
      							</div>
      						<div class="modal-footer bg-danger">
        						<button type="button" class="btn btn-dark text-light">Register And Download</button>
      						</div>
    						</div>
  						</div>
						</div>

						<!-- Download Modal End  -->

					</div>
				</div>
				<div class="card card-light responsive1 mt-5">
					<div class="card-header">
						<h6 class="fw-bolder">Web Technologies-II</h6>
					</div>
					<div class="card-body">
						<img src="images/tybcs/web_technology2.jpg" class="books_img" style="height:250px;width:90%">
					</div>
					<div class="card-footer">
						<!-- View Button Design -->
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#view_book">
  						View
						</button>

						<!-- Modal -->
						<div class="modal fade" id="view_book" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  						<div class="modal-dialog">
    						<div class="modal-content">
      						<div class="modal-header">
								<div class="col-md-11">
        							<h5 class="modal-title fw-bolder" id="staticBackdropLabel">Computer Science Book</h5>
								</div>
								<div class="col-md-1">
        							<button type="button" class="bg-danger btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        						</div>
	   						</div>
      						<div class="modal-body">
	  							<div class="col-md-6 float-end">
		  							<img src="images/tybcs/web_technology2.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3>Book Name</h3>
									<h5>Description</h5>
									<p>Topics</p>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						<button type="button" class="btn btn-danger">Download</button>
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button End -->
						<button class="btn btn-danger float-left">Download</button>
					</div>
				</div>
				<div class="card card-light responsive1 mt-5">
					<div class="card-header">
						<h5 class="fw-bolder">Java-I</h5>
					</div>
					<div class="card-body">
						<img src="images/tybcs/java_1.jpg" class="books_img" style="height:250px;width:90%">
					</div>
					<div class="card-footer">
							<!-- View Button Design -->
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#view_book_java1">
  						View
						</button>

						<!-- Modal -->
						<div class="modal fade" id="view_book_java1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  						<div class="modal-dialog">
    						<div class="modal-content">
      						<div class="modal-header">
								<div class="col-md-11">
        							<h5 class="modal-title fw-bolder" id="staticBackdropLabel">Computer Science Book</h5>
								</div>
								<div class="col-md-1">
        							<button type="button" class="bg-danger btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        						</div>
	   						</div>
      						<div class="modal-body">
	  							<div class="col-md-6 float-end">
		  							<img src="images/tybcs/java_1.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3>Book Name</h3>
									<h5>Description</h5>
									<p>Topics</p>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						<button type="button" class="btn btn-danger">Download</button>
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button End -->
						<button class="btn btn-danger float-left">Download</button>
					</div>
				</div>
				<div class="card card-light responsive1 mt-5">
					<div class="card-header">
						<h5 class="fw-bolder">Java-II</h5>
					</div>
					<div class="card-body">
						<img src="images/tybcs/java_2.jpg" class="books_img" style="height:250px;width:90%">
					</div>
					<div class="card-footer">
						<!-- View Button Design -->
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#view_book_java2">
  						View
						</button>

						<!-- Modal -->
						<div class="modal fade" id="view_book_java2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  						<div class="modal-dialog">
    						<div class="modal-content">
      						<div class="modal-header">
								<div class="col-md-11">
        							<h5 class="modal-title fw-bolder" id="staticBackdropLabel">Computer Science Book</h5>
								</div>
								<div class="col-md-1">
        							<button type="button" class="bg-danger btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        						</div>
	   						</div>
      						<div class="modal-body">
	  							<div class="col-md-6 float-end">
		  							<img src="images/tybcs/java_2.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3>Book Name</h3>
									<h5>Description</h5>
									<p>Topics</p>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						<button type="button" class="btn btn-danger">Download</button>
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button End -->
						<button class="btn btn-danger float-left">Download</button>
					</div>
				</div>
				<div class="card card-light responsive1 mt-5">
					<div class="card-header">
						<h6 class="fw-bolder">Software Testing Tools</h6>
					</div>
					<div class="card-body">
						<img src="images/tybcs/software_testing_tools.jpg" class="books_img" style="height:250px;width:90%">
					</div>
					<div class="card-footer">
						<!-- View Button Design -->
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#view_book_software_testing_tools">
  						View
						</button>

						<!-- Modal -->
						<div class="modal fade" id="view_book_software_testing_tools" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  						<div class="modal-dialog">
    						<div class="modal-content">
      						<div class="modal-header">
								<div class="col-md-11">
        							<h5 class="modal-title fw-bolder" id="staticBackdropLabel">Computer Science Book</h5>
								</div>
								<div class="col-md-1">
        							<button type="button" class="bg-danger btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        						</div>
	   						</div>
      						<div class="modal-body">
	  							<div class="col-md-6 float-end">
		  							<img src="images/tybcs/software_testing_tools.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3>Book Name</h3>
									<h5>Description</h5>
									<p>Topics</p>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						<button type="button" class="btn btn-danger">Download</button>
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button End -->
						<button class="btn btn-danger float-left">Download</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Second row end -->


		<!-- Blogs Section Started -->
		<div class='container mt-5 bg-light' id="blogs">
    			<div class='row'>
        			<div class='col-md-12 text-center'>
            			<h3 class='fw-bolder text-center mt-5'>LATEST BLOGS</h3>
            			<p class='mt-3'>When unknow printer took a gallery of type and scramblted it to make a<br/>type specimen book</p>
        			</div>
        			<div class='col-md-12 mt-4 mb-5'>
            			<div class='row'>
                			<div class='col-md-4'>
                    			<div class='card blog_card'>
                        			<div class='card-body'>
                            			<img src='https://tarettis.sirv.com/Images/blog_09.jpg' class='h-100 w-100'/>
                        			</div>
                        			<div class='card-footer text-center'>
                            			<p>July 21,2020</p>
                            			<h5>Fitness Mantra To Live Fit Life</h5>
                            			<p>Midst first it, you're multiply divided. There don't, second his one given the he one third rule fruit, very. Fill. Seed give firmament</p>
                            			<button class='btn btn-warning mt-3'>READ MORE</button>
                        			</div>
                    			</div>
                			</div>
                			<div class='col-md-4'>
                    			<div class='card blog_card'>
                        			<div class='card-body'>
                            			<img src='https://tarettis.sirv.com/Images/blog_05.jpg' class='h-100 w-100'/>
                        			</div>
                        			<div class='card-footer text-center'>
                            			<p>May 03,2020</p>
                            			<h5>Beautiful & Special Moment</h5>
                            			<p>Extremity direction existence as Dashwood's do up. Securing Marianne led welcomed offended but offering six raptures. Conveying concluded newspaper rapturous oh at.</p>
                            			<button class='btn btn-warning'>READ MORE</button>
                        			</div>
                    			</div>
                			</div>
                			<div class='col-md-4'>
                    			<div class='card blog_card'>
                        			<div class='card-body'>
                            			<img src='https://tarettis.sirv.com/Images/blog_06.jpg' class='h-100 w-100'/>
                        			</div>
                        			<div class='card-footer text-center'>
                            			<p>April 02,2020</p>
                            			<h5>Beauti lies within special</h5>
                            			<p>Extremity direction existence as Dashwood's do up. Securing Marianne led welcomed offended but offering six raptures. Conveying concluded newspaper rapturous oh at.</p>
                            			<button class='btn btn-warning'>READ MORE</button>
                        			</div>
                    			</div>
                			</div>
            			</div>
        			</div>
    			</div>
			</div>

			<!-- Blogs secton end -->




	</div>

	<?php
		include "footer.php";
	?>
</body>
</html>


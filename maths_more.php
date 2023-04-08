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

	<h1 class="text-center mt-4 text-light">Welcome To Mathematics Book's Library</h1>

	<div class="container mt-4">

		<!-- library First row -->

		<div class="row">
			<div class="col-md-12">
				<div class="card card-light responsive1">
					<div class="card-header">
						<h4>Book</h4>
					</div>
					<div class="card-body">
						<img src="images/ebooks.jpg" class="books_img" style="height:250px;width:90%">
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
		  							<img src="images/ebooks.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3>Book Name</h3>
									<h5>Description</h5>
									<p>Topics</p>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#download_book_math" class="btn btn-danger float-left">Download</button>
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button End -->
						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#download_book_math" class="btn btn-danger float-left">Download</button>
					</div>
				</div>
				<div class="card card-light responsive1">
					<div class="card-header">
						<h4>Book</h4>
					</div>
					<div class="card-body">
						<img src="images/ebooks.jpg" class="books_img" style="height:250px;width:90%">
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
		  							<img src="images/ebooks.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3>Book Name</h3>
									<h5>Description</h5>
									<p>Topics</p>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#download_book_math" class="btn btn-danger float-left">Download</button>
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button End -->
						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#download_book_math" class="btn btn-danger float-left">Download</button>
					</div>
				</div>
				<div class="card card-light responsive1">
					<div class="card-header">
						<h4>Book</h4>
					</div>
					<div class="card-body">
						<img src="images/ebooks.jpg" class="books_img" style="height:250px;width:90%">
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
		  							<img src="images/ebooks.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3>Book Name</h3>
									<h5>Description</h5>
									<p>Topics</p>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#download_book_math" class="btn btn-danger float-left">Download</button>
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button End -->
						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#download_book_math" class="btn btn-danger float-left">Download</button>
					</div>
				</div>
				<div class="card card-light responsive1">
					<div class="card-header">
						<h4>Book</h4>
					</div>
					<div class="card-body">
						<img src="images/ebooks.jpg" class="books_img" style="height:250px;width:90%">
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
		  							<img src="images/ebooks.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3>Book Name</h3>
									<h5>Description</h5>
									<p>Topics</p>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#download_book_math" class="btn btn-danger float-left">Download</button>
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button End -->
						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#download_book_math" class="btn btn-danger float-left">Download</button>
					</div>
				</div>
				<div class="card card-light responsive1">
					<div class="card-header">
						<h4>Book</h4>
					</div>
					<div class="card-body">
						<img src="images/ebooks.jpg" class="books_img" style="height:250px;width:90%">
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
		  							<img src="images/ebooks.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3>Book Name</h3>
									<h5>Description</h5>
									<p>Topics</p>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#download_book_math" class="btn btn-danger float-left">Download</button>
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button End -->
						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#download_book_math" class="btn btn-danger float-left">Download</button>
					</div>
				</div>
			

		<!-- First Row of library end here -->

		<!-- Library Second Row Started -->

				<div class="card card-light responsive1">
					<div class="card-header">
						<h4>Book</h4>
					</div>
					<div class="card-body">
						<img src="images/ebooks.jpg" class="books_img" style="height:250px;width:90%">
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
		  							<img src="images/ebooks.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3>Book Name</h3>
									<h5>Description</h5>
									<p>Topics</p>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#download_book_math" class="btn btn-danger float-left">Download</button>
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button End -->
						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#download_book_math" class="btn btn-danger float-left">Download</button>
					</div>
				</div>
				<div class="card card-light responsive1">
					<div class="card-header">
						<h4>Book</h4>
					</div>
					<div class="card-body">
						<img src="images/ebooks.jpg" class="books_img" style="height:250px;width:90%">
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
		  							<img src="images/ebooks.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3>Book Name</h3>
									<h5>Description</h5>
									<p>Topics</p>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#download_book_math" class="btn btn-danger float-left">Download</button>
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button End -->
						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#download_book_math" class="btn btn-danger float-left">Download</button>
					</div>
				</div>
				<div class="card card-light responsive1">
					<div class="card-header">
						<h4>Book</h4>
					</div>
					<div class="card-body">
						<img src="images/ebooks.jpg" class="books_img" style="height:250px;width:90%">
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
		  							<img src="images/ebooks.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3>Book Name</h3>
									<h5>Description</h5>
									<p>Topics</p>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#download_book_math" class="btn btn-danger float-left">Download</button>
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button End -->
						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#download_book_math" class="btn btn-danger float-left">Download</button>
					</div>
				</div>
				<div class="card card-light responsive1">
					<div class="card-header">
						<h4>Book</h4>
					</div>
					<div class="card-body">
						<img src="images/ebooks.jpg" class="books_img" style="height:250px;width:90%">
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
		  							<img src="images/ebooks.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3>Book Name</h3>
									<h5>Description</h5>
									<p>Topics</p>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#download_book_math" class="btn btn-danger float-left">Download</button>
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button End -->
						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#download_book_math" class="btn btn-danger float-left">Download</button>
					</div>
				</div>
				<div class="card card-light responsive1">
					<div class="card-header">
						<h4>Book</h4>
					</div>
					<div class="card-body">
						<img src="images/ebooks.jpg" class="books_img" style="height:250px;width:90%">
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
		  							<img src="images/ebooks.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3>Book Name</h3>
									<h5>Description</h5>
									<p>Topics</p>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#download_book_math" class="btn btn-danger float-left">Download</button>
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button End -->
						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#download_book_math" class="btn btn-danger float-left">Download</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Second row end -->




		<!-- Download  Modal Started-->
		<div class="modal fade" id="download_book_math" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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


	<?php
		include "footer.php";
	?>
</body>
</html>


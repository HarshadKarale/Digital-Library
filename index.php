

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



		<!-- "Welcome To Open Library" Section Started here -->
		<div class="container bg-light mt-3">
			<div class="row">
				<div class="col-md-12">
					<h4 class="'text-primary mt-5">Welcome To Open Library</h4>
					<div class="row">
						<div class="col-md-4">


						<!-- Work Pending -->

						</div>
					</div>
				</div>


				<!--Computer Science Books First Section Started Here -->
				<h2 class="mt-5 text-center text-danger fw-bolder text-uppercase mt-5">Computer Science Books</h2>
				<div class="col-md-12">
					<div class="row mt-2 mb-5">
						<div class="computer_science_books">
							<img src="images/fy.jpg" class="books_img h-100 w-100">
							<button class="btn btn-danger mt-2" onclick="window.location.href='fybcs.php'">FY Bsc(Computer Science)</button>
						</div>
						<div class="computer_science_books">
							<img src="images/sy.jpg" class="books_img h-100 w-100">
							<button class="btn btn-danger mt-2" onclick="window.location.href='sybcs.php'">SY Bsc(Computer Science)</button>
						</div>
						<div class="computer_science_books">
							<img src="images/ty.jpg" class="books_img h-100 w-100">
							<button class="btn btn-danger mt-2" onclick="window.location.href='tybcs.php'">TY Bsc(Computer Science)</button>
						</div>
						<div class="computer_science_books">
							<img src="images/other_cs.jpg" class="books_img h-100 w-100">
							<button class="btn btn-outline-danger mt-2" onclick="window.location.href='computerScience_library.php'">Click Here For More</button>
						</div>
					</div>
				</div>


				<!--Mathematics Books Section Started Here -->
				<h2 class="mt-5 text-center text-dark text-uppercase fw-bolder">Mathematics Books</h2>
				<div class="card card-light homepage_books">
					<div class="card-header">
						<h5>Pearson's Mathematics</h5>
					</div>
					<div class="card-body">
						<img src="images/fybcs/math1.jpg" class="books_img" style="height:250px;width:90%">
					</div>
					<div class="card-footer">
						<!-- View Button Design -->
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#view_book1">
  						View
						</button>

						<!-- Modal -->
						<div class="modal fade" id="view_book1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
		  							<img src="images/fybcs/math1.jpg" class="books_img" style="height:350px;width:100%">
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
				</div>
				
				<div class="card card-light homepage_books">
					<div class="card-header">
						<h5>Discrete Mathematics</h5>
					</div>
					<div class="card-body">
						<img src="images/math2.jpg" class="books_img" style="height:250px;width:90%">
					</div>
					<div class="card-footer">
							<!-- View Button Design -->
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#view_book2">
  						View
						</button>

						<!-- Modal -->
						<div class="modal fade" id="view_book2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
		  							<img src="images/math2.jpg" class="books_img" style="height:350px;width:100%">
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
				<div class="card card-light homepage_books">
					<div class="card-header">
						<h6>Mathematics For Diploma</h6>
					</div>
					<div class="card-body">
						<img src="images/math3.jpg" class="books_img" style="height:250px;width:90%">
					</div>
					<div class="card-footer">
						<!-- View Button Design -->
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#view_book3">
  						View
						</button>

						<!-- Modal -->
						<div class="modal fade" id="view_book3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
		  							<img src="images/math3.jpg" class="books_img" style="height:350px;width:100%">
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
				<div class="card card-light homepage_books">
					<div class="card-header">
						<h4>Book</h4>
					</div>
					<div class="card-body">
						<img src="images/math4.jpg" class="books_img" style="height:250px;width:90%">
					</div>
					<div class="card-footer">
						<button class="btn btn-outline-danger float-left" onclick="window.location.href='maths_more.php'">View More</button>
					</div>
				</div>
			
		


				<h2 class="mt-5 text-center text-dark fw-bolder text-uppercase">Other Books</h2>
				<!-- Other Books Section -->
				<div class="card card-light homepage_books">
					<div class="card-header">
						<h4 class="text-danger">Bhagvat Geeta</h4>
					</div>
					<div class="card-body">
						<img src="images/bhagvat_gita.jpg" class="books_img" style="height:250px;width:90%">
					</div>
					<div class="card-footer">
						<!-- View Button Design -->
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#view_book3_1">
  						View
						</button>

						<!-- Modal -->
						<div class="modal fade" id="view_book3_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  						<div class="modal-dialog">
    						<div class="modal-content">
      						<div class="modal-header">
								<div class="col-md-11">
        							<h5 class="modal-title fw-bolder" id="staticBackdropLabel">Bhagvat Geeta</h5>
								</div>
								<div class="col-md-1">
        							<button type="button" class="bg-danger btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        						</div>
	   						</div>
      						<div class="modal-body">
	  							<div class="col-md-6 float-end">
		  							<img src="images/bhagvat_gita.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3 class="text-danger mt-4">Bhagvat Geeta</h3>
									<h5 class="mt-3">Total Mahabharat Katha</h5>
									<h6 class="text-primary mt-4">All Detailed In Marathi</h6>
									<p>All Adhyay's Are Available with Meaning</p>
									<button type="button" class="btn btn-danger mt-5" onclick="window.location.href='other_books/bhagvat_geeta.pdf'">Download Now</button>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button End -->

						<button class="btn btn-danger" onclick="window.location.href='other_books/bhagvat_geeta.pdf'">Download</button>
						<!-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#download_book_mahabharat">Download</button> -->

						<!-- Download Modal Startde Here -->
						<!-- <div class="modal fade" id="download_book_mahabharat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                        <h3 class="fw-bolder mt-3 text-warning">SignUp Here</h3>
                        				<form action="contact_us_submit.php" method="post">
                            				<label class="fw-bolder mt-3">Email</label>
                            				<input class="form-control" type="text" name="email" id="email" placeholder="Enter Your Email" class="w-100" required/>
                            				<label class="fw-bolder mt-3">Phone</label>
                            				<input class="form-control" type="text" name="phone" id="phone" placeholder="Enter Your Phone" class="w-100" required/>
                            				<label class="fw-bolder mt-3">Password</label>
                            				<input class="form-control" type="password" name="password" id="password" placeholder="Enter Password" class="w-100" required/>
                            				<label class="fw-bolder mt-3">Confirm Password</label>
                            				<input class="form-control" type="password" name="password" id="password" placeholder="Confirm Password" class="w-100" required/>
											<button type="button" class="btn btn-dark text-light">Register And Download</button>
                        				</form>
                    				</div>
      							</div>
      						<div class="modal-footer bg-danger">
        						
      						</div>
    						</div>
  						</div>
						</div> -->

						<!-- Download Modal End   -->
					</div>
				</div>
				
				<div class="card card-light homepage_books">
					<div class="card-header">
						<h6 class="text-danger">The Magic Of Big Thinking</h6>
					</div>
					<div class="card-body">
						<img src="images/magic_of_big_thinking.jpg" class="books_img" style="height:250px;width:90%">
					</div>
					<div class="card-footer">
							<!-- View Button Design -->
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#view_book_magic_of_big_thinking">
  						View
						</button>

						<!-- Modal -->
						<div class="modal fade" id="view_book_magic_of_big_thinking" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
		  							<img src="images/magic_of_big_thinking.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3>Book Name</h3>
									<h5>Description</h5>
									<p>Topics</p>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						<button type="button" class="btn btn-danger" onclick="window.location.href='other_books/magic_of_thinking_big.pdf'">Download</button>
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button End -->
						<button class="btn btn-danger float-left" onclick="window.location.href='other_books/magic_of_thinking_big.pdf'">Download</button>
					</div>
				</div>
				<div class="card card-light homepage_books">
					<div class="card-header">
						<h6 class="text-danger">Think And Grow Rich</h6>
					</div>
					<div class="card-body">
						<img src="images/think_and_grow_rich.jpg" class="books_img" style="height:250px;width:90%">
					</div>
					<div class="card-footer">
						<!-- View Button Design -->
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#view_book_think_and_grow_rich">
  						View
						</button>

						<!-- Modal -->
						<div class="modal fade" id="view_book_think_and_grow_rich" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
		  							<img src="images/think_and_grow_rich.jpg" class="books_img" style="height:350px;width:100%">
								</div>
								<div class="col-md-6 float-end">
									<h3>Book Name</h3>
									<h5>Description</h5>
									<p>Topics</p>
								</div>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        						<button class="btn btn-danger float-left" onclick="window.location.href='other_books/think-and-grow-rich.pdf'">Download</button>
      						</div>
    						</div>
  						</div>
						</div>
						<!-- View Button End -->
						<button class="btn btn-danger float-left" onclick="window.location.href='other_books/think-and-grow-rich.pdf'">Download</button>
					</div>
				</div>
				<div class="card card-light homepage_books">
					<div class="card-header">
						<h4 class="text-danger">More</h4>
					</div>
					<div class="card-body">
						<img src="images/more_books.jpg" class="books_img" style="height:250px;width:90%">
					</div>
					<div class="card-footer">
						<button class="btn btn-outline-danger float-left" onclick="window.location.href='others_more.php'">View More</button>
					</div>
				</div>
			</div>

			<!-- Around Library Section i.e. End Of Books Section -->
</br>
</br>
			<h3 class="headings text-danger text-uppercase mt-5">Around Library</h3>
			<div class="row">
				<div class="around_lib_imgs col-md-3">
					<img src="images/library_visitors.jpg" style="width: 100%; height: 200px;"; class="mt-2"/>
					<h3 class="text-center ml-5">3,597,736</h3>
					<p class="text-center fs-6 text-dark">UNIQUE VISITORS</p>
				</div>
				<div class="around_lib_imgs col-md-3">
					<img src="images/new_members.jpg" style="width: 100%; height: 200px;"; class="mt-2"/>
					<h3 class="text-center ml-5">1,50,253</h3>
					<p class="text-center fs-6 text-dark">NEW MEMBERS</p>
				</div>
				<div class="around_lib_imgs col-md-3">
					<img src="images/lists_created.jpg" style="width: 100%; height: 200px;"; class="mt-2"/>
					<h3 class="text-center ml-5">1,250</h3>
					<p class="text-center fs-6 text-dark">LISTS CREATED</p>
				</div>
				<div class="around_lib_imgs col-md-3">
					<img src="images/ebooks.jpg" style="width: 100%; height: 200px;"; class="mt-2"/>
					<h3 class="text-center ml-5">4,25,355</h3>
					<p class="text-center fs-6 text-dark">EBOOKS BORROWED</p>
				</div>
			</div>
			<section class="gap"></section>



			<!-- Blogs Section Started -->
			<div class='container mt-5 bg-light' id="blogs">
    			<div class='row'>
        			<div class='col-md-12 text-center'>
            			<h3 class='fw-bolder text-center mt-2'>LATEST BLOGS</h3>
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



			<h2 class="headings text-uppercase text-danger">About The Project</h2>
			<div class="row">
				<div class="col-md-6">
					<span class="fs-5 mt-3">Open Library is an open, editable library catalog, building towards a web page for every book ever published.</span>
					<a href="" class="fs-5">More..</a>
					<P class="fs-6 mt-2">Just like Wikipedia, you can contribute new information or corrections to the catalog. You can browse by <a href="#">subjects</a>, <a href="#">authors</a> or <a href="#">lists</a> members have created. If you love books, why not help build a library?</P>
				</div>
				<div class="col-md-6 mb-5">
					<a href="#">LATEST BLOG POSTS</a>
					<br><br>
					<a href="#">Internet Archive Summer of Design</a> <span>- November 01, 2022</span>
					<br>
					<a href="#">It takes a Classroom to build an Open Library </a> <span>-November 01, 2022</span>
					<br>
					<a href="#">A High Schooler’s Experience Contributing to the Open Book Genome Project</a> <span>-November 01, 2022</span>
				</div>
			</div>

		</div>

		


		<!-- Footer  -->
		<?php
	    	// include "blogs.php";
			include "footer.php";
		?>
	</body>
</html>
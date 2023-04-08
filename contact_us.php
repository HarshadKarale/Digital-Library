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



<div class="container mb-5 bg-light">
    <div class="row about_us_bg mt-4 mb-3">
        <div class="col-md-12 text-center">
             <h1 class="fw-bold text-danger">Get In Touch!</h1>
            <h4>Register Here To Get Updates of Newly Available Books.</h4>
        </div>
        <div class="col-md-6 mb-3 mt-2">
            <img src="images/get_in_touch1.jpg" class="h-100 w-100"/>
        </div>


        <!-- registration form -->
        <div class="col-md-6 bg-primary mb-3 mt-2 text-center">
            <h3 class="fw-bolder mt-3 text-Dark"><b><u>SignUp Here</u></b></h3>
            <form action="contact_us_submit.php" method="post">
                <label class="fw-bolder mt-3 text-light">Email</label>
                <input class="form-control" type="text" name="email" id="email" placeholder="Enter Your Email" class="w-100" required/>
                <label class="fw-bolder mt-3 text-white">Phone</label>
                <input class="form-control" type="text" name="phone" id="phone" placeholder="Enter Your Phone" class="w-100" required/>
                <label class="fw-bolder mt-3 text-white">Password</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password" class="w-100" required/>
                <label class="fw-bolder mt-3 text-white">Retype Password</label>
                <input class="form-control" type="password" name="rpassword" id="rpassword" placeholder="Reenter Password" class="w-100" required/>
                <button class="btn btn-danger mt-3 mb-3">SignUp</button>
            </form>
        </div>
    </div>
<!-- registration form end -->

    

<!-- Blogs Section Starte Here -->
    <section class="gap"></section>
    <div class='container mt-2 bg-white' id="blogs">
        <div class='row'>
            <div class='col-md-12 text-center'>
                <h1 class='font-weight-bold text-center mt-3'>Latest Blog</h1>
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
                                <button class='btn btn-warning mt-4'>READ MORE</button>
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





<br/>
<br/>


<?php
    include "footer.php";
?>

</body>
</html>
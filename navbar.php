<?php
	include "connection.php";
?>
<style>
	<?php
		include "style.css";
	?>
	
	.menu_list{
		margin:0px;
		padding:0px;
		list-style: none;
		text-decoration:none;
		font-family:"Google SanS Regular";
		box-sizing:border-box;
	}
	body{
		background:#fefefe;
	}
	header{
		width:100%;
		height:80px;
		background: #cc0000;
		display:flex;
		align-items:center;
		justify-content:space-between;
		padding:0 100px;
	}
	.logo{
		font-size:28px;
		font-weight:bold;
		color:#fefefe;
	}
	.hamburger{
		display:flex;
	}
	.nav-bar ul{
		display:flex;
	}
	.nav-bar ul li a{
		display:block;
		color:#fefefe;
		font-size:20px;
		padding:10px 25px;
		border-radius:50px;
		transition:0.2s;
		margin:5px 5px;
		font-weight:bold;
		font-family: "Gill Sans", sans-serif;
	}
	.nav-bar ul li a:hover {
		color: #000000;
		background:#fefefe;
	}
	nav-bar ul li a.active{
		color:#11101b;
		background:#fefefe;
	}
	@media only screen and (max-width: 1320px){
		header{
			padding: 0 50px;
		}
	}
	@media only screen and (max-width: 1100px){
		header{
			padding: 0 30px;
		}
	}
	@media only screen and (max-width: 900px){
		.hamburger{
			display:block;
			cursor:pointer;
		}
		.hamburger .line{
			width:30px;
			height:3px;
			background:#fefefe;
			margin: 6px 0;
		}
		.nav-bar{
			height: 0px;
			position: absolute;
			z-index: -1;
			top: 80px;
			left: 0;
			right: 0;
			width: 100vw;
			background: #11101b;
			transition: 0.5s;
			overflow: hidden;
		}
		.nav-bar.active{
			height: 450px;
		}
		.nav-bar ul{
			display: block;
			width: fit-content;
			margin: 80px auto 0 auto;
			text-align: center;
			transition: 0.5s;
			opacity: 0;
		}
		.nav-bar.active ul{
			opacity: 1;
		}
		.navbar ul li a{
			margin-bottom: 12px;
		}
	}
	

</style>

<header>
		<div class="logo">Digital Library</div>
		<div class="hamburger">
			<div class="line"><div>
			<div class="line"><div>
			<div class="line"><div>
		</div>
		<nav class="nav-bar">
			<ul>
				<li>
					<a href="index.php" class="active menu_list">Home</a>
				</li>
				<li>
					<a href="my_books.php" class="menu_list">My Books</a>
				</li>
				<li>
					<a href="contact_us.php" class="menu_list">Contact Us</a>
				</li>
				<li>
					<a href="https://openlibrary.org/" class="menu_list">More</a>
				</li> 
				<li>
					<button class="btn btn-primary mt-3">Sign Up</button>
				</li>    
			</ul>
		</nav>
	</header>

	<script>
		hamburger = document.querySelector(".hamburger");
		hamburger.onclick = function(){
			navBar = document.querySelector(".nav-bar");
			navBar.classList.toggle("active");
		}
    </script>

<!-- <div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar">
  						<div class="container-fluid">
    						<a class="navbar-brand text-primary" href="https://openlibrary.org/"><h3 class="text-light fw-bolder">Digital Library</h3></a>
    						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      							<span class="navbar-toggler-icon"></span>
    						</button>
    						<div class="collapse navbar-collapse" id="navbarSupportedContent">
     						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        						<li class="nav-item">
          							<a class="nav-link active" aria-current="page" href="index.php"><span class="text-light fs-5">Home</span></a>
        						</li>
        						<li class="nav-item">
          							<a class="nav-link active" href="my_books.php"><span class="text-light fs-5">My Books</span></a>
        						</li>
        						<li class="nav-item">
          							<a class="nav-link active" href="contact_us.php"><span class="text-light fs-5">Contact Us</span></a>
        						</li>
      						</ul>
      						<form class="d-flex">
        						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        						<button class="btn btn-dark" type="submit">Search</button>
      						</form>
    					</div>
  					</div>
				</nav>
			</div>
		</div>
	</div> -->
		<!-- Navbar End -->

	<!-- <marquee class="text-light"><h4>..This Site Is Under Working ..............................................................................// Site May Take Few Days To Complete................................................................................//Please Visit Site After Completed for Better Experience...</h4></marquee> -->


	
<?php
    // include "navbar.php";
    include "cdn.html";
    include "connection.php";
?>
<style>
    <?php
        include "style.css";
    ?>
</style>


<body class="bg-dark">
<div class="container text-center">
    <div class="row register_to_download">
        <div class="col-md-6 mt-5 bg-light ">
            <h4 class="fw-bolder mt-3 text-danger"><u>Register Here To Download The Book</u></h4>
            <form action="register_and_download_submit.php" method="post">
                <label class="fw-bolder mt-3">Email</label>
                <input class="form-control" type="text" name="email" id="email" placeholder="Enter Your Email" class="w-100" required/>
                <label class="fw-bolder mt-3">Phone</label>
                <input class="form-control" type="text" name="phone" id="phone" placeholder="Enter Your Phone" class="w-100" required/>
                <label class="fw-bolder mt-3">Enter Book Name</label>
                <input class="form-control" type="text" name="book" id="book" placeholder="Enter Book Name That You Want To Download" class="w-100" required/>
                <label class="fw-bolder mt-3">Password</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password" class="w-100" required/>
                <label class="fw-bolder mt-3">Retype Password</label>
                <input class="form-control" type="password" name="rpassword" id="rpassword" placeholder="Reenter Password" class="w-100" required/>
                <button class="btn btn-danger mt-3 mb-3">Register And Download</button>
            </form>
        </div>
    </div>
</div>
</body>


<?php
    if($conn)
    {
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $book=$_POST['book'];
        $password=$_POST['password'];
        $rpassword=$_POST['rpassword'];
        if($password==$rassword)
        {
            $sql="INSERT INTO downloads VALUES ('','$email','$phone', '$book', '$password')";
        }
        else{
            echo"Something Went Wrong, Password And Retype Password Must Be Same";
        }
    }
    else{
        echo"Something Went Wrong";
    }
    $res=mysqli_query('conn','$sql');
    if($res)
    {
        ?>
            <div class="container mt-5">
                <div class="row">
                     <div class="col-md-12 text-center">
                        <img src="gifs/successful.gif"/>
                    </div>
                    <div class="col-md-12 text-center">
                        <h2 class="text-danger text-center">Congratulation's</h2>
                        <h4 class="text-center mt-3">Your Registration is Submitted Successfully</h4>
                        <h6>Your Registration Id is: <span class="fw-bolder">HKDL0<?php echo"$id" ?></span> With Email Id: <span class="fw-bolder"><?php echo"$email" ?></span></h6>
                    </div>
                </div>    
            </div>
            <div class="text-center mt-5">
                <button class="btn btn-primary text-center" onclick="window.location.href='contact_us.php'">Go Back</button>
            </div>
        <?php
    }
    else{
        echo"Unable to send data".mysqli_error($conn);
    }
?>
<?php
    include "cdn.html";
    include "connection.php";
    if($conn){
        extract($_POST);
        if($password==$rpassword)
        {
             $sql="INSERT INTO library_contacts VALUES ('','$email','$phone','$password')";
        }
        else{
            echo"Check the Password And Confirm Password are not Same!";
        }
    }
    else{
        echo"Something Went Wrong...";
    }
    $res=mysqli_query($conn, $sql);
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
                        <!-- <h6>Your Registration Id is: <span class="fw-bolder">HKDL<?php echo"$id" ?></span> With Email Id: <span class="fw-bolder"><?php echo"$email" ?></span></h6> -->
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
    // header('location:contact_us.php');

?>
<?php
$fname="";
$mname="";
$lname="";
$age="";
$gender="";
$pnumber="";
$email="";
$password="";
$password2="";
$error=array();
$congra="";

//database connection

$conn=mysqli_connect("localhost","root","","userregisteration");

if(isset($_POST['signup']))
{
    $fname=mysqli_real_escape_string($conn,$_POST['fname']);
    $mname=mysqli_real_escape_string($conn,$_POST['mname']);
    $lname=mysqli_real_escape_string($conn,$_POST['lname']);
    $age=mysqli_real_escape_string($conn,$_POST['age']);
    $gender=mysqli_real_escape_string($conn,$_POST['gender']);
    $pnumber=mysqli_real_escape_string($conn,$_POST['pnumber']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $password2=mysqli_real_escape_string($conn,$_POST['password2']);

    //validation
    if($password!=$password2)
    {
        array_push($error,"the two passwords not match!");
    }

    $user_check_query="select * from user where firstname = '$fname' or email='$email' limit 1  ";
    $result=mysqli_query($conn,$user_check_query);
    $user=mysqli_fetch_assoc($result);

    if($user['firstname']===$fname)
    {
        array_push($error,"user name already exist");
    }
    else if($user['email']===$email)
    {
        array_push($error,"email already exist");
    }

    //rigister 
    
        if(count($error)===0)
        {
            $query="insert into users(firstname,middlename,lastname,age,gender,phonenumber,email,password,confirmpassword) values('$fname','$mname,'$lname','$age','$gender','$pnumber','$email','$password','$password2')";
            mysqli_query($conn,$query);
            $congra="You are successfully registerd!";
        }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Signup</title>
        <!--font awesome link-->
        <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <!--css link-->
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
            <!--js link-->
            <script src="script.js"></script>

            <header class="header">
                <a href="#" class="logo"><i class="fa-solid fa-heart-pulse fa-beat"></i> Medcare </a> 
                
                <nav class="navbar">
                    <a href="#home">home</a>
                    <a href="#services">services</a>
                    <a href="#about">about</a>
                    <a href="#doctors">doctors</a>
                    <a href="contact.html">contact us</a>
                </nav>  
                <div id="menu-btn" class="fa-solid fa-bars" ></div>
            
            </header>

        <!--home section-->
        <section class="home" id="home">

            <div class="image">
                <img src="image/home-img.svg" alt="">
            </div>
            <div class="content">
                <h3>Stay safe, stay healthy</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem possimus aliquid veniam saepe! Pariatur asperiores laboriosam delectus maxime rem fuga.</p>
                <a href="#" class="btn">  Contact us  <span class="fas fa-chevron-right"></span></a>
            </div>

        </section>



        <section class="signup">

            <div  class="bookingform">

                <h2>Registration</h2>

                <div class="err">
                    <?php
                        include 'err.php' ;
                    ?>
                </div>

                <?php
                    echo $congra ;
                ?>

                <form action="signup.php"  method="post">
                    <div class="userdetails">
                        <div class="infobox">
                            <span class="details"> First Name</span>
                            <input type="text" name="fnmae" placeholder="Enter your first name" required>
                        </div>

                        <div class="infobox">
                            <span class="details"> Middle Name</span>
                            <input type="text" name="mname" placeholder="Enter your middle name" required>
                        </div>

                        <div class="infobox">
                            <span class="details"> Last Name</span>
                            <input type="text" name="lname" placeholder="Enter your last name" required>
                        </div>

                        <div class="infobox">
                            <span class="details"> Age</span>
                            <input type="number" name="age" placeholder="Enter your age" required> 
                        </div>

                        <div class="infobox">
                            <span class="details">Gender</span>
                            <select>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                        <div class="infobox">
                            <span class="details"> Phone Number</span>
                            <input type="text" name="pnumber" placeholder="Enter your phone number" required>
                        </div>

                        <div class="infobox">
                            <span class="details"> Email</span>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="infobox">
                            <span class="details">Password</span>
                            <input type="password" name="password" placeholder="Enter password" required>
                        </div>

                        <div class="infobox">
                            <span class="details">Repeat Password</span>
                            <input type="password" name="password2" placeholder="Confirm password " required>
                        </div>

                    </div>

                    <div class="button">
                        <input type="submit" name="signup" value="Confirm">
    
                    </div>

                    <div class="cardlog">Already have account  
                        <a href="loginpage.php">Login</a>
                    </div>
                </form>

            </div>

        </section>


















        <!--footer section-->

        <section class="footer">

            <div class="boxx-container">

                <div class="boxx">
                    <h3>quick links</h3>
                    <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
                    <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
                    <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
                    <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
                    <a href="#booking"> <i class="fas fa-chevron-right"></i> book appointment</a>
                    <a href="#contact us"> <i class="fas fa-chevron-right"></i> contact us</a>
                
                </div>

                <div class="boxx">
                    <h3>our services</h3>
                    <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
                    <a href="#"> <i class="fas fa-chevron-right"></i> physiotherapy </a>
                    <a href="#"> <i class="fas fa-chevron-right"></i> cardiology </a>
                    <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
                    <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
                </div>

                <div class="boxx">
                    <h3>contact info</h3>
                    <a href="#"> <i class="fas fa-phone"></i> +251-912-3456 </a>
                    <a href="#"> <i class="fas fa-phone"></i> +251-222-3333 </a>
                    <a href="#"> <i class="fas fa-envelope"></i> medcareclinics@gmail.com </a>
                    <a href="#"> <i class="fas fa-envelope"></i> medcarehospital@gmail.com </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> Addis ababa, Ethiopia </a>
                </div>

                <div class="boxx">
                    <h3>follow us</h3>
                    <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                    <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                    <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                    <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                    <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
                </div>

            </div>

            <div class="credit"> created by <span>our team</span> | all rights reserved </div>

        </section>

        <!-- footer section ends -->

    </body>
</html>
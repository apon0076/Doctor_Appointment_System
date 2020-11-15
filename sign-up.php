<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/sign_style.css">
</head>
<body>

    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/undraw_medicine_b1ol.png" alt="sing up image"></figure>
                        <a href="sign-in.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>


   


    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>


        <!---Data Insertion Start--->
        <?php
            include 'connection.php';

            if (isset($_POST['signup'])) {

                $name         =   $_POST['name'];
                $email        =   $_POST['email'];
                $pass1         =   $_POST['pass'];
                $pass2         =   $_POST['re_pass'];

                //form validation
                
                if(empty($name )) {array_push($errors, "Name is required");}
                if(empty($email )) {array_push($errors, "Email is required");}
                if(empty($pass1 )) {array_push($errors, "Password is required");}
                if($pass1 != $pass2){array_push($errors, "Password do not match");}

                //check duplicate email

                $patient_check_query = "SELECT * FROM patient WHERE email='$email' LIMIT 1";
                $results = mysqli_query($conn, $patient_check_query);
                $patient = mysqli_fetch_assoc($results);

                if($patient){
                    if ($user['email']===$email){array_push($errors, "Email already exists");}
                }


                if(count($errors) == 0){
                    $pass= md5($pass1);

                    $sql = "INSERT INTO patient (name,email,password)
                    VALUES ('$name', '$email', '$pass')";

                    if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                    } 
                    else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }

            }

            $conn->close();
        ?>
    
     <!---Data Insertion end--->




     
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>

<?php

    error_reporting(0);
    session_start();
    session_destroy();

    if($_SESSION['message'])
    {
        $message=$_SESSION['message'];

        echo "<script type='text/javascript'>

        alert('$message');

         </script>";
    }


?>







<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Student Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    
    <nav>
        <label class="logo">Burma Camp Computer Center</label>

        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php" class="btn  btn-success">Login</a></li>
        </ul>
    </nav>


    <div class="section1">

        <label class="img_text">We Teach Student With Care</label>
        <img class="main_img" src="schoolmanagement.jpg">
    </div>


    <div class="container">

        <div class="row">
            
            <div class="col-md-4">

                <img class="welcome_img" src="zoomed frontview of school.jpg">

            </div>

            <div class="col-md-8">

                <h1 class="bold">Welcome to Burma Camp Computer Center</h1>

                <p>We're excited to introduce our new online platform designed to enhance your educational journey. Whether you're a prospective student looking to apply for admission or a current student eager to check your exam results, you're in the right place</p>

            </div>


        </div>


    </div>

    

    <center>
        <h1 class="boldness">Gallery</h1>
    </center>


    <div class="container">

        <div class="row">

        <div class="col-md-4">
        
            <img class="teacher" src="teaching.jpg">

            <p></p>

        </div>
        
        <div class="col-md-4">
            
            <img class="teacher" src="script.jpg">
        
            <p></p>
        
        </div>

        <div class="col-md-4">
            
            <img class="teacher" src="reading.jpg">
        
            <p></p>
        
        </div>
        
        <div class="col-md-4">
            
            <img class="teacher" src="typing.jpg">
        
            <p></p>
        
        </div>
        
        <div class="col-md-4">
            
            <img class="teacher" src="cute face.jpg">
        
            <p></p>
        
        </div>
        
        <div class="col-md-4">
            
            <img class="teacher" src="answering questions.jpg">
        
            <p></p>
        
        </div>

    
    </div>






    <center>
        <h1 class="boldness">Courses</h1>
    </center>


    <div class="container">

        <div class="row">

        <div class="col-md-4">
        
            <img class="teacher" src="teaching.jpg">

            <p></p>

        </div>
        
        <div class="col-md-4">
            
            <img class="teacher" src="script.jpg">
        
            <p></p>
        
        </div>

        <div class="col-md-4">
            
            <img class="teacher" src="reading.jpg">
        
            <p></p>
        
        </div>

    
    </div>


    <center>
        <h1 class="adm">Admission Form</h1>
    </center>


    <div align="center" class="admission_form">

        <form action="data_check.php" method="POST">

            <div class="adm_int">
                <label class="label_text">Name</label>
                <input class="input_deg" type="text" name="name">
            </div>
            
            <div class="adm_int">
                <label class="label_text">Email</label>
                <input class="input_deg" type="text" name="email">
            </div>
            
            <div class="adm_int">
                <label class="label_text">Phone</label>
                <input class="input_deg" type="text" name="phone">
            </div>
            <div class="adm_int">
                <label class="label_text">Message</label>
                <textarea class="input_txt" name="message"></textarea>
            </div>
            
            <div class="adm_int">
                
                <input class="btn btn-primary" id="submit" type="submit" value=
                "apply"  name="apply">
            </div>



        </form>




    </div>


    <footer>
        <h3 class="footer_text">All @copyright reserved by K_Nsiah.Bota</h3>
    </footer>


</body>
</html>
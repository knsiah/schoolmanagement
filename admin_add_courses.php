
<?php

session_start();

    if(!isset($_SESSION['username']))
    {
        header("location:login.php");
    }

    elseif($_SESSION['usertype']=='student')
    {

        header("location:login.php");
    }


    $host="localhost";
    $user="root";
    $password="";
    $db="bccc";

    $data=mysqli_connect($host,$user,$password,$db);

    if (!$data) {
        die("Connection failed: " . mysqli_connect_error());
    }

$package = $_POST['package'];
$selectedCourse = $_POST['courses'];

$sql="SELECT FROM courses (package,courses) VALUES ('$package','$selectedCourse')";

if (mysqli_query($data, $sql)) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($data);
}

$selectQuery = "SELECT * FROM courses";
$result = mysqli_query($data, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Package: " . $row['package'] . "<br>";
        echo "Courses: " . $row['courses'] . "<br>";

    }
} else {
    echo "No records found.";
}



?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    <style type="text/css">

    .div_deg
    {
        background-color: skyblue;
        padding-top: 70px;
        padding-bottom: 70px;
        width: 500px;
        margin: 0;
    }


    .label 
    {
        display: block;
        margin-bottom: 5px;
    }
    
    </style>


    <?php

    include 'admin_css.php';
    
    ?>

</head>
<body>

    <?php

    include 'admin_sidebar.php';

?>
    

    <div class="content">

    <center>

        <h1>Add Courses</h1>

        <div class="div_deg">

        <form action="#" method="POST" enctype="multipart/form-data">
        <label for="package">Select a Package:</label>
        <select name="package" id="package">
            <option value="Package 1">Package 1</option>
            <option value="Package 2">Package 2</option>
            <option value="Package 3">Package 3</option>
            <option value="Package 4">Package 4</option>
        </select>
        
        <br>

        <label for="courses">Select Courses:</label>
        <select name="courses[]" id="courses" multiple>
            <option value="INTRODUCTION TO COMPUTING">INTRODUCTION TO COMPUTING</option>
            <option value="MS WINDOWS">MS WINDOWS</option>
            <option value="TYPING WITH MAVIS BEACON">TYPING WITH MAVIS BEACON</option>
            <option value="BATCH SCRIPT CODING">BATCH SCRIPT CODING</option>
            <option value="MS WORD">MS WORD</option>
            <option value="MS POWERPOINT">MS POWERPOINT</option>
            <option value="MS EXCEL">MS EXCEL</option>
            <option value="INTRODUCTION TO NETWORKING">INTRODUCTION TO NETWORKING</option>
            <option value="INTRODUCTION TO CYBER SECURITY">INTRODUCTION TO CYBER SECURITY</option>
            <option value="INTERNET BROWSING / SOCIAL MEDIA">INTERNET BROWSING / SOCIAL MEDIA</option>
            <option value="DATABASE WITH MS ACCESS">DATABASE WITH MS ACCESS</option>
            <option value="GRAPHIC DESIGN WITH CORELDRAW">GRAPHIC DESIGN WITH CORELDRAW</option>
            <option value="HARDWARE">HARDWARE</option>
            <option value="NETWORKING">NETWORKING</option>
            <option value="CYBER SECURITY">CYBER SECURITY</option>
            <option value="ETHICAL HACKING">ETHICAL HACKING</option>
            <option value="PENETRATING TEST">PENETRATING TEST</option>
            <option value="VULNERABILITY AWARENESS">VULNERABILITY AWARENESS</option>
            <option value="PERSISTENT THREAT">PERSISTENT THREAT</option>
        </select>
        <br>

        <input type="submit" name="add_courses"
        value="Add Courses" class="btn btn-primary">
    </form>


    
    
    </div>

    </center>

</body>
</html>
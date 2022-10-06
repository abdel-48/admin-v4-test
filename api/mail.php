<?php

session_start();

//after insert or update 
$_SESSION['status'] = "<Type Your success message here>";

$host = "us-cdbr-east-06.cleardb.net";
$username = "b2c7862bad6283";
$password = "5ca079e7";
$database = "heroku_88462ca54c0f82c";

//Connect to database :
$con = mysqli_connect($host, $username, $password, $database);

//Check Connection : 
if(!$con)
{
    //header("Location: ../errors/db.php");
    die(mysqli_connect_error($con));
}


if(isset($_POST['submit'])){
    if(!empty($_POST['fullname']) && !empty($_POST['age']) && !empty($_POST['job']) && !empty($_POST['city']) && !empty($_POST['tel']) && !empty($_POST['email']) && !empty($_POST['nameproject']) && !empty($_POST['ideaproject']) && !empty($_POST['alfia'])){
        
        $firstname = $_POST['fullname'];
        $age = $_POST['age'];
        $job = $_POST['job'];
        $city = $_POST['city'];
        $phone = $_POST['tel'];
        $email = $_POST['email'];
        $projectname = $_POST['nameproject'];
        $projectidea = $_POST['ideaproject'];
        $alfia = $_POST['alfia'];

    

        $query = "INSERT INTO participant(fullname, age, tel, email, city, job, nameproject, ideaproject, alfia )
                VALUES ('$firstname', '$age', '$phone', '$email', '$city', '$job', '$projectname', '$projectidea', '$alfia')";

        $run = mysqli_query($con, $query) or die (mysqli_error($con));

        if($run){
            $_SESSION['status'] = "data  enregistre";
        } else{
            
            header('location:form.php');
        }
    }
    
}

?>

<?php include('form.php')?>
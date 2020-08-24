<?php
include("connection.php");

    if(isset($_POST['login'])){
        $name = htmlentities(mysqli_real_escape_string($con, $_POST['userName']));
        $password = htmlentities(mysqli_real_escape_string($con, $_POST['userPassword']));
/*
        if($name == '')
        {
            echo"<script>alert('Please enter username')</script>";
        }
*/
        $check_details = "select * from user where userName ='$name' and userPassword ='$password'";
        $run_username = mysqli_query($con, $check_details);
        $check = mysqli_num_rows($run_username);

        if($check == 1 || $check > 1){
            echo"<script>alert('hi!')</script>";
            exit();
        }

 

       // $insert = "insert into user(userName, userEmail, userPassword) values('$name', '$email', '$password')";
        else{
            echo"<script>alert('login fail')</script>";
        }
    }
    ?>
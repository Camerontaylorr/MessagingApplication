<?php
include("connection.php");

    if(isset($_POST['signup'])){
        $name = htmlentities(mysqli_real_escape_string($con, $_POST['userName']));
        $email = htmlentities(mysqli_real_escape_string($con, $_POST['userEmail']));
        $password = htmlentities(mysqli_real_escape_string($con, $_POST['userPassword']));
        $rand = rand(1,2);

        if($name == '')
        {
            echo"<script>alert('We can not verify your name')</script>";
        }

        $check_email = "select * from user where userEmail ='$email'";
        $run_email = mysqli_query($con, $check_email);
        $check = mysqli_num_rows($run_email);

        if($check == 1 || $check > 1){
            echo"<script>alert('Email already exists!')</script>";
            echo"<script>window.open('signup.php', '_self')</script>";
            exit();
        }

        if(strlen($password)<8){
            echo"<script>alert('Password should be a minumum of 8 characters!')</script>";
            exit();
        }

        $insert = "insert into user(userName, userEmail, userPassword) values('$name', '$email', '$password')";

        $query = mysqli_query($con, $insert);

        if($query){
            echo"<script>alert('welcome aboard $name!')</script>";
        }
        else{
            echo"<script>alert('Registrion failed, try again')</script>";
        }
    }
    ?>
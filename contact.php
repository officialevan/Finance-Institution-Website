<?php

        $con = mysqli_connect("localhost","root","","pierpoint_db");

    

    if(isset($_POST["submit"])){


        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $country = $_POST["country"];
        $messages = $_POST["messages"];



        $query = "INSERT INTO contact_us(id,firstname, lastname, country, messages, date_submited) values
        ('$firstname','$lastname','$country','$messages')";

        mysqli_query($con,$query);
        header('location:index.html');
    }else{
        echo 'Something Went Wrong. Try Again Later.';
    
    }





?>
<?php

// db connection

require_once "./db-con.php";
require_once "./includes/helpers.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){

     // upload image
     $data = uploadImage("users", $_FILES['image']);

     if ($data['errors'] === false) {
         // save info into db
         $name = $data['result'];

        //  echo $name;
         // exit;

       
            $query = "INSERT INTO `users`(`username`,  `email`,  `password`, `image`) 
            VALUES ('$_POST[username]', '$_POST[email]', '$_POST[password]', '$name') ";
    
            if (mysqli_query($con, $query)) {
                header("Location:signin.php");
            }
            else{
                echo "<div class='alert alert-danger mt-2 uploadingErr'>Query Failed</div>";
            }
        }
        else{ 
            
          echo  "<div class='alert alert-danger mt-2 uploadingErr'> $data[result]</div>";

        }

    exit;
    }


?>
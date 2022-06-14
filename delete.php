<?php
//check if the delete button has been clicked
if (isset($_GET["u_id"])){
    //Now receive the ID from the url
    $userId = $_GET["u_id"];

    //Connect to the database t delete
    require_once "db_connection.php";

    //Create a delete query
    $deleteQuery = "DELETE FROM `users` WHERE id='$userId'";

    //Finally delete using the mysqli_query
    $delete = mysqli_query($connection, $deleteQuery);

    //Check if the deletion was successful
    if (isset($delete)){
        //Redirect the user back to your users.php file
        header("location:users.php");
    }else{
        echo "deletion failed";
    }
}
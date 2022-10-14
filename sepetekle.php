<?php 
session_start();
$urun=$_POST["id"];
$user=$_SESSION['user_id'];
include("db.php");


    $sql = "INSERT INTO sepet(urun_id , user_id ) VALUES ('$urun','$user')";
    
    if ($baglan->query($sql) === TRUE) {
        echo "Record updated successfully";
    } 
    else {
    echo "Error updating record: " . $baglan->error;
    }


?>
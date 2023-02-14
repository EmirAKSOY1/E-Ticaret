<?php 
session_start();
$urun=$_POST["id"];
$user=$_SESSION['user_id'];
include("db.php");


    $sql = "DELETE FROM sepet WHERE id=".$urun."";
    
    if ($baglan->query($sql) === TRUE) {
        echo "Record updated successfully";
    } 
    else {
    echo "Error updating record: " . $baglan->error;
    }


?>
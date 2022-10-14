<?php 
$urun=$_POST["id"];

include("db.php");


    $sql = "INSERT INTO sepet(urun_id) VALUE ('$urun')";
    
    if ($baglan->query($sql) === TRUE) {
        echo "Record updated successfully";
    } 
    else {
    echo "Error updating record: " . $baglan->error;
    }


?>
<link rel="shortcut icon" href="shop.png" type="image/x-icon" />
<?php 
    session_start();
    $_SESSION["login"] = false;
    $productId = $_GET['product_id'];
    
    include("db.php");
    $sql= "SELECT  product_name , product_detail , product_price , product_image ,product_stock , category_id FROM product WHERE product_id='".$productId."' ";
    
    $result = $baglan->query($sql);
    
    
    $row = $result->fetch_assoc();
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/detail.css">
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title><?php echo $row['product_name']?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  
<?php
include('navbar.php');
?>
<main class="container" >

<!-- Left Column / Headphones Image -->
<div class="left-column">

  <img data-image="red" class="active" src="<?php echo $row['product_image']?>" style="width:50%;" alt="">
</div>


<!-- Right Column -->
<div class="right-column">

  <!-- Product Description -->
  <div class="product-description">
    <span><?php echo $row['product_name']?></span>
    <h1><?php echo $row['product_detail']?></h1>
  
    
  </div>

  <!-- Product Configuration -->
  <div class="product-configuration">

    
  

    
   



      
    <span><?php echo $row['category_id']?> </span><br>
    <span>Son : <?php echo $row['product_stock']?> Adet</span>
    
    
  </div>

  <!-- Product Pricing -->
  <div class="product-price">
  
    <span id="ucret"><?php echo $row['product_price']?></span>
    <span >TL</span>
    <button type="button"  class="cart-btn" style="border-width:0px;" >SEPETE EKLE</button>
    
  </div>
</div>
</main>
       


<script>


$(".cart-btn").click(function(){
   <?php

    if(isset($_SESSION['isim'])){
      echo "
    
      $.ajax({
        type: 'POST',
        url: 'sepetekle.php',
        data: {id: ".$productId."  },
        success: function(data){
           
         console.log(data);
        },
        error: function(xhr, status, error){
        console.error(xhr,error);
        }
       });
    
      ";
    }
    else{
      echo "location.href='login.php';";
    }

  
    
    
  ?> 
});
</script>
</body>
</html>

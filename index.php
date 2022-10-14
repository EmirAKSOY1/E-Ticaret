
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
    <link rel="shortcut icon" href="shop.png" type="image/x-icon" />

    <!--Navbar-->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/style.css">
    <!---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<style>
.card-img-top
{
  width: 200px;
}
</style>

<?php 
session_start();
      include("navbar.php");
      
      
  ?>
</head>
<body>

  

<div class="row row-cols-1 row-cols-md-4 g-3" style="margin-left:2%">


<?php 

include("db.php");
      $sec= "SELECT product_id , product_name , product_detail , product_price , product_image FROM product";
      
      $sonuc= $baglan->query($sec);
      
      if ($sonuc->num_rows > 0) 
      {
        // verileri listeleyebiliriz
        while($cek = $sonuc->fetch_assoc()) 
         {
          $urun=
          " 
          <a href='product_detail.php?product_id=".$cek['product_id']."' class='product-detail'>
          <div class='col'>
          <div class='card'>
            <img src='".$cek['product_image']."' class='card-img-top' >
            <div class='card-body'>
              <h5 class='card-title'>".$cek['product_name']."</h5>
              <p class='card-text'>".$cek['product_detail']."</p>
              <h3 class='card-price' >".$cek['product_price']." TL</h3>
            </div>
            
          </div>
        </div>
        </a>
          ";
          
      
          echo $urun;
         }
        }
?>




  
</div>








  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/main.js"></script>  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    
</body>
</html>
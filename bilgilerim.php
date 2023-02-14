<link rel="shortcut icon" href="shop.png" type="image/x-icon" />
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilgilerim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <link rel="stylesheet" href="css/style.css">
    
     <link rel="stylesheet" href="css/newnavbar.css">
     <link rel="stylesheet" href="css/bilgilerim.css">
   
   
</head>
<body>
    <?php 
        session_start();
        $user=$_SESSION['user_id'];
        
        include("db.php");
        
        $sor = mysqli_query($baglan,"SELECT * FROM user where user_id='$user' ");

        $uyebilgi = mysqli_fetch_assoc($sor); 
        include("newnavbar.php");
    ?>

<div class="container">
        <div class="main-body">
        
              
              <!-- /Breadcrumb -->
        
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                          <h4><?php echo $uyebilgi['user_name']." ".$uyebilgi['user_id'] ?></h4>
                          <p class="text-secondary mb-1"><?php echo $uyebilgi['user_mail'] ?></p>
                          <p class="text-muted font-size-sm">ONESHOT</p>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <div class="col-md-8">
                  <div class="card mb-3" id="bilgiler">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">İsim</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $uyebilgi['user_name']?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Adres</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $uyebilgi['adress']?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Telefon</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $uyebilgi['tel']?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Mail</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $uyebilgi['user_mail']?>
                        </div>
                      </div>
                     
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                        
                        
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >Düzenle</button>
                        
                        </div>
                      </div>
                    </div>
                  </div>
    
                  
    
    
    
                </div>
              </div>
    
            </div>
        </div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/main.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

</body>
</html>
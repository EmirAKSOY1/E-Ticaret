<link rel="shortcut icon" href="shop.png" type="image/x-icon" />
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilgilerim</title>

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
    body{
        margin-top:20px;
        color: #1a202c;
        text-align: left;
        background-color: #e2e8f0;    
    }
    .main-body {
        padding: 15px;
    }
    .card {
        box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
    }
    
    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0,0,0,.125);
        border-radius: .25rem;
    }
    
    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }
    
    .gutters-sm {
        margin-right: -8px;
        margin-left: -8px;
    }
    
    .gutters-sm>.col, .gutters-sm>[class*=col-] {
        padding-right: 8px;
        padding-left: 8px;
    }
    .mb-3, .my-3 {
        margin-bottom: 1rem!important;
    }
    
    .bg-gray-300 {
        background-color: #e2e8f0;
    }
    .h-100 {
        height: 100%!important;
    }
    .shadow-none {
        box-shadow: none!important;
    }
    </style>

</head>
<body>
    <?php 
        session_start();
        $user=$_SESSION['user_id'];
        include("navbar.php");
        include("db.php");
        $sor = mysqli_query($baglan,"SELECT * FROM user where user_id='$user' ");

        $uyebilgi = mysqli_fetch_assoc($sor); 
        
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
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">İsim</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $uyebilgi['tel']?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Soyisim</h6>
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
                        <?php echo $uyebilgi['tel']?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Görev</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $uyebilgi['tel']?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                        <a href="dashboard.php" class="btn btn-success" role="button" aria-pressed="true">Geri Dön</a>
                        
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >Düzenle</button>
                        
                        </div>
                      </div>
                    </div>
                  </div>
    
                  
    
    
    
                </div>
              </div>
    
            </div>
        </div>
    
</body>
</html>
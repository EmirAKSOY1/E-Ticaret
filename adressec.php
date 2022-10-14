<link rel="shortcut icon" href="shop.png" type="image/x-icon" />
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alışverişi Tamamla</title>

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
    <div class="form-check">
  <input class="form-check-input" type="radio" name="adres" id="flexRadioDefault1" value="a">
  <label class="form-check-label" for="flexRadioDefault1">
    Başka Adres
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="adres" id="flexRadioDefault2" checked value="b">
  <label class="form-check-label" for="flexRadioDefault2">
    <?php echo $uyebilgi['adress']   ?>
  </label>
</div>
<button type="button" class="btn btn-success" style="margin-left:46%;" id="tamamla">Devam Et</button>

<script>
$("#tamamla").click(function(){
            var radioValue = $("input[name='adres']:checked").val();
            if(radioValue=='a'){
                alert("adres değişiklik  ekranı");
            }
            else{
                alert("ödeme ekranı");
            }
        });

</script>


</body>
</html>
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


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="index.php">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Yeni Adres:</label>
            <input type="text" class="form-control" id="adres" >
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
        <button type="button" class="btn btn-primary" id="kaydet">Kaydet</button>
      </div>
    </div>
  </div>
</div>

<script>
$("#tamamla").click(function(){
            var radioValue = $("input[name='adres']:checked").val();
            if(radioValue=='a'){
                $('#exampleModal').modal('show');
                alert("adres değişiklik  ekranı");
            }
            else{
                alert(<?php echo $_SESSION['toplampara'] ?> );
            }
        });

</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

<script>
const exampleModal = document.getElementById('exampleModal');
exampleModal.addEventListener('show.bs.modal', event => {
  // Button that triggered the modal
  const button = event.relatedTarget
  // Extract info from data-bs-* attributes
 
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  const modalTitle = exampleModal.querySelector('.modal-title')
  const modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = `Düzenle`;
  modalBodyInput.value = recipient;
})
$("#kaydet").click(function(){
  $.ajax({
 type: "POST",
 url: 'yenile.php',
 data: {yeniadres:$('#adres').val(),kul:<?php echo $user ?>
},
 success: function(data){
  location.href='adressec.php';
 },
 error: function(xhr, status, error){
 console.error(xhr);
 }
});
  
});
</script>

</body>
</html>
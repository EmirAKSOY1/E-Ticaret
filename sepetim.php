<link rel="shortcut icon" href="shop.png" type="image/x-icon" />
<?php 
session_start();
$user=$_SESSION['user_id'];
include("onodemeli.html");


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/detail.css">
    
	
	<link rel="stylesheet" href="../css/tablestyle.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Sepetim</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/newnavbar.css">
    <style>
    .ftco-section{
      padding-top:0rem;
      padding-bottom:0rem;
    }
    </style>
</head>
<body>
    <?php 
    include ("newnavbar.php");

    
    ?>
    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-1 text-center mb-5">
					<h2 class="heading-section">Sepetim</h2>
                    
				</div>
			</div>
          
			<div class="row">
                
				<div class="col-md-12">
                <br>
            <br>
            
					<div class="table-wrap">
						<table class="table table-responsive-xl">
						  <thead>
						    <tr>
						    	<th>Sıra</th>
						    	<th>Ürün</th>
						      <th>Adı</th>
						      <th>Miktar</th>
						      <th>Fiyat</th>
						      <th></th>
						    </tr>
						  </thead>
						  <tbody>
                          
   
    
    <?php  
      include("db.php"); 
      $sec= "SELECT * FROM sepet where user_id='$user'";
      
      $sonuc= $baglan->query($sec);
      
      if ($sonuc->num_rows > 0) 
      {
        $sayac=0;
        $toplam_para=0;
        // verileri listeleyebiliriz
        while($cek = $sonuc->fetch_assoc()) 
         {
            
            $urunid=$cek['urun_id'];
            $securun= "SELECT * FROM product where product_id='$urunid'";
      
      $sonucurun= $baglan->query($securun);
      
      if ($sonucurun->num_rows > 0) 
      {
        
       
        // verileri listeleyebiliriz
        while($cekurun = $sonucurun->fetch_assoc()) 
         {
            $sayac+=1;
            $toplam_para+=$cekurun['product_price'];
            $urun="<tr class='alert' role='alert'>
            <td>
            ".$sayac."
            </td>
          <td class='d-flex align-items-center'>
              <div class='img' style='background-image: url(".$cekurun['product_image'].");'></div>
              
          </td>
          <td>".$cekurun['product_name']."</td>
        <td style='text-overflow: ellipsis;' >".$cek['piece']."</td>
          <td>
              
            <span aria-hidden='true'>".number_format($cekurun['product_price'], 2, ',', '.')." "." TL"."</span>
          </button>
        </td>
        <td>
          <button type='button' class='btn btn-danger' id='". $cek['id']." 'name='urun_sil'>Sepetten Çıkart</button>
        </td>
        </tr>";
            
         }
        
        }







         


          echo $urun;
        }
       }
       $_SESSION['toplampara']=number_format($toplam_para, 2, ',', '.');
    ?>
       </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

        <div >
        <div class="form-check form-switch" style="margin-left:33%;">
        <p>Toplam : <?php  echo number_format($toplam_para, 2, ',', '.'); ?> TL</p>
  <input class="form-check-input" type="checkbox" role="switch" id="onbilgi">
  <label class="form-check-label" for="flexSwitchCheckDefault">
Ön Bilgilendirme Koşulları'nı ve Mesafeli Satış Sözleşmesi'ni okudum, onaylıyorum.</label>
</div><br>
<button type="button" class="btn btn-success" style="margin-left:46%;" id="tamamla">Alışverişi Tamamla</button>
    </div>
</section>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<script>
    $('#onbilgi').change(function () {   
                if ($("#onbilgi").is(':checked')) {

                    $('#KursiyerSartnameModal').modal('show');

                }
            });
    
            $('#tamamla').click(function () {   
                

                   if ($("#onbilgi").is(':checked')) {

                    location.href='adressec.php';

                }
                else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Oppss....',
                        text: 'Lütfen Sözleşmeyi Kabul Ediniz!',
                        confirmButtonText: 'Tamam'
                        })
}
                

                
            });
            $('[name="urun_sil"]').click(function(){
              id=$(this).attr('id');
              console.log(id);
              $.ajax({
        type: 'POST',
        url: 'sepetten_sil.php',
        data: {id: id  },
        success: function(data){
          location.reload();
         console.log(data);
         
        },
        error: function(xhr, status, error){
        console.error(xhr,error);
        }
       });
             
            });

            
</script>
</body>
</html>
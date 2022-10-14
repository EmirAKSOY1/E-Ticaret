
    <section class="ftco-section" style="margin-top: -100px;">

        <div class="container">
            <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
                <div class="container" style="width: 1200px;">
                    <a class="navbar-brand" href="index.php">3AK</a>
                    <div class="social-media order-lg-last">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center" id="social_icon" style="text-decoration: none !important;"><span
                                    class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center" id="social_icon" style="text-decoration: none !important;"><span
                                    class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center" id="social_icon" style="text-decoration: none !important;"><span
                                    class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center" id="social_icon" style="text-decoration: none !important;"><span
                                    class="fa fa-pinterest"><i class="sr-only">Dribbble</i></span></a>
                        </p>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span> Menu
                    </button>
                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto mr-md-3">
                            <li class="nav-item active"><a href="index.php" class="nav-link">Anasayfa</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Kategoriler</a></li>

                            <li class="nav-item"><a href="#" class="nav-link">Yardım ve Destek</a></li>
                            <?php 

                            if(isset($_SESSION['isim'])){
                                echo "<li class='nav-item'><a href='logout.php' class='nav-link'>".$_SESSION['isim']." , Çıkış Yap</a></li>";
                            }
                            else{
                                echo "<li class='nav-item'><a href='login.php' class='nav-link'>Giriş</a></li>";
                            }
                            ?>
                            
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- END nav -->
        </div>

    </section>



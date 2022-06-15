<?php

require 'functionsLomba.php';

$totalPost = query("SELECT * FROM beasiswa,lomba");
$gabungan = query("SELECT * FROM beasiswa,lomba");
$rekapan = query("SELECT * FROM rekapan");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!--  Fontawesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/responsive.css">
    

    <!-- Link fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">

    <!-- logo Title Bar -->
    <link rel="icon" href="image/icons/logo.svg type="image/x-icon">
    <title>Maju Bersama</title>
    </head>
    <body>
	<!-- Navbar -->
	<section id="navbar-fix position-fixed">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #01358d;">
		<div class="container">
			<a class="navbar-brand" href="#">
                <img src="image/logo.png" alt="">   
            </a>
			<a class="navbar-brand fw-bold" href="#">Maju Bersama</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link me-3 page-scroll" aria-current="page" href="index.php">Beranda</a>
                    <a class="nav-link me-3 page-scroll" href="index.php">Tentang</a>
                    <a class="nav-link me-3 page-scroll" href="index.php">Lomba</a>
                    <a class="nav-link me-3 page-scroll" href="index.php">Beasiswa</a>    
                    <a class="nav-link me-3 page-scroll" href="index.php">Bantuan</a>    
                    <a class="nav-link me-3 page-scroll" href="#">History</a>    
                </div>
            </div>
        </div>
        </nav>
	</section>
	<!-- Akhir Navbar -->

  <!-- History -->
  <section id="history">
    <div class="row justify-content-center">
      <div class="col-10 text-center mt-5">
          <h2 class="fw-bold color-acsent2">History Event Media Partner</h2>
					<h2 class="fw-bold color-acsent">MajuBersama</h2>
      </div>
    </div>
      <form method="post">
        <div class="row justify-content-center mt-5">
          <div class="col-10">
            <span class="color-acsent2">Jumlah Total Postingan : <?php totalPost(); ?></span>
          </div>
  <?php $i = 1; ?>
    <?php foreach($rekapan as $row) : ?>
        <td><?= $i; ?></td>
        </div>
        <div class="row justify-content-center">
            <div class="col-10">
              <div class="card-lomba">
              <table class="table">
                <thead>
                  <tr>
                      <th scope="col">Judul Lomba</th>
                      <th scope="col">Tanggal Lomba</th>
                      <th scope="col">Judul Beasiswa</th>
                      <th scope="col">Tanggal Beasiswa</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td><?= $row["judul_lomba"] ?></td>
                      <td><?= $row["tanggal_lomba"] ?></td>
                      <td><?= $row["judul_beasiswa"] ?></td>
                      <td><?= $row["tanggal_beasiswa"] ?></td>
                  </tr>
                </tbody>
                </table>
              </div>
            </div>
        </div>
      </form>
    <?php $i++; ?>
  <?php endforeach; ?>
  </section>
  <!-- Akhir History -->

  <!-- footer -->
    <footer class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 foot">
                <img src="image/logo 2.png" alt=""> <span class="nama-logo color-acsent">Maju Bersama</span>
                <p class="sub-title">Untuk mendapatkan informasi terbaru tentang kami, <br>
                    kamu dapat mengunjungi akun media sosial kami</p>
                    <div class="sosial-icon mt-5">
                        <a href="#"><img src="image/icons/Whatsapp.svg" alt=""></a>
                        <a href="#"><img src="image/icons/facebook.svg" alt=""></a>
                        <a href="#"><img src="image/icons/instagram.svg" alt=""></a>
                        <a href="#"><img src="image/icons/twitter.svg" alt=""></a>
                    </div>
                    <div class="aplikasi mt-5">
                        <img src="image/footer 2.png" alt="">
                        <img src="image/footer 1.png" alt="">
                    </div>
                </div>
            <div class="col-4 kolom2">
                <h2 class="color-acsent">Tautan Terkait</h2>
                <ul>
                    <li><a class="text-decoration-none" href="#">Beranda</a></li>
                    <li><a class="text-decoration-none" href="#">Tentang</a></li>
                    <li><a class="text-decoration-none" href="#">Lomba</a></li>
                    <li><a class="text-decoration-none" href="#">Beasiswa</a></li>
                    <li><a class="text-decoration-none" href="#">Event</a></li>
                </ul>
            </div>
                <div class="col-3 kolom3">
                    <h2 class="color-acsent">Bantuan</h2>
                    <ul>
                        <li><a class="text-decoration-none" href="#">FAQS</a></li>
                        <li><a class="text-decoration-none" href="#">Kebijakan Privasi</a></li>
                        <li><a class="text-decoration-none" href="#">Ketentuan Layanan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- akhir footer -->


    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script>
        TweenMax.to('#hero img', 3.5 , { y: -20, repeat: -1,  yoyo: true });
        gsap.from('#hero h1', {duration: 1, x: -50, opacity: 0, delay: 0.5});
        gsap.from('#hero h2', {duration: 1, x: -50, opacity: 0, delay: 0.5});
        gsap.from('#hero p', {duration: 1, x: -50, opacity: 0, delay: 1});
        gsap.from('#hero button', {duration: 1.5, x: -50, opacity: 0, delay: 1.5});
        gsap.from('#hero a', {duration: 1.5, x: -50, opacity: 0, delay: 2});
    </script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        const cardTentang = document.querySelectorAll('.card-tentang');
        cardTentang.forEach((card, i)=> {
        card.dataset.aos = 'fade-up';
        card.dataset.aosDelay = i * 200;
        card.dataset.aosDuration = 1500;
        });

        const cardTim = document.querySelectorAll('.card-tim');
        cardTim.forEach((card, i)=> {
        card.dataset.aos = 'fade-up';
        card.dataset.aosDelay = i * 200;
        card.dataset.aosDuration = 1500;
        });
    </script>
    <script>
        AOS.init();
    </script>
    
    <!-- my js -->
    <script src="asset/js/script.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- scroll js -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./asset/js/scroll.js"></script>
    </body>
</html>
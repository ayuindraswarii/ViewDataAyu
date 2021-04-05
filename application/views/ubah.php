<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ubah</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url();?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?php echo base_url();?>https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento - v1.1.1
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="<?php echo base_url();?>index.html">Presento<span>.</span></a></h1>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="#header">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#team">Team</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </nav><!-- .nav-menu -->
          <a href="<?php echo base_url();?>#about" class="get-started-btn scrollto">Login</a>
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <section class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="<?php echo base_url();?>">Home</a></li>
        <li>Ubah Data</li>
      </ol>
    </div>
  </section><!-- End Breadcrumbs -->


  <main id="main">
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Update Data</h2>
        </div>

        <div class="row">
          <div class="col-lg-5 entries">
            <article class="entry"> 
              <?php extract($pst); ?>
              <form method="POST" action="<?php echo base_url();?>index.php/C_peserta/update/<?php echo $no_peserta;?>">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" value="<?php echo $nama;?>" name="nama">
                </div>
                <div class="form-group">
                  <label>Kelas</label>
                  <input type="text" class="form-control" value="<?php echo $kelas;?>" name="kelas">
                </div>
                <div class="form-group">
                  <label>Sekolah</label>
                  <input type="text" class="form-control" value="<?php echo $sekolah;?>" name="sekolah">
                </div>
                <div class="form-group">
                  <label>Asal Kota</label>
                  <input type="text" class="form-control" value="<?php echo $asal_kota;?>" name="asal_kota">
                </div>
                <a href="<?php echo base_url();?>" class="btn btn-danger" style="float: left;"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</a>
                <button type="submit" class="btn btn-success" style="float: right;"><span class="glyphicon glyphicon-check"></span> Update</button>
                <br>
              </form>
            </article><!-- End blog entry -->
          </div><!-- End blog entries list -->
        </div>

        <div class="blog-pagination">
          <ul class="justify-content-center">
            <li class="disabled"><i class="icofont-rounded-left"></i></li>
            <li><a href="<?php echo base_url();?>#">1</a></li>
            <li class="active"><a href="<?php echo base_url();?>#">2</a></li>
            <li><a href="<?php echo base_url();?>#">3</a></li>
            <li><a href="<?php echo base_url();?>#"><i class="icofont-rounded-right"></i></a></li>
          </ul>
        </div>

      </div>
    </section><!-- End Blog Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Presento<span>.</span></h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url();?>#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url();?>#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url();?>#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url();?>#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url();?>#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url();?>#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url();?>#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url();?>#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url();?>#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url();?>#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Presento</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
          Designed by <a href="<?php echo base_url();?>https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="<?php echo base_url();?>#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="<?php echo base_url();?>#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="<?php echo base_url();?>#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="<?php echo base_url();?>#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="<?php echo base_url();?>#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="<?php echo base_url();?>#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url();?>assets/js/main.js"></script>

</body>

</html>
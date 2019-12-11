<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Education City | Daftar Kampus</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon1.png" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">    

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
  
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  <div class="mu-top-email">
                    <i class="fa fa-envelope"></i>
                    <span>SMA1Singosari@gmail.com</span>
                  </div>
                  <div class="mu-top-phone">
                    <i class="fa fa-phone"></i>
                    <span>(+62) 341 454113</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  <nav>
                    <ul class="mu-top-social-nav">
                      <li><a href="https://www.facebook.com/sman1singosari/"><span class="fa fa-facebook"></span></a></li>
                      <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                      <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                      <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                      <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header  -->
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="index.php"><i class="fa fa-university"></i><span>Education City</span></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class=""><a href="index.php">Home</a></li>            
            <li class="active">
              <a href="#" class="">Perguruan Tinggi</a>
            </li>           
            <li><a href="gallery.html">Gallery</a></li>            
            <li><a href="contact.html">Contact</a></li>             
            <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
             <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>List Kampus</h2>
           <ol class="breadcrumb">
            <li class=""><a href="index.php">Home</a></li>            
            <li class="active">List Kampus</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->

 <!-- Start contact  -->
 <section id="mu-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-contact-area">
          <!-- start title -->
          <div class="mu-title">
            <h2>List</h2>
            <p>Berisi tentang Informasi mengenai berbagai Universitas atau Politeknik Yang berada
               di Kota Malang.
            </p>
          </div>
          <!-- end title -->
          <!-- start contact content -->
          <?php 
    // select all tasks if page is visited or refreshed

    
    
    require "db_connection/konek.php";
    $query = mysqli_query($con, "SELECT * FROM Kampus ORDER BY id");
		// $tasks = mysqli_query($db, "SELECT * FROM tasks");
    while ($hasil = mysqli_fetch_array($query)) { ?>
          <div class="mu-contact-content">           
            <div class="row">
              <div class="col-md-50">
                <div class="col-lg-6 col-md-30 col-sm-3">
                   <table class="table table-hover table-striped">
                                    <thead>
                                    
                                      <th>Name Kampus</th>
                                      <th></th>
                                      <th></th>
                                      <th></th>
                                      <th></th>
                                    </thead>
                                    <tbody>
                                    <?php
                                        require_once 'db_connection/konek.php';
                                        $query = mysqli_query($con, "SELECT * FROM kampus ORDER BY nama_kampus ASC");
                                        while($hasil  = mysqli_fetch_assoc($query)) {
                                    ?>
                                        <tr>
                                          <td><a href="course-detail.php?hasil=<?php echo $hasil['id'];?>"><?php echo $hasil['nama_kampus'];?></a></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>	
          <!-- end contact content -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End contact  -->
 

  <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Program Sarjana</h4>
                <?php
                require_once "db_connection/konek.php";
                $query = mysqli_query($con, "SELECT nama_program_studi FROM program_studi WHERE tingkat = 'Sarjana' ORDER BY nama_program_studi ASC");
                while ($hasil = mysqli_fetch_array($query)) { ?>
                
                <ul>
                  <li><a href="#"><?php echo $hasil['nama_program_studi']?></a></li>
                </ul>
                <?php } ?>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Program Diploma</h4>
                <?php
                require_once "db_connection/konek.php";
                $query = mysqli_query($con, "SELECT nama_program_studi FROM program_studi WHERE tingkat = 'Diploma' ORDER BY nama_program_studi ASC");
                while ($hasil = mysqli_fetch_array($query)) { ?>
                
                <ul>
                  <li><a href="#"><?php echo $hasil['nama_program_studi']?></a></li>
                </ul>
                <?php } ?>
                
              </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                 
              </div>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
                  <p>Jl. Ki Hajar Dewantara Desa No.1, Tanjung, Banjararum, Kec. Singosari, Malang, Jawa Timur 65153, Indonesia</p>
                  <p>Phone: (+62) 341 454113 </p>
                  
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
        <p>&copy; All Right Reserved. Designed by <a href="" rel="nofollow">Proyekin.com</a></p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->





  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>
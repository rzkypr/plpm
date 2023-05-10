<!DOCTYPE html>
<html lang="zxx" class="no-js">

  <head>
      <!-- Mobile Specific Meta -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Favicon-->
      <link rel="shortcut icon" href="img/fav.png">
      <!-- Author Meta -->
      <meta name="author" content="rcreatived">
      <!-- Meta Description -->
      <meta name="description" content="">
      <!-- Meta Keyword -->
      <meta name="keywords" content="">
      <!-- meta character set -->
      <meta charset="UTF-8">
      <!-- Site Title -->
      <title>PLPTD | Portal Layanan Pengajuan PL/PKL/Magang Terintegrasi Diskominfo Kabupaten Bandung</title>

      <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
      <!--
      CSS
      ============================================= -->
      <link rel="stylesheet" href="css/linearicons.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/nice-select.css">					
      <link rel="stylesheet" href="css/animate.min.css">
      <link rel="stylesheet" href="css/owl.carousel.css">
      <link rel="stylesheet" href="css/main.css">
  </head>

  <body>
    
    <!-- start header Area -->
      <header id="header" id="home">
        <div class="container">
          <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
              <a href="/"><img src="img/plptd-logo.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li class="menu-active"><a href="{{ url('login') }}">Beranda</a></li>
                <!-- <li><a href="{{ url('login') }}">Tentang</a></li>
                <li><a href="{{ url('login') }}">Kategori</a></li>
                <li><a href="{{ url('login') }}">Blog</a></li>
                <li><a href="{{ url('login') }}">FAQ</a></li> -->
                <li class="/"><a href="">Kontak</a>
                  <ul>
                    <li><a href="http://rizkypurnamaramadhan.rf.gd">Rizky Purnama Ramadhan</a></li>
                    <li><a href="http://rizkypurnamaramadhan.rf.gd">Muhamad Hamdani</a></li>
                  </ul>
                </li>
                <li><a class="ticker-btn" href="{{ url('register')}}">Daftar</a></li>
                <li><a class="ticker-btn" href="{{ url('login')}}">Gabung</a></li>				          				          
              </ul>
            </nav><!-- #nav-menu-container -->		    		
          </div>
        </div>
      </header><!-- #header -->
    <!-- end header Area -->

    <!-- start banner Area -->
    <section class="banner-area relative" id="home">	
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
          <div class="banner-content col-lg-12">
            <h1 class="text-white">
              <span> PLPTD</span> PORTAL LAYANAN PENGAJUAN PL/PKL/MAGANG TERINTEGRASI DISKOMINFO KABUPATEN BANDUNG 				
            </h1>	
            <!-- <form action="/" class="serach-form-area">
              <div class="row justify-content-center form-wrap">
                <div class="col-lg-4 form-cols">
                  <input type="text" class="form-control" name="search" placeholder="what are you looging for?">
                </div>
                <div class="col-lg-3 form-cols">
                  <div class="default-select" id="default-selects"">
                    <select>
                      <option value="1">Select area</option>
                      <option value="2">Dhaka</option>
                      <option value="3">Rajshahi</option>
                      <option value="4">Barishal</option>
                      <option value="5">Noakhali</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3 form-cols">
                  <div class="default-select" id="default-selects2">
                    <select>
                      <option value="1">All Category</option>
                      <option value="2">Medis</option>
                      <option value="3">Teknologi</option>
                      <option value="4">Pemerintah</option>
                      <option value="5">Pengembang</option>
                    </select>
                  </div>										
                </div>
                <div class="col-lg-2 form-cols">
                    <button type="button" class="btn btn-info">
                      <span class="lnr lnr-magnifier"></span> Search
                    </button>
                </div>								
              </div>
            </form> -->
            <br>
            <p class="text-white"> <span>Ajukan</span> pengajuan anda di sini, kami akan memprosesnya
              dengan cepat.</p>
          </div>											
        </div>
      </div>
    </section>
    <!-- End banner Area -->	

    <!-- Start features Area -->
    <section class="features-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="single-feature">
              <h4>1. Pengajuan</h4>
              <p>
                Ajukan pengajuan anda dengan jelas.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-feature">
              <h4>2. Proses Verifikasi</h4>
              <p>
                Tunggu sampai pengajuan anda di verifikasi.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-feature">
              <h4>3. Tindak Lanjut</h4>
              <p>
                Pengajuan anda sedang dalam tindak lanjut.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-feature">
              <h4>4. Selesai</h4>
              <p>
                Pengajuan anda  telah selesai ditindak.
              </p>
            </div>
          </div>																		
        </div>
      </div>	
    </section>
    <!-- End features Area -->
    
    <!-- Start popular-post Area -->
    <section class="popular-post-area pt-100">
      <div class="container">
        <div class="row align-items-center">
          <div class="active-popular-post-carusel">
            <div class="single-popular-post d-flex flex-row">
              <div class="thumb">
                <img class="img-fluid" src="img/p1.png" alt="">
                <a class="btns text-uppercase" href="{{ url('login') }}">Lihat</a>
              </div>
              <div class="details">
                <a href="{{ url('login') }}"><h4>Dinas Komunikasi, Informatika, Dan Statistika</h4></a>
                <h6>Diskominfo</h6>
                <p>
                  Menguasai laravel 8 dan tailwind css
                </p>
              </div>
            </div>	
            <div class="single-popular-post d-flex flex-row">
              <div class="thumb">
                <img src="img/p2.png" alt="">
                <a class="btns text-uppercase" href="{{ url('login') }}">Lihat</a>
              </div>
              <div class="details">
                <a href="{{ url('login') }}"><h4>Dinas Komunikasi, Informatika, Dan Statistika</h4></a>
                <h6>Diskominfo</h6>
                <p>
                  Menguasai laravel 8 dan tailwind css
                </p>
              </div>
            </div>
            <div class="single-popular-post d-flex flex-row">
              <div class="thumb">
                <img src="img/p1.png" alt="">
                <a class="btns text-uppercase" href="{{ url('login') }}">Lihat</a>
              </div>
              <div class="details">
                <a href="{{ url('login') }}"><h4>Dinas Komunikasi, Informatika, Dan Statistika</h4></a>
                <h6>Diskominfo</h6>
                <p>
                  Menguasai laravel 8 dan tailwind css
                </p>
              </div>
            </div>	
            <div class="single-popular-post d-flex flex-row">
              <div class="thumb">
                <img src="img/p2.png" alt="">
                <a class="btns text-uppercase" href="{{ url('login') }}">Lihat</a>
              </div>
              <div class="details">
                <a href="{{ url('login') }}"><h4>Dinas Komunikasi, Informatika, Dan Statistika</h4></a>
                <h6>Diskominfo</h6>
                <p>
                  Menguasai laravel 8 dan tailwind css
                </p>
              </div>
            </div>	
            <div class="single-popular-post d-flex flex-row">
              <div class="thumb">
                <img src="img/p1.png" alt="">
                <a class="btns text-uppercase" href="{{ url('login') }}">Lihat</a>
              </div>
              <div class="details">
                <a href="{{ url('login') }}"><h4>Dinas Komunikasi, Informatika, Dan Statistika</h4></a>
                <h6>Diskominfo</h6>
                <p>
                  Menguasai laravel 8 dan tailwind css
                </p>
              </div>
            </div>	
            <div class="single-popular-post d-flex flex-row">
              <div class="thumb">
                <img src="img/p2.png" alt="">
                <a class="btns text-uppercase" href="{{ url('login') }}">Lihat</a>
              </div>
              <div class="details">
                <a href="{{ url('login') }}"><h4>Dinas Komunikasi, Informatika, Dan Statistika</h4></a>
                <h6>Diskominfo</h6>
                <p>
                  Menguasai laravel 8 dan tailwind css
                </p>
              </div>
            </div>																																							
          </div>
        </div>
      </div>	
    </section>
    <!-- End popular-post Area -->
    
    <!-- Start feature-cat Area -->
    <section class="feature-cat-area pt-100" id="category">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="menu-content pb-60 col-lg-10">
            <div class="title text-center">
              <h1 class="mb-10">Kategori Pekerjaan Unggulan</h1>
              <p>Portal Layanan Pengajuan PL/PKL/Magang Terintegrasi Diskominfo Kabupaten Bandung.</p>
            </div>
          </div>
        </div>						
        <div class="row">
          <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="single-fcat">
              <a href="{{ url('login') }}">
                <img src="img/o1.png" alt="">
              </a>
              <p>Akuntansi</p>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="single-fcat">
              <a href="{{ url('login') }}">
                <img src="img/o2.png" alt="">
              </a>
              <p>Pengembang</p>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="single-fcat">
              <a href="{{ url('login') }}">
                <img src="img/o3.png" alt="">
              </a>
              <p>Teknologi</p>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="single-fcat">
              <a href="{{ url('login') }}">
                <img src="img/o4.png" alt="">
              </a>
              <p>Media & Berita</p>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="single-fcat">
              <a href="{{ url('login') }}">
                <img src="img/o5.png" alt="">
              </a>
              <p>Medis</p>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="single-fcat">
              <a href="{{ url('login') }}">
                <img src="img/o6.png" alt="">
              </a>
              <p>Olahraga</p>
            </div>			
          </div>																											
        </div>
      </div>	
    </section>
    <!-- End feature-cat Area -->
    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Start callto-action Area -->
    <section class="callto-action-area section-gap" id="join">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="menu-content col-lg-9">
            <div class="title text-center">
              <h1 class="mb-10 text-white">Bergabunglah dengan kami hari ini tanpa ragu-ragu</h1>
              <p class="text-white">Portal Layanan Pengajuan PL/PKL/Magang Terintegrasi Diskominfo Kabupaten Bandung</p>
              <a class="primary-btn" href="{{ url('register') }}">Daftar</a>
              <a class="primary-btn" href="{{ url('login') }}">Gabung</a>
            </div>
          </div>
        </div>	
      </div>	
    </section>
    <!-- End calto-action Area -->
    
    <!-- Start post Area -->
    <section class="post-area section-gap">
      <div class="container">
        <div class="row justify-content-center d-flex">
          <div class="col-lg-8 post-list">
            <ul class="cat-list">
              <li><a href="{{ url('login') }}">Terkini</a></li>
              <li><a href="{{ url('login') }}">Waktu penuh</a></li>
              <li><a href="{{ url('login') }}">Magang</a></li>
              <li><a href="{{ url('login') }}">Waktu Paruh</a></li>
            </ul>
            <div class="single-post d-flex flex-row">
              <div class="thumb">
                <img src="img/post.png" alt="">
                <ul class="tags">
                  <li>
                    <a href="{{ url('login') }}">Art</a>
                  </li>
                  <li>
                    <a href="{{ url('login') }}">Media</a>
                  </li>
                  <li>
                    <a href="{{ url('login') }}">Design</a>					
                  </li>
                </ul>
              </div>
              <div class="details">
                <div class="title d-flex flex-row justify-content-between">
                  <div class="titles">
                    <a href="{{ url('login') }}"><h4>FULLSTACK WEB DEVELOPER</h4></a>
                    <h6>Dinas Komunikasi Informatika dan Statistika</h6>					
                  </div>
                  <ul class="btns">
                    <li><a href="{{ url('login') }}"><span class="lnr lnr-heart"></span></a></li>
                    <li><a href="{{ url('login') }}">Ajukan</a></li>
                  </ul>
                </div>
                <p>
                  1. Menguasai framework laravel dan tailwindcss
                  2. Bisa bekerja tim 
                  3. Aktif berbahasa inggris
                </p>
                <h5>Sifat Pekerjaan: Penuh waktu</h5>
                <!-- <p class="address"><span class="lnr lnr-map"></span> 56/8, Kabupaten Bandung</p>
                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p> -->
              </div>
            </div>
            <div class="single-post d-flex flex-row">
              <div class="thumb">
                <img src="img/post.png" alt="">
                <ul class="tags">
                  <li>
                    <a href="{{ url('login') }}">Art</a>
                  </li>
                  <li>
                    <a href="{{ url('login') }}">Media</a>
                  </li>
                  <li>
                    <a href="{{ url('login') }}">Design</a>					
                  </li>
                </ul>
              </div>
              <div class="details">
                <div class="title d-flex flex-row justify-content-between">
                  <div class="titles">
                    <a href="{{ url('login') }}"><h4>AKUNTANSI</h4></a>
                    <h6>Dinas Kependudukan Dan Pencatatan Sipil</h6>					
                  </div>
                  <ul class="btns">
                    <li><a href="{{ url('login') }}"><span class="lnr lnr-heart"></span></a></li>
                    <li><a href="{{ url('login') }}">Ajukan</a></li>
                  </ul>
                </div>
                <p>
                  1. Menguasai microsoft office family
                  2. Bisa bekerja tim 
                  3. Aktif berbahasa inggris
                </p>
                <h5>Sifat Pekerjaan: Penuh waktu</h5>
                <!-- <p class="address"><span class="lnr lnr-map"></span> 56/8, Kabupaten Bandung</p>
                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p> -->
              </div>
            </div>
            <div class="single-post d-flex flex-row">
              <div class="thumb">
                <img src="img/post.png" alt="">
                <ul class="tags">
                  <li>
                    <a href="{{ url('login') }}">Art</a>
                  </li>
                  <li>
                    <a href="{{ url('login') }}">Media</a>
                  </li>
                  <li>
                    <a href="{{ url('login') }}">Design</a>					
                  </li>
                </ul>
              </div>
              <div class="details">
                <div class="title d-flex flex-row justify-content-between">
                  <div class="titles">
                    <a href="{{ url('login') }}"><h4>APOTEKER</h4></a>
                    <h6>Dinas Kesehatan</h6>					
                  </div>
                  <ul class="btns">
                    <li><a href="{{ url('login') }}"><span class="lnr lnr-heart"></span></a></li>
                    <li><a href="{{ url('login') }}">Ajukan</a></li>
                  </ul>
                </div>
                <p>
                  1. Menguasai farmasi dan obat-obatan
                  2. Bisa bekerja tim 
                  3. Aktif berbahasa inggris
                </p>
                <h5>Sifat Pekerjaan: Penuh waktu</h5>
                <!-- <p class="address"><span class="lnr lnr-map"></span> 56/8, Kabupaten Bandung</p>
                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p> -->
              </div>
            </div>		
            <div class="single-post d-flex flex-row">
              <div class="thumb">
                <img src="img/post.png" alt="">
                <ul class="tags">
                  <li>
                    <a href="{{ url('login') }}">Art</a>
                  </li>
                  <li>
                    <a href="{{ url('login') }}">Media</a>
                  </li>
                  <li>
                    <a href="{{ url('login') }}">Design</a>					
                  </li>
                </ul>
              </div>
              <div class="details">
                <div class="title d-flex flex-row justify-content-between">
                  <div class="titles">
                    <a href="{{ url('login') }}"><h4>PUSTAKAWAN</h4></a>
                    <h6>Dinas Arsip Dan Perpustakaan</h6>					
                  </div>
                  <ul class="btns">
                    <li><a href="{{ url('login') }}"><span class="lnr lnr-heart"></span></a></li>
                    <li><a href="{{ url('login') }}">Ajukan</a></li>
                  </ul>
                </div>
                <p>
                  1. Menguasai literasi buku
                  2. Bisa bekerja tim 
                  3. Aktif berbahasa inggris
                </p>
                <h5>Sifat Pekerjaan: Penuh waktu</h5>
                <!-- <p class="address"><span class="lnr lnr-map"></span> 56/8, Kabupaten Bandung</p>
                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p> -->
              </div>
            </div>
            <div class="single-post d-flex flex-row">
              <div class="thumb">
                <img src="img/post.png" alt="">
                <ul class="tags">
                  <li>
                    <a href="{{ url('login') }}">Art</a>
                  </li>
                  <li>
                    <a href="{{ url('login') }}">Media</a>
                  </li>
                  <li>
                    <a href="{{ url('login') }}">Design</a>					
                  </li>
                </ul>
              </div>
              <div class="details">
                <div class="title d-flex flex-row justify-content-between">
                  <div class="titles">
                    <a href="{{ url('login') }}"><h4>AGROTEKNOLOGI</h4></a>
                    <h6>Dinas Lingkungan Hidup</h6>					
                  </div>
                  <ul class="btns">
                    <li><a href="{{ url('login') }}"><span class="lnr lnr-heart"></span></a></li>
                    <li><a href="{{ url('login') }}">Ajukan</a></li>
                  </ul>
                </div>
                <p>
                  1. Menguasai teknik dasar pertanian
                  2. Bisa bekerja tim 
                  3. Aktif berbahasa inggris
                </p>
                <h5>Sifat Pekerjaan: Penuh waktu</h5>
                <!-- <p class="address"><span class="lnr lnr-map"></span> 56/8, Kabupaten Bandung</p>
                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p> -->
              </div>
            </div>
            <div class="single-post d-flex flex-row">
              <div class="thumb">
                <img src="img/post.png" alt="">
                <ul class="tags">
                  <li>
                    <a href="{{ url('login') }}">Art</a>
                  </li>
                  <li>
                    <a href="{{ url('login') }}">Media</a>
                  </li>
                  <li>
                    <a href="{{ url('login') }}">Design</a>					
                  </li>
                </ul>
              </div>
              <div class="details">
                <div class="title d-flex flex-row justify-content-between">
                  <div class="titles">
                    <a href="{{ url('login') }}"><h4>ATLET SEPAKBOLA</h4></a>
                    <h6>Dinas Pemuda Dan Olahraga</h6>					
                  </div>
                  <ul class="btns">
                    <li><a href="{{ url('login') }}"><span class="lnr lnr-heart"></span></a></li>
                    <li><a href="{{ url('login') }}">Ajukan</a></li>
                  </ul>
                </div>
                <p>
                  1. Menguasai olahraga sepak bola
                  2. Bisa bekerja tim 
                  3. Aktif berbahasa inggris
                </p>
                <h5>Sifat Pekerjaan: Penuh waktu</h5>
                <!-- <p class="address"><span class="lnr lnr-map"></span> 56/8, Kabupaten Bandung</p>
                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p> -->
              </div>
            </div>															
            <div class="single-post d-flex flex-row">
              <div class="thumb">
                <img src="img/post.png" alt="">
                <ul class="tags">
                  <li>
                    <a href="{{ url('login') }}">Art</a>
                  </li>
                  <li>
                    <a href="{{ url('login') }}">Media</a>
                  </li>
                  <li>
                    <a href="{{ url('login') }}">Design</a>					
                  </li>
                </ul>
              </div>
              <div class="details">
                <div class="title d-flex flex-row justify-content-between">
                  <div class="titles">
                    <a href="{{ url('login') }}"><h4>PEMANDU WISATA</h4></a>
                    <h6>Dinas Pariwisata Dan Kebudayaan</h6>					
                  </div>
                  <ul class="btns">
                    <li><a href="{{ url('login') }}"><span class="lnr lnr-heart"></span></a></li>
                    <li><a href="{{ url('login') }}">Ajukan</a></li>
                  </ul>
                </div>
                <p>
                  1. Menguasai public speaking yang baik
                  2. Bisa bekerja tim 
                  3. Aktif berbahasa inggris
                </p>
                <h5>Sifat Pekerjaan: Penuh waktu</h5>
                <!-- <p class="address"><span class="lnr lnr-map"></span> 56/8, Kabupaten Bandung</p>
                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p> -->
              </div>
            </div>	
            
            <a class="text-uppercase loadmore-btn mx-auto d-block" href="{{ url('login') }}">Muat Lebih Banyak Postingan pekerjaan</a>

          </div>
          <div class="col-lg-4 sidebar">
            <!-- <div class="single-slidebar">
              <h4>Jobs by Location</h4>
              <ul class="cat-list">
                <li><a class="justify-content-between d-flex" href="{{ url('login') }}"><p>New York</p><span>37</span></a></li>
                <li><a class="justify-content-between d-flex" href="{{ url('login') }}"><p>Park Montana</p><span>57</span></a></li>
                <li><a class="justify-content-between d-flex" href="{{ url('login') }}"><p>Atlanta</p><span>33</span></a></li>
                <li><a class="justify-content-between d-flex" href="{{ url('login') }}"><p>Arizona</p><span>36</span></a></li>
                <li><a class="justify-content-between d-flex" href="{{ url('login') }}"><p>Florida</p><span>47</span></a></li>
                <li><a class="justify-content-between d-flex" href="{{ url('login') }}"><p>Rocky Beach</p><span>27</span></a></li>
                <li><a class="justify-content-between d-flex" href="{{ url('login') }}"><p>Chicago</p><span>17</span></a></li>
              </ul>
            </div> -->

            <div class="single-slidebar">
              <h4>Rating Teratas Postingan Pekerjaan</h4>
              <div class="active-relatedjob-carusel">
                <div class="single-rated">
                  <img class="img-fluid" src="img/r1.jpg" alt="">
                  <a href="{{ url('login') }}"><h4>FULLSTACK WEB DEVELOPER</h4></a>
                  <h6>Dinas Komunikasi Informatika dan Statistika</h6>
                  <p>
                    1. Menguasai frame work laravel dan tailwindcss
                    2. Bisa berkerja tim 
                    3. Aktif berbahasa inggris
                  </p>
                  <h5>Sifat Pekerjaan: Penuh waktu</h5>
                  <!-- <p class="address"><span class="lnr lnr-map"></span> 56/8, Kabupaten Bandung</p>
                  <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p> -->
                  <a href="{{ url('login') }}" class="btns text-uppercase">Ajukan</a>
                </div>
                <div class="single-rated">
                  <img class="img-fluid" src="img/r1.jpg" alt="">
                  <a href="{{ url('login') }}"><h4>AKUNTANSI</h4></a>
                  <h6>Dinas Kependudukan Dan Pencatatan Sipil</h6>
                  <p>
                    1. Menguasai microsoft office family
                    2. Bisa berkerja tim 
                    3. Aktif berbahasa inggris
                  </p>
                  <h5>Sifat Pekerjaan: Penuh waktu</h5>
                  <!-- <p class="address"><span class="lnr lnr-map"></span> 56/8, Kabupaten Bandung</p>
                  <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p> -->
                  <a href="{{ url('login') }}" class="btns text-uppercase">Ajukan</a>
                </div>
                <div class="single-rated">
                  <img class="img-fluid" src="img/r1.jpg" alt="">
                  <a href="{{ url('login') }}"><h4>ATLET SEPAK BOLA</h4></a>
                  <h6>Dinas Pemuda Dan Olahraga</h6>
                  <p>
                    1. Menguasai olahraga sepak bola
                    2. Bisa berkerja tim 
                    3. Aktif berbahasa inggris
                  </p>
                  <h5>Sifat Pekerjaan: Penuh waktu</h5>
                  <!-- <p class="address"><span class="lnr lnr-map"></span> 56/8, Kabupaten Bandung</p>
                  <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p> -->
                  <a href="{{ url('login') }}" class="btns text-uppercase">Ajukan</a>
                </div>																		
              </div>
            </div>							

            <!-- <div class="single-slidebar">
              <h4>Jobs by Category</h4>
              <ul class="cat-list">
                <li><a class="justify-content-between d-flex" href="{{ url('login') }}"><p>Teknologi</p><span>37</span></a></li>
                <li><a class="justify-content-between d-flex" href="{{ url('login') }}">Berita</p><span>57</span></a></li>
                <li><a class="justify-content-between d-flex" href="{{ url('login') }}"><p>Pemerintah</p><span>33</span></a></li>
                <li><a class="justify-content-between d-flex" href="{{ url('login') }}"><p>Medis</p><span>36</span></a></li>
                <li><a class="justify-content-between d-flex" href="{{ url('login') }}"><p>Restaurants</p><span>47</span></a></li>
                <li><a class="justify-content-between d-flex" href="{{ url('login') }}"><p>Developer</p><span>27</span></a></li>
                <li><a class="justify-content-between d-flex" href="{{ url('login') }}"><p>Akuntansi</p><span>17</span></a></li>
              </ul>
            </div> -->

            <!-- <div class="single-slidebar">
              <h4>Carrer Advice Blog</h4>
              <div class="blog-list">
                <div class="single-blog " style="background:#000 url(img/blog1.jpg);">
                  <a href="/"><h4>Home Audio Recording <br>
                  For Everyone</h4></a>
                  <div class="meta justify-content-between d-flex">
                    <p>
                      02 Hours ago
                    </p>
                    <p>
                      <span class="lnr lnr-heart"></span>
                      06
                       <span class="lnr lnr-bubble"></span>
                      02
                    </p>
                  </div>
                </div>
                <div class="single-blog " style="background:#000 url(img/blog2.jpg);">
                  <a href="/"><h4>Home Audio Recording <br>
                  For Everyone</h4></a>
                  <div class="meta justify-content-between d-flex">
                    <p>
                      02 Hours ago
                    </p>
                    <p>
                      <span class="lnr lnr-heart"></span>
                      06
                       <span class="lnr lnr-bubble"></span>
                      02
                    </p>
                  </div>
                </div>
                <div class="single-blog " style="background:#000 url(img/blog1.jpg);">
                  <a href="/"><h4>Home Audio Recording <br>
                  For Everyone</h4></a>
                  <div class="meta justify-content-between d-flex">
                    <p>
                      02 Hours ago
                    </p>
                    <p>
                      <span class="lnr lnr-heart"></span>
                      06
                       <span class="lnr lnr-bubble"></span>
                      02
                    </p>
                  </div>
                </div>																		
              </div>
            </div> -->

          </div>
        </div>
      </div>	
    </section>
    <!-- End post Area -->

    <!-- Start download Area -->
    <!-- <section class="download-area section-gap" id="app">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 download-left">
            <img class="img-fluid" src="img/d1.png" alt="">
          </div>
          <div class="col-lg-6 download-right">
            <h1>Download <br>
              Aplikasi PLPTD Hari Ini!</h1>
            <p class="subs">
              Tidak akan menjadi masalah yang lebih besar untuk menemukan satu pecinta video game di tetangga Anda. Sejak diperkenalkannya Game Virtual, telah mencapai ketinggian yang luar biasa sejauh menyangkut popularitas dan kemajuan teknologinya.
            </p>
            <div class="d-flex flex-row">
              <div class="buttons">
                <i class="fa fa-apple" aria-hidden="true"></i>
                <div class="desc">
                  <a href="{{ url('login') }}">
                    <p>
                      <span>Tersedia</span> <br>
                      di App Store
                    </p>
                  </a>
                </div>
              </div>
              <div class="buttons">
                <i class="fa fa-android" aria-hidden="true"></i>
                <div class="desc">
                  <a href="{{ url('login') }}">
                    <p>
                      <span>Tersedia</span> <br>
                      di Play Store
                    </p>
                  </a>
                </div>
              </div>									
            </div>						
          </div>
        </div>
      </div>	
    </section> -->
    <!-- End download Area -->
  
    <!-- start footer Area -->		
    <footer class="footer-area section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-3  col-md-12">
            <div class="single-footer-widget">
              <h6>Pekerjaan Teratas</h6>
              <ul class="footer-nav">
                <li><a href="{{ url('login') }}">Web Developer</a></li>
                <li><a href="{{ url('login') }}">Akuntansi</a></li>
                <li><a href="{{ url('login') }}">Apoteker</a></li>
                <li><a href="{{ url('login') }}">Agroteknologi</a></li>
                <li><a href="{{ url('login') }}">Atlet</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6  col-md-12">
            <div class="single-footer-widget newsletter">
              <h6>Buletin</h6>
              <p>Anda dapat mempercayai kami. Kami hanya mengirimkan notifikasi terbaru, bukan spam tunggal.</p>
              <div id="mc_embed_signup">
                <form target="_blank" novalidate="true" action=" " method="get" class="form-inline">

                  <div class="form-group row" style="width: 100%">
                    <div class="col-lg-8 col-md-12">
                      <input name="EMAIL" placeholder="Masukan Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                      <div style="position: absolute; left: -5000px;">
                        <input name="123456789" tabindex="-1" value="" type="text">
                      </div>
                    </div> 
                  
                    <div class="col-lg-4 col-md-12">
                      <button class="nw-btn primary-btn">Langganan<span class="lnr lnr-arrow-right"></span></button>
                    </div> 
                  </div>		
                  <div class="info"></div>
                </form>
              </div>		
            </div>
          </div>
          <!-- <div class="col-lg-3  col-md-12">
            <div class="single-footer-widget mail-chimp">
              <h6 class="mb-20">Umpan Instagram</h6>
              <ul class="instafeed d-flex flex-wrap">
                <li><img src="img/i1.jpg" alt=""></li>
                <li><img src="img/i2.jpg" alt=""></li>
                <li><img src="img/i3.jpg" alt=""></li>
                <li><img src="img/i4.jpg" alt=""></li>
                <li><img src="img/i5.jpg" alt=""></li>
                <li><img src="img/i6.jpg" alt=""></li>
                <li><img src="img/i7.jpg" alt=""></li>
                <li><img src="img/i8.jpg" alt=""></li>
              </ul>
            </div>
          </div> -->
        </div>

        <div class="row footer-bottom d-flex justify-content-between">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | PLPTD by <a href="http://rcreatived.rf.gd" target="_blank">Mahasiswa STMIK Dharma Negara Bandung</a>
          </p>
          <div class="col-lg-4 col-sm-12 footer-social">
            <a href="https://wa.me/628882158789"><i class="fa fa-whatsapp"></i></a>
            <a href="https://facebook.com/rzkyprnmrmdhn"><i class="fa fa-facebook"></i></a>
            <a href="https://instagram.com/_rzkypr"><i class="fa fa-instagram"></i></a>
            <a href="http://rizkypurnamaramadhan.rf.gd"><i class="fa fa-dribbble"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <!-- End footer Area -->		

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>			
    <script type="text/javascript" src=" "></script>
    <script src="js/easing.min.js"></script>			
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>	
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>	
    <script src="js/owl.carousel.min.js"></script>			
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>			
    <script src="js/parallax.min.js"></script>		
    <script src="js/mail-script.js"></script>	
    <script src="js/main.js"></script>	

  </body>

</html>

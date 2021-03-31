<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Tracking Covid-19</title>
<!--
SOFTY PINKO
https://templatemo.com/tm-535-softy-pinko
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('front/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('front/css/templatemo-softy-pinko.css')}}">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img src="{{asset('front/images/logo2.png')}}">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="#welcome" class="active">Home</a></li>
                            <li><a href="#work-process">About</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1> <strong>Selamat Datang Di </strong>
                        <br> <strong>Tracking Covid-19</strong></h1>
                        <p>Website yang berisikan informasi tentang claster penyebaran
                         kasus <br>
                         covid-19 di Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Small Start ***** -->
    <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                
                                <h4 class="features-title">Positif</h4>
                                <div class="count-item decoration-top">
                                 <strong><h4>{{ $positif }}</h4></strong>
                                 <span>Orang</span></div>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <div class="features-small-item">
                                
                            <h4 class="features-title">Sembuh</h4>
                                <div class="count-item decoration-top">
                                 <strong><h4>{{ $sembuh }}</h4></strong>
                                 <span>Orang</span></div>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                
                            <h4 class="features-title">Meninggal</h4>
                                <div class="count-item decoration-top">
                                 <strong><h4>{{ $meninggal }}</h4></strong>
                                 <span>Orang</span></div>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->

    
    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-bottom-100">


            <div class="card-body" >
            <div class="table-responsive ">
            
            <div class="card-header">{{ __('Data Corona Virus Di Indonesia') }} 
                            </div> 
                            <table class="table table-bordered table-hover mb-0 text-nowrap css-serial " >
                                        <thead>
                                            <tr>
                                            <th scope="col">Nomor</th>
                                            <th scope="col">Provinsi</th>
                                            <th scope="col">Positif</th>
                                            <th scope="col">Sembuh</th>
                                            <th scope="col">Meninggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php $no=1; @endphp
                                        @foreach ($tampil as $data)
                                        <tr>
                                            <th scope="row">{{$no++}}</th>
                                            <th scope="row">{{$data->nama_provinsi}}</th>
                                            <th scope="row">{{$data->positif}}</th>
                                            <th scope="row">{{$data->sembuh}}</th>
                                            <th scope="row">{{$data->meninggal}}  </th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                                      
                        </div>
                    </div>
              
    
    </section>
    
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Home Parallax Start ***** -->
    <section class="mini" id="work-process">
        <div class="mini-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <h5>Gejala Covid-19</h5>
                            <p>Selama ini kita mengetahui bahwa gejala umum yang tejadi ketika terinfeksi Covid-19 ialah</p>
                            <i><img src="{{asset('front/images/gejala.jpg')}}" alt=""></i>

                        </div>
                    </div>
                </div>

                <!-- ***** Mini Box Start ***** -->
               
    </section>
    <!-- ***** Home Parallax End ***** -->

    <!-- ***** Testimonials Start ***** -->
    <section class="section" id="work-process">
        <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Penyebab Covid-19?</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <h4 align="left">COVID-19 disebabkan oleh SARS-CoV-2, yaitu virus jenis baru dari coronavirus (kelompok virus yang menginfeksi sistem pernapasan). Infeksi virus Corona bisa menyebabkan infeksi pernapasan ringan sampai sedang, seperti flu, atau infeksi sistem pernapasan dan paru-paru, seperti pneumonia.

COVID-19 awalnya ditularkan dari hewan ke manusia. Setelah itu, diketahui bahwa infeksi ini juga bisa menular dari manusia ke manusia. Penularannya bisa melalui cara-cara berikut:

Tidak sengaja menghirup percikan ludah (droplet) yang keluar saat penderita COVID-19 bersin atau batuk
Memegang mulut, hidung, atau mata tanpa mencuci tangan terlebih dulu, setelah menyentuh benda yang terkena droplet penderita COVID-19
Kontak jarak dekat (kurang dari 2 meter) dengan penderita COVID-19 tanpa mengenakan masker
CDC dan WHO menyatakan COVID-19 juga bisa menular melalui aerosol (partikel zat di udara). Meski demikian, cara penularan ini hanya terjadi dalam prosedur medis tertentu, seperti bronkoskopi, intubasi endotrakeal, hisap lendir, dan pemberian obat hirup melalui nebulizer.</h4>
                    </div>
                </div>
          
            <!-- ***** Section Title Start ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Testimonials End ***** -->

    <!-- ***** Pricing Plans Start ***** -->
    <!-- ***** Pricing Plans End ***** -->

    <!-- ***** Counter Parallax Start ***** -->
        <!-- ***** Counter Parallax End ***** -->   

    <!-- ***** Blog Start ***** -->
    <!-- ***** Blog End ***** -->

    <!-- ***** Contact Us Start ***** -->
    
    <!-- ***** Contact Us End ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
           
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright">Copyright &copy; 2020 Softy Pinko Company - Design: TemplateMo</p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- jQuery -->
    <script src="{{asset('front/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('front/js/popper.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('front/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('front/js/waypoints.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('front/js/imgfix.min.js')}}"></script> 
    
    <!-- Global Init -->
    <script src="{{asset('front/js/custom.js')}}"></script>

  </body>
</html>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Covid-19</title>
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
                    
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" >

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class=" col-md-12 col-sm-12">
                        <h1> <strong>Selamat Datang Di Tracking Covid-19</strong></h1>
                        <h4> Website Data Corona Virus Di Indonesia dan Negara Lain<h4>
                        
                        <!-- <a href="#features" class="main-button-slider">Discover More</a> -->
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
            <div class="row justify-content-center">
                <div class="col-lg-12">
                
                        <h1>Jumlah Kasus Corona Virus Di Indonesia</h1>
                        <br>
                    <div class="row">
                        <!-- ***** Features Small Item Start ***** -->
                        
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="features-small-item">
                                    
                                <h5 class="features-title">Total Positif</h5>
                                <div class="count-item decoration-top">
                                 <strong><h4>{{ $positif }}</h4></strong>
                                 <span>Orang</span>
                        </div>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="features-small-item">
                                <div>
                                </div>
                                <h5 class="features-title">Total Sembuh</h5>
                                <div class="count-item decoration-top">
                                 <strong><h4>{{ $sembuh }}</h4></strong>
                                 <span>Orang</span>
                        </div>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="features-small-item">
                                <h5 class="features-title">Total Meninggal</h5>
                                <div class="count-item decoration-top">
                                 <strong><h4>{{ $meninggal }}</h4></strong>
                                 <span>Orang</span>
                        </div>   
                        
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
   
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
            <div clas=" col-md-12 ">
            <div class="card">


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
                                            <th scope="col">Meninggal</th>
                                            <th scope="col">Sembuh</th>
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
                <div class="row justify-content-center">
                <div clas="col-sm12 col-md-12 col-lg-12 col-xl-14">
                <?php
                     $data = file_get_contents('https://api.kawalcorona.com/');
                     $negara = json_decode($data, true);

?>
               
                <div class="card">


                <div class="card-body" >
                <div class="table-responsive service ">
            
                <div class="card-header">{{ __('Data Corona Virus Di Dunia') }} 

                </div> 
                    <table class="table table-bordered table-hover mb-0 text-nowrap css-serial my-custom-scrollbar table-wrapper-scroll-y">
                            <thead>
                                <tr>
                                    <th scope="col">Nomor</th>
                                    <th scope="col">Negara</th>
                                    <th scope="col">Positif</th>
                                    <th scope="col">Meninggal</th>
                                    <th scope="col">Sembuh</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($negara as $data)
                                <tr>
                                    <td scope="row">{{$no++}}</td>
                                    <td  scope="row">{{$data['attributes']['Country_Region']}}</td>
                                    <td  scope="row">{{$data['attributes']['Confirmed']}} </td>
                                    <td  scope="row">{{$data['attributes']['Deaths']}} </td>
                                    <td  scope="row">{{$data['attributes']['Recovered']}} </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
                </div>

               

  </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
            </div>
        </div>
    </section>
    <!-- ***** Home Parallax End ***** -->

    <!-- ***** Testimonials Start ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">What is the corona virus?</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Quoted from Web MD, coronavirus is actually a common virus that is mostly harmless. The corona virus infects the nose, sinuses and upper throat. Even so, infection with several types of corona virus can actually have serious consequences.

The corona virus caused 585 deaths from Middle East respiratory syndrome (MERS), which first appeared in 2012 in Saudi Arabia. Previously in 2003, the corona virus caused 774 deaths due to Severe Acute Respiratory Syndrome (SARS).

At the end of January 2020, WHO identified 2019-nCoV in China. At the end of January 2020, there were about 300 identified cases in China. Each country has prepared prevention and security efforts, but the corona virus is still able to spread throughout the world.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

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
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
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
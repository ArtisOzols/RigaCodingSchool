<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/png" href="./@yield('linkBeginning')Attēli/favicon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @yield('head')

    <link rel="stylesheet" href="./@yield('linkBeginning')CSS/Mailos.css">
    <title>@yield('title')</title>
  </head>

  <body @yield('bodyTag')>
    <header>
            <nav class="navbar navbar-expand-md fixed-top nav-bg pink-border-md">
                <button class="navbar-toggler w-100 align-items-center" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon border-b-white w-75">
                        <a href="./@yield('linkBeginning')" class="logo" id="logo"> MAILOS </a>
                </span>                   
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">   
                            <a class="nav-link white" href="./@yield('linkBeginning')pakalpojumi"">MŪSU PAKALPOJUMI</a>
                        </li>
                        <li class="nav-item">   
                            <a class="nav-link white" href="./@yield('linkBeginning')pieraksts">E-PIERAKSTS</a>
                        </li>
                    </ul>
                </div>
                <div class="logo-width">
                    <a href="./@yield('linkBeginning')" class="justify-content-center collapse navbar-collapse logo" id="logo"> MAILOS </a>
                </div>
                <div class="collapse navbar-collapse justify-content-start" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link white" href="./@yield('linkBeginning')jaunumi">JAUNUMI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link white" href="./@yield('linkBeginning')par-mums">PAR MUMS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link white" href="./@yield('linkBeginning')kontakti">KONTAKTI</a>
                        </li>
                    </ul>
                </div>
            </nav>
    </header>

    <main>
    @yield('content')
    </main>

    <footer>
        <button type="button" class="scrollTop position-fixed"><i class="fa fa-arrow-circle-up"></i></button>

        <div class="bg-dred"> 
            <div id="F-navbar">
                <div class="container">
                    <div class="row">
                        <nav class="d-none d-lg-flex col-lg-5 align-items-center pl-0">
                            <h3 class="h5 pink mr-3 mt-2">SEKO MUMS:</h3>
                            <a href="#"><span class="fa-stack fa-lg red">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </span></a>
                            <a href="#"><span class="fa-stack fa-lg red">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                            </span></a>
                            <a href="#"><span class="fa-stack fa-lg red">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                            </span></a>
                        </nav>

                        <h4 class="logo-m pt-3 col-lg-2 col-12 text-center">MAILOS</h4>

                        <nav class="d-lg-none d-flex col-6 pl-0 flex-column">
                            <h3 class="h5 pink pl-1">SEKO MUMS:</h3>
                            <div>
                                <a href="#"><span class="fa-stack fa-lg red">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span></a>
                                <a href="#"><span class="fa-stack fa-lg red">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span></a>
                                <a href="#"><span class="fa-stack fa-lg red">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                </span></a>    
                            </div>
                        </nav> 

                        <div class="d-flex col-lg-5 col-6 align-items-end justify-content-end pr-0 mb-3 flex-lg-row flex-column">
                            <h3 class="h5 pink mr-2">PIESAKIES VIZĪTEI:</h3>
                            <button class="F-epieraksts rounded-pill mr-3"><a href="./@yield('linkBeginning')pieraksts">E-PIERAKSTS</a></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-3 row">
                <div class="col-5 text-right pr-3 mt-3 d-none d-lg-block">
                    <h3 class="h5 gray">REKVIZĪTI:</h3>
                    <p class="gray">SIA VSC MAILOS, Reģ.Nr. : 40003640689 <br>Adrese: Pulka ielā 3 k-9, Rīga, LV-1056 <br>&copy 2021 Veselības un skaistuma centrs MAILOS</p>  
                </div>
                <div class="col-lg-2 col-sm-12 text-center">
                    <h3 class="h5 gray">DARBA LAIKI:</h3>
                    <p class="gray text-nowrap pl-3">Pirmdienas: 09:00 - 18:00 <br>Otrdienas: 09:00 - 18:00 <br>Trešdienas: 09:00 - 17:00 <br>Ceturtdienas: 09:00 - 18:00 <br>Piektdienas: 09:00 - 17:00 <br>Sestdienas/Svētdienas: – </p>  
                </div>
            
                <div class="col-sm-6 text-sm-right col-12 text-center pr-3 mt-3 d-sm-block d-lg-none">
                    <h3 class="h5 gray">REKVIZĪTI:</h3>
                    <p class="gray">SIA VSC MAILOS, Reģ.Nr. : 40003640689 <br>Adrese: Pulka ielā 3 k-9, Rīga, LV-1056 <br>&copy 2021 Veselības un skaistuma centrs MAILOS</p>  
                </div>
                <div class="col-md-5 col-sm-6 text-sm-left col-12 text-center pl-3 pl-md-5 mt-3">
                    <h3 class="h5 gray">KONTAKTI:</h3>
                    <p class="gray">Tālruņa Nr.: +371 63426444 <br>E-pasts : info@mailos.lv <br>Adrese: Pulka ielā 3 k-9, Rīga, LV-1056</p>  
                </div>
            </div>
        </div>  
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    @yield('scripts')
    <script src="./@yield('linkBeginning')Js/Mailos.js"></script>
</body>
</html>
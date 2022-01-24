@extends('layouts.main')

@section('title', 'MAILOS - Veselības un skaistumkopšanas centrs')
@section('head')
    <link rel="stylesheet" href="./css/owl.carousel.css">
    <link rel="stylesheet" href="./css/owl.theme.default.css">
@endsection

@section('content')
<article>
                <div class="size flex-column d-flex position-relative align-items-center text-center justify-content-center beginning-bg-img">
                    <div>
                        <h4 class="fonts-Marcs"> Veselības un skaistumkopšanas centrs <br></h4>
                        <h1 class="logo-l"> MAILOS </h1>
                    </div>
                    <button class="button position-absolute top-80 rounded-pill"><a href="./par-mums">Par mums</a></button>
                </div>       
</article>
            
            <section>
                <div class="container-lg mt-3">
                    <div class="row" id="pakalpojumi-icons">
                        <a href="https://appointmentthing.com/mailos/zobrstnieciba" class="col-sm-3 col-6 text-center"><img class="icons" src="Attēli/Tooth.jpg"/> <p class="icon-text">Zobārstniecība</p></a>
                        <a href="https://appointmentthing.com/mailos/arstnieciskas-masazas" class="col-sm-3 col-6 text-center"><img class="icons" src="Attēli/Brush.jpg"/> <p class="icon-text">Kosmetoloģija</p></a>
                        <a href="https://appointmentthing.com/mailos/homeopatija" class="col-sm-3 col-6 text-center"><img class="icons" src="Attēli/Drug.jpg"/> <p class="icon-text">Homeopātija</p></a>
                        <a href="https://appointmentthing.com/mailos/masazas" class="col-sm-3 col-6 text-center"><img class="icons" src="Attēli/Massage.jpg"/> <p class="icon-text">Ārstnieciskās masāžas</p></a>
                    </div>
                </div>
            </section>
        
            <article>
                <div class="bg-gray pb-5">
                    <h3 class="title ml-5">Jaunumi</h3>
                
                    <div id="carouselExampleIndicators" class="carousel slide mb-3" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="d-flex justify-content-center">
                            <button class="lasit-visus-btn button rounded-pill"><a href="./jaunumi">Lasīt visus rakstus</a></button>
                        </div>
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                    <div class="container mb-5">
                                            <div class="d-flex align-items-center article-bg">
                                                <div class="w-md-50 w-100 px-4">                                
                                                    <h3 class="black text-uppercase"><a href="/jaunumi/{{$firstPost[0]->id}}"> {{$firstPost[0]->title}} </a></h3>
                                                    <br>                       
                                                    {!!$firstPost[0]->excert!!}                                                
                                                </div>
                                                <div class="width-40 d-none d-lg-block">
                                                    <a href="/jaunumi/{{$firstPost[0]->id}}"><img src="{{$firstPost[0]->img}}" class="article-img" alt="Jaunumi"></a>
                                                </div>
                                            </div>
                                    </div>
                            </div>  
                            @foreach($fourPosts as $item)
                                <div class="carousel-item">
                                    <div class="container mb-5">
                                        <div class="d-flex align-items-center article-bg">
                                            <div class="w-md-50 w-100 px-4">
                                                <h3 class="black text-uppercase"><a href="/jaunumi/{{$item->id}}"> {{$item->title}} </a></h3>
                                                <br> 
                                                {!!$item->excert!!}
                                            </div>
                                            <div class="width-40 d-none d-lg-block">
                                                <a href="/jaunumi/{{$item->id}}"><img src="{{$item->img}}" class="article-img" alt="Jaunumi"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>


                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </article>

        <article>
            <div class="container article-p mb-5 pb-5">
                <h2 class="title px-0 text-center text-md-left">Veselības centrs</h2>
                <p>Veselība ir cilvēka dārgāka manta un lielākā bagātība, tāpēc svarīgi, lai par mūsu veselību rūpētos zinoši un uzticami speciālisti. Lieliski, ja šādi speciālisti apvienojušies vienotā komandā, un labs piemērs tam ir veselības centrs MAILOS. Pie mums strādā īsti savas jomas profesionāļi, kuru sirds aicinājums ir palīdzēt ikvienam pacientam, sniegt augsta līmeņa pakalpojumus un būt pieejamiem maksimāli ātrā laikā.</p>
                <p>Ko nozīmē mūsdienīgs veselības centrs? Lai arī Rīgā un Latvijā ir daudz veselības centru, tie būtiski atšķiras savā starpā. Pieredze liecina, ka daudzi no tiem atgādina agrāk pazīstamās poliklīnikas – speciālistu un pacientu daudz, rindas garas, ārstu laiks ierobežots un ne vienmēr pietiek laika rūpīgi iedziļināties pacienta problēmā. Šajā ziņā veselības centrs MAILOS būtiski atšķiras no citiem – tas ir veselības centrs, kur pirmajā vietā ir klients un viņa veselība. Mūsu ārsti pacientiem velta vislielāko uzmanību, neatkarīgi no tā, cik daudz laika tas prasa. Mēs rūpīgi plānojam katru apmeklējuma laiku, lai vizīte pie ārsta būtu maksimāli pilnvērtīga un pacients saņemtu augsti profesionālus pakalpojumus. Visa turpmākā ārstēšanās procesa laikā jūs varēsiet sazināties ar savu ārstu un saņemt konsultācijas jums ērtākajā saziņas veidā. Mūsu ārstu moto ir būt pieejamiem un sasniedzamiem saviem pacientiem, jo pacienta problēma nevar likt gaidīt.</p>
                <div class="d-flex justify-content-center">
                    <button class="position-absolute button rounded-pill align-content-center mt-2"><a href="./par-mums">Par mums</a></button>
                </div>
            </div>
        </article>


        <section class="top-border pt-2">
            <div class="brand-carousel owl-carousel container partners-size position-relative px-5">
                <div class="single-logo partneri-box">
                    <img src="./Attēli/Partneri/1.png" class="partneri-sizes"  alt="Mūsu partneri">
                </div>
                <div class="single-logo partneri-box">
                    <img src="./Attēli/Partneri/2.png" class="partneri-sizes"  alt="Mūsu partneri">
                </div>
                <div class="single-logo partneri-box">
                    <img src="./Attēli/Partneri/3.png" class="partneri-sizes"  alt="Mūsu partneri">
                </div>
                <div class="single-logo partneri-box">
                    <img src="./Attēli/Partneri/4.png" class="partneri-sizes"  alt="Mūsu partneri">
                </div>
                <div class="single-logo partneri-box">
                    <img src="./Attēli/Partneri/5.png" class="partneri-sizes"  alt="Mūsu partneri">
                </div>
                <div class="single-logo partneri-box">
                    <img src="./Attēli/Partneri/6.png" class="partneri-sizes"  alt="Mūsu partneri">
                </div>
                <div class="single-logo partneri-box">
                    <img src="./Attēli/Partneri/7.png" class="partneri-sizes"  alt="Mūsu partneri">
                </div>
            </div>
        </section>
@endsection
@section('scripts')
<script src="./js/jquery-3.2.1.min.js"></script>
<script src="./Js/owl.carousel.min.js"></script>
@endsection

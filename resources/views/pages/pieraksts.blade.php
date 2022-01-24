@extends('layouts.main');

@section('title', 'MAILOS - Pieraksts')

@section('content')
<section>
    <div class="container-lg mt-3 h-75 mb-3 d-flex flex-column justify-content-center">
        <h2 class="text-center h-25 d-flex flex-column justify-content-center mb-4">Piesakies vizītei caur internetu:<h2>
        <div class="row mb-4" id="pakalpojumi-icons">
            <a href="https://appointmentthing.com/mailos/zobrstnieciba" class="col-sm-3 col-6 text-center"><img class="icons" src="Attēli/Tooth.jpg"/> <p class="icon-text">Zobārstniecība</p></a>
            <a href="https://appointmentthing.com/mailos/arstnieciskas-masazas" class="col-sm-3 col-6 text-center"><img class="icons" src="Attēli/Brush.jpg"/> <p class="icon-text">Kosmetoloģija</p></a>
            <a href="https://appointmentthing.com/mailos/homeopatija" class="col-sm-3 col-6 text-center"><img class="icons" src="Attēli/Drug.jpg"/> <p class="icon-text">Homeopātija</p></a>
            <a href="https://appointmentthing.com/mailos/masazas" class="col-sm-3 col-6 text-center"><img class="icons" src="Attēli/Massage.jpg"/> <p class="icon-text">Ārstnieciskās masāžas</p></a>
        </div>
        <h2 class="text-center h-25 d-flex flex-column justify-content-center mt-5 mb-4">Vai zvanot un rakstot caur e-pastu:<h2>
        <div class="d-flex justify-content-center">
            <div class="d-flex">
                <img class="icons mr-3" src="Attēli/Phone.png"/>
                <h4 style="line-height: 2.5">+371 63426444</h4>
            </div>
            <div class="w-25"></div>
            <div class="d-flex">
                <img class="icons mr-3" src="Attēli/Email.png"/>
                <h4 style="line-height: 2.5">pieraksts@mailos.lv</h4>
            </div>

        </div>
    </div>
</section>
@endsection
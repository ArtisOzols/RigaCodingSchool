@extends('layouts.main')

@section('title', 'MAILOS - Kontakti')

@section('bodyTag')
class="bg-gray"
@endsection

@section('content')
<div class="kontakti-bg">
            <h1 class="title text-center text-md-left">Kontakti</h1>
            <div class="container mt-4 px-0">
                <div class="row justify-content-around">
                    <div class="col-lg-5 col-12 px-3 mb-4">   
                        <div class="row d-flex justify-content-around">
                            <div class="col-lg-12 col-md-5 col-12 mb-5">
                                <h2 class="red mb-4 h4 pl-5">DARBA LAIKS:</h2>
                                <p class="pl-3 h5"> Pirmdienas: 09:00 - 18:00 </p>
                                <p class="pl-3 h5"> Otrdienas: 09:00 - 18:00</p>
                                <p class="pl-3 h5"> Trešdienas: 09:00 - 17:00</p>
                                <p class="pl-3 h5"> Ceturtdienas: 09:00 - 18:00</p>
                                <p class="pl-3 h5"> Piektdienas: 09:00 - 17:00</p>
                                <p class="pl-3 h5"> Sestdienas/Svētdienas: slēgts </p>
                            </div>

                            <div class="col-lg-12 col-md-5 col-12 mb-5">
                                <h2 class="red mb-4 h4 pl-5">KONTAKTINFORMĀCIJA:</h2>
                                <p class="pl-3 h5"> Tālr.: +371 29454349</p>
                                <p class="pl-3 h5"> E-pasts: ozoluartis@gmail.com</p>
                            </div>

                            <div class="col-lg-12 col-md-5 col-12 mb-5">
                                <h2 class="red mb-4 h4 pl-5">LAPAS VEIDOTĀJS:</h2>
                                <div class="d-flex">
                                    <img src="./Attēli/Me.png" alt="Lapas veidotājs" class="kontakti-img mr-4">
                                    <div>
                                        <p class="text-center mb-0">ARTIS OZOLS</p>
                                        <p><i class="fa fa-mobile fa-2x red" aria-hidden="true"></i> +371 29454349 <br><i class="fa fa-envelope-o  fa-1x red" aria-hidden="true"></i> ozoluartis@gmail.com</p>
                                    </div>    
                                </div>                            </div>

                            <div class="col-lg-12 col-md-5 col-12 mt-5">    
                                <h2 class="red mb-4 h4 pl-5">MĒS ATRODAMIES:</h2>
                                <p class="pl-3 h5"> Pulka ielā 3, k-9, Rīga, LV-1056</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 article-p px-3">
                        <aside class="contacts_form mb-4 align-content-center">
                            <div>
                            @if (session('message'))
                                <div class="h4 red text-center">
                                    {{session('message')}}
                                </div>
                            @else
                                <h2 class="h4 red mb-4 text-center">SAZINIES AR MUMS</h2> 
                                <p class="text-center dred">Lūdzu, aizpildiet formu un mēs sazināsimies ar jums pēc iespējas ātrāk</p>
                            </div>
                            
                            <form action="/kontakti" method="POST" class="needs-validation" novalidate>
                                @csrf
                                <div class="control">
                                    <input type="text" placeholder="Vārds, uzvārds *" name="name" class="form-control" value="{{old('name')}}" required>
                                </div>
                        
                                <div class="control control_double">
                                    <div class="control">
                                        <input type="tel" name="phoneCode" class="form-control " value="{{old('phone')}}+371" pattern="[+,0-9]{4}" required>
                                    </div>
                                        <input type="tel" placeholder="Tālrunis *" name="phone" class="form-control" value="{{old('phone')}}" pattern="[0-9]{8}" required>
                                    
                                </div>
                                
                                <div class="control">
                                    <input type="email" placeholder="E-pasts *" name="email" class="form-control" value="{{old('email')}}" required>
                                </div>
                                
                                <div class="control control_double">
                                    <div class="control">
                                        <input type="text" placeholder="Datums" name="date" value="{{old('date')}}">
                                    </div>
                                
                                    <div class="control">
                                        <input type="text" placeholder="Laiks" name="time" value="{{old('time')}}">
                                    </div>
                                </div>
                                
                                <div class="control">
                                    <textarea cols="30" rows="5" placeholder="Ziņojuma teksts *" name="comment" class="form-control" value="{{old('comment')}}" required></textarea>
                                </div>
                                
                                <div class="control justify-content-start">
                                    <input type="checkbox" id="privacy" name="privacy" required> 
                                    <label for="privacy">Piekrītu <a href="#" style="color: #56c441;" target="_blank">lietošanas nosacījumiem</a></label>

                                </div>
                                
                                <div class="control">
                                    <button type="submit" class="button rounded-pill">Nosūtīt</button>
                                </div>
                            </form>
                            @endif
                        </aside>
                    </div>

                   
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2355.3198404544873!2d24.063408816889638!3d56.95755399587132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecffc97831d85%3A0x17fb85379c247afc!2sPulka%20iela%203%2C%20Kurzemes%20rajons%2C%20R%C4%ABga%2C%20LV-1007!5e0!3m2!1slv!2slv!4v1588612312619!5m2!1slv!2slv" width="100%" height="450" frameborder="0" style="border-top-left-radius: 30px; border-top-right-radius: 30px; margin-bottom: 30px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                
            </div>
</div>
@endsection

@section('scripts')
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
@endsection
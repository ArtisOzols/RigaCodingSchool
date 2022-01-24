@extends('layouts.main');

@section('title', 'MAILOS - Pieraksts')

@section('content')
<section>
<div class="container-lg mt-5 pt-5">
        
    <h2 class="red text-center d-flex flex-column justify-content-center mb-5">Zobārstniecības pakalpojumi:<h2>
    <div class="mb-4">
        <ul style="list-style-type: none;">
            <li class="d-flex mb-3">
                <img class="icons mr-3" src="Attēli/Teeth/konsultācija.svg"/>
                <div>
                    <h2 class="red h4">KONSULTĒŠANA</h2>
                    <p class="h5">Zobu diagnostika un zobārsta konsultēšana par nepieciešajmajām procedūrām un piemērotākajiem risinājumiem ideālam smaidam.</p>
                </div>
            </li>

            <li class="d-flex mb-3">
                <img class="icons mr-3" src="Attēli/Teeth/Labošana.svg"/>
                <div>
                    <h2 class="red h4">LABOŠANA</h2>
                    <p class="h5">Caurumu, plaisu, nolūzušu zoba gabala plombēšana.</p>
                </div>
            </li>

            <li class="d-flex mb-3">
                <img class="icons mr-3" src="Attēli/Teeth/implants.svg"/>
                <div>
                    <h2 class="red h4">IMPLANTALOĢIJA</h2>
                    <p class="h5">Zoba aizstāšana ar mākslīgu zoba sakni un zobu. Šāda procedūra ieteicama gadījumos, kad zobs ir zaudēts un ir vēlme pēc maksimāli atjaunota dabizkā zobu izskata. </p>
                </div>
            </li>
            <li class="d-flex mb-3">
                <img class="icons mr-3" src="Attēli/Teeth/Implantology.svg"/>
                <div>
                    <h2 class="red h4">ENDODONTIJA</h2>
                    <p class="h5">Zoba sakņu kanālu ārstēšana, ar kuras palīdzību iespējams saglabāt zobu mutē. Šādu procedūru veic gadījumos, kad zobos caurums ir izveidojies līdz pat zoba saknei.</p>
                </div>
            </li>
            <li class="d-flex mb-3">
                <img class="icons mr-3" src="Attēli/Teeth/balināšana.svg"/>
                <div>
                    <h2 class="red h4">ZOBU BALINĀŠANA</h2>
                    <p class="h5">Zobu toņa paspilgtināšana. Šajā procedūrā ietilpst zobu kapju izgatavošana un zobu balinātāja uzklāšana.</p>
                </div>
            </li>
            <li class="d-flex mb-3">
                <img class="icons mr-3" src="Attēli/Teeth/hihiēna.svg"/>
                <div>
                    <h2 class="red h4">ZOBU HIGIĒNA</h2>
                    <p class="h5">Zobu aplikuma noņemšana, kas palīdzēs izvairīties no zobakmens, zobu kariesa, parodontīta, gingivīta un zoba zaudēšanas.</p>
                </div>
            </li> 
        </ul> 
    </div>

    <h2 class="red text-center d-flex flex-column justify-content-center mb-5">Kosmetoloģijas pakalpojumi:<h2>
    <div class="mb-4">
        <ul style="list-style-type: none;">
            <li class="d-flex mb-3">
                <img class="icons mr-3" src="Attēli/kosmetoloģija/liftings.svg"/>
                <div>
                    <h2 class="red h4">RF LIFTINGS SEJAI UN ACU ZONAI</h2>
                    <p class="h5">Ādas atjaunošana notiek dabiskā šūnu stimulācijas ceļā, kas ļauj panākt ādas ilgtermiņa nostiepšanu tajās zonās, kur ir novērojams audu elastības un tonusa zudums.</p>
                </div>
            </li>

            <li class="d-flex mb-3">
                <img class="icons mr-3" src="Attēli/kosmetoloģija/peeling.svg"/>
                <div>
                    <h2 class="red h4">MANDEĻPĪLINGS</h2>
                    <p class="h5">Īpaša procedūra sejai, kaklam un dekoltē visiem ādas tipiem. Šī procedūra paredzēta cilvēkiem, kas vēlas izskatīties jaunāki, veselīgāki ar gludāku, mirdzošāku ādu.</p>
                </div>
            </li>

            <li class="d-flex mb-3">
                <img class="icons mr-3" src="Attēli/kosmetoloģija/manikīrs.svg"/>
                <div>
                    <h2 class="red h4">PEDIKĪRS/MANIKĪRS</h2>
                    <p class="h5">Pedikīrs ietver procedūru kopumu pēdu un nagu kopšanai, lai saglabātu pēdu veselību un pievilcīgu izskatu. Regulāri veikts pedikīrs palīdzēs izvairīties no dažādām kāju un nagu problēmām. </p>
                </div>
            </li>

            <li class="d-flex mb-3">
                <img class="icons mr-3" src="Attēli/kosmetoloģija/epilācija.svg"/>
                <div>
                    <h2 class="red h4">EPILĀCIJA</h2>
                    <p class="h5">Epilācija ir viens no efektīvākajiem veidiem, kā atbrīvoties no nevēlamajiem matiņiem, tomēr nevajadzētu aizmirst, ka ziemā āda ir jūtīgāka, tamdēļ tai jāvelta īpašas rūpes.</p>
                </div>
            </li>
    </div>

    <h2 class="red text-center d-flex flex-column justify-content-center mb-5">Homeopātijas pakalpojumi:<h2>
    <div class="mb-4">
        <ul style="list-style-type: none;">
            <li class="d-flex mb-3">
                <img class="icons mr-3" src="Attēli/kosmetoloģija/konsultācija.svg"/>
                <div>
                    <h2 class="red h4">KONSULTĀCIJA</h2>
                    <p class="h5">Tā ir homeopāta iepazīšanās ar pacientu. Šī konsultācija var aizņemt pat līdz trim stundām un tās laiktā homeopāts noskaidro visu nepieciešamo par pacientu, lai tam izrakstītu pēc iespējas precīzāk nepieciešamos medikamentus pareizajās devās.</p>
                </div>
            </li>

            <li class="d-flex mb-3">
                <img class="icons mr-3" src="Attēli/kosmetoloģija/drug.svg"/>
                <div>
                    <h2 class="red h4">HOMEOPĀTISKĀS ZĀLES</h2>
                    <p class="h5">Ir pieejami visdažādākie homeopātiskie zāļu līdzekļi visdažādākajos veidos gan dilūciju, tablešu, pulvera, eļļu, ziežu, ārīgi lietojamā spirta šidruma veidā, gan ierasto graudiņu veidā. </p>
                </div>
            </li>
    </div>
    
    <h2 class="red text-center d-flex flex-column justify-content-center mb-5">Homeopātijas pakalpojumi:<h2>
    <div class="mb-4">
        <ul style="list-style-type: none;">
            <li class="d-flex mb-3">
                <img class="icons mr-3" src="Attēli/kosmetoloģija/šiatsu.svg"/>
                <div>
                    <h2 class="red h4">ŠIACU</h2>
                    <p class="h5">iacu piemīt relaksējošs efekts un var būt noderīgs pret muguras sāpēm, stresu, galvas sāpēm,  kakla skriemeļu traumu gadījumos, kakla stīvuma gadījumos, pret daudzām sporta traumām, kā arī pret citām fisikām traucējumiem.</p>
                </div>
            </li>

            <li class="d-flex mb-3">
                <img class="icons mr-3" src="Attēli/kosmetoloģija/mmassage.svg"/>
                <div>
                    <h2 class="red h4">MIORELAKSĒJOŠĀS MASĀŽAS</h2>
                    <p class="h5">Šī masāža Rīgā ļauj atbrīvoties no fiziskā un emocionālā stresa, muskuļu spazmas un noguruma. Muskuļu relaksējošas masāžas tehnika palīdzēs detoksicēt muskuļus un ļaus izbaudīt pilnīgas relaksācijas stāvoklī, tāpēc to arī sauc par pret stresa masāžu.</p>
                </div>
            </li>

            <li class="d-flex mb-3">
                <img class="icons mr-3" src="Attēli/kosmetoloģija/mugurkauls.svg"/>
                <div>
                    <h2 class="red h4">MASĀŽAS MUGURKAULA STIPRINĀŠANAI</h2>
                    <p class="h5">Palīdz tik vaļā no diskomforta un sāpēm mugurā, ko izraisa mugurkaula slimības vai skolioze. </p>
                </div>
            </li>

            <li class="d-flex mb-3">
                <img class="icons mr-3" src="Attēli/kosmetoloģija/face.svg"/>
                <div>
                    <h2 class="red h4">STRUKTURĀLĀ SEJAS MASĀŽAS</h2>
                    <p class="h5">Sejas strukturālās masāžas laikā mijas vieglas un intensīvas masāžas kustības, kas stimulē asinsriti. Regulārs šīs procedūras apmeklējums atjauno ādas šūnas, un tai ir liftinga efekts, kā rezultātā seja kļūst tonizēta un “svaiga”.</p>
                </div>
            </li>

            <li class="d-flex mb-3">
                <img class="icons mr-3" src="Attēli/kosmetoloģija/tai.svg"/>
                <div>
                    <h2 class="red h4">TAIZEMES MASĀŽAS</h2>
                    <p class="h5">Taizemes masāžas tehnika ir līdzīga jogas asanām. Šīs masāžas laikā netiek izmantota intensīva mīcīšana vai pieskaršanās. Tehnikas noslēpums slēpjas masēšanas, savīšanas un presēšanas metodēs noteiktos punktos. Taizemes masāža ietver pēdu, galvas, sejas, roku un citu ķermeņa daļu masāžu.</p>
                </div>
            </li>

            <li class="d-flex mb-3">
                <img class="icons mr-3" src="Attēli/kosmetoloģija/Citas.svg"/>
                <div>
                    <h2 class="red h4">CITAS MASĀŽAS</h2>
                    <p class="h5">Ir pieejamas arī citas masāžas gan pēc pieprasījuma, gan arī PaČai, miotensivā masāža, dziļo audu, refirmācijas masāžas un citas.</p>
                </div>
            </li>
    </div>
</div>
</section>
@endsection
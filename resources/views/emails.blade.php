@component('mail::message')
    <strong>Vārds:</strong> {{$data['name']}} <br>
    <strong>Telefona Nr.:</strong> {{$data['phoneCode']}}
    <strong></strong> {{$data['phone']}} <br>
    <strong>Epasta adrese:</strong> {{$data['email']}} <br>
    <strong>Datums:</strong> {{$data['date']}} <br>
    <strong>Laiks:</strong> {{$data['time']}} <br>
    <strong>Ziņojuma teksts:</strong> <br>
    {{$data['comment']}}
@endcomponent

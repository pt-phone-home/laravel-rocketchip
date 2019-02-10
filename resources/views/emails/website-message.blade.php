@component('mail::message')
# New Message from Rocket.Chip Web Solutions.

A new Message has been received from {{$email->name}}. You can reach them on {{$email->email}}.

Their contact number is {{$email->number}}

Their message is as follows: 

{{$email->message}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent

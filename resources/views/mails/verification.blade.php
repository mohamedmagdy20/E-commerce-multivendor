<x-mail::message>
# E-commerce
Dear {{$email}} your verification code is 
<x-mail::button :url="''">
{{$code}}
</x-mail::button>
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

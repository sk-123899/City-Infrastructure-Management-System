@component('mail::message')
# Hello from CIMS

Welcome to our Application 
@component('mail::button', ['url' => 'dashboard'])
Verify Email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

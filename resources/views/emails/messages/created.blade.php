@component('mail::message')

{{ $name }}
{{ $email }}
<br>
{{ $subject }}
<br>
{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

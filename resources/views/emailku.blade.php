@component('mail::message')
# {{ $data['title'] }}

Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae amet placeat nulla deleniti illum expedita? Fuga, ea quia, tempore corrupti deleniti autem quaerat eius odit a, earum at eum cum.

@component('mail::button', ['url' => $data['url']])
Visit
@endcomponent

Terima Kasih,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')
# {{ $data['title'] }}

Terima Kasih telah memberikan Kritik & Saran
Kami harap Kritik & Saran anda dapat menambah membuat web kami menjadi lebih baik lagi.
@component('mail::button', ['url' => $data['url']])
Visit
@endcomponent

Terima Kasih,<br>
{{ config('app.name') }}
@endcomponent

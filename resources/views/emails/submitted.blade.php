@component('mail::message')
# Hello FEP HR

Appriasal submitted .

@component('mail::button', ['url' => '/admin/'])
View
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

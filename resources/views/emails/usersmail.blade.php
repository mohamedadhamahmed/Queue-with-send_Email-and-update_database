@component('mail::message')
# Introduction

Welcome Adhamcooo

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

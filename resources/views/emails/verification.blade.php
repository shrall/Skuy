@component('mail::message')
# Introduction

The body of your messages.

@component('mail::button', ['url' => $invoice])
Verify
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

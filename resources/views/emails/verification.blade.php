@component('mail::message')
# Introduction

The body of your messages.

@component('mail::button', ['url' => $url ?? 'https://shrall.github.io'])
Verify
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')
# Introduction

The body of your messages.

@component('mail::button', ['url' => $url ?? '#'])
Verify
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

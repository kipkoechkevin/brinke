@component('mail::message')
# Brinke Solutions

An inquiry mail from {{$contact['name']}} about {{$contact['subject']}}

{{$contact['message']}}

Phone Details : {{$contact['phone']}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent

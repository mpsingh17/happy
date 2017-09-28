@component('mail::message')
# Email confirmation

Please, confirm your account to use our service.

@component('mail::button', ['url' => route('confirmUser', ['confirmToken' => $user->confirm_token, 'id' => $user->id])])
Confirm Email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

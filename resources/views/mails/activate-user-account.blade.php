@component('mail::message')
# Account created

Your account is almost ready. Please click on the button to activate your account.

@component('mail::button', ['url' => route('activate-account', $user->activation_token)])
Activate account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
Hello {{ $user->name }}
You changed your email, so we need to verify this new address. Please you the link bellow:
{{ route('verify', $user->verification_token) }}
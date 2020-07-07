@extends('layout.app')

@section('content')
<div class="px-4 container mx-auto max-w-md flex flex-row justify-center">
    <div class="w-full space-y-6">
        <div class="text-center text-2xl font-semibold tracking-wider">{{ __('Login') }}</div>
        <form class="space-y-4" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="space-y-2">
                <label for="email">{{ __('E-Mail Address') }}</label>

                <div>
                    <input id="email" type="email"
                        class="w-full px-4 py-2 border rounded-lg @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password"
                        class="w-full px-4 py-2 border rounded-lg @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div>
                <div>
                    <div>
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="flex flex-col space-y-1">
                    <button type="submit" class="px-4 py-2 rounded-lg border">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                    <a class="text-sm text-center" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

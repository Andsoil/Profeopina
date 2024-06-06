<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/logins.css">
    <title>@yield('title')</title>
</head>
<body>

    @extends('layouts.navbarsinsesion')

    @section('title', 'Login')

    @section('content')
        <div class="contenedor">
            <div class="login-container">
                <h2>{{ __('Login') }}</h2>
                <form method="POST" action="{{ route('login') }}" class="login-form">
                    @csrf

                    <div class="inputs">
                        <div class="input-group">
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Correo" />
                        </div>

                        <div class="input-group">
                            <x-label for="password" value="{{ __('Password') }}" />
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="Contraseña" />
                        </div>
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 forgot-password" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <button type="submit" class="btn-continue ms-4">
                            {{ __('Log in') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endsection

</body>
</html>

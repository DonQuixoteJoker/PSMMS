<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        html,
        body {
            height: 100%;
            width: 100%;
            background-image: url('assets/background.jpg');
        }

        @font-face {
            font-family: otr;
            src: url('font/OverTheRainbow.ttf');
        }

        h3{
            font-family: otr;
            color: #d2e5ff;
        }

        .title{
            text-align: center;
            font-size: 18px;
        }

    </style>
</head>

<body>
    <div>

        <x-guest-layout>
            <x-jet-authentication-card>
                <x-jet-validation-errors class="mb-4" />

                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif
                <div class="title">
                    <h3>PSM MANAGEMENT SYSTEM</h3>
                </div>
                <div class="drop-shadow">
                    <div class="container">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            
                            
                            <br>
                            <div>
                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="password" value="{{ __('Password') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="current-password" />
                            </div>

                            <div class="block mt-4">
                                <label for="remember_me" class="flex items-center">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                                @endif

                                <x-jet-button class="ml-4">
                                    {{ __('Log in') }}
                                </x-jet-button>
                            </div>
                        </form>
                    </div>
                </div>

            </x-jet-authentication-card>
        </x-guest-layout>
    </div>


</body>

</html>
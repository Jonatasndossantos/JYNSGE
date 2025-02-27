<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <style>
        body {
            background: linear-gradient(180deg, #002B9B 0%, #7B2CBF 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background-color: white;
            padding: 2rem;
            border-radius: 12px;
            width: 90%;
            max-width: 400px;
            box-shadow: 0px 4px 32px 4px rgba(0, 0, 0, 0.15);
        }

        .login-title {
            text-align: center;
            margin-bottom: 2rem;
            font-family: CTAMonumentGrotesk, sans-serif;
            font-size: 2rem;
            color: #002B9B;
        }

        .input-field {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            font-size: 1rem;
        }

        .login-button {
            width: 100%;
            padding: 0.75rem;
            background-color: #002B9B;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .login-button:hover {
            background-color: #001f7a;
        }

        .login-links {
            margin-top: 1rem;
            text-align: center;
        }

        .login-links a {
            color: #002B9B;
            text-decoration: none;
            font-size: 0.875rem;
            margin: 0 0.5rem;
        }

        .social-login {
            margin-top: 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .social-button {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .social-button:hover {
            background-color: #f9fafb;
        }

        .back-button {
            position: absolute;
            bottom: 2rem;
            padding: 0.75rem 2rem;
            background-color: white;
            color: #002B9B;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .back-button:hover {
            background-color: #f9fafb;
        }
    </style>

<body>
    <div class="login-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="login-title">LOGIN</h1>
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <input type="email" 
                       id="email" 
                       name="email" 
                       class="input-field" 
                       value="{{ old('email') }}" 
                       placeholder="email"
                       required autofocus autocomplete="username">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="password" :value="__('Password')" />
                <input type="password" 
                       id="password" 
                       name="password" 
                       class="input-field" 
                       value="{{ old('password') }}" 
                       placeholder="senha"
                       required autocomplete="current-password" >
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            
            <button class="login-button" type="submit">

                    {{ __('Entrar') }}

            </button>

            <div class="login-links">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <a href="/register">Primeiro acesso></a>
            </div>

            <div class="social-login">
                <button class="social-button">
                    <img src="https://www.google.com/favicon.ico" alt="Google" width="20">
                    Entrar com Google
                </button>
                <button class="social-button">
                    <img src="https://www.facebook.com/favicon.ico" alt="Facebook" width="20">
                    Entrar com Facebook
                </button>
            </div>
        </form>
    </div>

    <a class="back-button" href="/">Voltar</a>
</body>
</x-guest-layout>

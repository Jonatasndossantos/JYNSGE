<x-guest-layout>
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
            
            margin-top: 2rem;
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
            margin: 2rem 0;
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
    <div class="login-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1 class="login-title">REGISTRAR</h1>

            <!-- Name -->
            <div>
                <label for="name">Nome</label>
                <input id="name" 
                       class="input-field block mt-1 w-full" 
                       type="text" 
                       name="name" 
                       placeholder="Nome" 
                       value="{{ old('name') }}" 
                       required 
                       autofocus 
                       autocomplete="name">
                @error('name')
                    <span class="text-red-600 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label for="email">Email</label>
                <input id="email" 
                       class="input-field block mt-1 w-full" 
                       type="email" 
                       name="email" 
                       placeholder="Email" 
                       value="{{ old('email') }}" 
                       required 
                       autocomplete="username">
                @error('email')
                    <span class="text-red-600 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password">Senha</label>
                <input id="password" 
                       class="input-field block mt-1 w-full"
                       type="password"
                       name="password"
                       placeholder="Senha"
                       required 
                       autocomplete="new-password">
                @error('password')
                    <span class="text-red-600 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation">Confirmar senha</label>
                <input id="password_confirmation" 
                       class="input-field block mt-1 w-full"
                       type="password"
                       name="password_confirmation" 
                       placeholder="Senha"
                       required 
                       autocomplete="new-password">
                @error('password_confirmation')
                    <span class="text-red-600 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

            <button class="login-button ml-4">
                    {{ __('Registrar') }}
                </button>
            <div class="login-links flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Já está registrado?') }}
                </a>

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
</x-guest-layout>

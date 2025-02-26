<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>
        <meta name="description" content="">

        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">


        <meta property="og:type" content="website">


        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Discover">
        <meta name="twitter:description" content="">


        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">

        <link rel="icon" type="image/png" sizes="32x32" media="(prefers-color-scheme: dark)"
                href="media/favicon-32x32-dark-mode.png">
        <link rel="icon" type="image/png" sizes="16x16" media="(prefers-color-scheme: dark)"
                href="media/favicon-16x16-dark-mode.png">
        <link rel="icon" type="image/png" sizes="32x32" media="(prefers-color-scheme: light)"
                href="media/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" media="(prefers-color-scheme: light)"
                href="media/favicon-16x16.png">

        <meta name="msapplication-TileColor" content="#eceffe">
        <meta name="theme-color" content="#ffffff">
        
        <link rel="stylesheet" href="app/assets/app-DDAX_FZV.css">
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
</head>

<body>
    <div class="login-container">
        <h1 class="login-title">LOGIN</h1>

        <input type="text" class="input-field" placeholder="USUARIO">
        <input type="password" class="input-field" placeholder="SENHA">

        <a href="index.html"><button class="login-button">Entrar</button></a>

        <div class="login-links">
            <a href="#">Esqueceu a senha?</a>
            <a href="cadastro.html">Primeiro acesso></a>
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
    </div>

    <a class="back-button" href="index.html">Voltar</a>
</body>

</html>
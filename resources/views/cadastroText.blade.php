<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro-primeiro acesso</title>
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
            height: 80%;
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

        .input-label {
            display: block;
            margin-bottom: 0.5rem;
            color: #4B5563;
            font-size: 0.875rem;
            font-weight: 500;
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
            margin-top: 1rem;
        }

        .login-button:hover {
            background-color: #001f7a;
        }

        .back-button {
            margin: 20px 0;
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

        .form-group {
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="login-container" style="margin-top: 50px;">
        <h1 class="login-title">Cadastro</h1>
        
        <div class="form-group">
            <label class="input-label">Nome completo</label>
            <input type="text" class="input-field" placeholder="Digite seu nome completo">
        </div>

        <div class="form-group">
            <label class="input-label">E-Mail</label>
            <input type="email" class="input-field" placeholder="Digite seu e-mail">
        </div>

        <div class="form-group">
            <label class="input-label">Data de nascimento</label>
            <input type="date" class="input-field">
        </div>

        <div class="form-group">
            <label class="input-label">Telefone:</label>
            <input type="tel" class="input-field" name="telefone" placeholder="(XX) XXXXX-XXXX" pattern="\(\d{2}\) \d{5}-\d{4}" required>
        </div>

        <div class="form-group">
            <label class="input-label">Criar Senha</label>
            <input type="password" class="input-field" placeholder="Digite sua senha">
        </div>

        <div class="form-group">
            <label class="input-label">Confirmar Senha</label>
            <input type="password" class="input-field" placeholder="Confirme sua senha">
        </div>
        
        <a href="login.html"><button class="login-button">Cadastrar</button></a> 
        
    </div>
    
    <a href="login.html">
        <button class="back-button">Voltar</button>
    </a>
    
</body>
</html>
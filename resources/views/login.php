<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <div class="login-section">
            <div class="login-wrapper">
                <div class="logo">LOGO</div>
                <form class="login-form">
                    <h2>Login</h2>
                    <label for="email">Digite o seu e-mail:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="password" required>
                    <div class="remember-me">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Esqueci minha senha</label>
                    </div>
                    <button type="submit">Acessar</button>
                    <div class="register-link">
                        <a href="#">Não tem uma conta? Inscreva-se</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="image-section"></div>
    </div>
</body>
</html>

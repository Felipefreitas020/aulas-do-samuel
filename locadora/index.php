<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seriando - Login</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="login-container">
    <div class="logo">
      <h1>Seriando</h1>
      <img src="./SRC/LOGO.png" alt="Ícone" />
    </div>
    
    <form>
      <label for="email">EMAIL</label>
      <input type="email" id="email" name="email" autocomplete="email" required>

      <label for="senha">SENHA</label>
      <input type="password" id="senha" name="senha" autocomplete="current-password" required>

      <button type="submit">ENTRAR</button>
    </form>
  </div>
</body>
</html>
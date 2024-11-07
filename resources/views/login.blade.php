<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ferragens Benjamim</title>
  
  <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Entrar</header>
      <form action="login" method="POST">
      @csrf
        <input type="text" name="email" placeholder="Introduza o seu email">
        <input type="password" name="senha" placeholder="Introduza sua Senha">
        <a href="#">Esqueceu a senha?</a>
        <input type="submit" class="button" value="Entrar">
    </form>
    
      <div class="signup">
        <span class="signup">Não tem uma conta?
         <label for="check">Crie</label>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Criar Conta</header>
      <form action="/user/store" method="POST">
      @csrf  
      <input type="text" name="email" placeholder="Introduza seu Email">
        <input type="password" name="senha" placeholder="Crie sua Senha">
        <input type="password" name="confirma_senha" placeholder="Confirme sua Senha">
        <label for="user_role">Selecione o tipo de utilizador:</label>
        <select id="user_role" name="user_role">
            <option value="normal">Utilizador Normal</option>
            <option value="admin">Admin</option>
        </select>
        <input type="submit" class="button" value="Criar Conta">
    </form>
    
      <div class="signup">
        <span class="signup">Já tem uma conta?
         <label for="check">Entre</label>
        </span>
      </div>
    </div>
  </div>
</body>
</html>

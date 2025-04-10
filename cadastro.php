<?php?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hiran Tecnologia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
  <div class="card p-4 shadow-lg" style="width: 350px;">
    <h2 class="text-center mb-4">Cadastrar Usuario</h2>
    <form id="loginForm">
      <div class="mb-3">
        <label for="login" class="form-label">Login</label>
        <input type="login" class="form-control" id="login" placeholder="Digite seu login">
      </div>
      <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="senha" class="form-control" id="senha" placeholder="Digite sua senha">
      </div>
      <button type="submit" class="btn btn-primary w-100" onclick="validarCadastro()">Cadastrar</button>
      <p id="mensagemErro" class="text-center mt-3 text-danger"></p>
      <p id="mensagemOK" class="text-center mt-3 text-success"></p>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
      event.preventDefault();
      validarCadastro();
    });

    function validarLogin() {
      document.getElementById("mensagemErro").style.display = "none";
      document.getElementById("mensagemOK").style.display = "none";

      let vLogin = document.getElementById("login").value;
      let vSenha = document.getElementById("senha").value;

      if (vLogin.trim() === "") {
        document.getElementById("mensagemErro").style.display = "block";
        document.getElementById("mensagemErro").innerText = "O campo login deve ser informado !!!!";
      } else if (vSenha.trim() === "") {
        document.getElementById("mensagemErro").style.display = "block";
        document.getElementById("mensagemErro").innerText = "O campo senha deve ser informado !!!!";
      } else {
        document.getElementById("mensagemOK").style.display = "block";
        document.getElementById("mensagemOK").innerText = "Usuario cadastrado com sucesso!";
      }
    }

    function validarCadastro(){

    }
  </script>
</body>
</html>
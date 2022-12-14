<?php
include 'connection.php';
session_start();
$_SESSION['nome'] = "";
$_SESSION['email'] = "";
$pdo = new PDO ('mysql:host=localhost; dbname=id19648590_serena', 'id19648590_serena_store', 'w3lCBK0n1xph2={b');
if(isset($_POST['acao'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

$sql = $pdo->prepare("SELECT * FROM cliente WHERE email = ? AND senha = ?"); //usuado para selecionar o email e a senha
if ($sql->execute(array($email, $nome))){
    if($sql->rowCount()>0){
        $info = $sql->fetchALL(PDO::FETCH_ASSOC);
        foreach($info as $key => $values){
            $_SESSION['nome'] = $values['nome'];
            $_SESSION['email'] = $values['email'];
        }
        echo 'O usuário foi encontrado, o cadastro foi realizado com sucesso!';
        header('location:cadastro.php');
    }else{
        echo'Esse usuário não foi encontrado, verifique-se o cadastro foi efetuado.';
    }
}
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/testeDoCadastro.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="color-default container-fluid">
    <!-- Navbar começa aqui -->
    <nav class="navbar navbar-expand-lg navbar-light color-default d-flex flex-column">
        <a class="navbar-brand" href="#">
            <img src="./img/logo.png" class="logo-navbar"></a>
        <div class="collapse navbar-collapse flex-column" id="navbarNav">
            <ul class="navbar-nav d-flex">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aneis.html">Anéis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="teste.html">TESTE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Brincos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Chaveiros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Colares</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Porcelanas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pulseiras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Xuxinhas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active href="cadastro.html">Olá! entre ou cadastre-se</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar termina aqui -->
    <div class="login slide-up">
      <div class="center">
        <h2 class="form-title" id="login"><span>ou</span>login</h2>
        <div class="form-holder">
          <input type="email" class="input" placeholder="Email" />
          <input type="password" class="input" placeholder="Password" />
        </div>
        <button class="submit-btn">login</button>
      </div>
    </div>
  </div>
  <div class="slw">
  <div class="form-structor">
    <div class="signup">
      <h2 class="form-title" id="signup"><span>ou</span>cadastre-se</h2>
      <div class="form-holder">
        <input type="text" class="input" placeholder="Nome" />
        <input type="email" class="input" placeholder="Email" />
        <input type="password" class="input" placeholder="Senha" />
      </div>
      <button class="submit-btn">cadastrar</button>
    </div>
  <script>
    console.clear();
  const loginBtn = document.getElementById('login');
  const signupBtn = document.getElementById('signup');
  loginBtn.addEventListener('click', (e) => {
    let parent = e.target.parentNode.parentNode;
    Array.from(e.target.parentNode.parentNode.classList).find((element) => {
      if(element !== "slide-up") {
        parent.classList.add('slide-up')
      }else{
        signupBtn.parentNode.classList.add('slide-up')
        parent.classList.remove('slide-up')
      }
    });
  });
  signupBtn.addEventListener('click', (e) => {
    let parent = e.target.parentNode;
    Array.from(e.target.parentNode.classList).find((element) => {
      if(element !== "slide-up") {
        parent.classList.add('slide-up')
      }else{
        loginBtn.parentNode.parentNode.classList.add('slide-up')
        parent.classList.remove('slide-up')
      }
    });
  });
  </script>
</body>
</html>
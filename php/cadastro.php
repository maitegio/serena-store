<?php
/* começo do php para o cadastro*/
        include 'connection.php'; //incluir o cadastro na conexão

    $login = $_POST ['login'];
    $senha = MD5 ($_POST['senha']);
    $connect = mysql_connect('000webhost', 'id19648590_serena_store', 'spZxF^%)Rs6kp]rr')
    $db = mysql_select_db ('id19648590_serena');
    $query_select = "SELECT nome FROM cliente  WHERE cliente = '$id_cliente' ";
    $select = mysql_query($query_select, $connect);
    $array = mysql_fetch_array($select);
    $logarray = $array['login'];

    if ($login == "" || $login == null ){
        echo "<script language='javascript' type='text/javascript'> alert('Esse campo deve ser preenchido!!'); window.location.href='cadastro.html'; </script>";
    
     }else{
        if($logarray == $login){
            echo "<script language='javascript' type='text/javascript'>
            alert('Esse login já existe'); window.location.href='cadastro.html'; </script>"
        die();
        }else{
            $query = "INSERT INTO cliente (nome,email) VALUES ('$nome', '$email')";
            $insert = mysql_query($query, $connect);

            if($insert){
                echo"<script language='javascript' type='text/javascript'> alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
            }else{
                echo"<script language='javascript' type='text/javascript'>
                alert('Não foi possível cadastrar esse usuário');window.location
                .href='cadastro.html'</script>";
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
    <link rel="stylesheet" href="./css/cadastro.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>Cadastro</title>
</head>
<body>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/index.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
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
            </div>
        </div>
    </div>


    <fieldset>
    <legend> Cadastro: </legend>
        <label for="nome"> NOME:</label> 
        <input type="text"  name="nome" required>
        <label for="email"> EMAIL:</label> 
        <input type="text"  name="email" required>
        <label for="senha"> SENHA:</label> 
        <input type="password" name="senha" id="senha" requeried > 
        <label for="confirma"> REPETIÇÃO DA SENHA:</label> 
        <input type="password"  name="confirma" id="confirma" requeried onblur="alerta();">
        </fieldset>
    <BR>
   <fieldset>
<br>
    <img src="img/sobrenos.jpeg" class="img-thumbnail nos" alt=" 10">
    <h1 class="text-center  fonte-alterada">Acompanhe nossas novidades</h1>
    <h3 class="text-center fonte-alterada">cadastre seu email para receber informações exclusivas</h3>
    <div class="row">
        <br>
        <br\>
            <br>
            <br>
            <label for="inputPassword5" class="form-label">Email</label>
            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
            <div id="passwordHelpBlock" class="form-text">
                Confira seu celular para ver se recebeu notificações
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn- me-md-2" type="button">Cadastrar</button>
                <br>
                <footer>
                    <br>
                    <br>
                    <div class="rodape">
                        <p>Redes sociais</p>
                        <p><a href="">@Serena_str_</a></p>
                    </div>
                </footer>

    
</body>
</html>

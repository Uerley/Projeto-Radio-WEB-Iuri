<?PHP
include("config.php");
if(isset($_POST['email'])) {
	extract($_POST);
	$consulta = $conexao->query("select * from tb_login
		where log_email = '$email' and log_senha = '$senha'");
	$resultado = $consulta->fetch_assoc();
	if($resultado) {
		header("location: http://batna.ifrn.edu.br/pagadm.php");
	}
	else {
       	   echo "<script>alert('Você não é o Administrador, por favor saia');</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilosite.css">
    <link rel="sortcut icon" href="RadioLogo.ico" type="image/x-icon" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            border: none;
        }

        body {
            background-image: url("RadioWebb.jpg");
            background-size: cover;
        }

        #login-container label,
        input {
            display: block;
            width: 100%;
            text-align: left;
        }

        img {
            width: 90px;
        }
    </style>
</head>

<body>
    <div id="login-container">
        <img src="user-icon.png" width="20px" alt="">
        <form action="?" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" autocomplete="off">
            <label for="password">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Sua Senha">
            <a href="#" id="esqueceu">Esqueceu a senha?</a>
            <a href="index.php" id="voltar">Voltar</a>
            <input type="submit" value="Login">
        </form>

        <div id="registrarcontainer">
            <a href="#">Criar sua Conta</a>
        </div>
    </div>
</body>

</html>

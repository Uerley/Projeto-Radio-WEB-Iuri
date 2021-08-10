<?PHP
include("config.php");
if(isset($_POST['email'])) {
	extract($_POST);
	$consulta = $conexao->query("select * from tb_login
		where log_email = '$email' and log_senha = '$senha'");
	$resultado = $consulta->fetch_assoc();
	if($resultado) {
		header("location: pagadm.php");
	}
	else {
		// echo "Voce nao eh autorizadoh, saia daqui";
        header("location: index.php");
        // alert("Você não está autorizado, é só para os adm");
        // echo "<p>" . $resultado . "</p>";
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
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>

</html>
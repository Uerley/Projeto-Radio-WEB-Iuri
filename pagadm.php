<html lang="PT-BR">
<?php
include("config.php");
$consulta = $conexao->query("select * from tb_comunicacao order by comu_data");
if(isset($_GET['excluir'])) {
	$excluir = $_GET['excluir'];
	$consulta = $conexao->query("delete from tb_comunicacao where comu_codigo = $excluir");
	header("location: pagadm.php");
}
?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="sortcut icon" href="RadioLogo.ico" type="image/x-icon" />

	<style>
		*{
            margin: 0;
            padding: 0;
        }
        body{
            background-image: url("RadioWebb.jpg");
            background-size: cover;
        }
        #ola{
  		  background-color: #ffffff;
  		  width: 800px;
   		  margin-left: auto;
    	  margin-right: auto;
    	  padding: 20px 30px;
   		  margin-top: 10vh;
   		  border-radius: 10px;
          text-align: center;
        }
        table{
            border: outset;
        }
        td{
			padding: 0.2em 0.2em 0.5em;
            border: 1px solid #1a6f7e;
        }
	</style>
</head>

<div id="ola">
<table>
<tr>
	<th>Data</th>
	<th>Nome</th>
	<th>Email</th>
	<th>telefone</th>
    <th>Menssagem</th>
</tr>

</div>
<?php
while($resultado = $consulta->fetch_assoc()) {
 ?>
<tr>
	<td><?php echo $resultado['comu_data'] ?></td>
	<td><?php echo $resultado['comu_nome'] ?></td>
	<td><?php echo $resultado['comu_email'] ?></td>
    <td><?php echo $resultado['comu_tell'] ?></td>
	<td><?php echo $resultado['comu_menssagem'] ?></td>
	<td><a href="?excluir=<?php echo $resultado['comu_codigo'] ?>">excluir</a></td>
</tr>
<?php } ?>
<a href="login.php">Voltar</a>

</html>
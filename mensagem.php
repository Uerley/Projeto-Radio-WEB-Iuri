<?php
if(isset($_POST['name'])) {
    extract($_POST);
    $consulta = $conexao->query("insert into tb_comunicacao (comu_nome,comu_email,comu_tell,comu_menssagem) values ('$name
        ','$email','$tell','$mensagem')");
}
?>
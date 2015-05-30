<?php

include("../classe/Conexao.php");
require_once("../classe/validacao.php");

$con = new Conexao();
$val = new validacao();

$codigo = $_POST['codigo'];
$estado = trim($_POST['estado']);
$sigla  = trim($_POST['sigla']);

echo $val->validarCampo('Estado', $estado, '100', '3');
echo $val->validarCampo('Sigla', $sigla, '2', '2');

if($con){

    if( $val->verifica() && $codigo === ''){
        $gravar = $con->Executar("insert into `estado` (`estado`,`sigla`) values('$estado', '$sigla')");
        echo"1";
    }else if($val->verifica() && $codigo !== ''){
        $alterar = $con->Executar("update estado set estado='$estado', sigla='$sigla' where id_estado = {$codigo} ");
        echo"2";
    }

}
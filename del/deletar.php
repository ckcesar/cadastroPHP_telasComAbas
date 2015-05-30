<?php

include('../classe/Conexao.php');

$con = new Conexao();

if($con){

    $deletar = $con->Executar("delete from estado where id_estado = {$_POST['codigo']}");
    if($deletar){
        echo"1";
    }

}
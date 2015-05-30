<?php

include("../classe/Conexao.php");

$con = new Conexao();

if($_GET['op'] === '0'){
    $sql = "select * from estado";
}else if($_GET['op'] === '1'){
    $sql = "select * from estado where id_estado = " .(int)$_GET['pesquisar'];
}else if($_GET['op'] === '2'){
    $sql = "select * from estado where estado like '%" . $_GET['pesquisar'] . "%'";
}

$listagem = $con->listar($sql);

$mostrar = '<table class="tabela_lista" >';
$mostrar .= '<tr class="tr_th_lista">';
$mostrar .= '<th>Código</th>';
$mostrar .= '<th>Estado</th>';
$mostrar .= '<th>Sigla</th>';
$mostrar .= '<th colspan="2" >Ação</th>';
$mostrar .= '</tr>';
foreach($listagem as $itens){
    $mostrar .= '<tr class="tr_lista"><td>'.$itens->id_estado.'</td><td>'.$itens->estado.'</td><td>'.$itens->sigla.'</td> <td class="td_alterar"><a onclick="alterar_estado('.$itens->id_estado.' ,\''.$itens->estado.'\', \''.$itens->sigla.'\');">Alterar</a></td><td class="td_excluir"><a onclick="excluir('.$itens->id_estado.');" >Excluir</td> </tr>';
}
$mostrar .= '</table>';

if($listagem[0]->id_estado){
    echo $mostrar;
}else{
    echo"<h2>Não há dados!</h2>";
}
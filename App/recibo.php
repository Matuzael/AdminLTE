<?php

require_once '../vendor/autoload.php';
$idVenda = $_GET['id'];

$VendaDao = new \App\Model\VendaDao();
$venda = $VendaDao->readOne($idVenda);


$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML(
    '<h1 style="text-align:center;">RECIBO</h1>
    <br>
    <p> <strong> Cliente: </strong>'. $venda[0]['cliente'].'<p/>
    <p> <strong> Produto: </strong>'. $venda[0]['produto'].'<p/>
    <p> <strong> Quantidade: </strong>'. $venda[0]['quantidade'].' unidades<p/>
    <p> <strong> Valor: </strong> R$'. $venda[0]['valor'].'<p/>
    <p> <strong> Data: </strong>'. $venda[0]['data'].'<p/>
     ');
$mpdf->Output();
?>*/
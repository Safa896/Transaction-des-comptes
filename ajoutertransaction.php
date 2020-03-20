<?php
require "model/transactionorm.php";
$id = $_POST['id'];
$montant = $_POST['montant'];

if(isset($id)&&isset($montant)) {
    $date=date("a-m-j");
    $v = new transaction(NULL,$date,$montant,"Depot",$id);
    $vr = new transactionorm();
    $vr->save($v);
}
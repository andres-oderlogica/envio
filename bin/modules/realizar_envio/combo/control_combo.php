<?php
include '../../../../core.php';
include 'class_combo.php';
$com = new comboCliente();
$rst=$com->getTipo();
  if($rst==null)
      {
        $res=json_encode(0);     
      }
    else
      {
        $res=json_encode($rst);     
      }   
        echo $res;

?>
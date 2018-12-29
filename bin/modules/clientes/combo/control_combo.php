<?php
include '../../../../core.php';
include 'class_combo.php';
$com = new comboCliente();



switch ($_GET['opcion']) {
  case '1':
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
                  // var_dump($res);
    break;

     case '2':
    $rst=$com->getBanco();
           if($rst==null)
              {
              $res=json_encode(0);     
              }
                else
                {
                 $res=json_encode($rst);     
                }   
                   echo $res;
                  // var_dump($res);
    break;
  
  default:
    # code...
    break;
}

	?>
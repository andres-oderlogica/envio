<?php
include '../../../../core.php';
include_once Config::$home_bin.Config::$ds.'db'.Config::$ds.'active_table.php'; 
 class Configuracion extends ADOdb_Active_Record{}
class editarConfig
{

public function editar($tasa_dia,$nombre_empresa,$nit,$telefono,$correo)
    {

        $reg              = new Configuracion('tbl_config');
        $reg->load("id_config = 1");
        $reg->tasa_dia = $tasa_dia;
        $reg->nombre_empresa = $nombre_empresa;
        $reg->nit = $nit;
        $reg->telefono = $telefono;        
        $reg->correo = $correo;                 
        $reg->Save();
     
    }



  public function buscar()
  {
    $db = App::$base;
        $sql = "SELECT 
                *
              FROM
                tbl_config
               WHERE `id_config`= 1";
    $rs = $db->dosql($sql, array());

    while (!$rs->EOF) 
                   {

                    $res = array( 
                      "id_config"  => $rs->fields['id_config'],
                      "tasa_dia"  => $rs->fields['tasa_dia'],
                      "nombre_empresa"=> $rs->fields['nombre_empresa'],
                      "nit" => $rs->fields['nit'],
                      "telefono" => $rs->fields['telefono'],
                      "correo" => $rs->fields['correo']
                      );

                    $rs->MoveNext();      
                   } 
                   return $res;

  }

}

?>
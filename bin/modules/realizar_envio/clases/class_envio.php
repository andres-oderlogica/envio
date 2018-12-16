<?php
include '../../../../core.php';
include_once Config::$home_bin.Config::$ds.'db'.Config::$ds.'active_table.php'; 
 class Factura extends ADOdb_Active_Record{}
class regEnvio
{

public function reg_factura($cliente_rem,$cliente_ben,$descripcion,$total_pesos,$total_bss)  
     
    {
        date_default_timezone_set('America/Bogota');
        $fecha = date('Y-m-d');
        $hora =  date ("h:i:s");  
        $currentDateTime=date('m/d/Y H:i:s');
        $newDateTime = date('h:i A', strtotime($currentDateTime));
       // echo $newDateTime;      
        $reg              = new Factura('tbl_factura');
        $reg->id_cliente_rem   =$cliente_rem;         
        $reg->id_cliente_ben = $cliente_ben;
        $reg->fecha   =$fecha;         
        $reg->hora = $newDateTime;
        $reg->descripcion = $descripcion;
        $reg->total_pesos = $total_pesos;
        $reg->total_bfs = $total_bss; 
        $reg->Save();
         //var_dump($reg);
        //return $reg->id_estudiante;
    }


public function listCliente()
{
	$con = App::$base;
    $sql = "SELECT 
            `tbl_cliente`.`id_cliente`,
            `tbl_tipo_documento`.`descripcion` as tipo,
            `tbl_cliente`.`identificacion`,
             CONCAT(`tbl_cliente`.`nombres`,' ',
            `tbl_cliente`.`apellidos`) AS completo,
            `tbl_cliente`.`direccion`,
            `tbl_cliente`.`telefono`,
            `tbl_cliente`.`correo`,
            `tbl_banco`.`descripcion` as banco,
            `tbl_cliente`.`numero_cuenta`,                   
               \"
              <button type=\'button\' class=\'btn btn-primary btn-sm btn_edit\' data-title=\'Edit\' data-toggle=\'modal\' data-target=\'#myModal\' >
               <span class=\'glyphicon glyphicon-pencil\'></span></button>
               </div>
                \" 
               as editar,
               \"
              <button type=\'button\' class=\'btn btn-danger btn-sm btn_delete\' data-title=\'Edit\'>
               <span class=\'glyphicon glyphicon-trash\'></span></button>
               </div>
                \"
                 as borrar                    
            FROM
              `tbl_banco`
              INNER JOIN `tbl_cliente` ON (`tbl_banco`.`id_banco` = `tbl_cliente`.`id_banco`)
              INNER JOIN `tbl_tipo_documento` ON (`tbl_cliente`.`id_tipo` = `tbl_tipo_documento`.`id_tipo`)
            ";

		$rs = $con->dosql($sql, array());
        $tabla = '<table id="myTable" class="table table-hover table-striped table-bordered table-condensed" cellpadding="0" cellspacing="0" border="1" class="display" >
                        <thead>
                        <tr>
                        <th id="yw9_c0">#</th>
                        <th id="yw9_c1">Tipo Doc</th>
                        <th id="yw9_c2">Identificacion</th>
                        <th id="yw9_c6">Nombre Completo</th>
                        <th id="yw9_c6">Direccion</th>
                        <th id="yw9_c6">Telefono</th>
                        <th id="yw9_c6">Correo</th>
                        <th id="yw9_c7">Editar</th>
                        <th id="yw9_c8">Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>';
		          while (!$rs->EOF) 
                   {
                    if ($rs->fields['id_estado']==1){
                          $label_class='label-success';}
                      if($rs->fields['id_estado']==2){
                          $text_estado="En Tramite";
                          $label_class='label-warning';}
                      
                   	$tabla.='<tr >  
                            <td>                            
                                '.utf8_encode($rs->fields['id_cliente']).'
                            </td>
                            <td>                            
                                '.utf8_encode($rs->fields['tipo']).'
                            </td>
                            <td>                            
                                '.utf8_encode($rs->fields['identificacion']).'
                            </td>
                            <td>                            
                                '.utf8_encode($rs->fields['completo']).'
                            </td>
                            <td>                            
                              '.utf8_encode($rs->fields['direccion']).'   
                            </td>
                            <td>                            
                              '.utf8_encode($rs->fields['telefono']).'   
                            </td>
                            <td>                            
                              '.utf8_encode($rs->fields['correo']).'   
                            </td>
                             
                                                    
                            <td align="center" width= "30" onclick="editar('.$rs->fields['id_cliente'].')">                            
                                '.utf8_encode($rs->fields['editar']).'
                            </td>

                            <td align="center" width= "30" onclick="eliminar('.$rs->fields['id_cliente'].')">                            
                                '.utf8_encode($rs->fields['borrar']).'
                            </td>' ;                                                                               
                            
            $tabla.= '</tr>';                                     
	
	               $rs->MoveNext();	    
                   }  
            
        $tabla.="</tbody></table>";
        return $tabla;

}


public function listEnvioModal()
{
  $con = App::$base;
    $sql = "SELECT 
            `tbl_cliente`.`id_cliente`,            
            `tbl_cliente`.`identificacion`,
             CONCAT(`tbl_cliente`.`nombres`,' ',
            `tbl_cliente`.`apellidos`) AS completo,           
            `tbl_banco`.`descripcion` as banco,
            `tbl_cliente`.`numero_cuenta`,             
               \"
              <button type=\'button\' class=\'btn btn-success btn-sm btn_delete\' data-title=\'Edit\'>
               <span class=\'glyphicon glyphicon-hand-right\'></span></button>
               </div>
                \"
                 as ir                    
            FROM
              `tbl_banco`
              INNER JOIN `tbl_cliente` ON (`tbl_banco`.`id_banco` = `tbl_cliente`.`id_banco`)
              INNER JOIN `tbl_tipo_documento` ON (`tbl_cliente`.`id_tipo` = `tbl_tipo_documento`.`id_tipo`)
            ";

    $rs = $con->dosql($sql, array());
        $tabla = '<table id="myTable" class="table table-hover table-striped table-bordered table-condensed" cellpadding="0" cellspacing="0" border="1" class="display" >
                        <thead>
                        <tr>
                        <th id="yw9_c0">#</th>
                        <th id="yw9_c2">Identificacion</th>
                        <th id="yw9_c6">Nombre Completo</th>
                        <th id="yw9_c8">Elegir</th>
                        </tr>
                        </thead>
                        <tbody>';
              while (!$rs->EOF) 
                   {
                                          
                    $tabla.='<tr >  
                            <td>                            
                                '.utf8_encode($rs->fields['id_cliente']).'
                            </td>
                            
                            <td>                            
                                '.utf8_encode($rs->fields['identificacion']).'
                            </td>
                            <td>                            
                                '.utf8_encode($rs->fields['completo']).'
                            </td>                     
                            <td align="center" width= "30" onclick="llenar_campos('.$rs->fields['id_cliente'].')">                            
                                '.utf8_encode($rs->fields['ir']).'
                            </td>' ;                                                                               
                            
            $tabla.= '</tr>';                                     
  
                 $rs->MoveNext();     
                   }  
            
        $tabla.="</tbody></table>";
        return $tabla;

}

public function listEnvioBeneficiario()
{
  $con = App::$base;
    $sql = "SELECT 
            `tbl_cliente`.`id_cliente`,            
            `tbl_cliente`.`identificacion`,
             CONCAT(`tbl_cliente`.`nombres`,' ',
            `tbl_cliente`.`apellidos`) AS completo,           
            `tbl_banco`.`descripcion` as banco,
            `tbl_cliente`.`numero_cuenta`,             
               \"
              <button type=\'button\' class=\'btn btn-success btn-sm btn_pencil\' data-title=\'Edit\'>
               <span class=\'glyphicon glyphicon-hand-right\'></span></button>
               </div>
                \"
                 as ir                    
            FROM
              `tbl_banco`
              INNER JOIN `tbl_cliente` ON (`tbl_banco`.`id_banco` = `tbl_cliente`.`id_banco`)
              INNER JOIN `tbl_tipo_documento` ON (`tbl_cliente`.`id_tipo` = `tbl_tipo_documento`.`id_tipo`)
            ";

    $rs = $con->dosql($sql, array());
        $tabla = '<table id="myTableben" class="table table-hover table-striped table-bordered table-condensed" cellpadding="0" cellspacing="0" border="1" class="display" >
                        <thead>
                        <tr>
                        <th id="yw9_c0">#</th>
                        <th id="yw9_c2">Identificacion</th>
                        <th id="yw9_c6">Nombre Completo</th>
                        <th id="yw9_c8">Elegir</th>
                        </tr>
                        </thead>
                        <tbody>';
              while (!$rs->EOF) 
                   {
                                          
                    $tabla.='<tr >  
                            <td>                            
                                '.utf8_encode($rs->fields['id_cliente']).'
                            </td>
                            
                            <td>                            
                                '.utf8_encode($rs->fields['identificacion']).'
                            </td>
                            <td>                            
                                '.utf8_encode($rs->fields['completo']).'
                            </td>                     
                            <td align="center" width= "30" onclick="llenar_campos_beneficiario('.$rs->fields['id_cliente'].')">                            
                                '.utf8_encode($rs->fields['ir']).'
                            </td>' ;                                                                               
                            
            $tabla.= '</tr>';                                     
  
                 $rs->MoveNext();     
                   }  
            
        $tabla.="</tbody></table>";
        return $tabla;

}

public function eliminar($id)
{
    $reg              = new Cliente('tbl_cliente');
    $reg->load("id_cliente = {$id}");
    $reg->Delete();
}



  public function editar($id,$identificacion,$nombres,$apellidos,$direccion,$telefono,$correo,$banco, $cuenta)
    {

        $reg              = new Cliente('tbl_cliente');
        $reg->load("id_cliente = {$id}");
       // $reg->id_tipo   =$tipo;               
        $reg->identificacion = $identificacion;
        $reg->nombres = $nombres;
        $reg->apellidos = $apellidos;
        $reg->direccion = $direccion;
        $reg->telefono      = $telefono;
        $reg->correo = $correo;   
        $reg->id_banco = $banco;             
        $reg->numero_cuenta = $cuenta;         
        $reg->Save();
      

        //
        //return $reg->id_estudiante;
    }

     public function editar1($id,$identificacion,$nombres,$apellidos,$direccion,$telefono,$correo, $cuenta)
    {
//var_dump($cuenta);
        $reg              = new Cliente('tbl_cliente');
        $reg->load("id_cliente = {$id}");           
        $reg->identificacion = $identificacion;
        $reg->nombres = $nombres;
        $reg->apellidos = $apellidos;
        $reg->direccion = $direccion;
        $reg->telefono      = $telefono;
        $reg->correo = $correo;                     
        $reg->numero_cuenta = $cuenta;         
        $reg->Save();
      
//var_dump($reg);
        //
        //return $reg->id_estudiante;
    }


  public function buscar($id)
  {
    $db = App::$base;
        $sql = "SELECT 
                `tbl_cliente`.`id_cliente`,
                `tbl_cliente`.`identificacion`,
                CONCAT(`tbl_cliente`.`nombres`,' ',
                `tbl_cliente`.`apellidos`) as nombre_completo,
                `tbl_cliente`.`direccion`,
                `tbl_cliente`.`telefono`,
                `tbl_cliente`.`correo`,
                `tbl_cliente`.`id_banco`,
                `tbl_cliente`.`numero_cuenta`,
                `tbl_banco`.`descripcion`
              FROM
                `tbl_banco`
                INNER JOIN `tbl_cliente` ON (`tbl_banco`.`id_banco` = `tbl_cliente`.`id_banco`)
               WHERE `id_cliente`= ?";
    $rs = $db->dosql($sql, array($id));

    while (!$rs->EOF) 
                   {

                    $res = array( 
                      "id_cliente"  => $id,//$rs->fields['id_estudiante'],
                      "identificacion"  => $rs->fields['identificacion'],
                      "nombre"      => $rs->fields['nombre_completo'],
                      "apellidos" => $rs->fields['apellidos'],
                      "direccion"  =>$rs->fields['direccion'],
                      "telefono" => $rs->fields['telefono'],
                      "correo" => $rs->fields['correo'],
                      "numero_cuenta" => $rs->fields['numero_cuenta'],
                      "descripcion" => $rs->fields['descripcion']
                      );

                    $rs->MoveNext();      
                   } 
                   return $res;

  }

}

?>
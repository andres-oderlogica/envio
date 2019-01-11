<?php
session_start();
include '../../../../core.php';
include_once Config::$home_bin.Config::$ds.'db'.Config::$ds.'active_table.php'; 
 class Factura extends ADOdb_Active_Record{}
class regEnvio
{

public function reg_factura($cliente_rem,$cliente_ben,$descripcion,$total_pesos,$total_bss,$total_bfs_manual, $id_pais_beneficiario)  
     
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
        $reg->total_bfs_manual = $total_bfs_manual;  
        $reg->id_usuario = $_SESSION['user_id'];
        $reg->id_estado = 3; 
        $reg->id_pais_beneficiario = $id_pais_beneficiario;
        $reg->Save();
         //var_dump($reg);
        //return $reg->id_estudiante;
    }


public function listEnvio()
{
	$con = App::$base;
    $sql = "SELECT 
            `tbl_factura`.`id_factura`,
            `tbl_factura`.`fecha`,
            `tbl_factura`.`hora`,
            `tbl_factura`.`id_estado`,
            CONCAT('$ ',`tbl_factura`.`total_pesos`) as total,
            `tbl_sucursal`.`nombre_sucursal`,
            `tbl_sucursal`.`id_pais`,
            `tbl_factura`.`id_cliente_rem`,
            CONCAT(`tbl_cliente`.`nombres`,' ',
            `tbl_cliente`.`apellidos`) as remitente,
            `tbl_sucursal`.`pais`,                   
               \"
              <button type=\'button\' class=\'btn btn-primary btn-sm btn_edit\' data-title=\'Edit\'>
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
                  `tbl_factura`
                  INNER JOIN `users` ON (`users`.`user_id` = `tbl_factura`.`id_usuario`)
                  INNER JOIN `tbl_usuarioxsucursal` ON (`users`.`user_id` = `tbl_usuarioxsucursal`.`id_user`)
                  INNER JOIN `tbl_sucursal` ON (`tbl_usuarioxsucursal`.`id_sucursal` = `tbl_sucursal`.`id_sucursal`)
                  INNER JOIN `tbl_cliente` ON (`tbl_factura`.`id_cliente_rem` = `tbl_cliente`.`id_cliente`)
            ";

		$rs = $con->dosql($sql, array());
        $tabla = '<table id="myTable3" class="table table-hover table-striped table-bordered table-condensed" cellpadding="0" cellspacing="0" border="1" class="display" >
                        <thead>
                        <tr>
                        <th id="yw9_c0">#</th>
                        <th id="yw9_c1">Fecha</th>
                        <th id="yw9_c2">Hora</th>
                        <th id="yw9_c6">Sucursal</th>
                        <th id="yw9_c6">Pais</th>
                        <th id="yw9_c6">Remitente</th>
                        <th id="yw9_c6">Total Envio</th>
                        <th id="yw9_c6">Estado Envio</th>
                        <th id="yw9_c7">Editar</th>
                       
                        </tr>
                        </thead>
                        <tbody>';
		          while (!$rs->EOF) 
                   {
                    if ($rs->fields['id_estado']==3){
                      $text_estado="En Proceso";
                          $label_class='label-info';}
                      if($rs->fields['id_estado']==4){
                          $text_estado="Enviado";
                        $label_class='label-success';}
                      
                   	$tabla.='<tr >  
                            <td>                            
                                '.utf8_encode($rs->fields['id_factura']).'
                            </td>
                            <td>                            
                                '.utf8_encode($rs->fields['fecha']).'
                            </td>
                            <td>                            
                                '.utf8_encode($rs->fields['hora']).'
                            </td>
                            <td>                            
                                '.utf8_encode($rs->fields['nombre_sucursal']).'
                            </td>
                            <td>                            
                              '.utf8_encode($rs->fields['pais']).'   
                            </td>
                            <td>                            
                              '.utf8_encode($rs->fields['remitente']).'   
                            </td>
                            <td>                            
                              '.utf8_encode($rs->fields['total']).'   
                            </td>
                            <td align= "center">                            
                              <span class="label '.$label_class.'">'.$text_estado.'</span>   
                            </td>                             
                                                    
                            <td align="center" width= "30" onclick="editar('.$rs->fields['id_factura'].')">                            
                                '.utf8_encode($rs->fields['editar']).'
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

public function consultaTasa(){

$con = App::$base;
    $sql = "SELECT tasa_dia from tbl_config where id_config = 1";
    $rs = $con->dosql($sql, array());
    return $rs->fields['tasa_dia'];

}

public function eliminar($id)
{
    $reg              = new Cliente('tbl_cliente');
    $reg->load("id_cliente = {$id}");
    $reg->Delete();
}


public function editarEstadoEnvio($id)
{
    $reg              = new Factura('tbl_factura');
    $reg->load("id_factura = {$id}");
    $reg->id_estado = 4;
    $reg->Save();
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
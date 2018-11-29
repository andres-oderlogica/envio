<?php
include '../../../../core.php';
include_once Config::$home_bin.Config::$ds.'db'.Config::$ds.'active_table.php'; 
 class Cliente extends ADOdb_Active_Record{}
class regCliente
{

public function reg_cliente($tipo,$identificacion,$nombres,$apellidos,$direccion,$telefono,$correo, $banco, $cuenta)  
     
    {
       
        $reg              = new Cliente('tbl_cliente');
        $reg->id_tipo   =$tipo;         
        $reg->identificacion = $identificacion;
        $reg->nombres = $nombres;
        $reg->apellidos = $apellidos;
        $reg->direccion = $direccion; 
        $reg->telefono      = $telefono;
        $reg->correo = $correo;  
        $reg->id_banco = $banco;
        $reg->numero_cuenta = $cuenta;         
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

public function eliminar($id)
{
    $reg              = new Sucursal('tbl_sucursal');
    $reg->load("id_sucursal = {$id}");
    $reg->Delete();
}



  public function editar($id,$nombre,$direccion,$telefono,$movil,$email,$pais,$ciudad,$estado)
    {

        $reg              = new Sucursal('tbl_sucursal');
        $reg->load("id_sucursal = {$id}");
        $reg->nombre_sucursal   =$nombre;        
        $reg->direccion = $direccion;
        $reg->telefono = $telefono;
        $reg->movil = $movil;
        $reg->email = $email;
        $reg->pais      = $pais;
        $reg->ciudad = $ciudad;
        if($estado == -1)
        {        
        $reg->Save();
        }
        else
        {
       // var_dump($reg);
        $reg->id_estado = $estado; 
        $reg->Save();}
        //return $reg->id_estudiante;
    }


  public function buscar($id)
  {
    $db = App::$base;
        $sql = "SELECT 
                *
              FROM
                tbl_sucursal
               WHERE `id_sucursal`= ?";
    $rs = $db->dosql($sql, array($id));

    while (!$rs->EOF) 
                   {

                    $res = array( 
                      "id_sucursal"  => $id,//$rs->fields['id_estudiante'],
                      "nombre_sucursal"  => $rs->fields['nombre_sucursal'],
                      "pais"      => $rs->fields['pais'],
                      "ciudad" => $rs->fields['ciudad'],
                      "direccion"  =>$rs->fields['direccion'],
                      "telefono" => $rs->fields['telefono'],
                      "movil" => $rs->fields['movil'],
                      "email" => $rs->fields['email']
                      );

                    $rs->MoveNext();      
                   } 
                   return $res;

  }

}

?>
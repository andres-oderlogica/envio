<?php
include '../../../../core.php';
include_once Config::$home_bin.Config::$ds.'db'.Config::$ds.'active_table.php'; 
 class Usuarioxsucursal extends ADOdb_Active_Record{}
class regAsignar
{

public function reg_usuarioxsucursal($user,$sucursal,$inicio,$fin)  
     
    {
      //var_dump($codigo,$identificacion,$primer_apellido,$segundo_apellido,$primer_nombre,$segundo_nombre,$direccion,$telefono,$email,$discapacidad,$fecha_nacimiento);
       
        $reg              = new Usuarioxsucursal('tbl_usuarioxsucursal');
        $reg->id_user   =$user;         
        $reg->id_sucursal = $sucursal;
        $reg->fecha_inicio = $inicio;
        $reg->fecha_fin = $fin;
        $reg->estado = 1;         
        $reg->Save();
         //var_dump($reg);
        //return $reg->id_estudiante;
    }


public function listAsignar()
{
	$con = App::$base;
    $sql = "SELECT 
                `tbl_usuarioxsucursal`.`id_usuarioxsucursal`,
                `tbl_sucursal`.`nombre_sucursal`,
                `tbl_sucursal`.`ciudad`,
                 CONCAT(`users`.`firstname`, ' ', `users`.`lastname`) AS `nombre`,
                `estado`.`descripcion`,
                `tbl_usuarioxsucursal`.`estado`,                   
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
              `users`
              INNER JOIN `tbl_usuarioxsucursal` ON (`users`.`user_id` = `tbl_usuarioxsucursal`.`id_user`)
              INNER JOIN `tbl_sucursal` ON (`tbl_usuarioxsucursal`.`id_sucursal` = `tbl_sucursal`.`id_sucursal`)
              INNER JOIN `estado` ON (`tbl_usuarioxsucursal`.`estado` = `estado`.`id_estado`)
            ";

		$rs = $con->dosql($sql, array());
        $tabla = '<table id="myTable" class="table table-hover table-striped table-bordered table-condensed" cellpadding="0" cellspacing="0" border="1" class="display" >
                        <thead>
                        <tr>
                        <th id="yw9_c0">#</th>
                        <th id="yw9_c1">Nombre Sucursal</th>
                        <th id="yw9_c2">Encargado</th>
                        <th id="yw9_c6">Ciudad</th>
                        <th id="yw9_c6">Estado</th>
                        <th id="yw9_c7">Cambiar Estado</th>
                        
                        </tr>
                        </thead>
                        <tbody>';
		          while (!$rs->EOF) 
                   {
                    if ($rs->fields['estado']==1){
                          $label_class='label-success';}
                      if($rs->fields['estado']==2){
                          $text_estado="En Tramite";
                          $label_class='label-warning';}
                      
                   	$tabla.='<tr >  
                            <td>                            
                                '.utf8_encode($rs->fields['id_usuarioxsucursal']).'
                            </td>
                            <td>                            
                                '.utf8_encode($rs->fields['nombre_sucursal']).'
                            </td>
                            <td>                            
                                '.utf8_encode($rs->fields['nombre']).'
                            </td>
                            <td>                            
                                '.utf8_encode($rs->fields['ciudad']).'
                            </td>
                            <td align= "center">                            
                              <span class="label '.$label_class.'">'.utf8_encode($rs->fields['descripcion']).'</span>   
                            </td>
                             
                                                    
                            <td align="center" width= "50" onclick="editar('.$rs->fields['id_usuarioxsucursal'].')">                            
                                '.utf8_encode($rs->fields['editar']).'
                            </td>

                            ' ;                                                                               
                            
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



  public function editar($id,$motivo,$estado)
    {

        $reg              = new Usuarioxsucursal('tbl_usuarioxsucursal');
        $reg->load("id_usuarioxsucursal = {$id}");
        $reg->motivo_inactivacion   =$motivo;        
        if($estado == -1)
        {        
        $reg->Save();
        }
        else
        {
       // var_dump($reg);
        $reg->estado = $estado; 
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
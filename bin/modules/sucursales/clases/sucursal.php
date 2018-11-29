<?php
include '../../../../core.php';
include_once Config::$home_bin.Config::$ds.'db'.Config::$ds.'active_table.php'; 
 class Sucursal extends ADOdb_Active_Record{}
class regSucursal
{

public function reg_sucursal($nombre,$pais,$ciudad,$direccion,$telefono,$movil,$email)  
     
    {
      //var_dump($codigo,$identificacion,$primer_apellido,$segundo_apellido,$primer_nombre,$segundo_nombre,$direccion,$telefono,$email,$discapacidad,$fecha_nacimiento);
       
        $reg              = new Sucursal('tbl_sucursal');
        $reg->nombre_sucursal   =$nombre;         
        $reg->direccion = $direccion;
        $reg->telefono = $telefono;
        $reg->movil = $movil;
        $reg->email = $email; 
        $reg->pais      = $pais;
        $reg->ciudad = $ciudad;  
        $reg->id_estado = 1;         
        $reg->Save();
         //var_dump($reg);
        //return $reg->id_estudiante;
    }


public function listSucursal()
{
	$con = App::$base;
    $sql = "SELECT 
              `tbl_sucursal`.`id_sucursal`,
              `tbl_sucursal`.`nombre_sucursal`,
              `tbl_sucursal`.`direccion`,
              `tbl_sucursal`.`telefono`,
              `tbl_sucursal`.`movil`,
              `tbl_sucursal`.`email`,
              `tbl_sucursal`.`pais`,
              `tbl_sucursal`.`ciudad`,
              `tbl_sucursal`.`id_estado`,
              `tbl_sucursal`.`id_pais`,
              `tbl_sucursal`.`id_ciudad`,
              `estado`.`descripcion`,                   
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
              `tbl_sucursal`
              INNER JOIN `estado` ON (`tbl_sucursal`.`id_estado` = `estado`.`id_estado`)
            ";

		$rs = $con->dosql($sql, array());
        $tabla = '<table id="myTable" class="table table-hover table-striped table-bordered table-condensed" cellpadding="0" cellspacing="0" border="1" class="display" >
                        <thead>
                        <tr>
                        <th id="yw9_c0">#</th>
                        <th id="yw9_c1">Nombre Sucursal</th>
                        <th id="yw9_c2">Ciudad</th>
                        <th id="yw9_c6">Telefono</th>
                        <th id="yw9_c6">Estado</th>
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
                                '.utf8_encode($rs->fields['id_sucursal']).'
                            </td>
                            <td>                            
                                '.utf8_encode($rs->fields['nombre_sucursal']).'
                            </td>
                            <td>                            
                                '.utf8_encode($rs->fields['ciudad']).'
                            </td>
                            <td>                            
                                '.utf8_encode($rs->fields['telefono']).'
                            </td>
                            <td align= "center">                            
                              <span class="label '.$label_class.'">'.utf8_encode($rs->fields['descripcion']).'</span>   
                            </td>
                             
                                                    
                            <td align="center" width= "30" onclick="editar('.$rs->fields['id_sucursal'].')">                            
                                '.utf8_encode($rs->fields['editar']).'
                            </td>

                            <td align="center" width= "30" onclick="eliminar('.$rs->fields['id_sucursal'].')">                            
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
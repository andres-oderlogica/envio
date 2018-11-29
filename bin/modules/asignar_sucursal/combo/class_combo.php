<?php
include '../../../../core.php';
class comboSucursal
{
	

	function __construct()
	{      
      $this->db = App::$base; 
	}

	function getSucursal()
	{	  
       $sql="SELECT id_sucursal, nombre_sucursal
  			from tbl_sucursal
  			order by nombre_sucursal asc
  			 ";
		$rs = $this->db->dosql($sql, array()); 
        while (!$rs->EOF) 
           {
	         $data[] = array(
	         	'id_sucursal' => $rs->fields['id_sucursal'],
	         	'nombre_sucursal' => $rs->fields['nombre_sucursal']
	         	);	                             
	
	          $rs->MoveNext();	    
            }              
          
       return $data;
	}


	function getUser()
	{	

       $sql="SELECT user_id, CONCAT(firstname, ' ', lastname) as nombre
  			from users
  			order by nombre asc
  			 ";
		$rs = $this->db->dosql($sql, array()); 
        while (!$rs->EOF) 
           {
	         $data[] = array(
	         	'user_id' => $rs->fields['user_id'],
	         	'nombre' => $rs->fields['nombre']
	         	);	                             
	
	          $rs->MoveNext();	    
            }              
          
       return $data;
	}


	
	}

	?>
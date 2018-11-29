<?php
include '../../../../core.php';
class comboCiudad
{
	

	function __construct()
	{      
      $this->db = App::$base; 
	}

	function getDepartamento()
	{	  
       $sql="SELECT * 
  			from departamentos
  			order by descripcion asc
  			 ";
		$rs = $this->db->dosql($sql, array()); 
        while (!$rs->EOF) 
           {
	         $data[] = array(
	         	'id_departamentos' => $rs->fields['id_departamentos'],
	         	'descripcion' => $rs->fields['descripcion']
	         	);	                             
	
	          $rs->MoveNext();	    
            }              
          
       return $data;
	}


	function getCiudad($id)
	{	

       $sql="SELECT * 
  			from ciudad
  			where id_departaentos = ?
  			order by descripcion_ciudad asc
  			 ";
		$rs = $this->db->dosql($sql, array($id)); 
        while (!$rs->EOF) 
           {
	         $data[] = array(
	         	'id_ciudad' => $rs->fields['id_ciudad'],
	         	'descripcion_ciudad' => $rs->fields['descripcion_ciudad']
	         	);	                             
	
	          $rs->MoveNext();	    
            }              
          
       return $data;
	}


	
	}

	?>
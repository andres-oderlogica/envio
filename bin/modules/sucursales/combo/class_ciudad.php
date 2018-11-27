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
  			from paises
  			order by Pais asc
  			 ";
		$rs = $this->db->dosql($sql, array()); 
        while (!$rs->EOF) 
           {
	         $data[] = array(
	         	'Codigo' => $rs->fields['Codigo'],
	         	'Pais' => $rs->fields['Pais']
	         	);	                             
	
	          $rs->MoveNext();	    
            }              
          
       return $data;
	}


	function getCiudad($id)
	{	
	var_dump($id);  
       $sql="SELECT * 
  			from ciudades
  			where Paises_Codigo = ?
  			order by Ciudad asc
  			 ";
		$rs = $this->db->dosql($sql, array($id)); 
        while (!$rs->EOF) 
           {
	         $data[] = array(
	         	'idCiudades' => $rs->fields['idCiudades'],
	         	'Ciudad' => $rs->fields['Ciudad']
	         	);	                             
	
	          $rs->MoveNext();	    
            }              
          
       return $data;
	}


	
	}

	?>
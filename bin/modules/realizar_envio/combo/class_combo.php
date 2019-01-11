<?php
include '../../../../core.php';
class comboCliente
{
	

	function __construct()
	{      
      $this->db = App::$base; 
	}

	function getTipo()
	{	  
       $sql="SELECT * 
  			from paises
  			order by Pais asc
  			 ";
		$rs = $this->db->dosql($sql, array()); 
        while (!$rs->EOF) 
           {
	         $data[] = array(
	         	'id_pais' => $rs->fields['id_pais'],
	         	'pais' => $rs->fields['Pais']
	         	);	                             
	
	          $rs->MoveNext();	    
            }              
          
       return $data;
	}


	function getbanco()
	{	

       $sql="SELECT * 
  			from tbl_banco
  			order by descripcion asc
  			 ";
		$rs = $this->db->dosql($sql, array()); 
        while (!$rs->EOF) 
           {
	         $data[] = array(
	         	'id_banco' => $rs->fields['id_banco'],
	         	'descripcion' => $rs->fields['descripcion']
	         	);	                             
	
	          $rs->MoveNext();	    
            }              
          
       return $data;
	}


	
	}

	?>
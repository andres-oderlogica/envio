<?php
include '../../../../core.php';
include 'class_combo.php';
$com = new comboSucursal();

switch ($_GET['opcion']) {
  case '1':
    $rst=$com->getSucursal();
           if($rst==null)
              {
              $res=json_encode(0);     
              }
                else
                {
                 $res=json_encode($rst);     
                }   
                   echo $res;
                    break;
                    case '2':
                      $rst=$com->getUser();
                       if($rst==null)
                          {
                          $res=json_encode(0);     
                          }
                            else
                            {
                             $res=json_encode($rst);     
                            }   
                                  echo $res;
                            break;
                  
                  default:
                    # code...
                    break;
}

                  // var_dump($res);

/*$opcion= $_POST['opcion'];
$id= $_POST['id'];
       
$com = new comboCiudad();
  
	switch ($opcion) {
       case '1':
          $rst=$com->getDepartamento();
           if($rst==null)
              {
              $res=json_encode(0);     
              }
                else
                {
                 $res=json_encode($rst);     
                }   
                   echo $res;  
            break;

               case '2':
               //var_dump($id);
                    $rest=$com->getCiudad($id);

                       if($rest==null)
                          {
                          $result=json_encode(0);     
                          }
                        else
                        {
                         $result=json_encode($rest);     
                        }   
                      echo $result; 
                     // var_dump($result);
                 break;
       
       default:
         # code...
         break;
     }   */
       

	?>
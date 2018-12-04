

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header"> 
 
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar Cliente</h4>
<br>
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">   
     <div class="form-group ">
      <!--  <div class='col-md-6'>
         <label class="control-label " for="tipo">Tipo Documento</label>            
            <select class="form-control" id="id_tipo" name="id_tipo">
              <option value="-1">-Seleccione-</option>
            </select>
       </div>-->

        <div class='col-md-6'>
            <label class="control-label " for="nombre">Identificacion</label>      
               <input class="form-control" id="identificacion" name="identificacion" type="text"/>
        </div>

        <div class='col-md-6'>
           <label class="control-label " for="nombre">Nombres</label>      
               <input class="form-control" id="nombres" name="nombres" type="text"/>
        </div>
    
        <div class='col-md-6'>
            <label class="control-label " for="pais">Apellidos</label>      
              <input class="form-control" id="apellidos" name="apellidos" type="text" required/>
        </div>

        <div class='col-md-6'>
            <label class="control-label " for="direccion">Direccion</label>
               <input class="form-control" id="direccion" name="direccion" type="text"/>
        </div>
        
        <div class='col-md-6'>
           <label class="control-label " for="telefono">Telefono</label>
              <input class="form-control" id="telefono" name="telefono" type="text" required/>
        </div>
        
        <div class='col-md-6'> 
            <label class="control-label " for="email">Correo</label>      
                <input class="form-control" id="correo" name="correo" type="email"/>
        </div> 

        <div class='col-md-6'>  
           <label class="control-label " for="banco">Banco</label>  
              <select class="form-control" id="id_banco" name="id_banco">
                  <option value="-1">---Seleccione---</option>
              </select><br>
        </div>

        <div class='col-md-6'> 
            <label class="control-label " for="cuenta">No de Cuenta</label>      
                <input class="form-control" id="numero_cuenta" name="numero_cuenta" type="text"/><br>
        </div> 
            <input class="form-control" id="modal_id" name="id" type="hidden"/>
     
        <div class="modal-footer">
          <button class="btn btn-primary " id= "btn_save" name="save" type="submit">Guardar Cambios</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>


        </div>
      </div>
</div>

  </div>

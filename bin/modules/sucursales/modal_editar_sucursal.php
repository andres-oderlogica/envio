

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header"> 
 
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar Sucursal</h4>
<br>
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">   
     <div class="form-group ">
      <div class='col-md-6'>
      <label class="control-label " for="nombre">
      Nombre Sucursal
      </label>      
      <input class="form-control" id="modal_nombre" name="nombre_sucursal" type="text"/>
    </div>
    <div class='col-md-6'>
      <label class="control-label " for="pais">
       Pais
      </label>      
      <input class="form-control" id="modal_pais" name="pais" type="text" required/>
    </div>
     <div class='col-md-6'>
      <label class="control-label " for="ciudad">
       Ciudad
      </label>
      <input class="form-control" id="modal_ciudad" name="ciudad" type="text" required/>
    </div>
    <div class='col-md-6'>
       <label class="control-label " for="direccion">
       Direccion
      </label>
      <input class="form-control" id="modal_direccion" name="direccion" type="text"/>
    </div>
    <div class='col-md-6'>
       <label class="control-label " for="telefono">
       Telefono
      </label>
      <input class="form-control" id="modal_telefono" name="telefono" type="text" required/>
    </div>
    <div class='col-md-6'>
       <label class="control-label " for="celular">
       Celular
      </label>
      <input class="form-control" id="modal_movil" name="movil" type="text"/>
    </div>

    <div class='col-md-6'> 
      <label class="control-label " for="email">
       Correo
      </label>      
      <input class="form-control" id="modal_email" name="email" type="email"/>
     </div> 

     <div class='col-md-6'>  
     <label class="control-label " for="estado">
      Estado
    </label>  
      <select class="form-control" id="modal_estado" name="id_estado">
        <option value="-1">---Seleccione---</option>
        <option value="1">Activo</option>
        <option value="2">Inactivo</option>
      </select><br>
</div>
      <input class="form-control" id="modal_id" name="id" type="hidden"/>
     
        <div class="modal-footer">
          <button class="btn btn-primary " id= "btn_save" name="save" type="submit">Guardar Cambios</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>


        </div>
      </div>
</div>

  </div>

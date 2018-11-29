

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header"> 
 
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Desactivar</h4>
<br>
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">   
     <div class="form-group ">

       <div class='col-md-12'>  
          <label class="control-label " for="estado">
            Estado
          </label>  
              <select class="form-control" id="id_estado" name="id_estado">
                  <option value="-1">---Seleccione---</option>
                  <option value="1">Activo</option>
                  <option value="2">Inactivo</option>
              </select><br>
        </div>

        <div class='col-md-12'>
            <label class="control-label " for="nombre">
             Motivo Inactivacion
            </label>      
                <textarea rows="4" class="form-control" id="motivo" name="motivo"></textarea><br>
        </div>   
          <input class="form-control" id="modal_id" name="id" type="hidden"/>
     
        <div class="modal-footer">
          <button class="btn btn-primary " id= "btn_save" name="save" type="submit">Guardar Cambios</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
  </div>
</div>

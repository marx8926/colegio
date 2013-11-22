<?php $ruta = base_url();?>
<script src="<?php echo $ruta;?>recursos/js/Validacion.js"></script>
<div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">MANTENEDOR COLEGIO</div>
        </div>
        <div class="block-content collapse in">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#asignacion" data-toggle="tab">Colegio</a>
                </li>
                <li>
                    <a href="#horarios" data-toggle="tab">Periodo Evaluaci&oacute;n</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="asignacion" class="tab-pane active">
                    <form class="form-horizontal" id="frmColegio" name="frmColegio" action="#">
                        <fieldset>
                            <?php if(count($info_colegio)>0){?>
                                <div class="span6" style="margin-left:0;" >
                                    <div class="control-group">
                                        <label class="control-label" for="id_colegio">ID</label>
                                        <div class="controls">
                                            <input readonly="true" class="input-medium" id="id_colegio" name="id_colegio" value="<?php echo $info_colegio->id;?>" type="text">
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
        					<div class="span6" style="margin-left:0;">
                                <div class="control-group">
                                    <label class="control-label" for="nroRegistro">Nro Registro</label>
                                    <div class="controls">
                                        <input class="input-medium" id="nroRegistro" name="nroRegistro" value="<?php echo $info_colegio->NroRegistro;?>" type="text">
                                    </div>
                                </div>
                            </div>
        					
        					<div class="span6" style="margin-left:0;">
                                <div class="control-group">
                                    <label class="control-label" for="res_academica">Res. Acad&eacute;mica</label>
                                    <div class="controls">
                                        <input class="input-large" id="res_academica" name="res_academica" value="<?php echo $info_colegio->RsAcademico;?>" type="text">
                                    </div>
                                </div>
                            </div>
        				
                            <div class="span6" style="margin-left:0;">
                                <div class="control-group">
                                    <label class="control-label" for="nombre">Nombre</label>
                                    <div class="controls">
                                        <input class="input-xlarge" id="nombre" name="nombre" value="<?php echo $info_colegio->Nombre;?>" type="text">
                                    </div>
                                </div>
                            </div>
        					
        					<div class="span6" style="margin-left:0;">
                                <div class="control-group">
                                    <label class="control-label"for="direccion">Direcci&oacute;n</label>
                                    <div class="controls">
                                        <input class="input-xlarge" id="direccion" name="direccion" value="<?php echo $info_colegio->Direccion;?>"  type="text">                                                                                                      
                                    </div>
                                </div>
                            </div>
        					
        					 <div class="span6" style="margin-left:0;">
                                <div class="control-group">
                                    <label class="control-label"for="telefono">Tel&eacute;fono</label>
                                    <div class="controls">
                                        <input class="input-medium" id="telefono" name="telefono" value="<?php echo $info_colegio->Telefono;?>" type="text">                                                                                                      
                                    </div>
                                </div>
                            </div>
        								  
                            <div class="span6" style="margin-left:0;">
                                <div class="control-group">
                                    <label class="control-label"for="director">Director(a)</label>
                                    <div class="controls">                                                    
                                        <!--<input class="input-xlarge" id="director" name="director"  value="<?php echo $info_colegio->Director;?>" type="text" >-->     
                                        <input class="input-large" id="director" name="director" type="text">
                                    </div>
                                </div>
                            </div>
        					
        					 <div class="span6" style="margin-left:0;">
                                <div class="control-group">
                                    <label class="control-label"for="coordinador">Coordinador(a)</label>
                                    <div class="controls">                                                    
                                        <input class="input-xlarge" id="coordinador" name="coordinador" value="<?php echo $info_colegio->Coordinador;?>" type="text">     
                                    </div>
                                </div>
                            </div>

        					<div class="span6" style="margin-left:0;">
                                <div class="control-group">
                                    <label class="control-label"for="secretario">Secretario(a)</label>
                                    <div class="controls">                                                    
                                        <input class="input-xlarge" id="secretario" name="secretario" value="<?php echo $info_colegio->Secretario;?>" type="text">     
                                    </div>
                                </div>
                            </div>
        					
                            <div class="span6" style="margin-left:0;">
                                <div class="control-group">
                                    <label class="control-label"for="paginaweb">Fecha Creación</label>
                                    <div class="controls">                                                    
                                        <input type="text" class="span3 datepicker" id="fecCreacion" name="fecCreacion" value="<?php echo $info_colegio->FechaCreacion;?>">
                                    </div>
                                </div>
                            </div>


        					<div class="span12" style="margin-left:0;">
                                <div class="control-group">
                                    <label class="control-label"for="paginaweb">Pagina Web</label>
                                    <div class="controls">                                                    
                                        <input class="input-xlarge" id="paginaweb" name="paginaweb" value="<?php echo $info_colegio->PaginaWeb;?>" type="text">     
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                        
    				    <div class="modal-footer">
                            <?php if(count($info_colegio)>0){?>
                                <button data-dismiss="modal" class="btn btn-success" id="btnEditar_Colegio" name="btnEditar_Colegio">Actualizar</button>
                            <?php }else{?>
                                <button data-dismiss="modal" class="btn btn-primary" id="btnGuardar_Colegio" name="btnGuardar_Colegio">Registrar</button>
                                <a data-dismiss="modal" class="btn" id="btnCancelar_Colegio" name="btnCancelar_Colegio" href="#">Cancelar</a>
                            <?php } ?>
                        </div>
                    </form>
                </div>
				
                <div id="horarios" class="tab-pane">
                    <div class="form-horizontal">
					<fieldset>
					<div class="control-group">
                        <div class="control-group">
                            <label class="control-label" for="cbotipoPeriodoEvaluacion">Tipo Periodo Evaluaci&oacute;n</label>
                            <div class="controls">
                               <select id="cbotipoPeriodoEvaluacion" name="cbotipoPeriodoEvaluacion" class="input-large">
                                    <option value="1">Bimestral</option>
                                    <option value="2">Trimestral</option>                                                        
                                </select>
                            </div>
                        </div>
                    </div>
										
					<div class="span4" style="margin-left:0;">									
    					<div class="control-group">
                          <label class="control-label" for="fecInicio">Fecha Inicio</label>
                          <div class="controls">
                            <input type="text" class="input-small datepicker" id="fecInicio" name="fecInicio" value="">
                            <p class="help-block"></p>
                          </div>
                        </div>
					</div>
                    <div class="span4">
                        <div class="control-group">
                          <label class="control-label" for="fecFin">Fecha Fin</label>
                          <div class="controls">
                            <input type="text" class="input-small datepicker" id="fecFin" name="fecFin" value="">
                            <p class="help-block"></p>
                          </div>
                        </div>
                    </div>
                    <div class="span4" style="margin-left:0;">
                        <div class="control-group">
                          <div class="controls">
                            <button data-dismiss="modal" class="btn btn-primary" id="btnGuardar_Periodo" name="btnGuardar_Periodo">Agregar</button>
                          </div>
                        </div>
                    </div>
					
                    </fieldset>
                    </div>
                    <hr/>
                    <div class="block-content collapse in">
                        <?php if(count($periodo_evaluacion)>0){
                            echo $periodo_evaluacion;
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal hide" id="OK">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" onclick="javascript:window.location.reload();">×</button>
    <h3>Notificaci&oacute;n</h3>
  </div>
  <div class="modal-body">
    <p>Registro Exitosa</p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn btn-primary" data-dismiss="modal" onclick="javascript:window.location.reload();">Close</a>
  </div>
</div>

<div class="modal hide" id="NO">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3>Notificaci&oacute;n</h3>
  </div>
  <div class="modal-body">
    <p>Registro Fallido</p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
  </div>
</div>

<div class="modal hide" id="mensaje_error">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3>Notificaci&oacute;n</h3>
  </div>
  <div class="modal-body">
    <p>No se puede agregar Periodos de Evaluación, si no se ha registrado el colegio</p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
  </div>
</div>

<script>
    $(document).ready(function(){
        $("#tb_periodo").dataTable({
            "oLanguage": {
                "sLengthMenu": "_MENU_ filas por pagina"
            }
        });
        
        $("#btnGuardar_Colegio").click(function(e){
            e.preventDefault();
            $.ajax({
                url:'<?php echo $ruta;?>colegio/registrar',
                type: 'POST',
                data: $('#frmColegio').serialize(),
                success:function(msj){
                    if(msj == 'guardo'){
                        $("#OK").modal('show');
                    }else{
                        $("#NO").modal('show');
                    }
                }
            });
        });


        $("#btnEditar_Colegio").click(function(e){
            e.preventDefault();

            $.ajax({
                url:'<?php echo $ruta;?>colegio/editar',
                type: 'POST',
                data: $('#frmColegio').serialize(),
                success:function(msj){
                    if(msj == 'guardo'){
                        $("#OK").modal('show');
                    }else{
                        $("#NO").modal('show');
                    }
                }
            });
        });

        $("#btnGuardar_Periodo").click(function(e){
            var periodo = $('#cbotipoPeriodoEvaluacion').val();
            var fecInicio = $('#fecInicio').val();
            var fecFin = $('#fecFin').val();
            var colegio_id= $('#id_colegio').val();
            e.preventDefault();
            if (colegio_id==""){
                $("#mensaje_error").modal('show');
            }else{
                $.ajax({
                    url:'<?php echo $ruta;?>colegio/registrar_periodo',
                    type: 'POST',
                    data: "periodo="+periodo+"&fecInicio="+fecInicio+"&fecFin="+fecFin+"&id="+colegio_id,
                    success:function(msj){
                         if(msj == 'guardo'){
                            $("#OK").modal('show');
                        }else{
                            $("#NO").modal('show');
                        }
                    }
                });

            }
        });

    });

</script>
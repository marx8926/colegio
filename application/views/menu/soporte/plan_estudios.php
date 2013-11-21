<?php $ruta = base_url();?>
<div class="row-fluid">
<!-- block -->
<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Mantenedor Plan de Estudio</div>
    </div>
    <div class="block-content collapse in">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#asignacion" data-toggle="tab">Asignación</a>
            </li>
            <li>
                <a href="#Niveles" data-toggle="tab">Niveles</a>
            </li>
			<li>
                <a href="#Ciclo" data-toggle="tab">Ciclos</a>
            </li>
			<li>
                <a href="#Grado" data-toggle="tab">Grados</a>
            </li>
			<li>
                <a href="#Cursos" data-toggle="tab">Curso</a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="asignacion" class="tab-pane active">
                <div class="form-horizontal">
                    <fieldset>
                        <div class="span6">
                            <div class="control-group">
                                <label class="control-label" for="selectNivel_Asig">Nivel</label>
                                <div class="controls">
                                    <select id="selectNivel_Asig" class="input-xlarge" name="selectNivel_Asig" onchange="cargarCiclo_byNivel_Asig();" >
                                        <?php if(count($lista_nivel)>0):
												foreach ($lista_nivel as $ln) :
										?>
											<option value="<?php echo $ln->id; ?>" ><?php echo $ln->nombre; ?></option>
										<?php endforeach;
											   endif; 
										?>
                                    </select>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label" for="selectCiclo_Asig">Ciclo</label>
                                <div class="controls">
                                    <select id="selectCiclo_Asig" class="input-xlarge" name="selectCiclo_Asig" onchange="cargarGrados_byNivelCiclo_Id()" >
                                    </select>
                                </div>
                            </div>
                        </div>
						
                    												
                        <div class="span6" style="margin-left:-15%;">
                            <div class="control-group">
                                <label class="control-label" for="selectGrado_Asig">Grado</label>
                                <div class="controls">
                                    <select id="selectGrado_Asig" class="input-xlarge" name="selectGrado_Asig">
                                    </select>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label" for="selectCurso_Asig">Curso</label>
                                <div class="controls">
                                    <select id="selectCurso_Asig" class="input-xlarge" name="selectCurso_Asig">
                                    	<?php if(count($lista_curso)>0):
												foreach ($lista_curso as $lcu) :
										?>
											<option value="<?php echo $lcu->id ?>"><?php echo $lcu->nombre ?></option>
										<?php endforeach;
											   endif; 
										?>
                                    </select>
									<button class="btn" style="margin-left:10px;" name="btnBuscar" id="btnBuscar">Buscar</button>
									<button class="btn" style="margin-left:5px;" name="btnAgregar" id="btnAgregar">Agregar</button>
                                </div>
                            </div>
                                    
                        </div>
                    </fieldset>
                    <hr/>
						<!---Tabla-->
						<div class="span12" style="margin-left:0;">
							<div class="block-content collapse in">
								<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="tb_asignacion">
									<thead>
										<tr>
											<th>Nivel</th>
											<th>Ciclo</th>
											<th>Grado</th>
											<th>Cursos</th>
											<th>Acciones</th>
										</tr>
									</thead>
									<tbody>
									
										<?php if(count($lista_curso_grado)>0):
												foreach ($lista_curso_grado as $lcug) :
										?>
											<tr class="odd gradeX">
												<td><?php echo $lcug->nivel; ?></td>
												<td><?php echo $lcug->ciclo; ?></td>
												<td><?php echo $lcug->grado; ?></td>
												<td><?php echo $lcug->curso; ?></td>
												<td>
													<a href="#modalEditarAsignacion" data-toggle="modal" class="btn btn-success" name="btnEditar" id="btnEditar"><i></i>Editar</a>
												</td>
											</tr>
										<?php endforeach;
											   endif; 
										?>
									</tbody>
								</table>													
							</div>
						</div>
                </div>                                            
            </div>
            <!-- bloque Asignacion -->
            <div  id="Niveles" class="tab-pane">
				<div class="form-horizontal">
                    <fieldset>
                        <div class="span7">
							<div class="block-content collapse in">
								<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="tb_nivel">
									<thead>
										<tr>
											<th>Nivel</th>
											<th>Estado</th>
											<th>Acciones</th>
										</tr>
									</thead>
									<tbody>
										<?php if(count($lista_nivel)>0):
												foreach ($lista_nivel as $ln) :
										?>
										<tr class="odd gradeX">
											<td><?php echo $ln->nombre ?></td>
											<td><?php echo $ln->Estado ?></td>
												<td><a onclick="editarNivel(<?php echo $ln->id; ?>, '<?php echo $ln->nombre; ?>', <?php echo $ln->estadoint; ?>)" data-toggle="modal" class="btn btn-success" name="btnEditar" id="btnEditar"><i></i>Editar</a>
											</td>												
										</tr>
										<?php endforeach;
											   endif; 
										?>
									</tbody>
								</table>													
							</div>
						</div>																					
						<div class="span5" style="margin-left:0;">
							<h2 align="center">Registrar Nivel</h2>
							<hr/>
							<div class="control-group">
								<label class="control-label" for="nivel">Nivel</label>
								<div class="controls">
								   <input class="input-medium" id="nivel" name="nivel" type="text" >
								   <button class="btn" id="btnRegistrarNivel" name="btnRegistrarNivel" >Registrar</button>
								</div>
							</div>
						</div>
					</fieldset>											
                </div>                                            
            </div>
			<!-- bloque Nivel -->
			<div  id="Ciclo" class="tab-pane">
				<div class="form-horizontal">
                    <fieldset>
                        <div class="span7">
							<div class="block-content collapse in">
								<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="tb_ciclo">
									<thead>
										<tr>
											<th>Ciclo</th>
											<th>Estado</th>
											<th>Acciones</th>
										</tr>
									</thead>
									<tbody>
										<?php if(count($lista_ciclo)>0):
												foreach ($lista_ciclo as $lc) :
										?>
										<tr class="odd gradeX">
											<td><?php echo $lc->nombre ?></td>
											<td><?php echo $lc->Estado ?></td>
												<td><a onclick="editarCiclo(<?php echo $lc->id; ?>, '<?php echo $lc->nombre;?>', <?php echo $lc->estadoint;?>)" data-toggle="modal" class="btn btn-success" ><i></i>Editar</a>
											</td>												
										</tr>
										<?php endforeach;
											   endif; 
										?>
									</tbody>
								</table>												
							</div>
						</div>																					
						<div class="span5" style="margin-left:0;">
							<h2 align="center">Registrar Ciclo</h2>
							<hr/>
							<div class="control-group">
								<label class="control-label" for="selectNivel_C">Nivel</label>
								<div class="controls">
								   <select id="selectNivel_C" name="selectNivel_C" class="input-medium">
								   		<?php if(count($lista_nivel)>0):
												foreach ($lista_nivel as $ln) :
										?>
											<option value="<?php echo $ln->id ?>"><?php echo $ln->nombre ?></option>										
										<?php endforeach;
											   endif; 
										?>
		                            </select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="ciclo">Ciclo</label>
								<div class="controls">
								   <input class="input-medium" id="ciclo" name="ciclo" type="text" >
								   <button class="btn" id="btnRegistrarCiclo" name="btnRegistrarCiclo">Registrar</button>
								</div>
							</div>
						</div>
					</fieldset>											
                </div>                                            
            </div>
			<!-- bloque Ciclo -->
			<div  id="Grado" class="tab-pane">
				<div class="form-horizontal">
                    <fieldset>
                        <div class="span7">
							<div class="block-content collapse in">
								<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="tb_grado">
									<thead>
										<tr>
											<th>Grado</th>
											<th>Estado</th>
											<th>Acciones</th>
										</tr>
									</thead>
									<tbody>
										<?php if(count($lista_grado)>0):
												foreach ($lista_grado as $lg) :
										?>
										<tr class="odd gradeX">
											<td><?php echo $lg->nombre ?></td>
											<td><?php echo $lg->Estado ?></td>

											<td><a onclick="editarGrado(<?php echo $lg->id; ?>, '<?php echo $lg->nombre; ?>' , <?php echo $lg->estadoint; ?> , <?php echo $lg->ciclo; ?>, <?php echo $lg->nivel?>)" data-toggle="modal" class="btn btn-success" id="btnEditarGrado" name="btnEditarGrado"><i></i>Editar</a>
											</td>
										</tr>
										<?php endforeach;
											   endif; 
										?>
									</tbody>
								</table>												
							</div>
						</div>																					
						<div class="span5" style="margin-left:0;">
							<h2 align="center">Registrar Grado</h2>
							<hr/>
							<div class="control-group">
								<label class="control-label" for="selectNivel_G">Nivel</label>
								<div class="controls">
								   <select id="selectNivel_G" name="selectNivel_G" class="input-medium" onchange="cargarCiclo_byNivel_G();">
		                                <?php if(count($lista_nivel)>0):
												foreach ($lista_nivel as $ln) :
										?>
											<option value="<?php echo $ln->id?>"><?php echo $ln->nombre ?></option>
										<?php endforeach;
											   endif; 
										?>
		                            </select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectCiclo_G">Ciclo</label>
								<div class="controls">
								   <select id="selectCiclo_G" name="selectCiclo_G" class="input-medium">
		                           </select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="grado">Grado</label>
								<div class="controls">
								   <input class="input-medium" id="grado" name="grado" type="text" >
								   <button class="btn" id="btnRegistarGrado" name="btnRegistarGrado" >Registrar</button>
								</div>
							</div>
						</div>
					</fieldset>											
                </div>                                            
            </div>
			<!-- bloque Grado -->
			<div  id="Cursos" class="tab-pane">
				<div class="form-horizontal">
                    <fieldset>
                        <div class="span7">
							<div class="block-content collapse in">
								<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
									<thead>
										<tr>
											<th>Cursos</th>
											<th>Estado</th>
											<th>Acciones</th>
										</tr>
									</thead>
									<tbody>
										<?php if(count($lista_curso)>0):
												foreach ($lista_curso as $lcu) :
										?>
										<tr class="odd gradeX">
											<td><?php echo $lcu->nombre ?></td>
											<td><?php echo $lcu->Estado ?></td>
											<td><a onclick="editarCurso(<?php echo $lcu->id; ?>, '<?php echo $lcu->nombre ?>' , <?php echo $lcu->estadoint; ?>)" data-toggle="modal" class="btn btn-success" id="btnEditarCurso" name="btnEditarCurso"><i></i>Editar</a>
												<a href="#modalCriterioEvaluacion" data-toggle="modal" class="btn btn-info" name="btnCriterio" id="btnCriterio"><i></i>Criterio Evaluacion</a>
											</td>
										</tr>
										<?php endforeach;
											   endif; 
										?>
									</tbody>
								</table>									
							</div>
						</div>																					
						<div class="span5" style="margin-left:0;">
							<h2 align="center">Registrar Curso</h2>
							<hr/>
							<div class="control-group">
								<label class="control-label" for="curso">Curso</label>
								<div class="controls">
								   <input class="input-medium" id="curso" name="curso" type="text" >
								   <button class="btn" id="btnRegistarCurso" name="btnRegistarCurso" >Registrar</button>
								</div>
							</div>
						</div>
					</fieldset>											
                </div>                                            
            </div>


        </div>
    </div>
</div>
</div>

<!--MODALS******************************/ -->
<div id="modalEditarAsignacion" class="modal hide" style="width: 550px;left: 50%;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Editar Asignacion</h3>
    </div>
    <form action="" class="form-horizontal" id="formeditarasignacion" name="formeditarasignacion" method="post">
    	<input type="hidden" name="ideditarasignacion" id="ideditarasignacion">
        <div class="modal-body">
            <fieldset>
                <div class="span5" style="margin-left:0px; width:450px;">
                    
                    <div class="control-group">
                        <label class="control-label" for="cboEditarAsignacionGrados">Grados</label>
                        <div class="controls">
                            <select id="cboEditarAsignacionGrados" name="cboEditarAsignacionGrados" class="input-large">
                                <option>1°</option>
                                <option>2°</option>
                                <option>3°</option>
                                <option>4°</option>
                                <option>5°</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="cboEditarAsignacionCurso">Curso</label>
                        <div class="controls">
                            <select id="cboEditarAsignacionCurso" name="cboEditarAsignacionCurso" class="input-large">
                                <option>Comunicacion Integral</option>
                                <option>Logico Matematico</option>
                              
                            </select>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-primary" type="submit">Guardar</button>
            <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
        </div>
    </form>
</div>
<!-------------*******************************************************************************-->
<div id="modalEditarNivel" class="modal hide" style="width: 550px;left: 50%;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Editar Nivel</h3>
    </div>
    <form action="" class="form-horizontal" id="formEditarNivel" name="formEditarNivel" method="post">
    	<input type="hidden" id="ideditarnivel" name="ideditarnivel">
        <div class="modal-body">
            <fieldset>
                <div class="span5" style="margin-left:0px; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="cboEstadoNivel">Nivel</label>
                        <div class="controls">
                            <input class="input-large" type="text" name="EditarNivel" id="EditarNivel">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="cboEstadoNivel">Estado</label>
                        <div class="controls">
                            <select id="cboEstadoNivel" name="cboEstadoNivel" class="input-large">
                                <option value="1">Activo</option>
                                <option value="0">No Activo</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
            </fieldset>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-primary" id="btnEditarNivel">Guardar</button>
            <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
        </div>
    </form>
</div>
<!-------************************************************************************************-->
<div id="modalEditarCiclo" class="modal hide" style="width: 550px;left: 50%;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Editar Ciclo</h3>
    </div>
    <form action="" class="form-horizontal" id="formEditarCiclo" name="formEditarCiclo" method="post">
    	<input type="hidden" id="ideditarciclo" name="ideditarciclo">
        <div class="modal-body">
            <fieldset>
                <div class="span5" style="margin-left:0px; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="cboEstadoCiclo">Ciclo</label>
                        <div class="controls">
                            <input class="input-large" type="text" name="EditarCiclo" id="EditarCiclo">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="cboEstadoCiclo">Estado</label>
                        <div class="controls">
                            <select id="cboEstadoCiclo" name="cboEstadoCiclo" class="input-large">
                                <option value="1">Activo</option>
                                <option value="0">No Activo</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
            </fieldset>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-primary" id="btnEditarCicloForm" name="btnEditarCicloForm">Guardar</button>
            <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
        </div>
    </form>
</div>
<!--*************************************************************************************-->
<div id="modalEditarCurso" class="modal hide" style="width: 550px;left: 50%;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Editar Curso</h3>
    </div>
    <form action="" class="form-horizontal" id="formeditarcurso" name="formeditarcurso" method="post">
    	<input type="hidden" id="ideditarcurso" name="ideditarcurso">
        <div class="modal-body">
            <fieldset>
                <div class="span5" style="margin-left:0px; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="selectDoc">Curso</label>
                        <div class="controls">
                            <input class="input-large" type="text" name="EditarCurso" id="EditarCurso">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="cboEstadoCurso">Estado</label>
                        <div class="controls">
                            <select id="cboEstadoCurso" name="cboEstadoCurso" class="input-large" >
                                <option value="1">Activo</option>
                                <option value="0">No Activo</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
            </fieldset>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-primary" id="btnEditarCursoForm">Guardar</button>
            <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
        </div>
    </form>
</div>
<!--*************************************************************************************-->
<div id="modalCriterioEvaluacion" class="modal hide" style="width: 550px;left: 50%;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Citerio Evaluacion</h3>
    </div>
    <form action="" class="form-horizontal" id="formcriterioevaluacion" name="formcriterioevaluacion" method="post">
    	<input type="hidden" id="idcriterioevaluacion" name="idcriterioevaluacion">

        <div class="modal-body">
            <fieldset>
                <div class="span5" style="margin-left:0px; width:450px;">
                    <input class="input-large" style="display:none;" type="text" name="id_curso_ce" id="id_curso_ce">
                    <div class="block-content collapse in">
						<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="tb_criterioEva">
							<thead>
								<tr>
									<th>Criterio Evaluacion</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								<?php if(count($lista_ciclo)>0):
										foreach ($lista_ciclo as $lc) :
								?>
								<tr class="odd gradeX">
									<td><?php echo $lc->nombre ?></td>
										<td><a href="#modalEditarCiclo" data-toggle="modal" class="btn btn-success" id="btnEditarCiclo" name="btnEditarCiclo"><i></i>Editar</a>
									</td>												
								</tr>
								<?php endforeach;
									   endif; 
								?>
							</tbody>
						</table>
					</div>
                </div>
            </fieldset>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-primary">Guardar</button>
            <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
        </div>
    </form>
</div>
<!--*************************************************************************************-->
<div id="modalEditarGrado" class="modal hide" style="width: 550px;left: 50%;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Editar Curso</h3>
    </div>
    <form action="" class="form-horizontal" id="formeditargrado" name="formeditargrado" method="post">
    	<input type="hidden" id="ideditargrado" name="ideditargrado">
    	<input type="hidden" id="idciclogrado" name="idciclogrado">
    	<input type="hidden" id="idnivelgrado" name="idnivelgrado">
        <div class="modal-body">
            <fieldset>
                <div class="span5" style="margin-left:0px; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="selectDoc">Grado</label>
                        <div class="controls">
                            <input class="input-large" type="text" name="EditarGrado" id="EditarGrado">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="cboEstadoCurso">Estado</label>
                        <div class="controls">
                            <select id="cboEstadoGrado" name="cboEstadoGrado" class="input-large" >
                                <option value="1">Activo</option>
                                <option value="0">No Activo</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
            </fieldset>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-primary" id="btnEditarGradoForm">Guardar</button>
            <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
        </div>
    </form>
</div>
<!--*************************************************************************************-->

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

<script>

	function editarGrado(id, nombre, estado, ciclo, nivel)
	{
		$("#ideditargrado").val(id);
		$("#EditarGrado").val(nombre);
		$("#cboEstadoGrado").val(estado);
		$("#idnivelgrado").val(nivel);
		$("#idciclogrado").val(ciclo);

		$("#modalEditarGrado").modal('show');
	}

	function editarCiclo(id, nombre, estado)
	{
		$("#ideditarciclo").val(id);
		$("#EditarCiclo").val(nombre);
		$("#cboEstadoNivel").val(estado);

		$("#modalEditarCiclo").modal('show');
		
		
	}

	function editarNivel(id, nombre, estado)
	{
		$("#ideditarnivel").val(id);
		$("#EditarNivel").val(nombre);
		$("#cboEstadoNivel").val(estado);

		$("#modalEditarNivel").modal('show');

	}

	function editarCurso(id, nombre, estado)
	{

		$("#ideditarcurso").val(id);
		$("#EditarCurso").val(nombre);
		$("#cboEstadoCurso").val(estado);
		$("#modalEditarCurso").modal('show');
	}



    $(document).ready(function(){
    	
    	//Lista Combo Por Default
    	cargarCiclo_byNivel_G();
    	cargarCiclo_byNivel_Asig();

        $("#tb_asignacion").dataTable({
            "oLanguage": {
                "sLengthMenu": "_MENU_ filas por pagina"
            }
        });
        
        $("#tb_nivel").dataTable({
            "oLanguage": {
                "sLengthMenu": "_MENU_ filas por pagina"
            }
        });

        $("#tb_ciclo").dataTable({
            "oLanguage": {
                "sLengthMenu": "_MENU_ filas por pagina"
            }
        });

        $("#tb_grado").dataTable({
            "oLanguage": {
                "sLengthMenu": "_MENU_ filas por pagina"
            }
        });

        $("#tb_criterioEva").dataTable({
        	"oLanguage": {
                "sLengthMenu": "_MENU_ filas por pagina"
            }
        });

        $("#btnEditarNivel").click(function(e){
            e.preventDefault();
            $.ajax({
                url:'<?php echo $ruta;?>plan_estudio/editar_nivel',
                type: 'POST',
                data: $('#formEditarNivel').serialize(),
                success:function(msj){
                    if(msj == 'guardo'){
                        $("#OK").modal('show');
                        document.getElementById("nivel").value="";
                    }else{
                        $("#NO").modal('show');
                    }
                }
            });
        });


        $("#btnRegistrarNivel").click(function(e){
            e.preventDefault();
            var nombre = $("#nivel").val();
            $.ajax({
                url:'<?php echo $ruta;?>plan_estudio/registrar_nivel',
                type: 'POST',
                data: "nivel="+nombre,
                success:function(msj){
                    if(msj == 'guardo'){
                        $("#OK").modal('show');
                        document.getElementById("nivel").value="";
                    }else{
                        $("#NO").modal('show');
                    }
                }
            });
        });

        $("#btnRegistrarCiclo").click(function(e){
            e.preventDefault();
            var nombre = $("#ciclo").val();
            var nivel = $("#selectNivel_C").val();
            $.ajax({
                url:'<?php echo $ruta;?>plan_estudio/registrar_ciclo',
                type: 'POST',
                data: "ciclo="+nombre+"&selectNivel_C="+nivel,
                success:function(msj){
                    if(msj == 'guardo'){
                        $("#OK").modal('show');
                        document.getElementById("ciclo").value="";
                    }else{
                        $("#NO").modal('show');
                    }
                }
            });
        });

        $("#btnEditarCicloForm").click(function(e){
            e.preventDefault();
            $.ajax({
                url:'<?php echo $ruta;?>plan_estudio/editar_ciclo',
                type: 'POST',
                data: $('#formEditarCiclo').serialize(),
                success:function(msj){
                    if(msj == 'guardo'){
                        $("#OK").modal('show');
                        document.getElementById("nivel").value="";
                    }else{
                        $("#NO").modal('show');
                    }
                }
            });
        });

        $("#btnRegistarGrado").click(function(e){
            e.preventDefault();
            var nombre = $("#grado").val().trim();
            var nivel = $("#selectNivel_G").val().trim();
            var ciclo = $("#selectCiclo_G").val().trim();
            $.ajax({
                url:'<?php echo $ruta;?>plan_estudio/registrar_grado',
                type: 'POST',
                data: "selectNivel_G="+nivel+"&selectCiclo_G="+ciclo+"&grado="+nombre,
                success:function(msj){
                    if(msj == 'guardo'){
                        $("#OK").modal('show');
                        document.getElementById("grado").value="";
                    }else{
                        $("#NO").modal('show');
                    }
                }
            });
        });

        
        $("#btnEditarGradoForm").click(function(e){
            e.preventDefault();
            $.ajax({
                url:'<?php echo $ruta;?>plan_estudio/editar_grado',
                type: 'POST',
                data: $('#formeditargrado').serialize(),
                success:function(msj){
                    if(msj == 'guardo'){
                        $("#OK").modal('show');
                        document.getElementById("nivel").value="";
                    }else{
                        $("#NO").modal('show');
                    }
                }
            });
        });

        $("#btnRegistarCurso").click(function(e){
            e.preventDefault();
            var nombre = $("#curso").val().trim();
            $.ajax({
                url:'<?php echo $ruta;?>plan_estudio/registrar_curso',
                type: 'POST',
                data: "nombre="+nombre,
                success:function(msj){
                    if(msj == 'guardo'){
                        $("#OK").modal('show');
                        document.getElementById("curso").value="";
                    }else{
                        $("#NO").modal('show');
                    }
                }
            });
        });

        $("#btnEditarCursoForm").click(function(e){
            e.preventDefault();
            $.ajax({
                url:'<?php echo $ruta;?>plan_estudio/editar_curso',
                type: 'POST',
                data: $('#formeditarcurso').serialize(),
                success:function(msj){
                    if(msj == 'guardo'){
                        $("#OK").modal('show');
                        document.getElementById("nivel").value="";
                    }else{
                        $("#NO").modal('show');
                    }
                }
            });
        });

        
        // Agregar Curso - Grado
        $("#btnAgregar").click(function(e){
            e.preventDefault();
            var nivel = $("#selectNivel_Asig").val();
        	var ciclo = $("#selectCiclo_Asig").val();
        	var grado = $("#selectGrado_Asig").val();
        	var curso = $("#selectCurso_Asig").val();
            $.ajax({
                url:'<?php echo $ruta;?>plan_estudio/registrar_curso_grado',
                type: 'POST',
                data: "nivel="+nivel+"&ciclo="+ciclo+"&grado="+grado+"&curso="+curso,
                success:function(msj){
                    if(msj == 'guardo'){
                        $("#OK").modal('show');
                    }else{
                        $("#NO").modal('show');
                    }
                }
            });
        });

        
    });


	function cargarCiclo_byNivel_G(){
        	var id = $("#selectNivel_G").val();
        	var $tabla = $("#selectCiclo_G");
			document.getElementById("selectCiclo_G").innerHTML = "";
        	$.ajax({
				type: 'POST',
				data: "id_nivel="+id,
				dataType: "json",
				url:'<?php echo $ruta;?>plan_estudio/listar_ciclo_byNivel',
				success:function(msj){
					jQuery.each( msj, function( key, value ) {
						 $tabla.append(
			            '<option value =" '+ value["id"]  + '">'+ value["nombre"]+'</option>'
			            );
					});
				}
			});
			return false;

        }

    function cargarCiclo_byNivel_Asig(){
        	var nivel = $("#selectNivel_Asig").val();
        	var $tabla = $("#selectCiclo_Asig");
			document.getElementById("selectCiclo_Asig").innerHTML = "";
        	$.ajax({
				type: 'POST',
				data: "id_nivel="+nivel,
				dataType: "json",
				url:'<?php echo $ruta;?>plan_estudio/listar_ciclo_byNivel',
				success:function(msj){
					jQuery.each( msj, function( key, value ) {
						 $tabla.append(
			            '<option value =" '+ value["id"]  + '">'+ value["nombre"]+'</option>'
			            );
					});
					cargarGrados_byNivelCiclo_Id();
				}
			});
			return false;

    }

    function cargarGrados_byNivelCiclo_Id(){
        	var nivel = $("#selectNivel_Asig").val();
        	var ciclo = $("#selectCiclo_Asig").val();
        	var $tabla = $("#selectGrado_Asig");
			document.getElementById("selectGrado_Asig").innerHTML = "";
        	$.ajax({
				type: 'POST',
				data: "id_nivel="+nivel+"&id_ciclo="+ciclo,
				dataType: "json",
				url:'<?php echo $ruta;?>plan_estudio/listar_grado_byNivelCiclo_Id',
				success:function(msj){
					jQuery.each( msj, function( key, value ) {
						 $tabla.append(
			            '<option value =" '+ value["id"]  + '">'+ value["nombre"]+'</option>'
			            );
					});
				}
			});
			return false;

    }
        
</script>
<?php $ruta = base_url();?>
<div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Mantenedor Administrativo</div>
            <a class="btn" href="#modalRegistrarAdministrativo" data-toggle="modal" style="float: right;"><i class="icon-plus"></i></a>
        </div>
        <div class="block-content collapse in">
            <div class="form-horizontal">
                <fieldset>
                    
                    <div class="span6" style="margin-left:0;">
                        <div class="control-group">
                            <label class="control-label">Condición</label>
                            <div class="controls">
                                <select id="selectError" class="input-large">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="span6" style="margin-left:0;">
                        <div class="control-group">
                            <label class="control-label">Estado</label>
                            <div class="controls">
                                <select id="selectError" class="input-medium">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <button class="btn" style="margin-left:10px;">Buscar</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="span12" style="margin-left:0;">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable" id="tb_administrativo">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Horas de Trabajo</th>
                            <th>Especialidad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($lista_administrativo)>0):?>
                             <?php foreach ($lista_administrativo as $lp):?>
                                <tr class="odd gradeX">
                                    <td><?php echo $lp->nombre;?></td>
                                    <td><?php echo $lp->apellido;?></td>
                                    <td ><?php echo $lp->telefono;?></td>
                                    <td ><?php echo $lp->direccion;?></td>
                                    <td ><?php echo $lp->horastrabajo;?></td>
                                    <td ><?php echo $lp->especialidad;?></td>
                                    <td>
                                        <a onclick="editarAdministrativo('<?php echo $lp->id;?>')" data-toggle="modal" class="btn btn-success"><i></i>Editar</a>
                                        <a onclick="verAdministrativo('<?php echo $lp->id;?>')"  data-toggle="modal" class="btn btn-info"><i></i>Ver</a>
                                    </td>
                                </tr>
                        <?php endforeach;?>
                        <?php endif;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /block -->
<!--MODALS******************************/ -->
<div id="modalEditarAdministrativo" class="modal hide" style="width: 950px;left: 35%;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Editar Personal Administrativo</h3>
    </div>
    <form action="#" class="form-horizontal" id="editar" name="editar" method="post">
        <input type="hidden" id="idadministrativo" name="idadministrativo">
        <div class="modal-body">
            <fieldset>
                <div class="span5" style="margin-left:0; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="nombres">Nombres</label>
                        <div class="controls">
                            <input class="input-large" id="nombresE" name="nombresE" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectDoc">Tipo de Documento</label>
                        <div class="controls">
                            <select id="selectTipoDocE" name="selectTipoDocE" class="input-large">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="sexo">Sexo</label>
                        <div class="controls">
                            <input class="input-large" id="sexoE" name="sexoE" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="direccion">Dirección</label>
                        <div class="controls">
                            <input class="input-large" id="direccionE" name="direccionE" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="horas">Horas de Trabajo</label>
                        <div class="controls">
                            <input class="input-small" min="1" id="horasE" name="horasE" type="number">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fec_reg">Fecha de Registro</label>
                        <div class="controls">
                            <input class="input-large datepicker" id="fec_regE" name="fec_regE" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fec_ing">Fecha de Ingreso</label>
                        <div class="controls">
                            <input class="input-large datepicker" id="fec_ingE" name="fec_ingE" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectDoc">Estado Civil</label>
                        <div class="controls">
                            <select id="selectEcivil" name="selectEcivil" class="input-large">
                                <option value="1">Casado</option>
                                <option value="2">Soltero</option>
                                <option value="3">Viudo</option>
                                <option value="4">Divorciado</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            <input class="input-large" id="emailE" name="emailE" type="email">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectEstado">Estado</label>
                        <div class="controls">
                            <select id="selectError" class="input-large" id="selectEstadoE" name="selectEstadoE">
                                <option value="1">Activo</option>
                                <option value="0">Desactivo</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="span5" style="margin-left:0; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="apellidos">Apellidos</label>
                        <div class="controls">
                            <input class="input-large" id="apellidosE" name="apellidosE" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="telefono">Teléfono</label>
                        <div class="controls">
                            <input class="input-large" id="telefonoE" name="telefonoE" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectDoc">Condición</label>
                        <div class="controls">
                            <select id="selectCondE" name="selectCondE" class="input-large">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="especialidad">Especialidad</label>
                        <div class="controls">
                            <input class="input-large" id="especialidadE" name="especialidadE" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="pago_hora">Pago por Hora</label>
                        <div class="controls">
                            <input class="input-large" id="pago_horaE" name="pago_horaE" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="num_doc">N° Documento</label>
                        <div class="controls">
                            <input class="input-large" id="num_docE" name="num_docE" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="departamento">Departamento</label>
                        <div class="controls">
                            <select id="departamentoE" name="departamentoE" class="input-large">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="provincia">Provincia</label>
                        <div class="controls">
                            <select id="provinciaE" name="provinciaE" class="input-large">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="distrito">Distrito</label>
                        <div class="controls">
                            <select id="distritoE" name="distritoE" class="input-large">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-primary" id="btnEditar">Guardar</button>
            <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
        </div>
    </form>
</div>
<!-- **************************************************************************************** -->
<div id="modalRegistrarAdministrativo" class="modal hide" style="width: 950px;left: 35%;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Registrar Personal Administrativo</h3>
    </div>
    <form action="#" class="form-horizontal" id="registrar" name="registrar" >
        <div class="modal-body">
            <fieldset>
                <div class="span5" style="margin-left:0; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="nombres">Nombres</label>
                        <div class="controls">
                            <input class="input-large" id="nombres" name="nombres" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectTipoDoc">Tipo de Documento</label>
                        <div class="controls">
                            <select id="selectTipoDoc" name="selectTipoDoc" class="input-large">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="sexo">Sexo</label>
                        <div class="controls">
                            <select id="sexo" name="sexo" class="input-large">
                                <option value="F">Femenino</option>
                                <option value="M">Masculino</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="direccion">Dirección</label>
                        <div class="controls">
                            <input class="input-large" id="direccion" name="direccion" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="horas">Horas de Trabajo</label>
                        <div class="controls">
                            <input class="input-small" min="1" id="horas" name="horas" type="number">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="cargo">Cargo</label>
                        <div class="controls">
                            <select id="cargo" name="cargo" class="input-large">
                                <option value="1">Secretario</option>
                                <option value="2">Coordinador</option>
                                <option value="3">Etc</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fec_ing">Fecha de Ingreso</label>
                        <div class="controls">
                            <input class="input-large datepicker" id="fec_ing" name="fec_ing" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectEstadoCivil">Estado Civil</label>
                        <div class="controls">
                            <select id="selectEstadoCivil" name="selectEstadoCivil" class="input-large">
                                <option value="1">Casado</option>
                                <option value="2">Soltero</option>
                                <option value="3">Viudo</option>
                                <option value="4">Divorciado</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            <input class="input-large" id="email" name="email" type="email">
                        </div>
                    </div>
                </div>
                <div class="span5" style="margin-left:0; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="apellidos">Apellidos</label>
                        <div class="controls">
                            <input class="input-large" id="apellidos" name="apellidos" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="telefono">Teléfono</label>
                        <div class="controls">
                            <input class="input-large" id="telefono" name="telefono" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectCondicion">Condición</label>
                        <div class="controls">
                            <select id="selectCondicion" name="selectCondicion" class="input-large">
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="especialidad">Especialidad</label>
                        <div class="controls">
                            <input class="input-large" id="especialidad" name="especialidad" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="pago_hora">Pago por Hora</label>
                        <div class="controls">
                            <input class="input-large" id="pago_hora" name="pago_hora" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="num_doc">N° Documento</label>
                        <div class="controls">
                            <input class="input-large" id="num_doc" name="num_doc" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="departamento">Departamento</label>
                        <div class="controls">
                            <select id="departamento" name="departamento" class="input-large">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="provincia">Provincia</label>
                        <div class="controls">
                            <select id="provincia" name="provincia" class="input-large">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="distrito">Distrito</label>
                        <div class="controls">
                            <select id="distrito" name="distrito" class="input-large">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-primary" id="btnRegistrar" name="btnRegistrar" >Registrar</button>
            <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
        </div>
    </form>
</div>

<!-- **************************************************************************************** -->
<div id="modalVerAdministrativo" class="modal hide" style="width: 950px;left: 35%;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Datos Personal</h3>
    </div>
    <form action="" class="form-horizontal" id="ver" name="ver">
        <div class="modal-body">
            <fieldset>
                <div class="span5" style="margin-left:0; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="nombres">Nombres</label>
                        <div class="controls">
                            <span class="input-large uneditable-input" id="nombresV"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectDoc">Tipo de Documento</label>
                        <div class="controls">
                            <span class="input-large uneditable-input" id="selectTipoDocV"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="sexo">Sexo</label>
                        <div class="controls">
                            <span class="input-large uneditable-input" id="sexoV"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="direccion">Dirección</label>
                        <div class="controls">
                            <span class="input-large uneditable-input" id="direccionV"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="horas">Horas de Trabajo</label>
                        <div class="controls">
                            <span class="input-large uneditable-input" id="horasV"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fec_reg">Fecha de Registro</label>
                        <div class="controls">
                            <span class="input-large uneditable-input" id="fec_regV"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fec_ing">Fecha de Ingreso</label>
                        <div class="controls">
                            <span class="input-large uneditable-input" id="fec_ingV"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectDoc">Estado Civil</label>
                        <div class="controls">
                            <span class="input-large uneditable-input" id="selectEstadoCivilV">Casado</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            <span class="input-large uneditable-input" id="emailV"></span>
                        </div>
                    </div>
                </div>
                <div class="span5" style="margin-left:0; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="apellidos">Apellidos</label>
                        <div class="controls">
                            <span class="input-large uneditable-input" id="apellidosV"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="telefono">Teléfono</label>
                        <div class="controls">
                            <span class="input-large uneditable-input" id="telefonoV"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectDoc">Condición</label>
                        <div class="controls">
                            <span class="input-large uneditable-input" id="condicionV"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="especialidad">Especialidad</label>
                        <div class="controls">
                            <span class="input-large uneditable-input" id="especialidadV"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="pago_hora">Pago por Hora</label>
                        <div class="controls">
                            <span class="input-large uneditable-input" id="pago_horaV"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="num_doc">N° Documento</label>
                        <div class="controls">
                            <span class="input-large uneditable-input" id="num_docV"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="departamento">Departamento</label>
                        <div class="controls">
                            <span class="input-large uneditable-input" id="departamentoV">La Libertad</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="provincia" id="provinciaV">Provincia</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">Trujillo</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="distrito">Distrito</label>
                        <div class="controls">
                            <span class="input-large uneditable-input" id="distritoV">Trujillo</span>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="modal-footer">
            <a data-dismiss="modal" class="btn" href="#">Cerrar</a>
        </div>
    </form>
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

<script>

    function editarAdministrativo(id)
    {
         $("#idadministrativo").val(id);

        $.ajax({
                    url:'<?php echo $ruta;?>'+'administrativo/administrativo_id',
                    type: 'POST',
                    dataType: "json",
                    data: "id="+id,
                    success:function(msj){

                        jQuery.each(msj,function(key, value){

                            $("#nombresE").val(value['nombre']);
                            $("#apellidosE").val(value['apellido']);
                            $("#telefonoE").val(value['telefono']);
                            $("#selectEstadoE").val(value['Estado']);
                            $("#direccionE").val(value['direccion']);
                            $("#emailE").val(value['email']);
                            $("#especialidadE").val(value['especialidad']);
                            $("#fec_ingE").val(value['fecIngreso'].substring(0,10));
                            $("#fec_regE").val(value['fecRegistro'].substring(0,10));
                            $("#horasE").val(value['horastrabajo']);
                            $("#num_docE").val(value['nrodocumento']);
                            $("#pago_horaE").val(value['pagoshoras']);
                            $("#sexoE").val(value['sexo']);
                            $("#selectTipoDocE").val(value['tipodocumento']);
                            $("#selectEcivil").val(value['estadocivil']);

                        });

                        $("#modalEditarAdministrativo").modal('show');

                    }
                });
    }

    function verAdministrativo(id)
    {

         $("#iddocentever").val(id);
               
               
                $.ajax({
                    url:'<?php echo $ruta;?>'+'administrativo/administrativo_id',
                    type: 'POST',
                    dataType: "json",
                    data: "id="+id,
                    success:function(msj){

                        jQuery.each(msj,function(key, value){
                            $("#nombresV").text(value['nombre']);
                            $("#apellidosV").text(value['apellido']);
                            $("#telefonoV").text(value['telefono']);
                            $("#selectEstadoV").text(value['Estado']);
                            $("#direccionV").text(value['direccion']);
                            $("#emailV").text(value['email']);
                            $("#especialidadV").text(value['especialidad']);
                            $("#fec_ingV").text(value['fecIngreso'].substring(0,10));
                            $("#fec_regV").text(value['fecRegistro'].substring(0,10));
                            $("#horasV").text(value['horastrabajo']);
                            $("#num_docV").text(value['nrodocumento']);
                            $("#pago_horaV").text(value['pagoshoras']);
                            $("#sexoV").text(value['sexo']);
                            $("#selectDocV").text(value['tipodocumento']);
                            $("#selectTipoDocV").text(value['tipodocumento']);
                        });
                        $("#modalVerAdministrativo").modal('show');

                    }
                });

                return false;
                
    }
    $(document).ready(function(){
        $("#tb_administrativo").dataTable({
            "oLanguage": {
                "sLengthMenu": "_MENU_ filas por pagina"
            }
        });
        
        $("#btnRegistrar").click(function(e){
            e.preventDefault();
            $.ajax({
                url:'<?php echo $ruta;?>administrativo/registrar',
                type: 'POST',
                data: $('#registrar').serialize(),
                success:function(msj){
                    if(msj == 'guardo'){
                        $("#OK").modal('show');
                    }else{
                        $("#NO").modal('show');
                    }
                }
            });
        });

        $("#btnEditar").click(function(e){
            e.preventDefault();
            $.ajax({
                url:'<?php echo $ruta;?>administrativo/editar',
                type: 'POST',
                data: $('#editar').serialize(),
                success:function(msj){
                    if(msj == 'guardo'){
                        $("#OK").modal('show');
                    }else{
                        $("#NO").modal('show');
                    }
                }
            });
        });

        $(".datepicker").datepicker();

    });
</script>
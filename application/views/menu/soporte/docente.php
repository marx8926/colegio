<?php $ruta = base_url();?>
<div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left"></div>
            <a class="btn" href="#modalRegistrarDocente" data-toggle="modal" style="float: right;"><i class="icon-plus"></i></a>
        </div>
        <div class="block-content collapse in">
            <div class="form-horizontal" style="margin-top:1%;">
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
            <hr/>
            <div class="block-content collapse in">
                <div class="span12">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable" id="tb_docente">
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
                             <?php if(count($lista_docente)>0):?>
                             <?php foreach ($lista_docente as $lp):?>
                                <tr class="odd gradeX">
                                    <td><?php echo $lp->nombre;?></td>
                                    <td><?php echo $lp->apellido;?></td>
                                    <td ><?php echo $lp->telefono;?></td>
                                    <td ><?php echo $lp->direccion;?></td>
                                    <td ><?php echo $lp->horastrabajo;?></td>
                                    <td ><?php echo $lp->especialidad;?></td>
                                    <td>
                                        <a href="#modalEditarDocente" data-toggle="modal" class="btn btn-success"><i></i>Editar</a>
                                        <a href="#modalVerDocente" data-toggle="modal" class="btn btn-info"><i></i>Ver</a>
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
</div>
<!-- /block -->
<!--MODALS******************************/ -->
<div id="modalEditarDocente" class="modal hide" style="width: 950px;left: 35%;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Editar Docente</h3>
    </div>
    <form action="" class="form-horizontal" id="editar" name="editar">
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
                        <label class="control-label" for="selectDoc">Tipo de Documento</label>
                        <div class="controls">
                            <select id="selectDoc" name="selectDoc" class="input-large">
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
                            <input class="input-large" id="sexo" name="sexo" type="text">
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
                        <label class="control-label" for="fec_reg">Fecha de Registro</label>
                        <div class="controls">
                            <input class="input-large datepicker" id="fec_reg" name="fec_reg" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fec_ing">Fecha de Ingreso</label>
                        <div class="controls">
                            <input class="input-large datepicker" id="fec_ing" name="fec_ing" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectDoc">Estado Civil</label>
                        <div class="controls">
                            <select id="selectDoc" name="selectDoc" class="input-large">
                                <option>Casado</option>
                                <option>Soltero</option>
                                <option>Viudo</option>
                                <option>Divorciado</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            <input class="input-large" id="email" name="email" type="email">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectEstado">Estado</label>
                        <div class="controls">
                            <select id="selectError" class="input-large" id="selectEstado" name="selectEstado">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
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
                        <label class="control-label" for="selectDoc">Condición</label>
                        <div class="controls">
                            <select id="selectDoc" name="selectDoc" class="input-large">
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
            <button data-dismiss="modal" class="btn btn-primary" type="submit">Guardar</button>
            <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
        </div>
    </form>
</div>
<!-- **************************************************************************************** -->
<div id="modalRegistrarDocente" class="modal hide" style="width: 950px;left: 35%;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Registrar Docente</h3>
    </div>
    <form action="" class="form-horizontal" id="registrar" name="registrar" >
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
                                <option>Femenino</option>
                                <option>Masculino</option>
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
                        <label class="control-label" for="num_doc">N° Documento</label>
                        <div class="controls">
                            <input class="input-large" id="num_doc" name="num_doc" type="text">
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
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
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
            <button data-dismiss="modal" class="btn btn-primary" id="btnRegistrar" name="btnRegistrar">
            Registrar</button>
            <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
        </div>
    </form>
</div>

<!-- **************************************************************************************** -->
<div id="modalVerDocente" class="modal hide" style="width: 950px;left: 35%;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Datos Docente</h3>
    </div>
    <form action="" class="form-horizontal" id="ver" name="ver">
        <div class="modal-body">
            <fieldset>
                <div class="span5" style="margin-left:0; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="nombres">Nombres</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">Juan Carlos</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectDoc">Tipo de Documento</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">xxxxx</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="sexo">Sexo</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">Masculino</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="direccion">Dirección</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">Av. Nicolás de Piérola</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="horas">Horas de Trabajo</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">8 horas</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fec_reg">Fecha de Registro</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">12/12/2013</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fec_ing">Fecha de Ingreso</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">12/12/2013</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectDoc">Estado Civil</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">Casado</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">jperez@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="span5" style="margin-left:0; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="apellidos">Apellidos</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">Perez Gomez</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="telefono">Teléfono</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">258998</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectDoc">Condición</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">Contratado</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="especialidad">Especialidad</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">Lenguaje</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="pago_hora">Pago por Hora</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">S/.30.00</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="num_doc">N° Documento</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">001</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="departamento">Departamento</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">La Libertad</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="provincia">Provincia</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">Trujillo</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="distrito">Distrito</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">Trujillo</span>
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
    $(document).ready(function(){
        $("#tb_docente").dataTable({
            "oLanguage": {
                "sLengthMenu": "_MENU_ filas por pagina"
            }
        });
        
        $("#btnRegistrar").click(function(e){
            e.preventDefault();
            $.ajax({
                url:'<?php echo $ruta;?>docente/registrar',
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

        $(".datepicker").datepicker();

    });
</script>
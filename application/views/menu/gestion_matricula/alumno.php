<?php $ruta = base_url();?>
<div class="row-fluid">
<!-- block -->
<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Mantenedor Alumno</div>
        <a class="btn" href="#modalRegistrarAlumno" data-toggle="modal" style="float: right;"><i class="icon-plus"></i></a>
    </div>
    <div class="block-content collapse in">
        <div class="form-horizontal" style="margin-top:1.5%;" >
            <fieldset>
                <div class="span6" style="margin-left:0;">
                    <div class="control-group">
                        <label class="control-label" for="sexo">Sexo</label>
                        <div class="controls">
                            <select id="sexo" name="sexo" class="input-medium">
                                <option>Masculino</option>
                                <option>Femenino</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="span10" style="margin-left:0;">
                    <div class="control-group">
                        <label class="control-label" for="fecha1">Fecha</label>
                        <div class="controls">
                            <input class="input-large datepicker" id="fecha1" name="fecha1" type="text" style="margin-right:10px;">
                            a
                            <input class="input-large datepicker" id="fecha2" name="fecha2" type="text" style="margin-left:10px;">
                            <button class="btn input-medium" style="margin-left:136px;">Buscar</button>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
        <hr/>
        <div class="span12" style="margin-left:0;">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Sexo</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd gradeX">
                        <td>Trident</td>
                        <td>Internet
                             Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td class="center"> 4</td>
                        <td>X</td>
                        <td>X</td>
                        <td><a href="#modalEditarAlumno" data-toggle="modal" class="btn btn-success"><i></i>Editar</a>
                            <a href="#modalVerAlumno" data-toggle="modal" class="btn btn-info"><i></i>Ver</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<!-- /block -->
<!--MODALS******************************/ -->
<div id="modalEditarAlumno" class="modal hide" style="width: 950px;left: 35%;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Editar Alumno</h3>
    </div>
    <form action="" class="form-horizontal">
        <div class="modal-body">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#alumno" data-toggle="tab">Alumno</a>
                </li>
                <li>
                    <a href="#familiar" data-toggle="tab">Familiar</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="alumno" class="tab-pane active">
                    <fieldset>
                        <legend>Información Personal</legend>
                        <div class="span5" style="margin-left:0; width:450px;">
                            <div class="control-group">
                                <label class="control-label" for="fec_ingreso">Fecha de Ingreso</label>
                                <div class="controls">
                                    <input class="input-large datepicker" id="fec_ingreso" name="fec_ingreso" type="text">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="nombres">Nombre</label>
                                <div class="controls">
                                    <input class="input-large" id="nombres" name="nombres" type="text">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="tip_doc">Tipo de Documento</label>
                                <div class="controls">
                                    <input class="input-large" id="tip_doc" name="tip_doc" type="text">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="fec_nac">Fecha Nacimiento</label>
                                <div class="controls">
                                    <input class="input-large datepicker" id="fec_nac" name="fec_nac" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="span5" style="margin-left:0; width:450px;">
                            <div class="control-group">
                                <label class="control-label" for="selectEstado">Estado</label>
                                <div class="controls">
                                    <select id="selectEstado" name="selectEstado" class="input-large">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
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
                                <label class="control-label" for="sexo">Sexo</label>
                                <div class="controls">
                                    <select id="departamento" name="departamento" class="input-large">
                                        <option>Masculino</option>
                                        <option>Femenino</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="span9" style="margin-left:0;">
                            <div class="control-group">
                                <label class="control-label" for="direccion">Dirección</label>
                                <div class="controls">
                                    <input class="input-xxlarge" id="direccion" name="direccion" type="text">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="selectDep">Departamento</label>
                                <div class="controls">
                                    <select id="selectDep" name="selectDep" class="input-medium" style="margin-right:30px;">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <label style="display: inline-block; margin-right:15px;">Provincia</label>
                                    <select id="selectProv" name="selectProv" class="input-medium" style="margin-right:30px;">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <label style="display: inline-block; margin-right:15px;">Distrito</label>
                                    <select id="selectDist" name="selectDist" class="input-medium">
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
                                <label class="control-label" for="telefono">Teléfono</label>
                                <div class="controls">
                                    <input class="input-large" id="telefono" name="telefono" type="text">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="grup_san">Grupo Sanguíneo</label>
                                <div class="controls">
                                    <input class="input-large" id="grup_san" name="grup_san" type="text">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="antecedente">Antecedente</label>
                                <div class="controls">
                                    <textarea class="input-large" id="antecedente" name="antecedente"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="span5" style="margin-left:0; width:450px;">
                            <div class="control-group">
                                <label class="control-label" for="email">Email</label>
                                <div class="controls">
                                    <input class="input-large" id="email" name="email" type="email">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Documentos</legend>
                        <div class="span9" style="margin-left:0;">
                            <div class="control-group">
                                <div class="controls" style="margin-left:60px;">
                                    <label class="uniform" style="display:inline-block; margin-right:20px;">
                                        <input class="uniform_on" type="checkbox" id="check1" name="check1" value="option1">
                                        Check 1
                                    </label>
                                    <label class="uniform" style="display:inline-block;margin-right:20px;">
                                        <input class="uniform_on" type="checkbox" id="check2" name="check2" value="option1">
                                        Check 2
                                    </label>
                                    <label class="uniform" style="display:inline-block;">
                                        <input class="uniform_on" type="checkbox" id="check3" name="check3" value="option1">
                                        Check 3
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div id="familiar" class="tab-pane">
                    <fieldset>
                        <legend>Información Familiar del Alumno</legend>
                        <div class="span5 offset2">
                            <div class="control-group">
                                <label class="control-label" for="nro_doc_search">N° Documento</label>
                                <div class="controls">
                                    <input class="input-medium" id="nro_doc_search" name="nro_doc_search" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="span5" style="margin-left:0; width:450px;">
                            <div class="control-group">
                                <label class="control-label" for="fec_reg">Fecha de Registro</label>
                                <div class="controls">
                                    <input class="input-large datepicker" id="fec_reg" name="fec_reg" type="text">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="nombres">Nombre</label>
                                <div class="controls">
                                    <input class="input-large" id="nombres" name="nombres" type="text">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="tip_doc">Tipo de Documento</label>
                                <div class="controls">
                                    <input class="input-large" id="tip_doc" name="tip_doc" type="text">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="sexo">Sexo</label>
                                <div class="controls">
                                    <select id="departamento" name="departamento" class="input-large">
                                        <option>Masculino</option>
                                        <option>Femenino</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="span5" style="margin-left:0; width:450px;">
                            <div class="control-group">
                                <label class="control-label" for="selectEstado">Estado</label>
                                <div class="controls">
                                    <select id="selectEstado" name="selectEstado" class="input-large">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
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
                        </div>
                        <div class="span9" style="margin-left:0;">
                            <div class="control-group">
                                <label class="control-label" for="direccion">Dirección</label>
                                <div class="controls">
                                    <input class="input-xxlarge" id="direccion" name="direccion" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="span5" style="margin-left:0; width:450px;">
                            <div class="control-group">
                                <label class="control-label" for="telefono">Teléfono</label>
                                <div class="controls">
                                    <input class="input-large" id="telefono" name="telefono" type="text">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="ocupacion">Ocupación</label>
                                <div class="controls">
                                    <input class="input-large" id="ocupacion" name="ocupacion" type="text">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="relacion">Relación</label>
                                <div class="controls">
                                    <select id="relacion" name="relacion" class="input-large">
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
                                <label class="control-label" for="email">Email</label>
                                <div class="controls">
                                    <input class="input-large" id="email" name="email" type="email">
                                </div>
                            </div>
                        </div>
                        <div style="clear:both;"></div>
                        <div style="float:right;margin-right: 51px;">
                            <button type="button" class="btn">Agregar</button>
                        </div>
                        <div class="span9" style="margin: 20px 0 0 15px;">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Dirección</th>
                                        <th>Teléfono</th>
                                        <th>N° Documento</th>
                                        <th>Relación</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>Trident</td>
                                        <td>Internet
                                             Explorer 4.0</td>
                                        <td>Win 95+</td>
                                        <td class="center"> 4</td>
                                        <td class="center">X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>
                                            <a href="#" data-toggle="modal" class="btn btn-danger"><i></i>Eliminar</a>
                                            <a href="#modalVerFamiliar" data-toggle="modal" class="btn btn-info"><i></i>Ver</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-primary" type="submit">Guardar</button>
            <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
        </div>
    </form>
</div>
<!-- **************************************************************************************** -->
<div id="modalRegistrarAlumno" class="modal hide" style="width: 950px;left: 35%;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Registrar Alumno</h3>
    </div>
    <form action="" class="form-horizontal" id="FrmAlumno" name="FrmAlumno">
        <div class="modal-body">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#alumno1" data-toggle="tab">Alumno</a>
                </li>
                <li>
                    <a href="#familiar1" data-toggle="tab">Familiar</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="alumno1" class="tab-pane active">
                    <fieldset>
                        <div class="span5" style="margin-left:0; width:450px;">
                            <div class="control-group">
                                <label class="control-label" for="nombres">Nombre</label>
                                <div class="controls">
                                    <input class="input-large" id="nombres" name="nombres" type="text">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="tip_doc">Tipo de Documento</label>
                                <div class="controls">
                                    <select id="tip_doc" name="tip_doc" class="input-medium">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="fec_nac">Fecha Nacimiento</label>
                                <div class="controls">
                                    <input class="input-large datepicker" id="fec_nac" name="fec_nac" type="text">
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
                                    <input class="input-meidum" id="num_doc" name="num_doc" type="text">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="sexo">Sexo</label>
                                <div class="controls">
                                    <select id="sexo" name="sexo" class="input-large">
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="span12" style="margin-left:0;">
                            <div class="control-group">
                                <label class="control-label" for="selectDep">Departamento</label>
                                <div class="controls">
                                    <select id="selectDep" name="selectDep" class="input-medium" style="margin-right:20px;">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <label style="display: inline-block; margin-right:0px;">Provincia</label>
                                    <select id="selectProv" name="selectProv" class="input-medium" style="margin-right:20px;">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <label style="display: inline-block; margin-right:0px;">Distrito</label>
                                    <select id="selectDist" name="selectDist" class="input-medium">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="direccion">Dirección Actual:</label>
                                <div class="controls">
                                    <input class="input-xxlarge" id="direccion" name="direccion" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="span5" style="margin-left:0; width:450px;">
                            <div class="control-group">
                                <label class="control-label" for="telefono">Teléfono</label>
                                <div class="controls">
                                    <input class="input-large" id="telefono" name="telefono" type="text">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="grup_san">Grupo Sanguíneo</label>
                                <div class="controls">
                                    <input class="input-small" id="grup_san" name="grup_san" type="text">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="antecedente">Antecedente</label>
                                <div class="controls">
                                    <textarea class="input-large" id="antecedente" name="antecedente" rows="2" 
                                     cols="130" ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="span5" style="margin-left:0; width:450px;">
                            <div class="control-group">
                                <label class="control-label" for="email">Email</label>
                                <div class="controls">
                                    <input class="input-large" id="email" name="email" type="email">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Documentos</legend>
                        <div class="span12" style="margin-left:0;">
                            <div class="control-group">
                                <div class="controls" style="margin-left:60px;">
                                    <label class="uniform" style="display:inline-block; margin-right:20px;">
                                        <input class="uniform_on" type="checkbox" id="check1" name="check1" value="option1">
                                        Check 1
                                    </label>
                                    <label class="uniform" style="display:inline-block;margin-right:20px;">
                                        <input class="uniform_on" type="checkbox" id="check2" name="check2" value="option1">
                                        Check 2
                                    </label>
                                    <label class="uniform" style="display:inline-block;">
                                        <input class="uniform_on" type="checkbox" id="check3" name="check3" value="option1">
                                        Check 3
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div id="familiar1" class="tab-pane">
                    <fieldset>
                        <div class="span6 offset2">
                            <div class="control-group">
                                <label class="control-label" for="nro_doc_search">N° Documento</label>
                                <div class="controls">
                                    <input class="input-medium" id="nro_doc_search" name="nro_doc_search" type="text">
                                    <button type="button" id="buscar_doc" name="buscar_doc" class="btn">Buscar</button>
                                </div>
                            </div>
                        </div>
                        <div class="span5" style="margin-left:0; width:450px;">
                            <div class="control-group">
                                <label class="control-label" for="nombres_apod">Nombre</label>
                                <div class="controls">
                                    <input class="input-large" id="nombres_apod" name="nombres_apod" type="text">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="sexo_apod">Sexo</label>
                                <div class="controls">
                                    <select id="sexo_apod" name="sexo_apod" class="input-large">
                                        <option>Masculino</option>
                                        <option>Femenino</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="span5" style="margin-left:0; width:450px;">
                            <div class="control-group">
                                <label class="control-label" for="selectEstado_apod">Estado</label>
                                <div class="controls">
                                    <select id="selectEstado_apod" name="selectEstado_apod" class="input-large">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="apellidosa_apod">Apellidos</label>
                                <div class="controls">
                                    <input class="input-large" id="apellidosa_apod" name="apellidosa_apod" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="span9" style="margin-left:0;">
                            <div class="control-group">
                                <label class="control-label" for="direccion_apod">Dirección</label>
                                <div class="controls">
                                    <input class="input-xxlarge" id="direccion_apod" name="direccion_apod" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="span5" style="margin-left:0; width:450px;">
                            <div class="control-group">
                                <label class="control-label" for="telefono_apod">Teléfono</label>
                                <div class="controls">
                                    <input class="input-large" id="telefono_apod" name="telefono_apod" type="text">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="ocupacion_apod">Ocupación</label>
                                <div class="controls">
                                    <input class="input-large" id="ocupacion_apod" name="ocupacion_apod" type="text">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="relacion_apod">Relación</label>
                                <div class="controls">
                                    <select id="relacion_apod" name="relacion_apod" class="input-large">
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
                                <label class="control-label" for="email_apod">Email</label>
                                <div class="controls">
                                    <input class="input-large" id="email_apod" name="email_apod" type="email">
                                </div>
                            </div>
                        </div>
                        <div style="clear:both;"></div>
                        <div style="float:right;margin-right: 51px;">
                            <button type="button" class="btn">Agregar</button>
                        </div>
                        <div class="span9" style="margin: 20px 0 0 15px;">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Dirección</th>
                                        <th>Teléfono</th>
                                        <th>N° Documento</th>
                                        <th>Relación</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>Trident</td>
                                        <td>Internet
                                             Explorer 4.0</td>
                                        <td>Win 95+</td>
                                        <td class="center"> 4</td>
                                        <td class="center">X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>
                                            <a href="#" data-toggle="modal" class="btn btn-danger"><i></i>Eliminar</a>
                                            <a href="#modalVerFamiliar" data-toggle="modal" class="btn btn-info"><i></i>Ver</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-primary" id="RegistrarAlumno" name="RegistrarAlumno" >Guardar</button>
            <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
        </div>
    </form>
</div>

<!-- **************************************************************************************** -->
<div id="modalVerAlumno" class="modal hide" style="width: 950px;left: 35%;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Datos del Alumno</h3>
    </div>
    <form action="" class="form-horizontal">
        <div class="modal-body">
            <fieldset>
                <div class="span5" style="margin-left:0; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="nombres">Fecha de Registro</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">12/16/2013</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectDoc">Nombre</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">Carmen Luz</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="sexo">Tipo de Documento</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">DNI</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="direccion">Fecha de Nacimiento</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">26/26/2013</span>
                        </div>
                    </div>
                </div>
                <div class="span5" style="margin-left:0; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="apellidos">Estado</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">Activo</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="telefono">Apellidos</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">Ruiz Sanchez</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectDoc">N° Documento</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">xxxxxx</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="especialidad">Sexo</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">Femenino</span>
                        </div>
                    </div>
                </div>
                <div class="span9" style="margin-left:0;">
                    <div class="control-group">
                        <label class="control-label" for="direccion">Dirección</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">Mi Casa 123</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectDep">Departamento</label>
                        <div class="controls">
                            <span class="input-medium uneditable-input" style="margin-right:15px;">La Libertad</span>
                            <label style="display: inline-block; margin-right:15px;">Provincia</label>
                            <span class="input-medium uneditable-input" style="margin-right:15px;">Trujillo</span>
                            <label style="display: inline-block; margin-right:15px;">Distrito</label>
                            <span class="input-medium uneditable-input">Trujillo</span>
                        </div>
                    </div>
                </div>
                <div class="span5" style="margin-left:0; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="nombres">Teléfono</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">999999999</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectDoc">Grupo Sanguíneo</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">O+</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="sexo">Antecedente</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">xxxxxxxxxxxxxxx</span>
                        </div>
                    </div>
                </div>
                <div class="span5" style="margin-left:0; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="apellidos">Email</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">miemail@blabla.com</span>
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

<!-- **************************************************************************************** -->
<div id="modalVerFamiliar" class="modal hide" style="width: 950px;left: 35%;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Datos Familiar</h3>
    </div>
    <form action="" class="form-horizontal">
        <div class="modal-body">
            <fieldset>
                <div class="span5" style="margin-left:0; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="nombres">Fecha de Registro</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">12/16/2013</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectDoc">Nombre</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">Carmen Luz</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="sexo">Tipo de Documento</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">DNI</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="especialidad">Sexo</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">Femenino</span>
                        </div>
                    </div>
                </div>
                <div class="span5" style="margin-left:0; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="apellidos">Estado</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">Activo</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="telefono">Apellidos</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">Ruiz Sanchez</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectDoc">N° Documento</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">xxxxxx</span>
                        </div>
                    </div>
                </div>
                <div class="span9" style="margin-left:0;">
                    <div class="control-group">
                        <label class="control-label" for="direccion">Dirección</label>
                        <div class="controls">
                            <input class="input-xxlarge" id="direccion" name="direccion" type="text">
                        </div>
                    </div>
                </div>
                <div class="span5" style="margin-left:0; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="nombres">Teléfono</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">999999999</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectDoc">Ocupación</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">Independiente</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="sexo">Relación</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">Padre</span>
                        </div>
                    </div>
                </div>
                <div class="span5" style="margin-left:0; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="apellidos">Email</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">miemail@blabla.com</span>
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
        /*$("#tb_periodo").dataTable({
            "oLanguage": {
                "sLengthMenu": "_MENU_ filas por pagina"
            }
        });*/
        $(".datepicker").datepicker();
        //RegistrarAlumno
        $("#RegistrarAlumno").click(function(e){
            e.preventDefault();
            $.ajax({
                url:'<?php echo $ruta;?>alumno/registrar',
                type: 'POST',
                data: $('#FrmAlumno').serialize(),
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

</script>

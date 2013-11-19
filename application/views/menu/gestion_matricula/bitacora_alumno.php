<?php $ruta = base_url();?>
<div class="span6">
    <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">LISTAR BITACORA</div>
        </div>
            <div class="block-content collapse in">
                <div class="form-horizontal" style="margin-top:2%">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="tb_bitacora">
                                <thead>
                                    <tr>
                                        <th>Tipo</th>
                                        <th>Alumno</th>
                                        <th>Fecha Registro</th>
                                        <th>Curso</th>
                                        <th>Titulo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php if(count($listar_bitacoras)>0):
                                             foreach ($listar_bitacoras as $lb):?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $lb->tipo;?></td>
                                            <td><?php echo $lb->alumno;?></td>
                                            <td><?php echo $lb->fechaRegistro;?></td>
                                            <td><?php echo $lb->curso;?></td>
                                            <td><?php echo $lb->titulo;?></td>
                                        </tr>
                                    <?php  endforeach; 
                                           endif;?>
                                </tbody>
                            </table>

                </div>
                
            </div>   
        </div>
    </div>
</div>

<div class="span5">
    <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">REGISTRAR BITACORA</div>
        </div>
        <div class="block-content collapse in">
            <form action="#" class="form-horizontal" method="post" id="frmRegistroBitacora" name="frmRegistroBitacora" >
                    <div class="control-group">
                        <label class="control-label" for="filtro">Buscar</label>
                        <div class="controls">
                            <input class="input-small" id="filtro" name="filtro" type="text">
                            <select id="tipo_busc" name="tipo_busc" class="input-small">
                                <option value="1">DNI</option>
                                <option value="2">Codigo Interno</option>
                            </select>
                            <button class="btn btn-success" id="busc_dni" name="busc_dni">Buscar</button>
                        </div>
                    </div>  
                        <div class="control-group">
                        <label class="control-label" for="apellidos">Alumno</label>
                        <div class="controls">
                            <input class="input-large" id="id_alumno" name="id_alumno" type="text" style="display:none;" >
                            <input class="input-large" id="alumno" name="alumno" type="text" disabled>
                        </div>
                    </div>  
                    <div class="control-group">
                        <label class="control-label" for="selectCurso">Curso</label>
                        <div class="controls">
                            <select id="selectCurso" name="selectCurso" class="input-large">
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectTipo">Tipo</label>
                        <div class="controls">
                            <select id="selectTipo" name="selectTipo" class="input-large">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="titulo">Titulo</label>
                        <div class="controls">
                            <input class="input-large" id="titulo" name="titulo" type="text">
                        </div>
                    </div>
                      <div class="control-group">
                        <label class="control-label" for="descripcion">Descripción</label>
                        <div class="controls">
                            <textarea rows="4" id="descripcion" name="descripcion"></textarea>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-primary" id="RegistroBitacora" name="RegistroBitacora" >Registrar</button>
                    <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>

<!--MODALS******************************/ -->
<div id="modalEditarBitacora" class="modal hide" style="width: 550px;left: 50%;">
<div class="modal-header">
    <button data-dismiss="modal" class="close" type="button">&times;</button>
    <h3>Editar Bitacora</h3>
</div>
<form action="" class="form-horizontal" >
    <div class="modal-body">
        <fieldset>
            <div class="span9" style="margin-left:0; width:300px;">
                <div class="control-group">
                    <label class="control-label" for="nombres">Nombres</label>
                    <div class="controls">
                        <input class="input-large" id="nombres" name="nombres" type="text">
                    </div>
                </div>
                 <div class="control-group">
                    <label class="control-label" for="apellidos">Apellidos</label>
                    <div class="controls">
                        <input class="input-large" id="apellidos" name="apellidos" type="text">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="selectCurso">Curso</label>
                    <div class="controls">
                        <select id="selectCurso" name="selectCurso" class="input-large">
                            <option>Ingles</option>
                            <option>Matemática</option>
                            <option>Comunicación</option>
                            <option>Historia</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="fec_reg">Fecha de Registro</label>
                    <div class="controls">
                        <input class="input-large datepicker" id="fec_reg" name="fec_reg" type="text">
                    </div>
                </div>
                  <div class="control-group">
                    <label class="control-label" for="selectTipo">Tipo</label>
                    <div class="controls">
                        <select id="selectError" class="input-large" id="selectTipo" name="selectTipo">
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>
                </div>
                     <div class="control-group">
                    <label class="control-label" for="titulo">Titulo</label>
                    <div class="controls">
                        <input class="input-large" id="titulo" name="titulo" type="text">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="descripcion">Descripcion</label>
                    <div class="controls">
                        <textarea rows="4" cols="2 0" id="descripcion" name="descripcion">
                        </textarea>
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
        </fieldset>
    </div>
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-primary" type="submit">Guardar</button>
        <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
    </div>
</form>
</div>          

<!-- **************************************************************************************** -->
<div id="modalVerBitacora" class="modal hide" style="width: 500px;left: 50%;">
<div class="modal-header">
    <button data-dismiss="modal" class="close" type="button">&times;</button>
    <h3>Datos Bitacora</h3>
</div>
<form action="" class="form-horizontal">
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
                    <label class="control-label" for="apellidos">Apellidos</label>
                    <div class="controls">
                        <span class="input-large uneditable-input">Perez Gomez</span>
                    </div>
                </div>
                 <div class="control-group">
                    <label class="control-label" for="curso">Curso</label>
                    <div class="controls">
                        <span class="input-large uneditable-input">Lenguaje</span>
                    </div>
                </div>
                    <div class="control-group">
                    <label class="control-label" for="fec_reg">Fecha de Registro</label>
                    <div class="controls">
                        <span class="input-large uneditable-input">12/12/2013</span>
                    </div>
                </div>
               
                <div class="control-group">
                    <label class="control-label" for="tipo">Tipo</label>
                    <div class="controls">
                        <span class="input-large uneditable-input">La Libertad</span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="titulo">Titulo</label>
                    <div class="controls">
                        <span class="input-large uneditable-input">Trujillo</span>
                    </div>
                </div>
                   <div class="control-group">
                    <label class="control-label" for="descripcion">Descripcion</label>
                    <div class="controls">
                        <span class="input-large uneditable-input">por ser un alumno muy responsable</span>
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

        $("#tb_bitacora").dataTable({
            "oLanguage": {
                "sLengthMenu": "_MENU_ filas por pagina"
            }
        });

        $(".datepicker").datepicker();
        
        //Buscar Alumno
        $("#busc_dni").click(function(e){
            e.preventDefault();
            var filtro = $("#filtro"). val();
            var condicion =$("#tipo_busc").val();
            var $tabla = $("#selectCurso");
            document.getElementById("selectCurso").innerHTML = "";
            $.ajax({
                url:'<?php echo $ruta;?>alumno/buscar_byFiltroCondicion',
                type: 'POST',
                dataType: "json",
                data: "filtro="+filtro+"&condicion="+condicion,
                success:function(msj){
                    jQuery.each( msj, function( key, value ) {
                        document.getElementById('id_alumno').value=value["id"];
                        document.getElementById('alumno').value=value["nombre"]+", "+value["apellido"];
                        $tabla.append(
                            '<option value =" '+ value["id_curso"]  + '">'+ value["curso"]+'</option>'
                        );
                    });
                }
            });
        });

        //RegistrarAlumno
        $("#RegistroBitacora").click(function(e){
            e.preventDefault();
            $.ajax({
                url:'<?php echo $ruta;?>bitacora_alumno/registrar',
                type: 'POST',
                data: $('#frmRegistroBitacora').serialize(),
                success:function(msj){
                    if(msj == 'guardo'){
                        $("#OK").modal('show');
                        jQuery.fn.reset = function(){
                            $(this).each(function(){this.reset();});
                        };
                        $("#frmRegistroBitacora").reset();
                    }else{
                        $("#NO").modal('show');
                    }
                }
            });
        });

    });

</script>
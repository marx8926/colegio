<?php $ruta = base_url();?>
<script src="<?php echo $ruta;?>recursos/js/Validacion.js"></script>
<div class="span6">
    <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">LISTAR SERVICIO</div>
            </div>
            <div class="block-content collapse in">
                <div class="form-horizontal">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="tb_servicio">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Tipo</th>
                                        <th>Monto</th>
                                        <th>Descripción</th>            
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(count($lista_servicios)>0):?>
                                    <?php foreach ($lista_servicios as $ls):?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $ls->Nombre;?></td>
                                            <td><?php echo $ls->Tipo;?></td>
                                            <td ><?php echo $ls->Monto;?></td>
                                            <td ><?php echo $ls->Descripcion;?></td>
                                            <td><a href="#modalEditarServicio" data-toggle="modal" class="btn btn-success"><i></i>Editar</a>
                                        </tr>
                                    <?php endforeach;?>
                                    <?php else :?>
                                    <?php endif;?>
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
            <div class="muted pull-left">REGISTRAR SERVICIO</div>
        </div>
        <div class="block-content collapse in">
            <form action="#" class="form-horizontal" method="post" id="frmServicio" name="frmServicio" >
                    <div class="control-group">
                        <label class="control-label" for="tipo">Tipo</label>
                        <div class="controls">
                            <select id="tipo" name="tipo" class="input-large">
                                <option value="1">MATRICULA</option>
                                <option vaue="2">PENSIONES</option>
                                <option value="3">LIBROS</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="nombre">Nombre</label>
                        <div class="controls">
                            <input class="input-large" id="nombre" name="nombre" type="text">
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label" for="monto">Monto</label>
                        <div class="controls">
                            <input class="input-large" id="monto" name="monto" type="text" onkeydown="return soloDecimal(this, event);">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="descripcion">Descripción</label>
                        <div class="controls">
                            <textarea rows="4" cols="50" id="descripcion" name="descripcion">
                            </textarea>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-primary" id="btnRegistrar" name="btnRegistrar" >
                    Registrar</button>
                    <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>

<div id="modalEditarServicio" class="modal hide" style="width: 500px;left: 35%;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Editar Servicio</h3>
    </div>
    <form action="" class="form-horizontal">
        <div class="modal-body">
            <fieldset>
                <div class="span3" style="margin-left:0; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="nombres">Nombres</label>
                        <div class="controls">
                            <input class="input-large" id="nombres" name="nombres" type="text">
                        </div>
                    </div>
                        <div class="control-group">
                        <label class="control-label" for="selectTipo">Tipo</label>
                        <div class="controls">
                            <select id="selectTipo" name="selectTipo" class="input-large">
                                <option></option>
                                <option></option>
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="Monto">Monto</label>
                        <div class="controls">
                            <input class="input-large" id="Monto" name="Monto" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectEstado">Estado</label>
                        <div class="controls">
                            <select id="selectError" class="input-large" id="selectEstado" name="selectEstado">
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="descripcion">Descripcion</label>
                        <div class="controls">
                            <textarea rows="4" cols="50" id="descripcion" name="descripcion">
                            </textarea>
                        </div>
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

<script type="text/javascript">
    $(document).ready(function(){
        $("#tb_servicio").dataTable({
            "oLanguage": {
                "sLengthMenu": "_MENU_ filas por pagina"
            }
        });
        /*data = $.parseJSON('<?php echo $lista_ambientes; ?>');
        $(data).
        //console.log(data);
        tb_ambiente = $("#tb_ambiente").dataTable({
            "aoColumns": [
                              { "sWidth": "25%","mDataProp": "id"},
                              { "sWidth": "25%","mDataProp": "Nombre"},
                              { "sWidth": "25%","mDataProp": "tipo"},
                              { "sWidth": "25%","mDataProp": "Nro"}
                              { "sWidth": "25%","mDataProp": "Btn_Editar"}
                              ],
                 "aaSorting": [ [0, 'asc'], [1, 'asc'] ],
            });
        tb_ambiente.fnAddData(data);*/
        
        $("#btnRegistrar").click(function(e){
            e.preventDefault();
            $.ajax({
                url:'<?php echo $ruta;?>servicio/registrar',
                type: 'POST',
                data: $('#frmServicio').serialize(),
                success:function(msj){
                    if(msj == 'guardo'){
                        jQuery.fn.reset = function(){
                            $(this).each(function(){this.reset();});
                        };
                        $("#frmServicio").reset();
                        $("#OK").modal('show');
                    }else{
                        $("#NO").modal('show');
                    }
                }
            });
        });
    });
</script>

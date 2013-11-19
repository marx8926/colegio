<?php $ruta = base_url(); ?>
<script src="<?php echo $ruta;?>recursos/js/Validacion.js"></script>
<div class="span6">
    <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">LISTAR AMBIENTE</div>
        </div>
            <div class="block-content collapse in">
                <div class="form-horizontal">
                            <br/>

                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" 
                                id="tb_ambiente">
                                <thead>
                                    <tr>
                                        <th>Ambiente</th>
                                        <th>Tipo de Ambiente</th>
                                        <th>Nro de Personas</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(count($lista_ambientes)>0):?>
                                    <?php foreach ($lista_ambientes as $la):?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $la->Nombre;?></td>
                                            <td><?php echo $la->tipo;?></td>
                                            <td ><?php echo $la->Nro;?></td>                                            
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
            <div class="muted pull-left">REGISTRAR AMBIENTE</div>
        </div>
        <div class="block-content collapse in">
            <form action="#" method="post" id="frmAmbiente" name="frmAmbiente" >
                  <div class="form-horizontal">
                         <br/>
                         <div class="control-group">
                            <label class="control-label" for="nombre">Ambiente</label>
                            <div class="controls">
                                <input class="input-large" id="nombre" name="nombre" type="text">
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="tipo">Tipo Ambiente</label>
                            <div class="controls">
                                <select id="tipo" name="tipo" class="input-large">
                                    <option value="1">Salon</option>
                                    <option value="2">Laboratorio</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="nroPersonas">Nro de personas</label>
                            <div class="controls">
                                <input class="input-small" id="nroPersonas" name="nroPersonas" type="text" onkeydown="return soloDecimal(this, event);">
                                <!--<input id="nroPersonas" name="nroPersonas" class="input-small" type="number" onkeydown="return soloDecimal(this,event);"/>-->
                            </div>
                        </div>       
                 </div>
                 <div class="modal-footer">
                    <button class="btn btn-primary" id="btnRegistrar" name ="btnRegistrar" >Registrar</button>
                    <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>

<div id="modalEditarServicio" class="modal hide" style="width: float: center;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Editar Ambiente</h3>
    </div>
    <form action="" class="form-horizontal">
        <div class="modal-body">
            <fieldset>
                <div class="span3" style="margin-left:0; width:450px;">
                    
                       <div class="control-group">
                        <label class="control-label" for="nombre">Ambiente</label>
                        <div class="controls">
                            <input class="input-large" id="nombre" name="nombre" type="text">
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="tipo">Tipo Ambiente</label>
                        <div class="controls">
                            <select id="tipo" name="tipo" class="input-large">
                                <option></option>
                                <option></option>
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="tipo">Numero de personas</label>
                        <div class="controls">
                            <input id="tipo" name="tipo" class="input-small" type="number" >
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="selectTipo">Estado</label>
                        <div class="controls">
                            <select id="selectTipo" name="selectTipo" class="input-large">
                                <option></option>
                                <option></option>
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                    </div>
                    
                </div>
                         
            </fieldset>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Guardar</button>
            <a class="btn" href="#">Cancelar</a>
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
        $("#tb_ambiente").dataTable({
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
                url:'<?php echo $ruta;?>ambiente/registrar',
                type: 'POST',
                data: $('#frmAmbiente').serialize(),
                success:function(msj){
                    if(msj == 'guardo'){
                        jQuery.fn.reset = function(){
                            $(this).each(function(){this.reset();});
                        };
                        $("#frmAmbiente").reset();
                        $("#OK").modal('show');
                    }else{
                        $("#NO").modal('show');
                    }
                }
            });
        });
    });
</script>

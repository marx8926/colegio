<?php $ruta = base_url();?>
<div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">ASIGNAR SECCION - AMBIENTE</div>
        </div>
        <div class="block-content collapse in">
            <div class="form-horizontal">
                <fieldset style="margin-top:1%;">
                    <div class="span12">
                            <div class="span3" style="margin-left:-8%;margin-right:1%">
                                <div class="control-group">
                                    <label class="control-label" for="selectNivel">Nivel</label>
                                    <div class="controls">
                                        <select id="selectNivel" name="selectNivel" class="input-medium">
                                            <?php if(count($lista_nivel)>0):
                                                foreach ($lista_nivel as $ln) :
                                            ?>
                                                <option value="<?php echo $ln->id; ?>"><?php echo $ln->nombre;?>
                                                </option>
                                            <?php endforeach;
                                                   endif; 
                                            ?>
                                        </select>    
                                    </div>
                                </div>
                            </div>
                                
                            <div class="span2" style="margin-right:1%" >
                                <div class="control-group">
                                    <label style="display: inline-block;">Ciclo&nbsp;&nbsp;</label>
                                    <select id="selectCiclo" name="selectCiclo" class="input-small" onchange="cargarGrado_byNivelCiclo()">
                                    </select>
                                </div>
                            </div>
                            <div class="span2" style="margin-left:-3%;margin-right:1%">
                                <div class="control-group">
                                    <label style="display: inline-block; margin-medium: 10px;">Grado&nbsp;&nbsp;</label>
                                    <select id="selectGrado" name="selectGrado" class="input-small" onchange="cargarSeccion_byNivelCicloGrado()">
                                    </select>
                                </div>
                            </div>
                            <div class="span3" style="margin-left:-3%;margin-right:1%">
                                <div class="control-group">
                                    <label style="display: inline-block;">Seccion&nbsp;&nbsp;</label>
                                    <select id="selectSeccion" name="selectSeccion" class="input-small">
                                    </select>
                                </div>
                            </div>

                            <div class="span4" style="margin-left:-10%;margin-right:1%">
                                <div class="control-group">
                                    <label style="display: inline-block;">Ambiente&nbsp;&nbsp;</label>
                                    <select id="selectAmbiente" name="selectAmbiente" class="input-medium">
                                       <?php if(count($lista_ambientes)>0):?>
                                        <?php foreach ($lista_ambientes as $la):?>
                                                <option value="<?php echo $la->id;?>"><?php echo $la->Nombre;?></option>
                                        <?php endforeach;?>
                                        <?php endif;?>
                                    </select>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="#" data-toggle="modal" onclick="registrar_seccion_ambiente()" class="btn btn-success"><i></i>Agregar</a>
                                </div>
                            </div>
                    </div>
                </fieldset>
            </div>

            <hr/>
            <div class="block-content collapse in">
                <div class="span12">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="tb_asignacion">
                        <thead>
                            <tr>
                                <th>Nivel</th>
                                <th>Ciclo</th>
                                <th>Grado</th>
                                <th>Sección</th>
                                <th>Ambiente</th>
                                <th>Acciones</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($lista_seccion_ambiente)>0):?>
                            <?php foreach ($lista_seccion_ambiente as $lsa):?>
                                <tr class="odd gradeX">
                                    <td><?php echo $lsa->nivel;?></td>
                                    <td><?php echo $lsa->ciclo;?></td>
                                    <td><?php echo $lsa->grado;?></td>
                                    <td><?php echo $lsa->seccion;?></td>
                                    <td><?php echo $lsa->ambiente;?></td>
                                    <td>
                                        <a href="#modalEliminarAsignacion" data-toggle="modal" class="btn btn-info"><i></i>Eliminar</a>
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
<div id="modalEditarAsignacion" class="modal hide" style="float: center;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Editar Asignacion</h3>
    </div>
    <form action="" class="form-horizontal">
        <div class="modal-body">
            <fieldset>
                 
                    <div class="control-group">
                        <label class="control-label" for="selectNivel">Nivel</label>
                        <div class="controls">
                            <select id="selectNivel" name="selectNivel" class="input-large">
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="selectCiclo">Ciclo</label>
                        <div class="controls">
                            <select id="selectCiclo" name="selectCiclo" class="input-large">
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="selectTipo">Grado</label>
                        <div class="controls">
                            <select id="selectTipo" name="selectTipo" class="input-large">
                                <option>0-2</option>
                                <option>3-5</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="selectTipo">Seccion</label>
                        <div class="controls">
                            <select id="selectTipo" name="selectTipo" class="input-large">
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                              
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="selectAmbiente">Ambiente</label>
                        <div class="controls">
                            <select id="selectAmbiente" name="selectAmbiente" class="input-large">
                                
                            </select>
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

<script>

    $(document).ready(function(){
        
        //Lista Combo Por Default
        cargarCiclo_byNivel();

        $("#tb_asignacion").dataTable({
            "oLanguage": {
                "sLengthMenu": "_MENU_ filas por pagina"
            }
        });

    });

    function registrar_seccion_ambiente(){
        var nivel = $("#selectNivel").val();
        var ciclo = $("#selectCiclo").val();
        var grado = $("#selectGrado").val();
        var seccion = $("#selectSeccion").val();
        var ambiente = $("#selectAmbiente").val();
        $.ajax({
            url:'<?php echo $ruta;?>seccion_ambiente/registrar',
            type: 'POST',
            data: "nivel="+nivel+"&ciclo="+ciclo+"&grado="+grado+"&seccion="+seccion+"&ambiente="+ambiente,
            success:function(msj){
                if(msj == 'guardo'){
                    $("#OK").modal('show');
                }else{
                    $("#NO").modal('show');
                }
            }
        });
        return false;
    }

    function cargarCiclo_byNivel(){
            var id = $("#selectNivel").val();
            var $tabla = $("#selectCiclo");
            document.getElementById("selectCiclo").innerHTML = "";
            $.ajax({
                type: 'POST',
                data: "id_nivel="+id,
                dataType: "json",
                url:'<?php echo $ruta;?>seccion_ambiente/listar_ciclo_byNivel',
                success:function(msj){
                    jQuery.each( msj, function( key, value ) {
                         $tabla.append(
                        '<option value =" '+ value["id"]  + '">'+ value["nombre"]+'</option>'
                        );
                    });
                    cargarGrado_byNivelCiclo();
                }
            });
            return false;

        }

    function cargarGrado_byNivelCiclo(){
       var nivel = $("#selectNivel").val().trim();
       var ciclo = $("#selectCiclo").val().trim();
       var $tabla = $("#selectGrado");
       document.getElementById("selectGrado").innerHTML = "";
       $.ajax({
            type: 'POST',
            data: "id_nivel="+nivel+"&id_ciclo="+ciclo,
            dataType: "json",
            url:'<?php echo $ruta;?>seccion_ambiente/listar_grado_byNivelCiclo',
            success:function(msj){
                jQuery.each( msj, function( key, value ) {
                     $tabla.append(
                    '<option value =" '+ value["id"]  + '">'+ value["nombre"]+'</option>'
                    );
                });
                cargarSeccion_byNivelCicloGrado();
            }
        });
        return false;
    }

    function cargarSeccion_byNivelCicloGrado(){
       var nivel = $("#selectNivel").val();
       var ciclo = $("#selectCiclo").val();
       var grado = $("#selectGrado").val();
       var $tabla = $("#selectSeccion");
       document.getElementById("selectSeccion").innerHTML = "";
       $.ajax({
            type: 'POST',
            data: "id_nivel="+nivel+"&id_ciclo="+ciclo+"&id_grado="+grado,
            dataType: "json",
            url:'<?php echo $ruta;?>seccion_ambiente/listar_seccion_byNivelCicloGrado',
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
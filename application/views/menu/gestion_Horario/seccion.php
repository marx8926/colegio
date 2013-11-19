<?php $ruta = base_url();?>
<div class="span6">
    <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">LISTAR SECCION</div>
            </div>
            <div class="block-content collapse in">
                <div class="form-horizontal">
                    <div class="row-fluid">
                        <div class="span6" style=" margin-left:-10%;">
                            <div class="control-group">
                                <label class="control-label" for="selectNivel">Nivel</label>
                                <div class="controls">
                                    <select id="selectNivel" name="selectNivel" class="input-medium" onchange="cargarCiclo_byNivel()">
                                        <?php if(count($lista_nivel)>0):
                                                foreach ($lista_nivel as $ln) :
                                        ?>
                                            <option value="<?php echo $ln->id; ?>"><?php echo $ln->nombre;?></option>
                                        <?php endforeach;
                                               endif; 
                                        ?>
                                    </select>
                                </div>
                            </div> 

                            <div class="control-group">
                                <label class="control-label" for="selectCiclo">Ciclo</label>
                                <div class="controls">
                                    <select id="selectCiclo" name="selectCiclo" class="input-small" onchange="cargarGrado_byNivelCiclo()" >
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="span3">
                            <div class="control-group">
                                <label class="control-label" for="selectGrado">Grado</label>
                                <div class="controls">
                                    <select id="selectGrado" name="selectGrado" class="input-small" onchange="cargarSeccion_byNivelCicloGrado()">
                                    </select>
                                </div>
                            </div>
                                                
                            <div class="control-group">
                                <label class="control-label" for="selectSeccion">Sección</label>
                                <div class="controls">
                                    <select id="selectSeccion" name="selectSeccion" class="input-small">
                                    </select>                                        
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr/>
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <thead>
                            <tr>
                                <th>Nivel</th>
                                <th>Ciclo</th>
                                <th>Grado</th>
                                <th>Sección</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($lista_secciones)>0):
                                    foreach ($lista_secciones as $ls) :
                            ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $ls->nom_nivel;?></td>
                                    <td><?php echo $ls->nom_ciclo;?></td>
                                    <td><?php echo $ls->nom_grado;?></td>
                                    <td><?php echo $ls->nombre;?></td>
                                    <td><a href="#modalEditarSeccion" data-toggle="modal" class="btn btn-success"><i></i>Editar</a>
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
</div>

<div class="span5">
    <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">REGISTRAR SECCION</div>
        </div>
        <div class="block-content collapse in">
            <form action="#" class="form-horizontal" method="post" id="frmSeccion" name="frmSeccion" >
                    <div class="control-group">
                        <label class="control-label" for="selectNivel_Seccion">Nivel</label>
                        <div class="controls">
                            <select id="selectNivel_Seccion" name="selectNivel_Seccion" class="input-large" onchange="cargarCiclo_byNivel_Seccion()">
                                <?php if(count($lista_nivel)>0):
                                        foreach ($lista_nivel as $ln) :
                                ?>
                                    <option value="<?php echo $ln->id; ?>"><?php echo $ln->nombre;?></option>
                                <?php endforeach;
                                       endif; 
                                ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="selectCiclo_Seccion">Ciclo</label>
                        <div class="controls">
                            <select id="selectCiclo_Seccion" name="selectCiclo_Seccion" class="input-large" onchange="cargarGrado_byNivelCiclo_Seccion()">
                            </select>
                        </div>
                    </div>
                                
                    <div class="control-group">
                        <label class="control-label" for="selectGrado_Seccion">Grado</label>
                        <div class="controls">
                            <select id="selectGrado_Seccion" name="selectGrado_Seccion" class="input-large">
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="seccion">Sección</label>
                        <div class="controls">
                            <input type="text" id="seccion" name="seccion" class="input-medium">
                        </div>
                    </div>

                 <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-primary" id="btnRegistrar" name="btnRegistrar" >Registrar</button>
                    <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>

<div id="modalEditarSeccion" class="modal hide" style="width: float: center;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Editar Sección</h3>
    </div>
    <form action="" class="form-horizontal">
        <div class="modal-body">
            <fieldset>
                <div class="span3" style="margin-left:0; width:450px;">
                     
                        <div class="control-group">
                        <label class="control-label" for="selectTipo">Nivel</label>
                        <div class="controls">
                            <select id="selectTipo" name="selectTipo" class="input-large">
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="selectTipo">Grado</label>
                        <div class="controls">
                            <select id="selectTipo" name="selectTipo" class="input-large">
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="selectTipo">Ciclo</label>
                        <div class="controls">
                            <select id="selectTipo" name="selectTipo" class="input-large">
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="tipo">Sección</label>
                        <div class="controls">
                            <input type="text" id="seccion_edit" name="seccion_edit" class="input-medium">
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="selectTipo">Estado</label>
                        <div class="controls">
                            <select id="selectTipo" name="selectTipo" class="input-large">
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
        cargarCiclo_byNivel_Seccion();

        $("#tb_asignacion").dataTable({
            "oLanguage": {
                "sLengthMenu": "_MENU_ filas por pagina"
            }
        });


        $("#btnRegistrar").click(function(e){
            e.preventDefault();
            var nombre = $("#nivel").val();
            $.ajax({
                url:'<?php echo $ruta;?>seccion/registrar',
                type: 'POST',
                data: $('#frmSeccion').serialize(),
                success:function(msj){
                    if(msj == 'guardo'){
                        $("#OK").modal('show');
                        document.getElementById("seccion").value="";
                    }else{
                        $("#NO").modal('show');
                    }
                }
            });
        });

    });

    function cargarCiclo_byNivel(){
            var id = $("#selectNivel").val();
            var $tabla = $("#selectCiclo");
            document.getElementById("selectCiclo").innerHTML = "";
            $.ajax({
                type: 'POST',
                data: "id_nivel="+id,
                dataType: "json",
                url:'<?php echo $ruta;?>seccion/listar_ciclo_byNivel',
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

    function cargarCiclo_byNivel_Seccion(){
        var nivel = $("#selectNivel_Seccion").val();
        var $tabla = $("#selectCiclo_Seccion");
        document.getElementById("selectCiclo_Seccion").innerHTML = "";
        $.ajax({
            type: 'POST',
            data: "id_nivel="+nivel,
            dataType: "json",
            url:'<?php echo $ruta;?>seccion/listar_ciclo_byNivel',
            success:function(msj){
                jQuery.each( msj, function( key, value ) {
                     $tabla.append(
                    '<option value =" '+ value["id"]  + '">'+ value["nombre"]+'</option>'
                    );
                });
                cargarGrado_byNivelCiclo_Seccion();
            }
        });
        return false;

    }

    function cargarGrado_byNivelCiclo(){
       var nivel = $("#selectNivel").val();
       var ciclo = $("#selectCiclo").val();
       var $tabla = $("#selectGrado");
       document.getElementById("selectGrado").innerHTML = "";
       $.ajax({
            type: 'POST',
            data: "id_nivel="+nivel+"&id_ciclo="+ciclo,
            dataType: "json",
            url:'<?php echo $ruta;?>seccion/listar_grado_byNivelCiclo',
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

    function cargarGrado_byNivelCiclo_Seccion(){
       var nivel = $("#selectNivel_Seccion").val();
       var ciclo = $("#selectCiclo_Seccion").val();
       var $tabla = $("#selectGrado_Seccion");
       document.getElementById("selectGrado_Seccion").innerHTML = "";
       $.ajax({
            type: 'POST',
            data: "id_nivel="+nivel+"&id_ciclo="+ciclo,
            dataType: "json",
            url:'<?php echo $ruta;?>seccion/listar_grado_byNivelCiclo',
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

    function cargarSeccion_byNivelCicloGrado(){
       var nivel = $("#selectNivel").val().trim();
       var ciclo = $("#selectCiclo").val().trim();
       var grado = $("#selectGrado").val().trim();
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
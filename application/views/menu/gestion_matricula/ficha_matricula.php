<?php $ruta = base_url();?>
<div class="row-fluid">
<!-- block -->
<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">FICHA MATRÍCULA</div>
        <a class="btn" href="#modalRegistrarFichMatri" data-toggle="modal" style="float: right;"><i class="icon-plus"></i></a>
    </div>
    <div class="block-content collapse in">
                <div id="asignacion" class="tab-pane active">
                    <div class="form-horizontal">
                        <fieldset>
                            <div class="span12">
                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Codigo</label>
                                    <div class="controls">
                                        <input class="input-medium" id="focusedInput" type="text">
                                    </div>
                               </div>
                           <div>    
                           <div class="span2">  
                                <div class="control-group">
                                    <label class="control-label" for="fec_reg">Fecha</label>
                                    <div class="controls">
                                        <input class="input-medium datepicker" id="fec_reg" name="fec_reg" type="text">
                                    </div>
                                </div>
                            </div>  
                            <div class="span10">
                                <div class="control-group">
                                    <label class="control-label" for="fec_reg">a&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <input class="input-medium datepicker" id="fec_reg" name="fec_reg" type="text">
                                    <button class="btn" style="margin-left:8px;">Buscar</button>
                                </div>
                            </div> 
                        </fieldset>
                    </div>
                    <hr/>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>Codigo Matricula</th>
                                        <th>Alumno</th>
                                        <th>Fecha de Registro</th>
                                        <th>Situación</th>  
                                        <th>Año Lectivo</th>
                                        <th>Nivel</th>          
                                        <th>Grado</th>
                                        <th>Seccion</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(count($lista_matricula)>0):
                                             foreach ($lista_matricula as $lm):?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $lm->codigo;?></td>
                                            <td><?php echo $lm->alumno;?></td>
                                            <td><?php echo $lm->fechaRegistro;?></td>
                                            <td><?php echo $lm->Situacion;?></td>
                                            <td><?php echo $lm->anioElectivo;?></td>
                                            <td><?php echo $lm->nivel;?></td>
                                            <td><?php echo $lm->grado;?></td>
                                            <td><?php echo $lm->seccion;?></td>
                                            <td><a href="#modalEditarFichMatri" data-toggle="modal" class="btn btn-success"><i></i>Editar</a>
                                               <a href="#modalVerFichMatri" data-toggle="modal" class="btn btn-info"><i></i>Ver</a>
                                            </td>
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
</div>
<!-- /block -->

<!--MODALS******************************/ -->
<div id="modalEditarFichMatri" class="modal hide" style="width: 950px;left: 35%;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Editar Ficha Matrícula</h3>
    </div>
    <form action="" class="form-horizontal">
        <div class="modal-body">
          <div class="span5" style="margin-left:0; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="nombres">Nombres</label>
                        <div class="controls">
                            <input class="input-large" id="nombres" name="nombres" type="text">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="selecttipo">Tipo</label>
                        <div class="controls">
                            <select id="selectError" class="input-large" id="selecttipo" name="selecttipo">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectNivel">Nivel</label>
                        <div class="controls">
                            <select id="selectNivel" class="input-large" name="selectNivel">
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
                        <label class="control-label" for="selectGrado">Grado</label>
                        <div class="controls">
                            <select id="selectGrado" class="input-large" name="selectgrado">
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

                </div>
                <div class="span5" style="margin-left:0; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="apellidos">Apellidos</label>
                        <div class="controls">
                            <input class="input-large" id="apellidos" name="apellidos" type="text">
                        </div>
                    </div>
                 
                 
                      <div class="control-group">
                        <label class="control-label" for="selectSitua">Situacion</label>
                        <div class="controls">
                            <select id="selectError" class="input-large" id="selectSitua" name="selectSitua">
                                <option></option>
                                <option></option>
                                <option></option>
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                    </div>
                  
                
                     <div class="control-group">
                        <label class="control-label" for="selectanolectivo">Año Lectivo</label>
                        <div class="controls">
                            <select id="selectError" class="input-large" id="selectanolectivo" name="selectanolectivo">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                    </div>

                      
                      <div class="control-group">
                        <label class="control-label" for="selectCiclo">Ciclo</label>
                        <div class="controls">
                            <select class="input-large" id="selectCiclo" name="selectCiclo">
                            </select>
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label" for="selectSeccion">Seccion</label>
                        <div class="controls">
                            <select class="input-large" id="selectSeccion" name="selectSeccion">
                            </select>
                        </div>
                    </div
                
               
                    <div class="modal-footer">
                    </div>
            </div>
             <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-primary" type="submit">Guardar</button>
            <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
        </div>
    </form>
</div> 
   
     <!-- **************************************************************************************** -->
<div id="modalRegistrarFichMatri" class="modal hide" style="width: 950px;left: 35%;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Registrar Ficha Matrícula</h3>
    </div>
    <form action="#" class="form-horizontal" id="frmFichaMatricula" name="frmFichaMatricula">
        <div class="modal-body">
            <fieldset>
              <div class="span5" style="margin-left:0; width:450px;">
                    <div class="control-group">
                        <label class="control-label" for="dni_alumno">Documento</label>
                        <div class="controls">
                            <input class="input-small" id="dni_alumno" name="dni_alumno" type="text">
                            <button class="btn btn-success" id="busc_dni" name="busc_dni">Buscar</button>
                        </div>
                    </div>
                
                    <div class="control-group">
                        <label class="control-label" for="selecttipo_r">Tipo</label>
                        <div class="controls">
                            <select class="input-large" id="selecttipo_r" name="selecttipo_r">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectnivel">Nivel</label>
                        <div class="controls">
                            <select id="selectNivel_r" class="input-large" name="selectNivel_r" onchange="cargarCiclo_byNivel();">
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
                        <label class="control-label" for="selectGrado_r">Grado</label>
                        <div class="controls">
                            <select  class="input-large" id="selectGrado_r" name="selectGrado_r" onchange="cargarSeccion_byNivelCicloGrado();">
                            </select>
                        </div>
                    </div>
            </div>
                <div class="span5" style="margin-left:0; width:450px;"> 
                    <div class="control-group">
                        <label class="control-label" for="alumno">Alumno</label>
                        <div class="controls">
                            <input class="input-large" id="alumno" name="alumno" type="text" disabled>
                        </div>
                    </div>
                 
                    <div class="control-group">
                        <label class="control-label" for="selectSituacion_r">Situacion</label>
                        <div class="controls">
                            <select class="input-large" id="selectSituacion_r" name="selectSituacion_r">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>

                     <div class="control-group">
                        <label class="control-label" for="selectanioelectivo_r">Año Lectivo</label>
                        <div class="controls">
                            <select class="input-large" id="selectanioelectivo_r" name="selectanioelectivo_r">
                                    <?php if(count($lista_anioElectivo)>0):
                                            foreach ($lista_anioElectivo as $lae) :
                                    ?>
                                        <option value="<?php echo $lae->id;?>"><?php echo $lae->Anio;?></option>
                                    <?php endforeach;
                                           endif; 
                                    ?>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="selectCiclo_r">Ciclo</label>
                        <div class="controls">
                            <select class="input-large" id="selectCiclo_r" name="selectCiclo_r" onchange="cargarGrado_byNivelCiclo()">
                            </select>
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label" for="selectSeccion_r">Seccion</label>
                        <div class="controls">
                            <select class="input-large" id="selectSeccion_r" name="selectSeccion_r">
                            </select>
                        </div>
                    </div
                  
                    </div>
              
            </fieldset>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-primary" id="RegistrarMatricula" name="RegistrarMatricula" >Registrar</button>
            <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
        </div>
    </form>
</div>

<!-- **************************************************************************************** -->
   <div id="modalVerFichMatri" class="modal hide" style="width: 950px;left: 35%;">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">&times;</button>
        <h3>Datos Ficha Matrícula</h3>
    </div>
    <form action="" class="form-horizontal" >
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
                        <label class="control-label" for="fec_regi">Fecha de Registro</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">12/12/2013</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selecttipo">Tipo</label>
                        <div class="controls">
                            <span class="input-large uneditable-input"> </span>
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label" for="selectnivel">Nivel</label>
                        <div class="controls">
                            <span class="input-large uneditable-input"> </span>
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label" for="selectgrado">Grado</label>
                        <div class="controls">
                            <span class="input-large uneditable-input"> </span>
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
                        <label class="control-label" for="selectSitua">Situacion</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">Ingresantes</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectanolectivo">Año Lectivo</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">2013-1</span>
                        </div>
                    </div>
              
                   
                    <div class="control-group">
                        <label class="control-label" for="selectciclo">Ciclo</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">x</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectseccion">Seccion</label>
                        <div class="controls">
                            <span class="input-large uneditable-input">x</span>
                        </div>
                    </div>
                  
                </div>

         <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                        <thead>
                                            <tr >
                                                <th>Curso</th>
                                                <th>Docente</th>
                                                <th>Hora Ingreso</th>
                                                <th>Hora Fin</th>
                                                <th>Ambiente</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>Ingles</td>
                                                <td>xxxxxxx</td>
                                                <td>7:00 am</td>
                                                 <td>1:00 pm</td>
                                                  <td>E-301</td>
                                            </tr>
                                        </tbody>
                                    </table>
          
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
        
        cargarCiclo_byNivel();
        
        $(".datepicker").datepicker();
        
        //Buscar Alumno
        $("#busc_dni").click(function(e){
            e.preventDefault();
            var doc = $("#dni_alumno"). val();
            $.ajax({
                url:'<?php echo $ruta;?>alumno/buscar_byDni',
                type: 'POST',
                dataType: "json",
                data: "doc="+doc,
                success:function(msj){
                    jQuery.each( msj, function( key, value ) {
                        document.getElementById('alumno').value=value["nombre"]+", "+value["apellido"];
                    });
                }
            });
        });
        
        //RegistrarAlumno
        $("#RegistrarMatricula").click(function(e){
            e.preventDefault();
            var doc = $("#dni_alumno"). val();
            $.ajax({
                url:'<?php echo $ruta;?>matricula/registrar',
                type: 'POST',
                data: $('#frmFichaMatricula').serialize(),
                success:function(msj){
                    if(msj == 'guardo'){
                        $("#OK").modal('show');
                    }else{
                        $("#NO").modal('show');
                    }
                }
            });
        });


        //-----------------------------------------------
    });

    function cargarCiclo_byNivel(){
        var id = $("#selectNivel_r").val();
        var $tabla = $("#selectCiclo_r");
        document.getElementById("selectCiclo_r").innerHTML = "";
        $.ajax({
            type: 'POST',
            data: "id_nivel="+id,
            dataType: "json",
            url:'<?php echo $ruta;?>matricula/listar_ciclo_byNivel',
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
       var nivel = $("#selectNivel_r").val();
       var ciclo = $("#selectCiclo_r").val();
       var $tabla = $("#selectGrado_r");
       document.getElementById("selectGrado_r").innerHTML = "";
       $.ajax({
            type: 'POST',
            data: "id_nivel="+nivel+"&id_ciclo="+ciclo,
            dataType: "json",
            url:'<?php echo $ruta;?>matricula/listar_grado_byNivelCiclo',
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
       var nivel = $("#selectNivel_r").val().trim();
       var ciclo = $("#selectCiclo_r").val().trim();
       var grado = $("#selectGrado_r").val().trim();
       var $tabla = $("#selectSeccion_r");
       document.getElementById("selectSeccion_r").innerHTML = "";
       $.ajax({
            type: 'POST',
            data: "id_nivel="+nivel+"&id_ciclo="+ciclo+"&id_grado="+grado,
            dataType: "json",
            url:'<?php echo $ruta;?>matricula/listar_seccion_byNivelCicloGrado',
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
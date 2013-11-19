<?php $ruta = base_url();?>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12" id="content">
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"></div>
                                <!--<a class="btn" href="#modalRegistrar" data-toggle="modal" style="float: right;"><i class="icon-plus"></i></a>-->
                            </div>
                            <div class="block-content collapse in">
                                <div class="form-horizontal">
                                    <fieldset>
                                        <div class="span12">
										     
                                            <legend align="center">Buscar USUARIO</legend>
											
											
											
                                            <div class="control-group">
                                                <label class="control-label" for="focusedInput">Nombre y Apellido</label>
                                                <div class="controls">
                                                    <input class="input-xlarge" id="focusedInput" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6" style="margin-left:0;">
                                            <div class="control-group">
                                                <label class="control-label">Tipo</label>
                                                <div class="controls">
                                                    <select id="selectError" class="input-xlarge">
                                                        <option></option>
                                                        <option></option>
                                                        <option></option>
                                                        <option></option>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                   
								   <button class="btn" style="margin-left:10px;">Buscar</button>
								   </fieldset>
                                </div>
                                <div class="span12" style="margin-left:0;">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="tb_Usuario">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombres y Apellidos</th>
                                                <th> Tipo </th>
                                                
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(count($listar_usuarios)>0):
                                                foreach ($listar_usuarios as $lu) :
                                        ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $lu->id; ?></td>
                                                <td><?php echo $lu->nombre." ". $lu->apellido; ?></td>
                                                <td> <?php if($lu->tipo == 1)
                                                    echo "Alumno";
                                                    else echo "Trabajador";
                                                ?> </td>
                                                <td>
                                                    <?php if($lu->ExisteUsuario ==0)
                                                        { ?>
                                                           <a  data-toggle="modal" onclick="registrarUsuario('<?php echo $lu->id;?>', <?php echo $lu->tipo;?>)" class="btn btn-success"><i></i>Crear Usuario</a>
                                                           
                                                        <?php }
                                                            else
                                                        { ?>
                                                            <a onclick="editarUsuario('<?php echo $lu->id; ?>', <?php echo $lu->tipo; ?>)" data-toggle="modal" class="btn btn-info"><i></i>Editar</a>
                                                        <?php }

                                                    ?>
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
                    <!-- /block -->
                </div>
            </div>
            <hr>
            
        </div>
        <!--/.fluid-container-->
        
        <!--MODALS******************************/ -->
        <div id="modalCrearUsuario" class="modal hide" style="float: center;">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">&times;</button>
                <h3 align="center">REGISTRAR USUARIO</h3>
            </div>
            <form action="" class="form-horizontal" id="usuarioform" name="usuarioform" method="post">
                <div class="modal-body">
                    <input type="hidden" id="userIdhidden" name="userIdhidden">
                    <input type="hidden" id="userTypehidden" name="userTypehidden">

                    <fieldset>
                        <div class="span5" style="margin-left:0; width:450px;">
                            <div class="control-group">
                                <label class="control-label" for="nombre">Usuario</label>
                                <div class="controls">
                                    <input class="input-large" id="nombre" name="nombre" type="text">
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label" for="password">Password</label>
                                <div class="controls">
                                    <input class="input-large" id="password" name="password" type="password">
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label" for="Conf_pass">Confirmar Password</label>
                                <div class="controls">
                                    <input class="input-large" id="Conf_pass" name="Conf_pass" type="password">
                                </div>
                            </div>
							<!--<div class="control-group">
                                <label class="control-label" for="selectEst">Estado</label>
                                <div class="controls">
                                    <select id="selectEst" name="selectEst" class="input-large">
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>-->
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-primary" id="btnRegistrar" name="btnRegistrar" >Guardar</button>
					<a data-dismiss="modal" class="btn" href="#">Cancelar</a>
                   
                </div>
            </form>
        </div>
        <!-- **************************************************************************************** -->
        <div id="modalEditarUsuario" class="modal hide" style="float: center;">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">&times;</button>
                <h3 align="center">EDITAR USUARIO</h3>
            </div>
            <form action="" class="form-horizontal" id="editarUsuarioForm" name="editarUsuarioForm" method="post">
                <div class="modal-body">
                    <fieldset>
                              <div class="row-fluid">
                        <!-- block -->
                       <!-- <div class="block">
                            <!div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"></div>
                                <a class="btn" href="#modalRegistrarDocente" data-toggle="modal" style="float: right;"><i class="icon-plus"></i></a>
                            </div>-->

                            <input type="hidden" id="idtabla" name="idtabla"> 
                            <input type="hidden" id="tipotabla" name="tipotabla">
                            <input type="hidden" id="idusuario" name="idusuario">

                            <div class="block-content collapse in">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#editar" data-toggle="tab">Editar</a>
                                    </li>
                                    <li>
                                        <a href="#Perfiles" data-toggle="tab">Perfiles</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="editar" class="tab-pane active">
                                        <div class="form-horizontal">
                                            <fieldset>
                                              <div class="control-group">
                                <label class="control-label" for="nombre">Usuario</label>
                                <div class="controls">
                                    <input class="input-large" id="nombreE" name="nombreE" type="text">
                                </div>
                            </div>
                            
                             <div class="control-group">
                                <label class="control-label" for="password">Password</label>
                                <div class="controls">
                                    <input class="input-large" id="passwordE" name="passwordE" type="password">
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <label class="control-label" for="confpassE">Confirmar Password</label>
                                <div class="controls">
                                    <input class="input-large" id="confpassE" name="confpassE" type="password">
                                </div>
                            </div>
                                                        
                           
                            
                            <div class="control-group">
                                <label class="control-label" for="selectEst">Estado</label>
                                <div class="controls">
                                    <select id="selectEst" name="selectEst" class="input-large">
                                        <option value='1'>Activo</option>
                                        <option value='0'> Inactivo</option>
                                       
                                    </select>
                                </div>
                            </div>
                                            </fieldset>
                                        </div>
                                    </div>
                            <div id="Perfiles" class="tab-pane">
                                        <div class="span12" style="margin-left:0;">
                                            <div class="control-group">
                                                <label class="control-label" for="optionsCheckbox">Administrador</label>
                                                <div class="controls">
                                                    <label class="uniform">
                                                    <input class="uniform_on" type="checkbox" id="optionsCheckbox" value="option1">
                                                </label>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="optionsCheckbox">Administrador</label>
                                                <div class="controls">
                                                    <label class="uniform">
                                                    <input class="uniform_on" type="checkbox" id="optionsCheckbox" value="option1">
                                                </label>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="optionsCheckbox">Administrador</label>
                                                <div class="controls">
                                                    <label class="uniform">
                                                    <input class="uniform_on" type="checkbox" id="optionsCheckbox" value="option1">
                                                </label>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="optionsCheckbox">Administrador</label>
                                                <div class="controls">
                                                    <label class="uniform">
                                                    <input class="uniform_on" type="checkbox" id="optionsCheckbox" value="option1">
                                                </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                        <!--<div class="span5" style="margin-left:0; width:450px;">
                            <div class="control-group">
                                <label class="control-label" for="nombre">Usuario</label>
                                <div class="controls">
                                    <input class="input-large" id="nombre" name="nombre" type="text">
                                </div>
                            </div>
                            
							 <div class="control-group">
                                <label class="control-label" for="password">Password</label>
                                <div class="controls">
                                    <input class="input-large" id="password" name="password" type="text">
                                </div>
                            </div>
							
                            <div class="control-group">
                                <label class="control-label" for="ConfPass">Confirmar Password</label>
                                <div class="controls">
                                    <input class="input-large" id="ConfPass" name="ConfPass" type="text">
                                </div>
                            </div>
                                                        
                           
                            
                            <div class="control-group">
                                <label class="control-label" for="selectEst">Estado</label>
                                <div class="controls">
                                    <select id="selectEst" name="selectEst" class="input-large">
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                         
                          
                        </div>-->
                        
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-primary" id="btnEditar">Guardar</button>
					<a class="btn" href="#">Cancelar</a>
                    <!--<a data-dismiss="modal" class="btn" href="#">Cancelar</a>-->
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
            $(function() {
                $(".datepicker").datepicker();
            });

            function registrarUsuario(id,tipo){
                    document.getElementById('userIdhidden').value=id;
                    document.getElementById('userTypehidden').value=tipo;
                    $("#modalCrearUsuario").modal('show');
            }

            function editarUsuario(id, tipo)
            {
                $("#idtabla").val(id);
                $("#tipotabla").val(tipo);


                $.ajax({
                    url:'<?php echo $ruta;?>'+'usuario/buscar_id',
                    type: 'POST',
                    dataType: "json",
                    data: "id="+id+"&tipo="+tipo,
                    success:function(msj){

                        jQuery.each(msj,function(key, value){
                            $("#idusuario").val(value['id']);
                            $("#nombreE").val(value['usuario']);
                            $("#passwordE").val(value['password']);
                            $("#confpassE").val(value['password']);

                            $("#selectEst").val(value['estado'])
                        });
                        $("#modalEditarUsuario").modal('show');
                    }
                });

                return false;

            }

            $("#btnRegistrar").click(function(e){
                     e.preventDefault();
 
                     $.ajax({
                         url:'<?php echo $ruta;?>usuario/registrar',
                         type: 'POST',
                         data: $('#usuarioform').serialize(),
                         success:function(msj){
                         if(msj == 'guardo'){
                             $("#OK").modal('show');
                            document.getElementById("userTypehidden").value="";
                             $("#userIdhidden").val("");
 
                         }else{
                             $("#NO").modal('show');
                         }
                     }
                    });
            });

            $("#btnEditar").click(function(e){
                     e.preventDefault();
 
                     $.ajax({
                         url:'<?php echo $ruta;?>usuario/editar',
                         type: 'POST',
                         data: $('#editarUsuarioForm').serialize(),
                         success:function(msj){
                         if(msj == 'guardo'){
                             $("#OK").modal('show');

                             $("#idtabla").val("");
                            $("#tipotabla").val("");
                             $("#userIdhidden").val("");
                             $("#idusuario").val("");
                            $("#nombreE").val("");
                            $("#passwordE").val("");
                            $("#confpassE").val("");

                            $("#selectEst").val("")
 
                         }else{
                             $("#NO").modal('show');
                         }
                     }
                    });
            });


            $(document).ready(function(){


            });
        </script>
    </body>
</html>
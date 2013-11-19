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
                                                <td>
                                                    <?php if($lu->ExisteUsuario ==1)
                                                        { ?>
                                                           <a href="#modalCrearUsuario" data-toggle="modal" class="btn btn-success"><i></i>Crear Usuario</a>
                                                           
                                                        <?php }
                                                            else
                                                        { ?>
                                                            <a href="#modalEditarUsuario" data-toggle="modal" class="btn btn-info"><i></i>Editar</a>
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
            <form action="" class="form-horizontal">
                <div class="modal-body">
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
                    <button data-dismiss="modal" class="btn btn-primary" type="submit">Guardar</button>
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
            <form action="" class="form-horizontal">
                <div class="modal-body">
                    <fieldset>
                              <div class="row-fluid">
                        <!-- block -->
                       <!-- <div class="block">
                            <!div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"></div>
                                <a class="btn" href="#modalRegistrarDocente" data-toggle="modal" style="float: right;"><i class="icon-plus"></i></a>
                            </div>-->
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
                    <button data-dismiss="modal" class="btn btn-primary" type="submit">Guardar</button>
					<a class="btn" href="#">Cancelar</a>
                    <!--<a data-dismiss="modal" class="btn" href="#">Cancelar</a>-->
                </div>
            </form>
        </div>

       
        <script>
            $(function() {
                $(".datepicker").datepicker();
            });
        </script>
    </body>
</html>
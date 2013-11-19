<?php $ruta = base_url(); ?>
<!DOCTYPE html>
<html class="no-js" lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <!-- Bootstrap -->
        <link href="<?php echo $ruta;?>recursos/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo $ruta;?>recursos/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo $ruta;?>recursos/assets/styles.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="<?php echo $ruta;?>recursos/assets/login.css">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo $ruta;?>recursos/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <style>
            body{padding-top:20px;}
        </style>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Sistema Colegio</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div id="login-wraper">
                <form class="form login-form" id="frmLogin" name="frmLogin" action="#">
                    <legend>Iniciar Sesión</legend>
                    <div class="body">
                        <label>Usuario</label>
                        <input type="text" name="usuario" id="usuario" value="USERPRUEBA">
                        
                        <label>Contraseña</label>
                        <input type="password" name="password" id="password" value="12345678">
                    </div>
                    <div class="footer">
                        <button class="btn btn-success" id="btnlogin" name="btnlogin">Entrar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal hide" id="msj">
		  <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal">&times;</button>
		    <h3>Alerta..!!</h3>
		  </div>
		  <div class="modal-body">
		    <p>Usuario o clave incorrecta, por favor vuelva a intentar</p>
		  </div>
		  <div class="modal-footer">
		    <a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
		  </div>
		</div>

        <script src="<?php echo $ruta;?>recursos/vendors/jquery-1.9.1.js"></script>
        <script src="<?php echo $ruta;?>recursos/js/bootstrap.min.js"></script>
        <script src="<?php echo $ruta;?>recursos/assets/scripts.js"></script>
        <script type="text/javascript">
			$(document).ready(function(){
				$("#btnlogin").click(function(event){
					event.preventDefault();		
				    $.ajax({
				    	type: "POST",
				        data: $('#frmLogin').serialize(),
				        url:"<?php echo $ruta;?>"+"login/validar_login",
				        success: function(msj){
				        	if(msj == 'ok'){
								window.location.href = "<?php echo $ruta;?>"+"menu/";
							}else{
								$('#msj').modal('show');	
							}
				        }
				    });
				});	
			});
		</script>

    </body>
</html>
<?php include "modulos/config.php"; ?>
     <?php $titulo  = "Bienvenido "; $mostrarMenu = false; include 'modulos/componentes/header.php';?>
        <div class="row" style="margin-right: 0;">
            <div class="col-6">
                <img class="float-right"  src="img/drop.png" style="margin-top:4rem;height: 30rem;width: 30rem;" alt="">
            </div>
            <div class="col-6" style="margin-top:9rem;">
                <div class="card" style="width: 25rem;margin-left:5rem;" >
                    <div class="card-header h4">
                        Inicia Sesion 
                        <!-- Button trigger modal -->
                        <div class="ml-5 float-right">
                                <button type="button" class="btn  btn-raised btn-outline-dark font-family float-right" data-toggle="modal"
                                    data-target="#exampleModalLong">
                                    Crear Cuenta
                                </button>
                        </div>
                    </div>
                    
                    <form id="loginUser" class="login-validation" novalidate class="mb-0">
                        <div class="row">
                            <div class="col-9 mt-4 ml-5">
                                <input type="text" style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;" name="correoTelefonoLogin" class="form-control" required placeholder="Correo electrónico o teléfono" >
                                <div class="invalid-tooltip">
                                    Por favor ingresa tu correo o tu telefono.
                                </div>
                            </div>
                            <div class="col-9 mt-4 ml-5">
                                <input type="password" style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;" name="paswordLogin"  class="form-control" required placeholder="Contraseña" >
                                <div class="invalid-tooltip">
                                    Por favor ingresa tu contraseña.
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <button class="btn  btn-raised btn-outline-dark float-right mr-3">Entrar</button>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
            <!-- Modal -->
       <div class="modal fade" id="exampleModalLong"  tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title font-weight-bold h2" id="exampleModalLongTitle">Registrate</h1>                                                
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!--form-->
                                                <div class="container-fluid">
                                            <div class="alert alert-success mt-4" id="respuestaCorrecta" role="alert">

                                            </div>
                                            <div class="alert alert-danger" id="respuestaErronea"  role="alert">
                                            </div>
                                                    <form class="needs-validation" novalidate id="registrar">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <input required type="text"
                                                                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                                                class="form-control" name="nombre" id="nombre"
                                                                placeholder="Nombre">
                                                            <div class="invalid-tooltip">
                                                                Por favor ingresa el nombre.
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <input required type="text"
                                                                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                                                class="form-control " name="apellido" id="apellido"
                                                                placeholder="Apellido">
                                                            <div class="invalid-tooltip">
                                                                Por favor ingresa el apellido.
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <input required type="text" class="form-control  mt-3"
                                                                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                                                name="numeroOCorreo" placeholder="Número celular o correo electrónico">
                                                            <div class="invalid-tooltip">
                                                                Por favor ingresa un correo o telefono.
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <input required type="password" class="form-control  mt-3"
                                                                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;" name="password"
                                                                placeholder="password">
                                                            <div class="invalid-tooltip">
                                                                Por favor ingresa tu password.
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button class="btn btn-raised btn-outline-dark mt-3">Registrarte</button>
                                                        </div>
                                                    </div>
                                                </form>
    </div>    
<script>
    var raiz = "<?php echo $raizN;?>";
</script>
<script src="<?php echo $raizN;?>js/login-usuario.js"></script>
<script src="<?php echo $raizN;?>js/registro-usuario.js"></script>                                 
                             
                                                <!--end form-->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
       
<?php include 'modulos/componentes/footer.php'; ?>
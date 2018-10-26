<div class="container-fluid" id="contenedor-general-login">
    <div class="row" >
        <div class="col-sm-12">
            <div class="contenedor-general-logueo">
                <div class="contenedor-logueo">
                    <div class="contenedor-capsula-logueo">
                        <div class="contenedor-cabeza-logueo">
                            <h1 class="titulo-principal-form">App Movilizate</h1>
                            <i class="fas fa-car"></i>
                        </div>  
                        <form class="logueo-form validacion-formulario">
                            <div class="form-group">
                                <div class="form-general-input validacion-input" data-validate="Email valido es: x@ejemplo.co">
                                    <input type="email" class="form-control-login" id="email" name="email">
                                    <span class="focus-input" data-placeholder="email"></span>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-general-input validacion-input" data-validate="clave invalida">					
                                    <span class="btn-show-pass">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                    <input type="password" class="form-control-login" id="pwd" name="pass">
                                    <span class="focus-input" data-placeholder="Password" ></span>
                                </div>	

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Ingresar</button>
                            </div>							
                            <div class="form-general-texto">
                                <span class="txt1"> no tienes una cuenta?
                                    <a href="<?php echo base_url() ?>login/registro" class="btn-inscribete">Inscribete</a>
                                </span>
                            </div>

                            <!--<div class="form-group">
                                    <button type="button" class="btn btn-primary">Facebook</button>

                                    <button type="button" class="btn btn-primary">Gmail</button>
                            </div>	-->

                        </form>

                    </div>

                </div>
            </div>	
        </div>
    </div>
</div>
<script src="<?php echo base_url() ?>public/js/effectos-login.js"></script>

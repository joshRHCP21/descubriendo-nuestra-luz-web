<?php include('inc/header.php') ?>  
<div class="site-blocks-cover inner-page overlay" style="background-image: url(assets/images/contacto-00.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="row align-items-center justify-content-center">
    <div class="col-md-5 text-center" data-aos="fade">
        <h1 class="text-uppercase">Contáctanos</h1>          
    </div>
    </div>
</div> 
<div class="slant-1"></div>
    
<div class="site-section first-section" data-aos="fade">
    <div class="container">
    <div class="row">
    
        <div class="col-md-12 col-lg-8 mb-5">
            <form action="#" class="p-5 bg-white">
                <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="fullname">Nombre Completo</label>
                    <input type="text" id="fullname" class="form-control" placeholder="Nombre Completo">
                </div>
                </div>
                <div class="row form-group">
                <div class="col-md-12">
                    <label class="font-weight-bold" for="email">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Email">
                </div>
                </div>


                <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="phone">Nro. Celular</label>
                    <input type="text" id="phone" class="form-control" placeholder="Nro. Celular">
                </div>
                </div>

                <div class="row form-group">
                <div class="col-md-12">
                    <label class="font-weight-bold" for="message">Mensaje</label> 
                    <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Cuerpo de mensaje"></textarea>
                    <label class="checkbox-inline">
                        <input type="checkbox" class="Intereses" id="Intereses" value="Acepto la política de protección de datos"> Acepto la política de protección de datos
                    </label>
                    <p>
                        <a href="terminos-y-condiciones.php" target="_blank"><span style="color:#00C; text-decoration:underline; font-size:11px;">Términos y condiciones</span></a>
                    </p>
                </div>
                </div>

                <div class="row form-group">
                <div class="col-md-12">
                    <input type="submit" value="Enviar Mensaje" class="btn btn-primary text-white px-4 py-2">
                </div>
                </div>


            </form>
        </div>

        <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
                <h3 class="h5 text-black mb-3">Información de Contacto</h3>
                <p class="mb-0 font-weight-bold">Dirección</p>
                <p class="mb-4">Lima-Perú</p>

                <p class="mb-0 font-weight-bold">Número de Celular</p>
                <p class="mb-4"><a href="#">9875-51986</a></p>

                <p class="mb-0 font-weight-bold">Email</p>
                <p class="mb-0"><a href="#">terapias@descubriendonuestraluz.com</a></p>

            </div>
            <div class="p-4 mb-3 bg-white">
                <h4 class="h5 text-black mb-3">Puedes encontrarnos en Facebook</h4>
                <div class="social-media-container">
                <iframe 
                    src="https://www.facebook.com/plugins/page.php?href=https://web.facebook.com/Descubriendo-Nuestra-Luz-213054962066728%2Ffacebook&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" 
                    width="340" 
                    height="500" 
                    style="border:none;overflow:hidden" 
                    scrolling="no" 
                    frameborder="0" 
                    allowTransparency="true" 
                    allow="encrypted-media"
                >
                </iframe>
                </div> 
            </div>            
        </div>
    </div>
    <div class="row">
        <?php include('inc/newsletter.php') ?>
    </div>
    </div>
</div>
<?php include('inc/footer.php') ?>
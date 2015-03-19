        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <h5>ACERCA DE</h5>
                        <p>
                            Estamos enfocados en brindar la máxima satisfaccion al cliente, a través de un trato personalizado y acorde a sus necesidades.
                        </p>
                        <p>
                            Nuestro personal está capacitado para ayudarlo en lo que necesite, además, ofrecemos productos a medida del cliente.
                        </p>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <h5>ÚLTIMOS POSTS</h5>
                        <div class="elemento-blog">
                            <p>
                                Este es un post de vídeo.
                                <br>
                                15 Abril 2015
                            </p>
                        </div>
                        <div class="elemento-blog">
                            <p>
                                Este es un post de imagen.
                                <br>
                                14 Abril 2015
                            </p>
                        </div>
                        <div class="elemento-blog">
                            <p>
                                Este es un post de audio.
                                <br>
                                13 Abril 2015
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h5>RECIBE NUESTRO BOLETÍN</h5>
                        <p>
                            Pon aquí tu correo electrónico y recibe todas nuestras ofertas, productos y más.                       
                        </p>
                        <form role="form">
                            <div class="form-group">
                                <input name="boletin" type="text" id="boletin" value class="form-control" placeholder="Ingresa tu Correo..."> 
                            </div>
                            <button type="submit" class="btn btn-lg btn-black btn-block">SUSCRIBIRSE</button>
                        </form>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <h5>DIRECCIÓN</h5>
                        <address class="text-left">
                            <strong>INDUSTRIAL SERVIMAX</strong><br>
                            Av. Quiñones 837<br>
                            Belén - Maynas - Loreto - Perú<br>
                            <abbr title="Teléfono">Tel:</abbr> +51 (065)35 90 10<br>
                        </address>

                        <address class="text-right">
                            <strong>BENJAMÍN LEÓN</strong><br>
                            Jefe de Ventas<br>
                            <a href="mailto:#">iservimax@hotmail.com</a>
                        </address>
                    </div>
                </div>
            </div>
        </footer>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span class="pull-left">&COPY;Industrial Servimax - 2015</span>
                        <span class="pull-right"><a href="#">Contacto</span>
                    </div>
                </div>
            </div>
        </div>    

    <script src="<?php echo BASE_HTTP; ?>public/js/jquery.js"></script>
    <script src="<?php echo BASE_HTTP; ?>public/js/bootstrap.js"></script>
    <?php
    if (isset($js)) {
        foreach ($js as $file) {
    ?>
    <script src="<?php echo BASE_HTTP; ?>public/js/<?php echo $file; ?>"></script>
    <?php
        }
    }
    ?>
    </body>
</html>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/mediasqueries.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript">

          function validarLetras(e) { // 1
            tecla = (document.all) ? e.keyCode : e.which;
            if (tecla==8) return true; // backspace
        if (tecla==32) return true; // espacio
        if (e.ctrlKey && tecla==86) { return true;} //Ctrl v
        if (e.ctrlKey && tecla==67) { return true;} //Ctrl c
        if (e.ctrlKey && tecla==88) { return true;} //Ctrl x
         
        patron = /[a-zA-Z]/; //patron
         
        te = String.fromCharCode(tecla);
        return patron.test(te); // prueba de patron
        }   
            function validarNumeros(e) { // 1
        tecla = (document.all) ? e.keyCode : e.which; // 2
        if (tecla==8) return true; // backspace
        if (tecla==109) return true; // menos
            if (tecla==110) return true; // punto
        if (tecla==189) return true; // guion
        if (e.ctrlKey && tecla==86) { return true}; //Ctrl v
        if (e.ctrlKey && tecla==67) { return true}; //Ctrl c
        if (e.ctrlKey && tecla==88) { return true}; //Ctrl x
        if (tecla>=96 && tecla<=105) { return true;} //numpad
         
        patron = /[0-9]/; // patron
         
        te = String.fromCharCode(tecla);
        return patron.test(te); // prueba
        }

        </script>
    </head>
    <body>
        <header>
            <div class="logo">
                <figure class="logo_img">
                    <img src="img/logo.png" alt="">
                </figure>
            </div>
        </header>
        <section class="wrapper-content">
            <div class="slider" style="display:none;">
                <ul class="rslides" id="slider1">
                    <li>
                        <img src="img/contratar-planes-prevision.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/plan-prevision-gayosso.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/servicios-funerarios.jpg" alt="">
                    </li>
                </ul>
            </div>
            <div class="marque" style="display:none;">
                <div class="wrapper-marque" >
                    <div class="ancl1 flotar">
                        <a href="#como_funciona">¿CÓMO FUNCIONA?</a>
                    </div>
                    <div class=" flotar">
                        <a href="#planes_de_prevision">PLANES DE PREVISIÓN</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="wrapper-text" id="como_funciona">
            <section class="title_text">
               Gracias por tu registro
            </section>
            <section class="text_bye text_section">
                <div class="text_one">
                    Tus datos han sido registrados satisfactoriamente.
                    Uno de nuestros ejecutivos se pondrá en contacto 
                    contigo.
                </div>
            </section>
        </section>
        <footer>
            <section class="title_text_f" id="planes_de_prevision">
                Planes de previsión
            </section>
            <section class="servicios">
                <div class="element_service">
                    <div class="title_service">
                        Sevicios Funerarios
                    </div>
                    <div class="ico-service">
                        <img src="img/carro.png" alt="" width="85">
                    </div>
                </div>
                <div class="description_service">
                    <ul>
                        <li>
                            Asistencia personalizada.
                        </li>
                        <li>
                            Traslado a la casa funeraria.
                        </li>
                    </ul>
                </div>
                <div class="description_service">
                    <ul>
                        <li>
                            Servicio de velación
                        </li>
                        <li>
                            Embalsamado y arreglo estético
                        </li>
                    </ul>
                </div >
                <div class="description_service">
                    <ul>
                        <li>
                            Capilla ecuménica para servicios
                            religiosos (según casa funeraria).
                        </li>
                    </ul>
                </div>
            </section>
            <section class="solution">
                <div class="element_solution">
                    <div class="title_solution">
                        Solución Integral Mausoleo
                    </div>
                    <div class="ico-solution">
                        <img src="img/casa.png" alt="" width="43">
                    </div>
                </div>
                <div class="description_solution">
                    <ul>
                        <li>
                            Servicio Funerario.
                        </li>
                        <li>
                            Servicio de cremación.
                        </li>
                    </ul>
                </div>
                <div class="description_solution">
                    <ul>
                        <li>
                            Urna a su selección.
                        </li>
                        <li>
                            Primera posición en nicho múltiple.
                        </li>
                    </ul>
                </div >
                <div class="description_solution">
                    <ul>
                        <li>
                            Derecho de uso a perpetuidad.
                        </li>
                        <li>
                            Ceremonia de colocación de urna.
                        </li>
                    </ul>
                </div>
            </section>
            <section class="integral">
                <div class="element_integral">
                    <div class="title_integral">
                        Solución Integral Cementerio
                    </div>
                    <div class="ico-integral">
                        <img src="img/cruz.png" alt="" width="37">
                    </div>
                </div>
                <div class="description_integral">
                    <ul>
                        <li>
                            Servicio Funerario.
                        </li>
                        <li>
                            Primera posición en gaveta múltiple.
                        </li>
                    </ul>
                </div>
                <div class="description_integral">
                    <ul>
                        <li>
                            Derecho de uso a perpetuidad.
                        </li>
                        <li>
                            Embalsamado y arreglo estético.
                        </li>
                    </ul>
                </div >
                <div class="description_integral">
                    <ul>
                        <li>
                            Mantenimiento.
                        </li>
                        <li>
                            Ceremonia de inhumación.
                        </li>
                    </ul>
                </div>
            </section>
            <section class=" aviso">   
                <a href="">Aviso de Privacidad</a>
            </section>
        </footer>
        <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
        <!-- <form id="myForm" method="post">
            <div>
                <input type="text" name="nombre" id="name" placeholder="Ingresa tu nombre">
            </div>
            <div>
                <input type="text" name="email" id="email" placeholder="ingresa tu email">
            </div>
            <div>
                <input type="tel" name="lada" id="lada" placeholder="ingresa tu lada" maxlength="4">
                <input type="tel" name="phone" id="phone" placeholder ="ingresa tu telefono">
            </div>
            <div>
                <input type="text" name="cp" id="cp" placeholder="ingresa cp">
            </div>
            <input type="hidden" id="place" value="<?php echo $place;?>">
            <div>
                <input id="submit" type="button"  value="hola">
            </div>
        </form>-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/responsiveslides.js"></script>
        <script src="js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
        <script language="javascript"> var leadNumber = Math.round(1000000000 * Math.random()); document.write("<IMG src='http://www.canalmail.com/tcr.jsp?a=28384."+leadNumber+".R.canalmail.1.canalmail.1' HEIGHT='1' WIDTH='1'/>"); </script> <noscript> <img width="1" height="1" src="http://www.canalmail.com/tcr.jsp?a=28384.1.R.canalmail.1.canalmail.1"> </noscript>
    </body>
</html>
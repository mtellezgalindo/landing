<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$place = $_GET['lugar'];
if ($place == '') {
$place = 'sitio';
}
?>
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
        if (tecla==9) return true; //tab
        if (tecla==13) return true; //enter
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
        if (tecla==9) return true; //tab
            if (tecla==13) return true; //enter
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
            <div class="slider">
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
            <div class="marque">
                <div class="wrapper-marque" >
                    <div class="ancl1 flotar">
                        <a href="#como_funciona">¿CÓMO FUNCIONA?</a>
                    </div>
                    <div class=" flotar">
                        <a href="#planes_de_prevision">PLANES DE PREVISIÓN</a>
                    </div>
                </div>
            </div>
            <div class="formulario">
                <div class="title_form">
                    Déjanos tus datos y te asesoramos
                </div>
                <div class="form">
                    <form id="myForm" method="post">
                        <div class="content_label_nombre">
                            <label for="name">Nombre completo</label>
                        </div>
                        <div class="content_label">
                            <input type="text" name="nombre" id="name" class="nombre" required onkeydown="return validarLetras(event)" maxlength="80"  tabindex="1">
                        </div>
                        <div class="content_label">
                            <label for="phone">Teléfono (Lada + Teléfono)</label>
                        </div>
                        <div class="content_phone">
                            <input type="text" name="lada" id="lada"  class="lada"  onkeydown="return validarNumeros(event)" maxlength="3" required tabindex="2">
                            <input type="text" name="phone" id="phone" class="telefono"  onkeydown="return validarNumeros(event)" maxlength="10" required tabindex="3">
                        </div>
                        <div class="content_label">
                            <label for="email">E-mail</label>
                        </div>
                        <div>
                            <input type="email" name="email" id="email" class="email" required tabindex="4">
                        </div>
                        <div class="content_label">
                            <label for="cp">Código Postal</label>
                        </div>
                        <div>
                            <input type="text" name="cp" id="cp" class="cp"  onkeydown="return validarNumeros(event)" required tabindex="5">
                        </div>
                        <input type="hidden" id="place" value="<?php echo $place;?>">
                        <div class="submit">
                                <input type="submit" value="Enviar" class="css3button" id="submit">
                               <!-- <button type="button" name="" value="" id="submit" class="css3button">Enviar</button>-->
                            
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="wrapper-text" id="como_funciona">
            <section class="title_text">
                ¿Cómo funciona?
            </section>
            <section class="options">
                <div class="option">
                    <div class="circle_red numero" id="num_one">
                        <figure>
                            <img src="img/1.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="option">
                    <div class="circle_yellow numero" id="num_two">
                        <figure>
                            <img src="img/2.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="option">
                    <div class="circle_blue numero" id="num_three">
                        <figure>
                            <img src="img/3.png" alt="">
                        </figure>
                    </div>
                </div>
            </section>
            <section class="text_num_one text_section">
                <div class="text_one">
                    Complete los campos del formulario y uno de nuestros asesores
                    se pondrá en contacto con usted para ayudarle a elegir el mejor
                    Plan de Previsión de acuerdo a sus necesidades.
                </div>
            </section>
            <section class="text_num_two text_section"> 
                <div class="text_two">
                    Contamos con todos los servicios necesarios como: Casas Funerarias, 
                    Cementerios y Mausoleos, asegurando así su tranquilidad.
                </div>
            </section>
            <section class="text_num_three text_section">
                <div class="text_three">
                    Al momento de requerir el servicio bastará sólo una llamada para 
                    que nosotros nos encarguemos de todo.
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
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src= "js/jquery.validate.js"></script>
        <script src="js/responsiveslides.js"></script>
        <script src="js/main.js"></script>
        <script>
          
        </script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
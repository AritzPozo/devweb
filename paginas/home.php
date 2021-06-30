<section class='fuillWindow ' id='slide'>
    <div class='srv_bk'><div class='srv_bk2'></div></div>
    
    <div id='' class='s12 m10 l5 x4 r3 conte'>
        <div id='slide_1' class='slideTxt showed'>
            <h1 class='titulo1'>Zendha systems</h1>            

            <p>Te ofrecemos una catálogo de servicios
                informáticos integrales para hogar y PYMES: Soporte, 
                reparación, cloud y mantenimiento de sistemas, redes 
                e infraestructuras.</p>

            <a href='/servicios'><div class='boton'>Ver servicios</div></a>
        </div>
        <div id='slide_2' class='slideTxt'>
            <h2 class='titulo1'>Soporte integral PYMES</h2>
            <p>Aumenta el control sobre la red informática e información
                 de tu empresa, te ofrecemos todos los servicios necesarios
                 para que no baje la productividad. Mayor control sobre 
                 la red, mayor productividad, mayor tranquilidad.</p>
            <div class='boton'>Ver más</div>
        </div>
        <div id='slide_3' class='slideTxt'>
            <h2 class='titulo1'>Soporte y reparación en hogar</h2>
            <p>Ofrecemos la tranquilidad que necesitas para tu familia
                con nuestros servicios dirigidos a hogar: Sin virus, sin ralentizaciones 
                y control en los dispositivos de tus hijos.</p>
            <div class='boton'>Ver más</div>
        </div>
        <div id='slide_4' class='slideTxt'>
            <?php
        $sql="SELECT `id`, `fecha`, `titulo`, `texto`
		FROM `blog` 
		Order by id desc 
        LIMIT 1";
        $result=mysqli_query($link,$sql);
        if($row=mysqli_fetch_array($result)){
            echo "
            <h2 class='titulo1'>Última publicación de nuestro Blog</h2>
            <h3 class='titulo2'>".utf8_encode($row['titulo'])."</h3>
            <p>".substr(utf8_encode($row['texto']),0,200)." [...]</p>
            <a href='/articulo/".$row['id']."'><div class='boton'>Leer</div></a>";
            $i++;
        }

            ?>

        </div>
        
        <div id='slide_cont'>
            <div id='cnt_slide1' class='slidedot slc interakt' onclick='controlSlide(1)'></div>
            <div id='cnt_slide2' class='slidedot interakt' onclick='controlSlide(2)'></div>
            <div id='cnt_slide3' class='slidedot interakt' onclick='controlSlide(3)'></div>
            <div id='cnt_slide4' class='slidedot interakt' onclick='controlSlide(4)'></div>
        </div>
    </div>    
</section>
<section  class='fuillWindow fnd_oscuro' id='nosotros'>
    <div class='srv_bk'></div>
    <div class='srv_bk2'></div>
    <div class='row tocont'>
        <div id='' class='s12 m2 l6 x7 r8'></div>
        <div id='' class='s12 m10 l6 x5 r4'>
            <h2 class='titulo1'>Seguridad, calidad e innovación</h2>
            <h3 class='titulo2'>Acercándote a las nuevas tecnologías.</h3>
            <p>Nuestro constante desarollo y calidad nos permite ofrecer soluciones integrales e innovadoras a nuestros clientes y colaboradores.</p>
            <a href='/nosotros'><div class='boton'>Ver más</div></a>
        </div>
    </div>
</section>
<section  class='fuillWindow' id='servicios'>
    <div class='row'>
        <div id='' class='s12 m2 l2 x4 r4'></div>
        <div id='' class='s12 m8 l8 x4 r4 txtCentrado'>            
            <h2 class='titulo1'>Servicios</h2>
            <p>Te ofrecemos soluciones informáticas integrales para la tranquilidad de tu empresa y hogar.</p>

            <a href='/servicios'><div class='boton centrado'>Ver todos</div></a>
        </div>
    </div>
    <div class='row'>
        <div id='' class='s12 m12 l6 x3 r3'>
            <div class='homblqserv txtCentrado'>
                <div class='homblqserv_img'>
                <img src='assets/icons/laptop-mobile.svg'>
                </div>
                <h3>Sistemas</h3>
                <p class='p2'>Soluciones de reparación, mantenimiento e 
                    instalación de sistemas microinformáticos para 
                    hogar y PYMES.</p>

                <!--<div class='boton secundario centrado'>Ver más</div>-->
            </div>
        </div>
        <div id='' class='s12 m12 l6 x3 r3'>
            <div class='homblqserv txtCentrado'>
                <div class='homblqserv_img'><img src='assets/icons/router.svg'></div>
                <h3>Redes</h3>
                <p class='p2'>Instalación, configuración y despliegue de 
                    redes cableadas e inalámbricas adaptandonos a las necesidades 
                    de cada ambiente de producción.</p>
                <!--<div class='boton secundario centrado'>Ver más</div>-->
            </div>
        </div>
        <div id='' class='s12 m12 l6 x3 r3'>
            <div class='homblqserv txtCentrado'>
                <div class='homblqserv_img'><img src='assets/icons/sensor-cloud.svg'></div>
                <h3>Cloud</h3>
                <p class='p2'>Despliegue, configuración y mantenimiento de 
                    servidores, hostings y servicios específicos para cada 
                    tipo de proyecto.</p>
                <!--<div class='boton secundario centrado'>Ver más</div>-->
            </div>
        </div>
        <div id='' class='s12 m12 l6 x3 r3'>
            <div class='homblqserv txtCentrado'>
                <div class='homblqserv_img'><img src='assets/icons/message.svg'></div>
                <h3>Consultoria IT</h3>
                <p class='p2'>Con nuestro servicio de consultoría obtendrás
                la mejor adaptación de las TIC a tu empresa. Innovación para el desarrollo.</p>
                <!--<div class='boton secundario centrado'>Ver más</div>-->
            </div>
        </div>
    </div>  
</section>
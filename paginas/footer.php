<footer class=''>
    <?php 
    if($selc[3]!='selected' || $isArticulo==true){
        ?>
<div class='footer_sup'>
        <div class='row vcentr encab'>
            <?php 
            if($isArticulo!=true){
            ?>
            <div class='x6 l6 m6 s12'>
                <h2>Visita nuestro blog</h2>
            </div>
            <div class='x6 l6 m6 s12'>
                <a href="/blog"><div class='boton derecho'>Ver más</div></a>
            </div>        
            <?php }else{
            echo "<div class='x6 l6 m6 s12'><h2>Artículos relacionados</h2></div>";
            }?>
        </div>
        <div class='slide_footer'><div class='slide_footer_int'>
            <div class='row aexterna blogspace'>
                <?php
                    if($isArticulo!=true){
                        $sql="SELECT `id`, `fecha`, `titulo`, `texto`, `img` 
                        FROM `blog` 
                        Order by id desc 
                        LIMIT 4";
                        
                    }else{
                        $sql="SELECT `id`, `fecha`, `titulo`, `texto`, `img` 
                        FROM `blog` 
                        WHERE ($articuloWhere 1=0) and id!=$blgid
                        Order by rand()
                        LIMIT 4";
                    }
                    $result=mysqli_query($link,$sql);
                        while($row=mysqli_fetch_array($result)){
                            echo "
                            <div class='footer_blog'>
                            <a href='/articulo/".$row['id']."'>
                            <div class='footer_blog_img' style='background-image:url(\"/assets/blog/".$row['id'].".jpg\")'></div>                    
                            <div class='footer_blog_txt'>
                                <h4>".utf8_encode($row['titulo'])."</h4>
                                <p class='p2'>".utf8_encode(str_replace("#","",substr(strip_tags($row['texto']),0,120)))."[...]</p>
                            </div></a>
                        </div>";
                            $i++;
                        }
                
                ?>
                

            </div>
        </div>
        </div>
    </div>

        <?php
    }
    ?>
    
    <div class='footer_inf fnd_oscuro'>
    <div class='barInf'>
    
    </div>
    <div class='row' >
        <div class='x3 l3 m12 s12 ftcentra footerZendh'>
            <h2>Zendha Systems </h2>
            <p style='padding-right:20px;'>Parte de Zendha<sup>&copy;</sup> Group.</p> 
            <p style='padding-right:20px;'>Servicios integrales de mantenimiento, despliegue y redes informáticas.</p>
            <div class='rrss'>
                <a href='https://www.facebook.com/zendhasystems' target="_blank"><img src='/assets/icons/facebook-square.svg'></a>
                <a href='https://www.instagram.com/zendha.systems/'  target="_blank"><img src='/assets/icons/instagram.svg'></a>
                <a href='https://www.linkedin.com/company/grupo-zendha' target="_blank"><img src='/assets/icons/linkedin.svg'  ></a>
                <a href='https://twitter.com/zendhasystems' ><img src='/assets/icons/twitter.svg'></a>

            </div>
        </div>
        <div class='x3 l3 m6 s12 ftcentra'>
            <h2>Empresas del grupo</h2>
            <a href='https://zendha.net' class='footerLogo'><p><img src='/assets/logos/zendhamini.png' > Grupo Zendha</p></a>   
            <a href='https://core.zendha.net' class='footerLogo'><p><img src='/assets/logos/coremini.png' > Zendha Core</p></a>    
            <a href='https://dev.zendha.net' class='footerLogo'><p><img src='/assets/logos/devmini.png' > Zendha Dev</p></a>        
        </div>
        <div class='x3 l3 m6 s12 ftcentra'>
            <h2>Links de interés</h2>
            <a href='/legal/tos'><p>Términos de uso</p></a>
            <a href='/legal/privacidad'><p>Políticas de privacidad</p></a>
            <a href='/legal/cookies'><p>Política de cookies</p></a>
            <a href='/legal/arco'><p>Derechos ARCO</p></a>
            <a href='?link=legal&pag=rrhh'><p>RRHH</p></a>
            
        </div>

        <div class='x3 l3 m12 s12 bvpie'>
            <div class='bannerPie'>
            <p>Suscribete a nuestro newsletter para conocer de primera mano todas las noticias y eventos relacionados con Zendha.</p>
            <input placeholder="Escribe tu email">
            </div>
           
        </div>
    </div>
    </div>
</footer>
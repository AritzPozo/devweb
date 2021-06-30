<?php
include("sys/bd.php");
$pag='home';
$pagCss="home";
$pag_txt="home";
$isArticulo=false;
$isService=false;
if(isset($_GET['link'])){
    if(strpos($_GET['link'],"..")!=-1){
        if(file_exists(("paginas/".$_GET['link'].".php")) && !isset($_GET['pag'])){
            $pag=$_GET['link'];           
            $pagCss=$pag;
            $pag_txt=$pag;
            $pagTitle=$pag;
        }elseif(is_dir('paginas/'.$_GET['link'])){
            if(isset($_GET['pag'])){     
                if(strpos($_GET['pag'],"..")!=-1){    
                    if(file_exists(("paginas/".$_GET['link']."/".$_GET['pag'].".php"))){
                        $pag="".$_GET['link']."/".$_GET['pag']."";
                        $pagCss=$_GET['link'];
                        $pag_txt=$_GET['link'];
                        $pagTitle=$_GET['pag'];
                    }else if(is_dir(("paginas/".$_GET['link']."/".$_GET['pag'].""))){
                        if(isset($_GET['srv'])){     
                            if(strpos($_GET['srv'],"..")!=-1){   
                                $pagCss=$_GET['link'];
                                $pag="".$_GET['link']."/".$_GET['pag'].""."/".$_GET['srv'];
                                $pag_txt=$_GET['link']."_".$_GET['pag'];
                                $pagTitle=$_GET['link'].":".$_GET['srv'];
                                $isService=true;
                            }
                        }
                    }
                }
            }
        }
        
    }
}
$selc=array("","","","","","","","","","","","");
if($pag=='home'){
    $selc[0]="selected";
    $descript="Soluciones informáticas integrales de sistemas, infraestructuras y cloud para PyMES y hogar.";
}else if($pag=='nosotros'){
    $selc[1]="selected";
    $descript="Descubre quienes somos y cuales son son valores de Zendha Systems";
}else if($pag=='servicios'){
    $selc[2]="selected";
    $descript="Soluciones informáticas integrales de sistemas, infraestructuras y cloud para PyMES y hogar.";
}else if($pag=='blog'){
    $selc[3]="selected";
    $descript="Descubre y aprende sobre las tecnologías de sistemas microinformático con nuestro blog.";
}else if($pag=='contacto'){
    $selc[4]="selected";
    $descript="Las vías de comunicación en Zendha Systems";
}else{
    $selc[10]="selected";
    $descript="Soluciones informáticas integrales de sistemas, infraestructuras y cloud para PyMES y hogar.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zendha Systems :: <?php
    if($pagTitle=="home"){
        echo "Inicio";
        $pagCss="home";
    }else{
        echo ucwords($pagTitle); 
    }
    ?></title>
    <link href='/css/_ui/main.css' rel='stylesheet' />
    <link href='/css/general.css' rel='stylesheet' />
    <link href='/css/zendha.css' rel='stylesheet' />
    <link href='/css/menu.css' rel='stylesheet' />
    <link href='/css/blog.css' rel='stylesheet' />
    <link href='/css/footer.css' rel='stylesheet' />
    <link rel="icon" type="image/png" href="/assets/favicon.png">
    <link href='/css/paginas/<?php echo $pagCss; ?>.css' rel='stylesheet' />
    <meta property="og:title" content="Zendha Systems" />
    <meta name="description" content="<?php echo $descript;?>">
    <meta property="og:url" content="https://systems.zendha.net" />
    <meta property="og:description" content="<?php echo $descript;?>" />
    <meta property="og:image" content="https://systems.zendha.net/assets/favicon.png">

</head>
<body id='pag_<?php echo $pag_txt;?>' onscroll="menuControl()" class='system_ui'>
    <a href='https://wa.me/525534693936' target='_blank'><div class='whatsapp'></div></a>
    <div id='avisoCookies'>
        <div id='bannerCookies' class='fnd_oscuro'>
            <div class='row vcentr'>
                <div class='s12 m10 l10 x10 r10'>
                    <h2>Aviso de cookies</h2>
                    <p>Utilizamos cookies propias y de terceros para mejorar nuestros servicios. Si contin&uacute;a con la navegación consideramos que acepta las diferentes políticas y términos de este sitio web. Puede consultar las <a href='/legal/cookies'>Políticas de cookies</a>, <a href='/legal/tos'>Términos de uso</a> y <a href='/legal/privacidad'>Política de privacidad</a> haciendo click en cada enlace.
                </div>
                <div class='s12 m2 l2 x2 r2'>
                    <div class='boton secundario derecho btn-chico' onclick='aceptarCookies()'>Aceptar</div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("paginas/menu.php"); 
    if(file_exists(("paginas/$pag.php"))){
        include("paginas/$pag.php");
    }else{
        include("paginas/404.php");
    }
    

    include("paginas/footer.php");
   ?>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1105584359931030');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1105584359931030&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2KJ92SVDM1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2KJ92SVDM1');
</script>
<script src='/js/scripts.js'></script>
</body>
</html>
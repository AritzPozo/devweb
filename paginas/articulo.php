<?php
function sanear_string($string){


    $string = explode("<",explode(".",trim($string))[0])[0];



    //Esta parte se encarga de eliminar cualquier caracter extraño
    $string = str_replace(
        array("\\", "¨", "º", "-", "~",
             "#", "@", "", "!", "\"",
             "·","$", "%", "&", "/",
             "(", ")", "?", "'", "¡",
             "¿", "[", "^", "`", "]",
             "+", "}", "{", "¨", "´",
             ">", "< ", ";", ",", ":"),
        '',
        $string
    );


    return $string;

}
$ebl=false;
$isArticulo=true;
$articuloWhere='';
if(isset($_GET['pag'])){
    if(is_numeric($_GET['pag'])){
		$blgid=$_GET['pag'];
		        $sql="SELECT `id`, `fecha`, `titulo`, `texto`, `img` 
		FROM `blog` 
		WHERE id=$blgid
		LIMIT 1";
        $result=mysqli_query($link,$sql);
        if($row=mysqli_fetch_array($result)){
        $txt=explode(" ",utf8_encode($row['texto']));
        $txtFinal='';
        $t=0;
        while(isset($txt[$t])){
            if(substr($txt[$t],0,1)!="#"){
                $txtFinal.=$txt[$t]." ";
            }else{
                $tg=sanear_string($txt[$t]);
                $articuloWhere="texto LIKE '%".utf8_decode($tag)."%' or ";
                $txtFinal.="<a href='/blog/tags/".$tg."'><span class='tags' style='color:var(--colorPrincipal)'>".$txt[$t]." </span></a>";
            }
            
            $t++;
        }
		echo "


        <section id='header_page'>
            <div class='plcaImgFond' style='background-image:url(\"/assets/blog/".$row['id'].".jpg\");filter: blur(6px);'>
                <div class='plcaImgFond_multp'></div>
            </div>
            <div class='head_cont'>
                <div class='header_page_degrad' >
                <h1>".utf8_encode($row['titulo'])."</h1>
                </div>
            </div>
        </section>
        <section id='cuerpopost'>
			<div class='row'>
			<div class='s12 m12 l12 x4 r3'>
			<div style='text-align:center;margin-bottom:60px;'>
			<img src=\"/assets/blog/".$row['id'].".jpg\" style=\"width:400px;max-width:100%;\">
			</div>
			</div>
			<div class='s12 m12 l12 x1 r1'></div>
			<div class='s12 m12 l12 x7 r8'>
			<div>
            ".$txtFinal."
			</div>
			</div>
        </section>";
		}

		$ebl=true;
    }
}
	
if($ebl==false){
	echo "<script>window.location.replace(\"?link=blog\")</script>";
}
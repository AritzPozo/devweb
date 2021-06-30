<?php
      
        $i=1;
        $pagRaw=0;
        //&tag=$1&pag=$2
        $limit="LIMIT 12";
        $where="";
        $prePath="/blog";
        if(isset($_GET['tag'])){
            if(!is_numeric($_GET['tag'])){
                $tag="#".htmlentities($_GET['tag'],ENT_QUOTES);
                $tagRaw="<h2 style='color:white;margin-top:-10px'>$tag</h2>";
                $where="WHERE texto LIKE '%".utf8_decode($tag)."%'";
                $prePath="/blog//".htmlentities($_GET['tag'])."";
            }else{
                $pagRaw=$_GET['tag'];
                $limit="LIMIT ".($_GET['tag']*12).",12";
            }
        }
        if(isset($_GET['pag'])){
            if(is_numeric($_GET['pag'])){
                $pagRaw=$_GET['pag'];
                $limit="LIMIT ".($_GET['pag']*12).",12";
            }
        }
?>


<section id='header_page'>
    <div class='plcaImgFond' >
        <div class='plcaImgFond_multp'></div>
    </div>
    <div class='head_cont'>
        <div class='header_page_degrad' >
        <h1>Blog</h1>
        <?php echo $tagRaw;?>
        </div>
    </div>
</section>
<section>    
    <div class='row aexterna'>
        <?php

        $sql="SELECT `id`, `fecha`, `titulo`, `texto`, `img` 
		FROM `blog` 
        $where
		Order by id desc 
        
		$limit";
        $result=mysqli_query($link,$sql);
        while($row=mysqli_fetch_array($result)){
            echo "
            <div class='s12 m6 l4 x4 r3'>            
            <a href='/articulo/".$row['id']."'>
            <div class='imgblog_con'>
            <img src=\"/assets/blog/".$row['id'].".jpg\">
            </div></a></div>";
            $i++;
        }
        ?>        

    </div>
    <div class='paginado'>
    <?php
        $sql="SELECT count(id) as cnt
		FROM `blog` $where";

        $result=mysqli_query($link,$sql);
        if($row=mysqli_fetch_array($result)){
            $cantpag=ceil($row['cnt']/12);
            $x=0;
            while($x<$cantpag){
                echo "<a href='$prePath/$x'";
                if($x==$pagRaw){
                    echo " class='selc';";
                }
                echo "><div>".($x+1)."</div></a>";
                $x++;
            }
        }
    ?>
    </div>
</section>

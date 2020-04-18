<!--
 * Contact
 * @author     Aleksy Ruszala and Denis Suserts
 *@version 1.0
-->
<style>
    .h-slide{
        height: 35%;
    }
</style>

<?php
if($data!=null){

?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php
         for($i=0;$i<sizeof($data);$i++) {
             if ($i == 0)
                 echo '<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>';
             else
                 echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'"></li>';


        }
        ?>
    </ol>
    <div class="carousel-inner">

        <?php

        for($i=0;$i<sizeof($data);$i++){
            if($i==0){
                echo '<div class="carousel-item active">';
            }else{
                echo '<div class="carousel-item">';
            }
            echo ' <a href="/~cmp311gc1904/'.$data[$i]["url"].'" ><img class="d-block w-100 h-slide" src="'.$data[$i]["image"].'" alt="slide img"></a>';
            if($data[$i]["title"]!=null){
                echo '<div class="carousel-caption ">
                <h5>'.$data[$i]["title"].'</h5>';
                if($data[$i]["desc"]!=null){
                    echo '<p>'.$data[$i]["desc"].'</p>';
                }
                echo ' </div>';
            }
            echo '</div>';
        }

        ?>






    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<?php
}
?>
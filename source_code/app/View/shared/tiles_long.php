<!--
    *Footer
    *@author    Aleksy Ruszala
    *@version 1.0
-->
<div class="container">

        <div class="bd-example">
            <div class="d-flex flex-wrap bd-highlight">
                <?php

                foreach ($data as $item){
                    echo '<a class="btn p-1 bd-highlight w-100" href="/~cmp311gc1904/Preview/index/'.$item["id"].'"><div class="p-4 bg-info"> '.$item["title"].' </div> </a>';

                }

                if(empty($data)){
                    echo '<div class="btn p-4 bg-transparent w-100"> Empty </div>';

                }
                ?>


            </div>

        </div>
        </div>

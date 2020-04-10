<!--
    *Footer
    *@author    Aleksy Ruszala
-->
<div class="container">

        <div class="bd-example">
            <div class="d-flex flex-wrap bd-highlight">
                <?php

                foreach ($data as $item){
                    echo '<a class="btn p-1 bd-highlight w-100" href="/~cmp311gc1904/Preview/index/'.$item["id"].'"><div class="p-4 bg-info"> '.$item["title"].' </div> </a>';

                }
                ?>


            </div>

        </div>
        </div>

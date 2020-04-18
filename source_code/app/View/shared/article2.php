<!--
    *Footer
    *@author     Denis Suserts
    *@edit     Aleksy Ruszala
    *@version 3.0
-->
<div class="container-fluid m-0 ">
    <div class="row d-md-flex-row  overflow-hidden">

        <div class="col-md-8  pt-5 pt-md-1 pb-5 overflow-hidden bg-light">

            <div class="container-fluid p-md-5 d-flex align-items-center h-100">
                <div class="row justify-content-md-center">

                    <div class="col-md-8">

                        <?php
                        echo '<h1 class="  mb-5 pt-md-2 pt-sm-4">' . $data["article"]["Title"] . '</h1>';
                        ?>

                        <?php
                        echo '<p>' . $data["article"]["Body"] . '</p>';
                        ?>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4  p-0 col-12 bg-light d-flex overflow-hidden ">
            <div class="card p-0   w-100 h-100 text-light   border-0 ">

                <?php
                if ($data["media"] != null) {
                    foreach ($data["media"] as $item) {
                        echo '                <img class="card-img" src="' . $item["Image"] . '" alt="' . $item["Name"] . '">';
                    }
                }
                ?>

            </div>

        </div>

    </div>
</div>
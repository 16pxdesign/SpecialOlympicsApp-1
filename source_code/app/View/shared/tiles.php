<!--
    *Footer
    *@author     Denis Suserts, Aleksy Ruszala
    *@version 2.0
-->
<style>
    .example {
        overflow-wrap: break-word;
    }

    .item2 {
        flex-basis: 50%; /* default 0 */
    }
</style>

<div class="container">


    <div class="d-flex flex-wrap">

        <?php
        foreach ($data as $item) {
            echo '<a  class="btn p-1 item2 example " href="/~cmp311gc1904/'. $item["url"] .'/'.$item["ID"].'"><div class="p-4 color-div"> ' . $item["Name"] . ' </div> </a>';
        }
        ?>



    </div>


</div>

<script>
    $(document).ready(function () {

        var colors = ['#5bc0de', '#d9534f', '#5cb85c'];

        $('.color-div').each(function () {
            var new_color = colors[Math.floor(Math.random() * colors.length)];
            $(this).css('background-color', new_color);
        });

    });
</script>


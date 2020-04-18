<!--
    *QR Reader

    *Powered by Instascan Copyright © 2016 Chris Schmich
    *https://github.com/schmich/instascan/blob/master/README.md

    *@edit     Aleksy Ruszala
    *@version 2.0
-->

<?php

/*
 * <article class="pad-2">
    <section>
        <div class="frm-grp txt-cntr">
            <label class="disp-blck">Choose camera:</label>
            <select id="webcameraChanger" onchange="cameraChange($(this).val());" class="frm-ctrl mar-btm-2"></select>
        </div>
        <!-- webcamera view component -->
        <video id="webcameraPreview" playsinline autoplay muted loop style="width: 100%;"></video>
    </section>
</article>
 */
?>

<style>
    .loader {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite; /* Safari */
        animation: spin 2s linear infinite;
    }

    /* Safari */
    @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .hidden { display: none; }
</style>
<div id="loader" class="container align-content-center"><div class="loader"></div><span class="align-content-center">Loading camera..</span></div>

<article class="pad-2">
    <section id="qr" class="hidden">
        <!-- camera view component -->
        <video id="webcameraPreview" playsinline autoplay muted loop style="width: 100%;"></video>
    </section>
</article>

<script type="text/javascript" src="./js/adapter.min.js"></script>
<script type="text/javascript" src="./js/instascan.js"></script>
<script type="text/javascript" src="./js/QrCodeScanner.js"></script>
<script type="text/javascript">
    //HTML video component for web camera
    var videoComponent = $("#webcameraPreview");
    //HTML select component for cameras change
    var webcameraChanger = $("#webcameraChanger");
    var options = {};
    //init options for scanner
    options = initVideoObjectOptions("webcameraPreview");
    var cameraId = 0;

    initScanner(options);

    initAvaliableCameras(
        webcameraChanger,
        function () {
            cameraId = parseInt(getSelectedCamera(webcameraChanger));
            $('#loader').addClass('hidden');
            $('#qr').removeClass('hidden');
        }
    );

    initCamera(cameraId);


    scanStart(function (data){
        alert(data);
    });

</script>


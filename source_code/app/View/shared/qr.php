<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" ></script>

<video id="preview"></video>
<script>
    let scanner = new Instascan.Scanner(
        {
            video: document.getElementById('preview'),
            mirror: false
        }
    );
    scanner.addListener('scan', function(content) {
        alert('Escaneou o conteudo: ' + content);

        window.open(content, "_blank");
    });
    Instascan.Camera.getCameras().then(cameras =>
    {
        if(cameras.length > 0){
            scanner.start(cameras[cameras.length]);
        } else {
            console.error("Não existe câmera no dispositivo!");
        }
    });
</script>

const webcamElement = document.getElementById('webcam');
const canvasElement = document.getElementById('canvas');
const webcam = new Webcam(webcamElement, 'user' || 'environtment', canvasElement);

$('.tombol-buka-modal-foto').click(function () {
    webcam.start()
        .then(result => {
            console.log("webcam started");
        })
        .catch(err => {
            console.log(err);
        });

    $('.tombol-switch-camera').click(function () {
        webcam.flip();
        webcam.start();
    });

    $('.tombol-capture').click(function () {
        let hasil = webcam.snap();
        $('#final-snapshot').attr('src', hasil);
        $('.input_foto').val(hasil);
    });

    $('.tombol-simpan-foto, .tutup-modal').click(function () {
        webcam.stop();
    });
});
//script untuk waktu session habis yang ditaruh dihalaman index (memangil library jquery.idle.js)
    $(document).idle({
        onIdle: function(){
            $('.modal').modal('show');
            $(document).idle({
                onIdle: function(){
                    $('.modal').modal('hide');
                    alert('Waktu sesi anda telah habis');
                },
                events: 'mouseover mouseout',
                idle: 10000
            });
        },
        idle: 1800000
    });

    $('#ok').on('click', function(){
        $('.modal').modal('hide');
    });

    $('#close').on('click', function(){
        $('.modal').modal('hide');
        alert('Waktu sesi anda telah habis');
        $(document).idle({
                onIdle: function(){
                },
                events: 'mouseover mouseout'
        });
    });

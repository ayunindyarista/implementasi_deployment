window.addEventListener('load', function () {
  let selectedDeviceId;
  const codeReader = new ZXing.BrowserMultiFormatReader()
  console.log('ZXing code reader initialized')
  codeReader.listVideoInputDevices()
    .then((videoInputDevices) => {
      const sourceSelect = document.getElementById('sourceSelect')
      selectedDeviceId = videoInputDevices[0].deviceId
      if (videoInputDevices.length >= 1) {
        videoInputDevices.forEach((element) => {
          const sourceOption = document.createElement('option')
          sourceOption.text = element.label
          sourceOption.value = element.deviceId
          sourceSelect.appendChild(sourceOption)
        })

        sourceSelect.onchange = () => {
          selectedDeviceId = sourceSelect.value;
        };

        const sourceSelectPanel = document.getElementById('sourceSelectPanel')
        sourceSelectPanel.style.display = 'block'
      }

      document.getElementById('startButton').addEventListener('click', () => {
        codeReader.decodeFromVideoDevice(selectedDeviceId, 'video', (result, err) => {
          if (result) {
            //menutup modal dan mereset kamera agar off
            $('.modal').modal('hide');
            codeReader.reset()
            //selesai
            console.log(result)
            document.getElementById('result').textContent = result.text

            //menambhakan Nama Barang
            
            var id_barang = document.getElementById('result').innerHTML;
            alert(id_barang);
            
            console.log(id_barang);
            var token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
              type: 'POST',
              headers: {
                  'X-CSRF-TOKEN': token
              },
              url: '/Barcode/req-nama-barang',
              data: {id : id_barang},
              dataType: 'json',
              success: function(data){
                // document.getElementById('nama').val(data.data[0].NAMA_BARANG);
                $('#nama').html(data.data[0].NAMA_BARANG);
              }
            });

            // selesai

          }
          if (err && !(err instanceof ZXing.NotFoundException)) {
            console.error(err)
            document.getElementById('result').textContent = err
          }
        })
        console.log(`Started continous decode from camera with id ${selectedDeviceId}`)
      })

      // digunakan untuk mereset hasil result
      document.getElementById('resetButton').addEventListener('click', () => {
        codeReader.reset()
        document.getElementById('nama').textContent = '';
        document.getElementById('result').textContent = '';
        console.log('Reset.')
      })
      //selesai

    })
    .catch((err) => {
      console.error(err)
    })
})

@extends('layout/index')
@section('title', 'Tambah Customer 1')
@section('css')
<link rel="stylesheet" href="{{ asset('/assets/html/css/customer.css') }}">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
@endsection
@section('body')

            <!-- Content -->
            <div class="content ">
                
    <div class="page-header">
        <div>
            <h3>Tambah Customer 1</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Forms</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Customer 1</li>
                </ol>
            </nav>
        </div>
    </div>
    <form action="{{ URL('/Customer/TambahCustomer1/Save') }}" method="POST">
        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Customer</label>
                            <input type="text" class="form-control" id="namacust" name="namacust"
                                   placeholder="Ayu Nindya Ariesta">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Alamat</label>
                            <input type="text" class="form-control" id="alamatcust" name="alamatcust"
                                   placeholder="JL Brawijaya No 20">
                        </div>
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <select class="form-control select-component select-provinsi" id="" name="provinsi" required>
                                <option>Pilih Provinsi ...</option>
                                @foreach ($provinsi as $key => $name)
                                <option value="{{ $key }}">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for=""> Kabupaten/Kota</label>
                            <select class="form-control select-component select-kota" id="" name="kota" required>
                                <option>Pilih Kota ...</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for=""> Kecamatan </label>
                            <select class="form-control select select-kecamatan" id="" name="kecamatan" required>
                                <option>Pilih Kecamatan ...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for=""> Kelurahan</label>
                            <select class="form-control select select-kelurahan" id="" name="kelurahan" required>
                                <option>Pilih Kelurahan ...</option>
                            </select>
                        </div>

                        <div class="form-actions form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="" id="img" name="img" required="required">
                                        <input id="foto" name="foto" type="hidden" value="" required="required">
                                    </div>
                                    <div class="col-sm-6" text-right>
                                        <button type="button" onclick="btn_ambilFoto()"
                                        class="btn btn-success btn-xl" data-toggle="modal" data-target="#modal">Ambil Foto</button>
                                        
                                        <button id="submit" value="SimpanData" type="submit" class="btn btn-primary btn-xl">Submit</button>
                                                                   
                                    </div>
                                </div>
                        </div>

                        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content" style="width:500px; margin-left:50px;">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalLongTitle" style="float:left; margin-top:3px; margin-left:10px;">Ambil Foto</h3>
                                    <button type="button" style="margin-top:5px;" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div id="kamera"></div>
                                    <div id="results" style="float:right; margin-top:-148px; margin-right:50px;"></div>
                                    <button id="btn_kamera" type="button" onclick="take_snapshot()" class="btn btn-primary"><i class="fa fa-camera fa-lg"></i></button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" id="save" class="btn btn-primary simpan-foto" data-dismiss="modal">Save changes</button>
                                </div>
                                </div>
                            </div>
                        </div>

                       
     </form>

            </div>
            <!-- ./ Content -->
@endsection

            
@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js" 
integrity="sha512-dQIiHSl2hr3NWKKLycPndtpbh5iaHLo6MwrXm7F0FM5e+kL2U16oE9uIwPHUl6fQBeCthiEuV/rzP3MiAB8Vfw==" 
crossorigin="anonymous">
</script>

<script>
  Webcam.set({
    width: 150,
    height: 150,
    image_format: 'png',
    jpeg_quality: 90
  })

  function btn_ambilFoto(){
    Webcam.attach("#kamera")
  }

  function take_snapshot(){
    Webcam.snap(function (data_uri){
      document.getElementById('results').innerHTML =
      '<img id="hasil" src="'+data_uri+'"/>';
    });

    var hasil = $('#hasil').attr('src');
    $('#save').click(function(){
      $('#img').attr('src', hasil);
      $('#foto').val(hasil);
    });
  }
</script>
<script src="{{ asset('/assets/html/js/customer-select.js') }}"></script>
@endsection
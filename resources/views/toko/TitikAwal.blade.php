@extends('layout/index')
@section('title', 'Titik Awal')

@section('css')
<link rel="stylesheet" href="{{ asset('/assets/html/css/customer.css') }}">
<script src="http://maps.googleapis.com/maps/api/js"></script>
<!-- <script>
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-7.31637,112.70443),
    zoom:15,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("default-map"), propertiPeta);
  
  // membuat Marker
  var marker=new google.maps.Marker({
      position: new google.maps.LatLng(-7.31637,112.70443),
      map: peta,
      animation: google.maps.Animation.BOUNCE
  });

}

// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
</script> -->


<script>
// variabel global marker
var marker;
  
function taruhMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta,
        animation: google.maps.Animation.BOUNCE,
      });
    }
  
     // isi nilai koordinat ke form
    document.getElementById("lat").value = posisiTitik.lat();
    document.getElementById("long").value = posisiTitik.lng();
    
}
  
function initialize() {
  var lat = document.getElementById("lat").value;
  var long = document.getElementById("long").value;

  var propertiPeta = {
    center:new google.maps.LatLng(-7.31637,112.70443),
    zoom:17,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };

//   console.log(propertiPeta);
  
  var peta = new google.maps.Map(document.getElementById("default-map"), propertiPeta);
  
  // even listner ketika peta diklik
  google.maps.event.addListener(peta, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });


}
    
// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
  

</script>

@endsection

@section('body')

            <!-- Content -->
<div class="content ">
                
    <div class="page-header">
        <div>
            <h3>Titik Awal</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Forms</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Titik Awal</li>
                </ol>
            </nav>
        </div>
    </div>
    <form action="{{ URL('/Toko/InputTitikAwal/Save') }}" method="POST">
        @csrf
    <div class="row">

    <div class="col-sm-6">
        <div class="card">
        <div class="card-body">

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Toko</label>
                            <input type="text" class="form-control" id="namatoko" name="namatoko" placeholder="Masukan Nama Toko">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Latitude</label>
                            <input type="text" style="background:black;" id="lat" name="lat" value="" placeholder="Masukkan Latitude" class="form-control">		
                      
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Longitude</label>
                            <input type="text" style="background:black;" id="long" name="long" value="" placeholder="Masukkan Longitude" class="form-control" >		
                      
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Accuracy</label>
                            <input type="text" style="background:black;" id="acc" name="acc" placeholder="Masukkan Accuracy" class="form-control">		
                      
                        </div>

                
                        <div class="form-actions form-group">
                                <div class="row">
                                    <div class="col-sm-6" text-right>
                                            <button type="button" class="btn btn-success btn-xl" onClick="getLocation()">Geolocation</button>
                                            <button type="submit" value="submit" class="btn btn-primary btn-xl">Submit</button>
                                    </div>
                                </div>
                        </div>

                    </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Default</h6>
                                    <div id="default-map" style="height: 400px"></div>
                                </div>
                            </div>
                </div>


            </div>

                       
     </form>

</div>
            <!-- ./ Content -->
@endsection

            
@section('script')
<script src="{{ asset('assets/html/js/titik-awal.js') }}"></script>

<!-- Google map example -->
<script src="{{ asset('assets/html/assets/js/examples/google-map.js') }}"></script>

<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDodpsFh_9UvPq6272RwRWUBqpjxuZ-MfA&callback=initialize">
</script> -->
@endsection
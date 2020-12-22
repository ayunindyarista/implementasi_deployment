@extends('layout/index')
@section('title', 'List Toko')
@section('css')
    <link rel="stylesheet" href="{{ asset('/assets/html/datatable/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/html/css/barang.css') }}">
    <!-- Css -->
<link rel="stylesheet" href="{{ asset('/assets/html/vendors/dataTable/datatables.min.css') }}" type="text/css">

@endsection

@section('body')
<!-- Content -->
<div class="content ">

    <div class="page-header">
        <h4>Data Toko</h4>
        <hr>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">

                    <table class="table table-bordered table-responsive-stack datatable-table">
                            <thead class="thead-dark">
                                <th scope="col">Barcode</th>
                                <th scope="col">Nama Toko</th>
                                <th scope="col">Latitude</th>
                                <th scope="col">Longitude</th>
                                <th scope="col">Accuracy</th>
                                <th scope="col">Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($toko as $t)
                                    <tr>
                                        <td> <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($t->BARCODE, 'C128')}}" height="60" width="180">
                                        <br>{{$t->BARCODE}}
                                        </td>
                                        <td>{{ $t->NAMA_TOKO}}</td>
                                        <td>{{ $t->LATITUDE}}</td>
                                        <td>{{ $t->LONGITUDE}}</td>
                                        <td>{{ $t->ACURACY}}</td>
                                        <td>
                                            <a href="/Toko/List_Toko/Cetak/{{$t->BARCODE}}">
                                            <button type="submit" value="submit" class="btn btn-primary btn-sm">
                                                CETAK BARCODE
                                            </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                </div>



        </div>
    </div>

</div>
<!-- ./ Content -->
@endsection

@section('script')
<!-- Javascript -->
<script src="{{ asset('/assets/html/assets/js/examples/datatable.js') }}"></script>

    <script src="{{ asset('/assets/html/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('/assets/html/datatable/button.min.js') }}"></script>
    <script src="{{ asset('/assets/html/js/barang.js') }}"></script>
@endsection
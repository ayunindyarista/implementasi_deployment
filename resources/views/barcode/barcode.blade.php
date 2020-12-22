@extends('layout/index')
@section('title', 'Data Customer')
@section('css')
<!-- Prism -->
<link rel="stylesheet" href="{{ asset('/assets/html/vendors/prism/prism.css') }}" type="text/css">
<!-- Css -->
<link rel="stylesheet" href="{{ asset('/assets/html/vendors/dataTable/datatables.min.css') }}" type="text/css">

@section('body')
<div class="content ">
                
                <div class="page-header">
                    <div>
                        <h3>Laravel 5 Barcode Generator Using milon/barcode</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <!-- <li class="breadcrumb-item">
                                    <a href="#">Barcode</a>
                                </li> -->
                                <li class="breadcrumb-item active" aria-current="page">Barcode</li>
                            </ol>
                        </nav>
                    </div>
                </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID BARANG</th>
                                        <th>NAMA BARANG</th>
                                        <th class="text-center">Barcode</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($barang as $b)
                                    <tr>
                                        <td>{{$b->ID_BARANG}}</td>
                                        <td>{{$b->NAMA_BARANG}}</td>
                                        <td class="text-center p-t-b-40">
                                        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($b->ID_BARANG, 'C128')}}" alt="barcode" />
                                            <br/>
                                            {{$b->ID_BARANG}}
                                        </td>
                                        <td class="text-center">
                                            <a href="/Barcode/Cetak/{{$b->ID_BARANG}}">
                                            <button type="submit" value="submit" class="btn btn-primary btn-sm">
                                                CETAK BARCODE
                                            </button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="/Barcode/Print">
                                        <button type="button" class="btn btn-primary btn-pulse">
                                            <i class="ti-printer mr-2"></i> Cetak Pdf
                                        </button>
                                        </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
    

@endsection

@section('script')
<!-- Prism -->
<script src="{{ asset('/assets/html/vendors/prism/prism.js') }}"></script>
<!-- Javascript -->
<script src="{{ asset('/assets/html/assets/js/examples/datatable.js') }}"></script>
@endsection
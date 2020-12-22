@extends('layout/index')
@section('title', 'Data Customer')

@section('body')
<div class="content ">
                
                <div class="page-header">
                    <div>
                        <h3>Scanner Barcode</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <!-- <li class="breadcrumb-item">
                                    <a href="#">Barcode</a>
                                </li> -->
                                <li class="breadcrumb-item active" aria-current="page">Scanner Barcode</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="card">
                        <div class="card-body">
                        <button type="button" class="btn btn-primary mr-2 mb-2" data-toggle="modal" data-target="#exampleModal">
                                    Scan Barcode
                                    </button>

                        <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Scan Barcode Titik Awal</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                        
                                        <div>
                                            <a><button type="button" class="btn btn-primary" id="startButton">Start</button></a>
                                            <a><button type="button" class="btn btn-dark" id="resetButton">Reset</button>
                                        </div>
                                        <br>

                                            <div class="col-md-6">
                                                <div class="card">
                                                <video id="video" width="300" height="300" style="border: 1px solid white; background:white"></video>
                                                </div>
                                            </div>

                                        <div id="sourceSelectPanel" style="display:none">
                                            <label for="sourceSelect">Change video source:</label>
                                            <select id="sourceSelect" style="max-width:400px">
                                            </select>
                                            
                                        </div>

                                    </div>
                                    </div>
                                </div>
                        </div>

                        <label>Result:</label>

                            <div class="alert alert-secondary" role="alert" id="result" name="barcode"></div>
                            <div class="alert alert-secondary" role="alert" id="nama" name="nama"></div>
                           
                        

                        <!-- <pre>
                            <input type="text" class="form-control" name="barcode" id="result">
                            <input type="text" class="form-control" name="nama" id="nama">
                        </pre> -->
                        </div>
                </div>
</div>

<script type="text/javascript" src="https://unpkg.com/@zxing/library@latest"></script>
@endsection

@section('script')
<script src="{{ asset('/assets/html/js/scanner-barcode.js') }}"></script>
@endsection
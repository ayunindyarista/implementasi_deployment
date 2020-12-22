@extends('layout/index')
@section('title', 'Data Customer')
@section('body')
<div class="content">

            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Customer</strong>
                            </div>
                            <div class="card-body">
                                
                                @if($message = Session::get('fsuccess'))
                                <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                                    <span class="badge badge-pill badge-primary">Success</span>
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                @endif
                                
                                @if(count($errors) > 0)
                                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                    <span class="badge badge-pill badge-danger">Error</span>
                                    @foreach($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                @endif

                                @if($message = Session::get('ferror'))
                                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                    <span class="badge badge-pill badge-danger">Error</span>
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                @endif

                                @if($message = Session::get('ferror2'))
                                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                    <span class="badge badge-pill badge-danger">Error</span>
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                @endif

                                <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importCustomer">
                                    IMPORT EXCEL
                                </button> <br><br>

                                <!-- Import Excel -->
                                <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form method="post" action="/customer/import_excel" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                                </div>
                                                <div class="modal-body">
                        
                                                    {{ csrf_field() }}
                        
                                                    <label>Pilih file excel</label>
                                                    <div class="form-group">
                                                        <input type="file" name="file_excel" required="required">
                                                    </div>
                        
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Import</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID Customer</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($customer as $cust)
                                        @php $path = url($cust->FILE_PATH); @endphp
                                        <tr>
                                            <td>{{ $cust->ID_CUSTOMER }}</td>
                                            <td>{{ $cust->ID_KELURAHAN}}</td>
                                            <td>{{ $cust->NAMA }}</td>
                                            <td>{{ $cust->ALAMAT }}</td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal{{ $cust->ID_CUSTOMER }}">VIEW</button>
                                                <div class="modal fade" id="modal{{ $cust->ID_CUSTOMER }}" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="smallmodalLabel">Foto</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <center>
                                                                @if (isset($cust->FOTO))
                                                                <!-- <img src="{{ asset($cust->FOTO) }}"> -->
                                                                <img src="{{$cust->FOTO}}"> 
                                                                @endif
                                                                @if (isset($cust->FILE_PATH))
                                                                <img src="{{ asset($cust->FILE_PATH) }}">
                                                                <br>
                                                                {{$path}}
                                                                @endif
                                                                </center>                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Modal Import-->
                    <div class="modal fade" id="importCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                              <form action="{{route('import')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                
                                <div class="form-group">
                                  <input type="hidden" name="id_customer">
                                  <input type="file" class="form-control-file" name="data_customer"> 
                                  <small class="text-form text-muted">Please upload only XLS file.</small>
                                </div>
                          </div>
                          <div class="modal-footer">
                              <input type="submit" class="btn btn-primary" value="Import"></input>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Modal Import-->

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

@endsection
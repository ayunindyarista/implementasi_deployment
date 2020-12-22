@extends('layout/index')
@section('title', 'Data Customer')
@section('body')

<div class="content ">
                
                <div class="page-header">
                    <div>
                        <h3>Data Customer</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Customer</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Data Customer</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-md-12">
            
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col" class="text-center p-t-b-40">
                                                <div class="m-b-10 text-uppercase font-size-11 opacity-7">ID Customer</div>
                                            </th>
                                            <th scope="col" class="text-center p-t-b-40">
                                                <div class="m-b-10 text-uppercase font-size-11 opacity-7">Kelurahan</div>
                                            </th>
                                            <th scope="col" class="text-center p-t-b-40">
                                                <div class="m-b-10 text-uppercase font-size-11 opacity-7">Nama Customer</div>
                                            </th>
                                            <th scope="col" class="text-center p-t-b-40">
                                                <div class="m-b-10 text-uppercase font-size-11 opacity-7">Alamat Customer</div>
                                            </th>
                                            <th scope="col" class="text-center p-t-b-40">
                                                <div class="m-b-10 text-uppercase font-size-11 opacity-7">Foto Customer</div>
                                            </th>
                                            <th scope="col" class="text-center p-t-b-40">
                                                <div class="m-b-10 text-uppercase font-size-11 opacity-7">File Path</div>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            
                                        @foreach($customer as $cust)
                                        @php $path = url($cust->FILE_PATH); @endphp
                                        <!-- {{$cust->FOTO}} -->
                                       
                                        <tr>
                                            <td scope="col" class="text-center p-t-b-40">{{$loop->iteration}}</td>
                                            <td scope="col" class="text-center p-t-b-40">{{$cust->ID_CUSTOMER}}</td>
                                            <td scope="col" class="text-center p-t-b-40">{{$cust->ID_KELURAHAN}}</td>
                                            <td scope="col" class="text-center p-t-b-40">{{$cust->NAMA}}</td>
                                            <td scope="col" class="text-center p-t-b-40">{{$cust->ALAMAT}}</td>

                                            <td scope="col" class="text-center p-t-b-40">
                                            @if (isset($cust->FOTO))
                                            <!-- <img src="{{ asset($cust->FOTO) }}"> -->
                                            <img src="{{$cust->FOTO}}"> 
                                            @endif
                                            </td>

                                            <td scope="col" class="text-center p-t-b-40">
                                            @if (isset($cust->FILE_PATH))
                                            <img src="{{ asset($cust->FILE_PATH) }}">
                                            <br>
                                            {{$path}}
                                            @endif
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
            
                        </div>



@endsection
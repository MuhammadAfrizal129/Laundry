@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card p-5 bg-dark">
        <h3 class="text-white bg-dark"><center>Data Paket</center></h3><br>
        <a href="{{url('admin/datapaket/create')}}" class="btn btn-success">Tambah Paket</a>
        <br>
        <table id="datatable" class="cell-border compact stripe col-12">
                <thead>
                  <tr>
                    <th class="text-center text-white">No</th>
                    <th class="text-center text-white">Id</th>
                    <th class="text-center text-white">Outlet</th>
                    <th class="text-center text-white">Jenis</th>
                    <th class="text-center text-white">Nama Paket</th>
                    <th class="text-center text-white">Harga</th>
                    <th class="text-center text-white">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                     $i = 1; 
                    @endphp
                    @foreach ($paket as $item)
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td class="text-center text-white">{{$item->id_paket}}</td>
                            <td class="text-center text-white">{{$item->nama}}</td>
                            <td class="text-center text-white">{{$item->jenis}}</td>
                            <td class="text-center text-white">{{$item->nama_paket}}</td>
                            <td class="text-center text-white">{{$item->harga}}</td>
                            <td class="text-center text-white">
                        
                                <a href="{{ url('admin/datapaket/' . $item->id_paket )}}" class="btn btn-warning text-white">Edit</a>
                                
                                
                                <a href="{{ url('admin/datapaket/' . $item->id_paket . '/delete')}}" class="btn btn-danger">Delete</a>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</div>
@endsection

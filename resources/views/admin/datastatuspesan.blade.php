@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card p-5 bg-dark">
        <h3 class="text-white bg-dark"><center>Status Pesanan</center></h3><br>
        <a href="{{url('admin/datastatuspesan/create')}}" class="btn btn-success">Tambah Status</a>
        <br>
        <table id="datatable" class="cell-border compact stripe col-12">
                <thead>
                  <tr>
                    <th class="text-center text-white">No</th>               
                    <th class="text-center text-white">Nama Status</th>
                    <th class="text-center text-white">Urutan</th>
                    <th class="text-center text-white">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                     $i = 1; 
                    @endphp
                    @foreach ($status_pesanan as $item)
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            
                            <td class="text-center text-white">{{$item->nama_status_pesanan}}</td>
                            <td class="text-center text-white">{{$item->urutan}}</td>
                            <td class="text-center text-white">
                                <a href="{{ url('admin/datastatuspesan/' . $item->id_status_pesanan )}}" class="btn btn-primary text-white">Edit</a>
                                                               
                                <a href="{{ url('admin/datastatuspesan/' . $item->id_status_pesanan . '/delete')}}" class="btn btn-danger">Delete</a>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</div>
@endsection

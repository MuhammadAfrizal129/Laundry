@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card p-5 bg-dark">
        <h3 class="text-white bg-dark"><center>Data Outlet</center></h3><br>
        <a href="{{url('admin/dataoutlet/create')}}" class="btn btn-success">Tambah Outlet</a>
        <br>
        <table id="datatable" class="cell-border compact stripe col-12">
                <thead>
                  <tr>
                    <th class="text-center text-white">No</th>
                    <th class="text-center text-white">Id</th>
                    <th class="text-center text-white">Nama</th>
                    <th class="text-center text-white">Alamat</th>
                    <th class="text-center text-white">Telepon</th>
                    <th class="text-center text-white">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                     $i = 1; 
                    @endphp
                    @foreach ($outlet as $item)
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td class="text-center text-white">{{$item->id_outlet}}</td>
                            <td class="text-center text-white">{{$item->nama}}</td>
                            <td class="text-center text-white">{{$item->alamat}}</td>
                            <td class="text-center text-white">{{$item->tlp}}</td>
                            <td class="text-center text-white">
                        
                                <a href="{{ url('admin/dataoutlet/' . $item->id_outlet )}}" class="btn btn-warning text-white">Edit</a>
                                
                                
                                <a href="{{ url('admin/dataoutlet/' . $item->id_outlet . '/delete')}}" class="btn btn-danger">Delete</a>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</div>
@endsection

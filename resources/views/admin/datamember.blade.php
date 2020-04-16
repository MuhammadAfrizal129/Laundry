@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card p-5 bg-dark">
    <h3 class="text-white bg-dark"><center>Data Member</center></h3><br>
        <a href="{{url('admin/datamember/create')}}" class="btn btn-success">Tambah Member</a>
        <br>
        <table id="datatable" class="cell-border compact stripe col-12">
                <thead>
                  <tr>
                    <th class="text-center text-white">No</th>
                    <th class="text-center text-white">Id</th>
                    <th class="text-center text-white">Nama</th>
                    <th class="text-center text-white">Alamat</th>
                    <th class="text-center text-white">Jenkel</th>
                    <th class="text-center text-white">Telepon</th>
                    <th class="text-center text-white">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                     $i = 1; 
                    @endphp
                    @foreach ($member as $item)
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td class="text-center text-white">{{$item->id_member}}</td>
                            <td class="text-center text-white">{{$item->nama}}</td>
                            <td class="text-center text-white">{{$item->alamat}}</td>
                            <td class="text-center text-white">{{$item->jenkel}}</td>
                            <td class="text-center text-white">{{$item->tlp}}</td>
                            <td class="text-center text-white">
                        
                                <a href="{{ url('admin/datamember/' . $item->id_member )}}" class="btn btn-warning text-white">Edit</a>
                                
                                
                                <a href="{{ url('admin/datamember/' . $item->id_member .'/delete')}}" class="btn btn-danger">Delete</a>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</div>
@endsection

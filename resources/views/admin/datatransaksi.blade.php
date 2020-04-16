@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card p-5 bg-dark">
        <h3 class="text-white bg-dark"><center>Data Transaksi</center></h3><br>
        <a href="{{url('admin/datatransaksi/create')}}" class="btn btn-success">Entry Transaksi</a><br/>
        <a href="{{url('admin/datatransaksi/laporan')}}" class="btn btn-primary">Cetak Laporan</a>
        <br>
        <table id="datatable" class="cell-border compact stripe col-12">
                <thead>
                  <tr>
                    <th class="text-center text-white">No</th>
                    <th class="text-center text-white">Id</th>
                    <th class="text-center text-white">Tanggal</th>
                    <th class="text-center text-white">Member</th>
                    <th class="text-center text-white">Paket</th>
                    <th class="text-center text-white">Berat (KG)</th>
                    <th class="text-center text-white">Biaya Tambahan</th>
                    <th class="text-center text-white">Harga Total</th>
                    <th class="text-center text-white">Status Pesanan</th>
                    <th class="text-center text-white">Status Pembayaran</th>
                    <th class="text-center text-white">Tanggal Bayar</th>
                    <th class="text-center text-white">Update Status</th>
                    <th class="text-center text-white">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                     $i = 1; 
                    @endphp
                    @foreach ($transaksi as $item)
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td class="text-center text-white">{{$item->id_transaksi}}</td>
                            <td class="text-center text-white">{{$item->tanggal}}</td>
                            <td class="text-center text-white">{{$item->nama}}</td>
                            <td class="text-center text-white">{{$item->nama_paket}}</td>
                            <td class="text-center text-white">{{$item->berat}}</td>
                            <td class="text-center text-white">{{$item->biaya_tambahan}}</td>
                            <td class="text-center text-white">{{$item->harga_total}}</td>
                            <td class="text-center text-white">{{$item->nama_status_pesanan}}</td>
                            <td class="text-center text-white">{{$item->nama_status_pembayaran}}</td>
                            <td class="text-center text-white">{{$item->tgl_bayar}}</td>
                            <td class="text-center text-white">
                        
                                <a href="{{ url('admin/datatransaksi/naikkan_status/'.$item->id_transaksi) }}" class="btn btn-success">Pesanan</a>
                                
                                
                                <a href="{{ url('admin/datatransaksi/naikkan_status_pembayaran/'.$item->id_transaksi) }}" class="btn btn-warning text-white">Bayar</a>
                                
                            </td>
                            <td class="text-center text-white">
                                <a href="{{ url('admin/datatransaksi/' . $item->id_transaksi )}}" class="btn btn-primary text-white">Edit</a>

                                <a href="{{ url('admin/datatransaksi/' . $item->id_transaksi . '/delete') }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
                
        </table>
        <br>
        <div align="center">
            <a href="{{ url('/admin/datastatuspesan')}}" class="btn btn-success">Atur Status Pesanan</a>
            <a href="{{ url('/admin/datastatusbayar')}}" class="btn btn-warning text-white">Atur Status Pembayaran</a>
        </div>
    </div>
</div>
@endsection

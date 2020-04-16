@extends('layouts.appkasir')
@section('content')
<div class="container">
    <div class="card p-5 bg-dark">
        <h3 class="text-white bg-dark"><center>Data Transaksi</center></h3><br>
        <a href="{{url('kasir/datatransaksi/create')}}" class="btn btn-success">Entry Transaksi</a><br/>
        <a href="{{url('kasir/datatransaksi/laporan')}}" class="btn btn-primary">Cetak Laporan</a>
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
                    <th class="text-center text-white"></th>
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
                        
                                <a href="{{ url('kasir/datatransaksi/naikkan_status/'.$item->id_transaksi) }}" class="btn btn-primary">Pesanan</a>
                                
                                
                                <a href="{{ url('kasir/datatransaksi/naikkan_status_pembayaran/'.$item->id_transaksi) }}" class="btn btn-info">Bayar</a>
                                
                            </td>
                            <td class="text-center">
                                <a href="{{ url('kasir/datatransaksi/' . $item->id_transaksi . '/delete') }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
                
        </table>
        <br>
    </div>
</div>
@endsection

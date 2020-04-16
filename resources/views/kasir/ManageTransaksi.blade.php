@extends('layouts.appkasir')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ __('Tambah Transaksi') }}</div>

                <div class="card-body bg-dark">
                    <form method="POST" action="{{ url('/kasir/datatransaksi' ,@$transaksi->id_transaksi) }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="tanggal"
                        value="<?php $tgl=date('Y-m-d');
                        echo $tgl; ?>">

                        <div class="form-group row">
                            <label for="member" class="col-md-4 col-form-label text-md-right text-white">{{ __('Pelanggan') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="member">
                                    @foreach($c_member as $row)
                                     <option class="form-control" value="{{ old('member' ,@$row->id_member) }}">{{ @$row->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="paket" class="col-md-4 col-form-label text-md-right text-white">{{ __('Paket') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="paket">
                                    @foreach($c_paket as $row)
                                     <option class="form-control" value="{{ old('paket' ,@$row->id_paket) }}">{{ @$row->nama_paket }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="berat" class="col-md-4 col-form-label text-md-right text-white">{{ __('Berat') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="berat" value=" {{ old('berat', @$transaksi->berat) }} " placeholder="Urutan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="biaya_tambahan" class="col-md-4 col-form-label text-md-right text-white">{{ __('Biaya Tambahan') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="biaya_tambahan" value=" {{ old('biaya_tambahan', @$transaksi->biaya_tambahan) }} " placeholder="Urutan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status_pesanan" class="col-md-4 col-form-label text-md-right text-white">{{ __('Status Pesanan') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="status_pesanan">
                                    @foreach($c_status_pesanan as $row)
                <option class="form-control" value="{{ old('status_pesanan' ,@$row->id_status_pesanan) }}">{{ @$row->nama_status_pesanan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status_pembayaran" class="col-md-4 col-form-label text-md-right text-white">{{ __('Status Pembayaran') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="status_pembayaran">
                                    @foreach($c_status_pembayaran as $row)
        <option class="form-control" value="{{ old('status_pembayaran' ,@$row->id_status_pembayaran) }}">{{ @$row->nama_status_pembayaran }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                         <input type="hidden" name="tgl_bayar"
                        value="<?php $tgl=date('Y-m-d');
                        echo $tgl; ?>">

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <form action=" {{ url('/kasir/datatransaksi' ,@$transaksi->id_transaksi) }} " method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="tanggal"
    value="<?php
            $tgl=date('Y-m-d');
            echo $tgl;
            ?>">
    Pelanggan
    <select name="member">
        @foreach($c_member as $row)
            <option value="{{ old('member' ,@$row->id_member) }}">{{ @$row->nama }}</option>
        @endforeach
    </select> <br>
    Paket
    <select name="paket">
        @foreach($c_paket as $row)
            <option value="{{ old('paket' ,@$row->id_paket) }}">{{ @$row->nama_paket }}</option>
        @endforeach
    </select> <br>
    Berat <input type="text" name="berat" value=" {{ old('berat', @$transaksi->berat) }} "> <br>
    Biaya Tambahan <input type="text" name="biaya_tambahan" value=" {{ old('biaya_tambahan', @$transaksi->biaya_tambahan) }} "> <br>
    Status Pesanan
    <select name="status_pesanan">
        @foreach($c_status_pesanan as $row)
            <option value="{{ old('status_pesanan' ,@$row->id_status_pesanan) }}">{{ @$row->nama_status_pesanan }}</option>
        @endforeach
    </select> <br>
    Status Pembayaran
    <select name="status_pembayaran">
        @foreach($c_status_pembayaran as $row)
            <option value="{{ old('status_pembayaran' ,@$row->id_status_pembayaran) }}">{{ @$row->nama_status_pembayaran }}</option>
        @endforeach
    </select> <br>
    <input type="hidden" name="tanggal_bayar"
    value="<?php
            $tgl=date('Y-m-d');
            echo $tgl;
            ?>">

<input type="submit" value="submit">

</form>

@endsection -->
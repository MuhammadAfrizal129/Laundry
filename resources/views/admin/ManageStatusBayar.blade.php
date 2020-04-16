@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ __('Tambah Status Pembayaran') }}</div>

                <div class="card-body bg-dark">
                    <form method="POST" action="{{ url('/admin/datastatusbayar' ,@$status_pembayaran->id_status_pembayaran) }}">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="id_status_pembayaran" class="col-md-4 col-form-label text-md-right text-white">{{ __('ID') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="id_status_pembayaran" value=" {{ old('id_status_pembayaran', @$status_pembayaran->id_status_pembayaran) }} " placeholder="Id Status Pesanan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_status_pembayaran" class="col-md-4 col-form-label text-md-right text-white">{{ __('Nama Status') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="nama_status_pembayaran" value=" {{ old('nama_status_pembayaran', @$status_pembayaran->nama_status_pembayaran) }} " placeholder="Nama Status Pesanan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="urutan" class="col-md-4 col-form-label text-md-right text-white">{{ __('Urutan') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="urutan" value=" {{ old('urutan', @$status_pembayaran->urutan) }} " placeholder="Urutan">
                            </div>
                        </div>

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

<!-- <center><h1>Tambah Status Pembayaran</h1></center>
<form action=" {{ url('/admin/datastatusbayar' ,@$status_pembayaran->id_status_pembayaran) }} " method="POST">
    {{ csrf_field() }}
    Id :<input type="text" name="id_status_pembayaran" value="{{ old('id_status_pembayaran', @$status_pembayaran->id_status_pembayaran) }}"> <br>
    Nama Status : <input type="text" name="nama_status_pembayaran" value="{{ old('nama_status_pembayaran', @$status_pembayaran->nama_status_pembayaran) }}"> <br>
    Urutan : <input type="text" name="urutan" value="{{ old('urutan', @$status_pembayaran->urutan) }}"> <br>
    <input type="submit" value="submit">
</form>
@endsection -->
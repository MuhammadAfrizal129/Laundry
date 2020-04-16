@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ __('Tambah Status Pesanan') }}</div>

                <div class="card-body bg-dark">
                    <form method="POST" action="{{ url('/admin/datastatuspesan' ,@$status_pesanan->id_status_pesanan) }}">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="id_status_pesanan" class="col-md-4 col-form-label text-md-right text-white">{{ __('ID') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="id_status_pesanan" value=" {{ old('id_status_pesanan', @$status_pesanan->id_status_pesanan) }} " placeholder="Id Status Pesanan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_status_pesanan" class="col-md-4 col-form-label text-md-right text-white">{{ __('Nama Status') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="nama_status_pesanan" value=" {{ old('nama_status_pesanan', @$status_pesanan->nama_status_pesanan) }} " placeholder="Nama Status Pesanan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="urutan" class="col-md-4 col-form-label text-md-right text-white">{{ __('Urutan') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="urutan" value=" {{ old('urutan', @$status_pesanan->urutan) }} " placeholder="Urutan">
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

<!-- <center><h1>Tambah Status Pesanan</h1></center>
<form action=" {{ url('/admin/datastatuspesan' ,@$status_pesanan->id_status_pesanan) }} " method="POST">
    {{ csrf_field() }}
    Id :<input type="text" name="id_status_pesanan" value="{{ old('id_status_pesanan', @$status_pesanan->id_status_pesanan) }}"> <br>
    Nama Status : <input type="text" name="nama_status_pesanan" value="{{ old('nama_status_pesanan', @$status_pesanan->nama_status_pesanan) }}"> <br>
    Urutan : <input type="text" name="urutan" value="{{ old('urutan', @$status_pesanan->urutan) }}"> <br>
    <input type="submit" value="submit">
</form>
@endsection -->
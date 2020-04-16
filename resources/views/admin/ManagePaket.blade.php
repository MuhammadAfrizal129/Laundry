@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ __('Tambah Paket') }}</div>

                <div class="card-body bg-dark">
                    <form method="POST" action="{{ url('/admin/datapaket' ,@$paket->id_paket) }}">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="id_outlet" class="col-md-4 col-form-label text-md-right text-white">{{ __('Outlet') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="id_outlet">
       								 @foreach($c_outlet as $row)
            							<option class="form-control" value="{{ old('id_outlet' ,@$row->id_outlet) }}">{{ @$row->nama }}</option>
        							@endforeach
    							</select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_paket" class="col-md-4 col-form-label text-md-right text-white">{{ __('Nama Paket') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="nama_paket" value=" {{ old('nama_paket', @$paket->nama_paket) }} " placeholder="Nama Paket">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jenis" class="col-md-4 col-form-label text-md-right text-white">{{ __('Jenis') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="jenis" value=" {{ old('jenis', @$paket->jenis) }} " placeholder="Jenis">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga" class="col-md-4 col-form-label text-md-right text-white">{{ __('Harga') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="harga" value=" {{ old('harga', @$paket->harga) }} " placeholder="Harga">
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

<!-- <center><h1>Manage Paket</h1></center>
<form action=" {{ url('/admin/datapaket' ,@$paket->id_paket) }} " method="POST">
    {{ csrf_field() }}
    Outlet :<input type="text" name="id_outlet" value="{{ old('id_outlet', @$paket->id_outlet) }}"> <br>
    Jenis : <input type="text" name="jenis" value="{{ old('jenis', @$paket->jenis) }}"> <br>
    Nama : <input type="text" name="nama_paket" value="{{ old('nama_paket', @$paket->nama_paket) }}"> <br>
    Harga : <input type="text" name="harga" value=" {{ old('harga', @$paket->harga) }} "> <br>
    <input type="submit" value="submit">
</form>
@endsection -->
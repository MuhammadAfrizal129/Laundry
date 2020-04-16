@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ __('Tambah Outlet') }}</div>

                <div class="card-body bg-dark">
                    <form method="POST" action="{{ url('/admin/dataoutlet' ,@$outlet->id_outlet) }}">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right text-white">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="nama" value="{{ old('nama', @$outlet->nama) }}" placeholder="Nama">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right text-white">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="alamat" value=" {{ old('alamat', @$outlet->alamat) }} " placeholder="Alamat">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tlp" class="col-md-4 col-form-label text-md-right text-white">{{ __('Telepon') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="tlp" value=" {{ old('tlp', @$outlet->tlp) }} " placeholder="Telepon">
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

<!-- <center><h1>Manage Member</h1></center>
<form action=" {{ url('/admin/dataoutlet' ,@$outlet->id_outlet) }} " method="POST">
    {{ csrf_field() }}
    Nama : <input type="text" name="nama" value="{{ old('nama', @$outlet->nama) }}"> <br>
    Alamat : <input type="text" name="alamat" value=" {{ old('alamat', @$outlet->alamat) }} "> <br>
    Telepon : <input type="text" name="tlp" value=" {{ old('tlp', @$outlet->tlp) }} "> <br>
    <input type="submit" value="submit">
</form>
@endsection -->
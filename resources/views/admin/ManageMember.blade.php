@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ __('Tambah Pelanggan') }}</div>

                <div class="card-body bg-dark">
                    <form method="POST" action="{{ url('/admin/datamember' ,@$member->id_member) }}">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right text-white">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="nama" value="{{ old('nama', @$member->nama) }}" placeholder="Nama">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right text-white">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="alamat" value=" {{ old('alamat', @$member->alamat) }} " placeholder="Alamat">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jenkel" class="col-md-4 col-form-label text-md-right text-white">{{ __('Jenis Kelamin') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="jenkel">
                                    <option class="form-control" value="P">Pria</option>
                                    <option class="form-control" value="W">Wanita</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tlp" class="col-md-4 col-form-label text-md-right text-white">{{ __('Telepon') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="tlp" value=" {{ old('tlp', @$member->tlp) }} " placeholder="Telepon">
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

<!-- <div class="container">
	<div class="card mt-5">
		<div class="card-header text-center"><center><h1>Tambah Pelanggan</h1></center></div>
			<div class="card-body">
				<br/>
<form action=" {{ url('/admin/datamember' ,@$member->id_member) }} " method="POST">
    {{ csrf_field() }}

    <div class="form-group row">
    	<label>Nama</label>
    	<div class="col-md-6">
    	<input class="form-control" type="text" name="nama" value="{{ old('nama', @$member->nama) }}" placeholder="Nama">
    	</div>
    </div>
    <div class="form-group row">
    	<label>Alamat</label>
    	<div class="col-md-6">
    	<input class="form-control" type="text" name="alamat" value=" {{ old('alamat', @$member->alamat) }} " placeholder="Alamat">
    	</div>
    </div>
    <div class="form-group row">
    	<label>Jenis Kelamin</label>
    	<div class="col-md-6">
    	<select class="form-control" name="jenkel">
    		<option class="form-control" value="P">Pria</option>
    		<option class="form-control" value="W">Wanita</option>
    	</select>
    	</div>
    </div>
    <div class="form-group row">
    	<label>Telepon</label>
    	<div class="col-md-6">
    	<input class="form-control" type="text" name="tlp" value=" {{ old('tlp', @$member->tlp) }} " placeholder="Telepon">
    	</div>
    </div>
    <input type="submit" value="Submit">
</form>
		</div>
	</div>
</div>
@endsection -->
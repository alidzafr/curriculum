@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Tambah Data Guru</h4>
                    <a href="{{ route('teacher.index') }}" class="btn btn-sm btn-primary mb-3">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('teacher.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nuptk">NUPTK</label>
                            <input type="number" name="nuptk" class="form-control @error('nuptk') is-invalid @enderror">
                            @error('nuptk')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="">-- Silahkan Pilih Gender --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('gender')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

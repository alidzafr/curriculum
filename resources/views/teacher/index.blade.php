@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Data Guru</h4>
                    <a href="{{ route('teacher.create') }}" class="btn btn-sm btn-info mb-3">Add Data</a>
                </div>

                <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NUPTK</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($teachers as $teacher)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $teacher->nuptk }}</td>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->gender }}</td>
                            <td>
                                <a href="#" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">There is no data</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

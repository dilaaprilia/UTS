@extends('karyawan.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>List of karyawan</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('karyawan.create') }}"> Create New Employee</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>KTP</th>
        <th>Alamat</th>
        <th>No. HP</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($karyawan as $karyawan)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $karyawan->nama }}</td>
        <td>{{ $karyawan->ktp }}</td>
        <td>{{ $karyawan->alamat }}</td>
        <td>{{ $karyawan->no_hp }}</td>
        <td>
            <form action="{{ route('karyawan.destroy',$karyawan->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('karyawan.show',$karyawan->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('karyawan.edit',$karyawan->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection

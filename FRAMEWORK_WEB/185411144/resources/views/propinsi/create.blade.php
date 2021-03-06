@extends('app')
@section('content')
<h4>Tambah Propinsi</h4>

@if ($message = Session::get('message'))
<div class="alert alert-success martop-sm">
    <p>{{ $message }}</p>
</div>
@endif

<form action="{{ route('propinsi.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Propinsi</label>
        <input type="text" name="nama_propinsi" class="form-control" value="">
    </div>
    <button type="submit" class="btn btn-info btn-sm">Submit</button>
</form>
@endsection
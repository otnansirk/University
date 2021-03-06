@extends('app')
@section('content')
<h4>Ubah Propinsi</h4>

@if ($message = Session::get('message'))
<div class="alert alert-success martop-sm">
    <p>{{ $message }}</p>
</div>
@endif

<form action="{{ route('propinsi.update', $propinsi->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Propinsi</label>
        <input type="text" name="nama_propinsi" class="form-control" value="{{ $propinsi->nama_propinsi }}">
    </div>
    <button type="submit" class="btn btn-info btn-sm">Submit</button>
</form>
@endsection
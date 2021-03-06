@extends('app')
@section('content')
<h4>Tambah kota</h4>

@if ($message = Session::get('message'))
<div class="alert alert-success martop-sm">
    <p>{{ $message }}</p>
</div>
@endif

<form action="{{ route('kota.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Nama propinsi</label>
        <select name="id_propinsi" class="form-control">
            @foreach ($propinsi as $item)
            <option value="{{ $item->id }}">{{ $item->nama_propinsi }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama kota</label>
        <input type="text" name="nama_kota" class="form-control" value="">
    </div>
    <button type="submit" class="btn btn-info btn-sm">Submit</button>
</form>
@endsection
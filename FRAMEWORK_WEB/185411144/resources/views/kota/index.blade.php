@extends('app')
@section('content')
<h4>Menajemen Tabel kota</h4>
<a href="{{ route('kota.create') }}" class="btn btn-info btn-sm">Kota Baru</a>
@if ($message = Session::get('message'))
<div class="alert alert-success martop-sm">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-responsive martop-sm">
    <thead>
        <th>ID</th>
        <th>Propinsi</th>
        <th>Kota</th>
        <th>Action</th>
    </thead>
    </thead>
    <tbody>
        @foreach ($kota as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>
                <a href="{{ route('kota.show', $p->id) }}">
                    {{ $p->propinsi->nama_propinsi }}
                </a>
            </td>
            <td>
                <a href="{{ route('kota.show', $p->id) }}">
                    {{ $p->nama_kota }}
                </a>
            </td>
            <td>
                <form action="{{ route('kota.destroy', $p->id) }}" method="post">
                    {{csrf_field()}}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('kota.edit', $p->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $kota->render() !!}
@endsection
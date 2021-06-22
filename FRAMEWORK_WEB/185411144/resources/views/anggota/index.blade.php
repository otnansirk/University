@extends('app')
@section('content')
@if ($message = Session::get('success'))
 <div class="alert alert-success">
    <p>{{ $message }}</p>
 </div>
@endif

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="fa fa-check-square-o" style="font-size:28px;">
            Tabel Rekaman Anggota</h2>
        </div>
   </div>
   <a href="{{ url('anggota/create') }}"
        class="btn btn-primary btn-sm">
        <span class="glyphicon glyphicon-plus"></span> Tambah Anggota
    </a>
   <table class="table table-striped table-bordered">
    <thead>
        <tr style="color: #fff"; bgcolor="#4CAF50">
            <th>No</th>
            <th>No Anggota</th>
            <th>Nama</th>
            <th>telepon</th>
            <th>e-mail</th>
            <th width="240px">Aksi</th>
        </tr>
    </thead>
    <tbody>
    @php $i=0; @endphp
        @foreach($anggota as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->id }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->telepon }}</td>
            <td>{{ $value->e_mail }}</td>
            <td align="center">
                <a class="btn btn-info " 
                href="{{route('anggota.show',$value->id) }}">
                    Lihat
                </a>
                <a class="btn btn-primary" 
                href="{{ route('anggota.edit',$value->id) }}">
                    Ubah
                </a>
                {!! Form::open(['method' => 'DELETE',
                    'route' => ['anggota.destroy', $value->id],
                    'style' => 'display:inline']) 
                !!}
                {!! Form::submit('Hapus', [
                    'class'        => 'btn btn-danger confirm',
                    'data-confirm' => 'Are you sure you want to delete?'])
                !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
   </table>
   {!! $anggota->render() !!}
   @endsection
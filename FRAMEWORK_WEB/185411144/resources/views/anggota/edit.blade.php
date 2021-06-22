@extends('app')
@section('content')
<h3>Ubah Data Anggota {{ $data->user_id }}</h3>
<div class="button" style="float:right">
    <a href="{{ route('anggota.edit', $data->id) }}" class="btn btn-primary">Ubah</a>
    <a href="{{route('anggota.index')}}" class="btn btn-primary">Kembali</a>
</div>
<br>
{!! Form::open(['route' => ['anggota.update', $data->id],'method'=>'PUT',
 'enctype'=>'multipart/form-data']) !!}

<div class="form-group">
<div class="form-group">
    {!! Form::label('nama', 'Nama:',['class' =>'control-label']) !!}
    {!! Form::text('nama', $data->nama, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('user_id', 'Nomor Anggota:',['class' =>'control-label']) !!}
    {!! Form::text('user_id', $data->user_id, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('jenis_kel', 'Jenis Kelamin:',
        ['class' => 'control-label']) !!}
    {!! Form::radio('jenis_kel','L',($data->jenis_kel == 'L')? true: false) !!} Laki-laki
    {!! Form::radio('jenis_kel','P',($data->jenis_kel == 'P')? true: false) !!} Perempuan
</div>
<div class="form-group">
    {!! Form::label('tanggal_lhr', 'Tanggal Lahir',
        ['class' => 'control-label']) 
    !!}
    {!! Form::date('tanggal_lhr',$data->tanggal_lhr,
        ['class' => 'form-control']) 
    !!}
</div>
<div class="form-group">
 {!! Form::label('telepon', 'Telepon/HP:',
    ['class' => 'control-label']) !!}
 {!! Form::text('telepon', $data->telepon, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::label('e_mail', 'E-mail:',
    ['class' => 'control-label']) !!}
 {!! Form::text('e_mail', $data->e_mail, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <img src="{{ asset("foto/$data->foto") }}" width="30%"/>
</div>

<div class="form-group">
    {!! Form::label('foto', 'Foto:',
       ['class' => 'control-label']) !!}
    {!! Form::file('foto', old('foto'),
    ['class' => 'form-control']) !!}
</div>

{!! Form::submit('simpan', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@endsection
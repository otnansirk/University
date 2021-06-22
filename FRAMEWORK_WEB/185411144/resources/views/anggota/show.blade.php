@extends('app')
@section('content')
<h3>Detail Data Anggota {{ $data->user_id }}</h3>
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
    {!! Form::text('nama', $data->nama, ['class' => 'form-control', 'disabled']) !!}
</div>
<div class="form-group">
    {!! Form::label('user_id', 'Nomor Anggota:',['class' =>'control-label']) !!}
    {!! Form::text('user_id', $data->user_id, ['class' => 'form-control', 'disabled']) !!}
</div>
<div class="form-group">
    {!! Form::label('jenis_kel', 'Jenis Kelamin:',
        ['class' => 'control-label']) !!}
        {{($data->jenis_kel == 'L')? 'Laki-laki': 'Perempuan'}}
</div>
<div class="form-group">
    {!! Form::label('tanggal_lhr', 'Tanggal Lahir',
        ['class' => 'control-label']) 
    !!}
    {!! Form::date('tanggal_lhr',$data->tanggal_lhr,
        ['class' => 'form-control', 'disabled']) 
    !!}
</div>
<div class="form-group">
 {!! Form::label('telepon', 'Telepon/HP:',
    ['class' => 'control-label']) !!}
 {!! Form::text('telepon', $data->telepon, ['class' => 'form-control', 'disabled']) !!}
</div>
<div class="form-group">
 {!! Form::label('e_mail', 'E-mail:',
    ['class' => 'control-label']) !!}
 {!! Form::text('e_mail', $data->e_mail, ['class' => 'form-control', 'disabled']) !!}
</div>
<div class="form-group">
    <img src="{{ asset("foto/$data->foto") }}" width="30%"/>
</div>

{!! Form::close() !!}
@endsection
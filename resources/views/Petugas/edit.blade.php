@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Edit Data Petugas
                </div>
                @if (Count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $pesan)
                        <li>
                            {{$pesan}}
                        </li>
                        @endforeach
                    </ul>
                </div>  
                @endif
                <div class="card-body">
                    {!! Form::model($data, ['route'=> ['pegawai.update', $data->id], 'method'=>'PUT']) !!}
                        <div class="form-group">
                            {!! Form::text('kode_petugas', null, ['class'=>'form-control', 'id'=> 'kode_petugas']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('nama_petugas', null, ['class'=>'form-control', 'id'=> 'nama_petugas']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('no_telpon_petugas', null, ['class'=>'form-control', 'id'=> 'no_telpon_petugas']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('email_petugas', null, ['class'=>'form-control', 'id'=> 'email_petugas']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Submit', null, ['class'=>'btn btn-primary btn']) !!}
                            <a href="/pegawai" type="button" class="btn btn-warning">Cancel</a> 
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
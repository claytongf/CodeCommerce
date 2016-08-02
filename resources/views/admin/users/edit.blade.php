@extends('app')
@section('content')
<div class="container">
    <h1>Editing User: {{$user->name}}</h1>
    @if ($errors->any())
    <ul class="alert">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    {!! Form::open(['route'=>['admin/users.update', $user->id], 'method'=>'put']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', $user->name, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Description:') !!}
        {!! Form::text('email', $user->email, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save User', ['class'=>'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection
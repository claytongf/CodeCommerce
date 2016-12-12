@extends('app')
@section('content')
<div class="container">
    <h1>Editing Category: {{$category->name}}</h1>
    @if ($errors->any())
    <ul class="alert">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    {!! Form::model($category, ['route'=>['admin/categories.update', $category->id], 'method'=>'put']) !!}
    @include('admin/categories._form')
    <div class="form-group">
        {!! Form::submit('Save Category', ['class'=>'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection
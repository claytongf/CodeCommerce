@extends('app')
@section('content')
<div class="container">
    <h1>Editing Product: {{$product->name}}</h1>
    @if ($errors->any())
    <ul class="alert">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    {!! Form::open(['route'=>['admin/products.update', $product->id], 'method'=>'put']) !!}
    <div class="form-group">
        {!! Form::label('category', 'Category:') !!}
        {!! Form::select('category_id', $categories, $product->category->id, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', $product->name, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::textarea('description', $product->description, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('price', 'Price:') !!}
        {!! Form::text('price', $product->price, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('featured', 'Featured:') !!}
        {!! Form::hidden('featured', 'no')!!}
        @if ($product->featured === 'yes')
        {!! Form::checkbox('featured', 'yes', true) !!}
        @else
        {!! Form::checkbox('featured', 'yes', false) !!}
        
        @endif
    </div>
    <div class="form-group">
        {!! Form::label('recommend', 'Recommend:') !!}
        {!! Form::hidden('recommend', 'no')!!}
        @if ($product->recommend === 'yes')
        {!! Form::checkbox('recommend', 'yes', true) !!}
        @else
        {!! Form::checkbox('recommend', 'yes', false) !!}
        @endif
    </div>
    <div class="form-group">
        {!! Form::submit('Save Product', ['class'=>'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection
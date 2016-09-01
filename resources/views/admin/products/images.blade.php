@extends('app')
@section('content')
<div class="container">
    <h1>Images of {{ $product->name }}</h1>
    
    <br />
    <a href="{{ route('admin/products.images.create', ['id'=>$product->id]) }}" class="btn btn-default">New Image</a>
    <br />
    <br />
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Extension</th>
            <th>Action</th>
        </tr>
        
        @foreach($product->images as $image)
        <tr>
            <td>{{ $image->id }}</td>
            <td><img width="80" src="{{ url('uploads/'.$image->id.'.'.$image->extension)}}"/></td>
            <td>{{ $image->extension }}</td>
            <td>
                <a href="{{ route('admin/products.images.destroy', ['id'=>$image->id]) }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('admin/products') }}" class="btn btn-default">Voltar</a>
</div>
@endsection
@extends('app')
@section('content')
<div class="container">
    <h1>Products</h1>
    
    <br />
    <a href="{{ route('adminproducts.create') }}" class="btn btn-default">New Product</a>
    <br />
    <br />
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Featured</th>
            <th>Recommend</th>
            <th>Action</th>
        </tr>
        
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->featured }}</td>
            <td>{{ $product->recommend }}</td>
            <td>
                <a href="{{ route('adminproducts.edit', ['id'=>$product->id])}}">Edit</a> | 
                <a href="{{ route('adminproducts.destroy', ['id'=>$product->id])}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
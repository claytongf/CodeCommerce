@extends('app')
@section('content')
<div class="container">
    <h1>Orders</h1>
    <br />
    <table class="table">
        <tr>
            <th>Order #</th>
            <th>Customer</th>
            <th>Description</th>
            <th>Price</th>
            <th>Status</th>
        </tr>
        
        @foreach($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->user->name }}</td>
            <td>
            @foreach($order->items as $item)
                Quantidade: {{ $item->qtd }}<br/>
                Produto: {{ $item->product->name }}<br/>
                Preço: {{ $item->price }}
            @endforeach
            </td>
            <td>{{ $order->total }}</td>
            <td>
                {!! Form::open(['route'=> ['admin.orders.update', $order->id], 'method'=>'put', 'class'=>'form-inline']) !!}
                {!! Form::select('status_id', $status, $order->status->id, ['class'=> 'form-control', 'style'=>'float: left;']) !!}
                {!! Form::submit('Update', ['class'=>'btn btn-success']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>

</div>
@endsection
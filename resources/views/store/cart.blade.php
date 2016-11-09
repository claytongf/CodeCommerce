@extends('store.store')
@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Valor</td>
                        <td class="quantity">Quantidade</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($cart->all() as $k=>$item)
                        <tr>
                            <td class="cart_product">
                                <a href="{{ route('store.product', ['id'=>$k]) }}">
                                    Imagem
                                </a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="{{ route('store.product', ['id'=>$k]) }}">{{ $item['name'] }}</a></h4>
                                <p>Código: {{ $k }}</p>
                            </td>
                            <td class="cart_price">
                                R$ {{ $item['price'] }}
                            </td>
                            <td class="cart_quantity">
                                {!! Form::open(['id' => 'cartForm'.$k]) !!}
                                <div class="form-group col-xs-2">
                                    {!! Form::text('cart_'.$k, $item['qtd'], ['class'=>' form-control', 'id'=>'cart_'.$k]) !!}
                                </div>

                                {!! Form::close() !!}
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">R$ <span id="cart_price{{ $k }}">{{ $item['price'] * $item['qtd'] }}</span></p>
                            </td>
                            <td class="cart_delete">
                                <a href="{{ route('cart.destroy', ['id'=>$k]) }}" class="cart_quantity_delete">Delete</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">
                                <p>Nenhum item encontrado.</p>
                            </td>
                        </tr>
                        @endforelse
                    <tr class="cart_menu">
                        <td colspan="6">
                            <div class="pull-right">
                                TOTAL: R$ <span style="margin-right: 100px;" id="cart_total"> {{ $cart->getTotal() }}</span>
                                <a href="" class="btn btn-success">Fechar a conta</a>
                            </div>
                        </td>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@stop
@section('post-script')
    <script>
        $(':input').on('change', function (){
            var inputid = $(this).attr('id');
            var qtd = $('#'+inputid).val();
            var id = inputid.split("_");
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: "./cart/update/"+id[1]+"/"+qtd,
                success: function(resposta){
                    $("#cart_price"+id[1]).text(resposta.price);
                    $("#cart_total").text(resposta.total);
                }
            });
        });
    </script>
@stop
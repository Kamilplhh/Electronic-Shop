@extends('layouts.master')
@vite('resources/css/cart.css')

@section('content')
<div class="table-body">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width:65vw">Product</th>
                <th style="width:10vw" class="text-center">Price</th>
                <th style="width:6vw" class="text-center">Quantity</th>
                <th style="width:10vw" class="text-center">Subtotal</th>
                <th style="width:5vw"></th>
            </tr>
        </thead>
        <tbody>
            @php $total = 0 @endphp
            @if(session('cart'))
            @foreach(session('cart') as $id => $cart)
            @php $total += $cart['price'] * $cart['quantity'] @endphp
            <tr style="height: 22vh;">
                <td>
                    <div class="row">
                        <div style="height: 22vh; width: 22vh;" class="col-lg-4 col-md-6 col-8"><img src="{{ url('images/'.$cart['photo']) }}"" width=" 80%" height="100%" class="img-responsive" /></div>
                        <div class="col-lg-6 col-md-6 col-4 center">
                            <h4>{{ $cart['product_name'] }}</h4>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="center">
                        {{ $cart['price'] }}$
                    </div>
                </td>

                <td>
                    <div class="center">
                        {{ $cart['quantity'] }}
                    </div>
                </td>

                <td>
                    <div class="center">
                        {{ $cart['price'] * $cart['quantity'] }}$
                    </div>
                </td>

                <td>
                    <div class="center">
                        <form method="POST" action="{{ route('remove_from_cart',$id) }}">
                            @csrf
                            @method('delete')

                            <button class="btn" type='submit'>
                                <i class="fa fa-trash fa-xl"></i>
                            </button>
                        </form>
                    </div>
                </td>

            </tr>
            @endforeach
            @endif
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5" class="text-right">
                    <h3><strong>Total ${{ $total }}</strong></h3>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
@endsection
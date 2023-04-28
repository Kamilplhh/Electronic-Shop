@extends('layouts.master')

@section('content')
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
        <tr style="height: 20vh;">
            <td>
                <div class="row">
                    <div style="height: 20vh; width: 20vh;" class="col-sm-4"><img src="{{ asset('img') }}/{{ $cart['photo'] }}" width="100%" height="100%" class="img-responsive" /></div>
                    <div class="col-sm-8 center">
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
@endsection
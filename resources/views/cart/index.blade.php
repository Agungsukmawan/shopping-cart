@extends('layout.main')

@section('content')

<div class="card mt-5">
    <div class="card-header">
      Shopping Cart
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
            <tr class="text-center">
                <th width="50%">Nama Produk</th>
                <th width="15%">Harga Produk</th>
                <th width="20%">Qty</th>
                <th width="15%">Sub Total</th>
            </tr>
        </thead>
        <tbody>
            @php
                $total = 0;
            @endphp
            @foreach ($carts as $item)
                @php
                    $total += $item->price * $item->qty;
                @endphp
                <tr>
                    <td class="align-middle">{{$item->product_name}}</td>
                    <td class="align-middle">Rp <span style="float:right">{{ number_format(($item->price),0,',','.')}}</span></td>
                    <td class="align-middle">
                        <div class="container-fluid d-flex">
                            <a href="/cart/{{$item->product_id}}/remove" class="btn btn-primary btn-sm"><i class="fas fa-minus"></i></a>
                            <input type="number"min="0" class="form-control mx-2 text-center" value="{{$item->qty}}" readonly>
                            <a href="/cart/{{$item->product_id}}/add" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></a></td>
                        </div>
                    <td class="align-middle">Rp <span style="float:right">{{number_format(($item->price * $item->qty),0,',','.')}}</span></td>
                </tr>
            @endforeach
            <tr style="border-top:2px solid #000">
                <td class="align-middle" align="right" colspan="3" ><b>Total :</b></td>
                <td class="align-middle text-bold"><b>Rp<span style="float:right">{{number_format(($total),0,',','.')}}</span></b></td>
            </tr>
        </tbody>
      </table>
      <a href="" class="btn btn-primary">Checkout</a>
    </div>
</div>

@endsection
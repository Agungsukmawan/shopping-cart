@extends('layout.main')

@section('content')
    <h3 class="mt-3">Transaction History</h3>
    <hr/>
    @foreach ($history as $data)
        
    
    <div class="card my-2">
        <div class="card-header">
            Order ID: {{ $data->order_id }}
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <td width="15%">Pembeli</td>
                    <td>: {{ $data->name}}</td>
                </tr>
                <tr>
                    <td width="15%">Toko</td>
                    <td>: Toko A</td>
                </tr>
                <tr>
                    <td width="15%">Alamat Pengiriman</td>
                    <td>: Jakarta Barat</td>
                </tr>
            </table>
            <h5>Order Details</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th width="50%">Items</th>
                        <th width="15%">Harga</th>
                        <th width="20%">Qty</th>
                        <th width="15%">Sub Total</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($details as $item)

                        @if ($data->id == $item->transaction_id) 
                            
                            @php
                                
                                $total += $item->qty * $item->price;
                            @endphp 
                            <tr>
                                <td>{{ $item->product_name}}</td>
                                <td>Rp <span style="float:right">{{ number_format(($item->price),0,',','.')}}</span></td>
                                <td>{{ $item->qty }}</td>
                                <td>Rp <span style="float:right">{{ number_format(($item->qty * $item->price),0,',','.')}}</span></td>
                            </tr>
                            
                            @endif
                            
                    @endforeach
                    <tr style="font-weight: bold; border-top:2px solid #000">
                        <td colspan="3" align="right">Ongkos Kirim :</td>
                        <td>Rp <span style="float:right">{{number_format(($data->ongkir),0,',','.')}}</span></td>
                    </tr>
                    <tr style="font-weight: bold;">
                        <td colspan="3" align="right">Total :</td>
                        <td>Rp <span style="float:right">{{number_format(($total+ $data->ongkir),0,',','.')}}</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    @endforeach
@endsection
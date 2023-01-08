@extends('layout.main')

@section('content')
    <h3 class="mt-3">Transaction History</h3>
    <hr/>

    <div class="card my-2">
        <div class="card-header">
            Order ID: ORDER-13456887
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <td width="15%">Pembeli</td>
                    <td>: Customer A</td>
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
                    <tr>
                        <td>Produk 1</td>
                        <td>Rp 100.000</td>
                        <td>10</td>
                        <td>Rp 1.000.000</td>
                    </tr>
                    <tr>
                        <td>Produk 1</td>
                        <td>Rp 100.000</td>
                        <td>10</td>
                        <td>Rp 1.000.000</td>
                    </tr>
                    <tr>
                        <td>Produk 1</td>
                        <td>Rp 100.000</td>
                        <td>10</td>
                        <td>Rp 1.000.000</td>
                    </tr>
                    <tr style="font-weight: bold; border-top:2px solid #000">
                        <td colspan="3" align="right">Ongkos Kirim :</td>
                        <td>Rp 50.000</td>
                    </tr>
                    <tr style="font-weight: bold;">
                        <td colspan="3" align="right">Total :</td>
                        <td>Rp 3.050.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card my-2">
        <div class="card-header">
            Order ID: ORDER-13456887
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <td width="15%">Pembeli</td>
                    <td>: Customer A</td>
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
                    <tr>
                        <td>Produk 1</td>
                        <td>Rp 100.000</td>
                        <td>10</td>
                        <td>Rp 1.000.000</td>
                    </tr>
                    <tr>
                        <td>Produk 1</td>
                        <td>Rp 100.000</td>
                        <td>10</td>
                        <td>Rp 1.000.000</td>
                    </tr>
                    <tr>
                        <td>Produk 1</td>
                        <td>Rp 100.000</td>
                        <td>10</td>
                        <td>Rp 1.000.000</td>
                    </tr>
                    <tr style="font-weight: bold; border-top:2px solid #000">
                        <td colspan="3" align="right">Ongkos Kirim :</td>
                        <td>Rp 50.000</td>
                    </tr>
                    <tr style="font-weight: bold;>
                        <td colspan="3" align="right">Total :</td>
                        <td>Rp 3.050.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
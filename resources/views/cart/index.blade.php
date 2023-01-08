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
            <tr>
                <td class="align-middle">Produk 1</td>
                <td class="align-middle">Rp. 100.000</td>
                <td class="align-middle">
                    <div class="container-fluid d-flex">
                        <button class="btn btn-primary btn-sm"><i class="fas fa-minus"></i></button>
                        <input type="number"min="0" class="form-control mx-2 text-center" value="10">
                        <button class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></button></td>
                    </div>
                <td class="align-middle">Rp 1.000.000</td>
            </tr>
            <tr>
                <td class="align-middle">Produk 1</td>
                <td class="align-middle">Rp. 100.000</td>
                <td class="align-middle">
                    <div class="container-fluid d-flex">
                        <button class="btn btn-primary btn-sm"><i class="fas fa-minus"></i></button>
                        <input type="number"min="0" class="form-control mx-2 text-center" value="10">
                        <button class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></button></td>
                    </div>
                <td class="align-middle">Rp 1.000.000</td>
            </tr>
            <tr>
                <td class="align-middle">Produk 1</td>
                <td class="align-middle">Rp. 100.000</td>
                <td class="align-middle">
                    <div class="container-fluid d-flex">
                        <button class="btn btn-primary btn-sm"><i class="fas fa-minus"></i></button>
                        <input type="number"min="0" class="form-control mx-2 text-center" value="10">
                        <button class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></button></td>
                    </div>
                <td class="align-middle">Rp 1.000.000</td>
            </tr>
            <tr style="border-top:2px solid #000">
                <td class="align-middle" align="center" colspan="3" ><b>Total</b></td>
                <td class="align-middle text-bold"><b>Rp 3.000.000</b></td>
            </tr>
        </tbody>
      </table>
    </div>
</div>

@endsection
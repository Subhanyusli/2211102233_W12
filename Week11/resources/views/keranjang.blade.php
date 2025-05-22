@extends('layouts.template')

@section('content')
<h2>Keranjang Belanja</h2>
<table class="table">
    <thead>
        <tr>
            <th>Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Contoh Produk</td>
            <td>Rp50.000</td>
            <td>2</td>
            <td>Rp100.000</td>
        </tr>
        <!-- Tambahkan item lainnya di sini -->
    </tbody>
</table>
@endsection

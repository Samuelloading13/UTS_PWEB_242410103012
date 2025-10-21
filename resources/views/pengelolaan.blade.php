@extends('layouts.app')

@section('title', 'Pengelolaan Data')

@section('content')
    <h2>Data Inventaris Barang</h2>
    <p>Berikut adalah data inventaris barang yang tersedia.</p>
    <div class="table-container">
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dataInventaris as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['nama_barang'] }}</td>
                        <td>{{ $item['kategori'] }}</td>
                        <td>{{ $item['stok'] }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" style="text-align: center;">Tidak ada data.</td>
                    </tr>
                @endforelse </tbody>
        </table>
    </div>
@endsection

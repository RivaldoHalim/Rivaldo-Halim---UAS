<?php
    use App\Models\TamuHotel;
?>

@extends('layouts.app')


@section('title','Sewa Kamar Hotel')

@section('content')
    <h1>Sewa Kamar Hotel</h1>
    <style>
        table tr{
            padding: 30px;
        }
        table td{
            border:2px;
        }

        #watermark{
            margin: 0 0 0 42%;
            display: block;
            position: absolute;
            opacity: 0.2;
            filter: alpha(opacity=50);
        }
        
    </style>
    <a href="/laporan/hotel/print" target="_blank" class="btn btn-primary">Cetak PDF ></a>
    <div id="watermark">
        <img src='{{ asset("AdminLTE/dist/img/Logo_UPH.gif") }}' style="width: 65%;">
    </div>
    <div style="text-align: center; font: 18pt bold;">
        <b>Nama : Rivaldo Halim<br>
        NIM : 03081200001<br>
        KELAS : 20SI2<br></b>
    </div>
    <hr>
    <table class="table">
        <thead class="table-danger">
            <tr>
                <th>Id Tamu</th>
                <th>Nama Tamu</th>
                <th>Jenis Kamar</th>
                <th>No. Kamar</th>
                <th>Tanggal Menginap</th>
                <th>Harga</th>
                <th>Keterangan</th>               
             </tr>
        </thead>
        @foreach ($tamuhotel as $th) 
        <tr class="table-success">
            <th>{{ $th->id_tamu }}</th>
            <th>{{ $th->nama_tamu }}</th>
            <th>{{ $th->jenis_kamar }}</th>
            <th>{{ $th->no_kamar_tamu }}</th>
            <th>{{ $th->tanggal_menginap }}</th>
            <th>{{ $th->harga_kamar }}</th>
            <th>{{ $th->keterangan }}</th>
           
        </tr>
        @endforeach
    </table>    
@endsection
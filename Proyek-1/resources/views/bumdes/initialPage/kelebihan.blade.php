<!-- resources/views/child.blade.php -->
@extends('layouts.main')
 
@section('title', 'SIABDES')
 
@section('sidebar')
    @parent
 
@endsection
 
@section('content')

    <style>
            @import url('https://fonts.googleapis.com/css?family=Ubuntu:400,500,700');
        /* body{
            margin:0;
            padding:0;
            display:flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #fff;
            font-family:'Ubuntu', sans-serif;
        } */
        .listbox h3{
            position: relative;
            width: 1008px;
            height: 120px;
            left: 170px;
            top: 40px;
            font-weight: 500;
            font-size: 20px;
            line-height: 33px;
            text-align: center;
            letter-spacing: -0.0011em;
            color: #303C54;
        }

        .listbox h1{
            position: relative;
            width: 470px;
            height: 50px;
            left: 439px;
            top: 50px;
            font-size: 30px;
            font-weight: bold;
            line-height: 30px;
            text-align: center;
            text-transform: capitalize;
            letter-spacing: -0.0011em;
            color: #000000;
        }
        .container
        {
            width: 1200px;
            height:fit-content;
            margin-top:100px;
            display: grid;
            grid-template-columns:repeat(auto-fit, minmax(350px, 1fr));
            grid-gap: 10px;
            padding: 10px;
            box-sizing: border-box;    
        }
        .container .box
        {
            position: relative;
            background: #D9D9D9;
            padding: 20px 40px 10px;
            text-align: center;
            overflow: hidden;
            border-radius: 20px;
        }

        .container .box h2
        {
            position: relative;
            margin: 0;
            padding: 0;
            font-size: 50px;
            color: #000;
        }
        .container .box h3
        {
            position: relative;
            margin: 0;
            padding: 0;
            color: #303C54;
        }
    </style>


        <div class="listbox">
            <h3>Kelebihan SIAB-DES</h3>
            <h1>Apa keunikan dari SIAB-DES?</h1>
        </div>
        <div class="container" >
            <div class="box">
                <h2>01</h2>
                <h3>Berbasis SAK EMKM & Terintegrasi</h3>
            </div>
            <div class="box">
                <h2>02</h2>
                <h3>Personal Asistant</h3>
            </div>
            <div class="box">
                <h2>03</h2>
                <h3>Digitalisasi Penyusunan Laporan Keuangan</h3>
            </div>
            <div class="box">
                <h2>04</h2>
                <h3>Fitur Formulir Lengkap</h3>
                <p>Formulir Permintaan Kas, Formulir Purchase Order, Formulir Pengiriman Barang, Invoice Penjualan Tunai, dan Invoice Penjualan Kredit</p>
            </div>
            <div class="box">
                <h2>05</h2>
                <h3>Waktu Penyusunan Efektif dan Efisien</h3>
            </div>
        </div>

@endsection
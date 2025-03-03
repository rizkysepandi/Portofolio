@extends('layouts.laporan_keuangan')

@section("content")

    <div id="headline">
        <h2 id="headline-title">Laporan Laba Rugi</h2>
        <p id="headline-company">PT. Bambang Berkarya</p>
        <p id="headline-date">01/01/2022 - 31/12/2022</p>
    </div>

    <br/>

    <div>
        <table class="account-table" style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem;">
            <tr class="account-head">
                <td style="font-weight: 600; font-size: 1.15rem;">Pendapatan</td>
            </tr>
            @foreach($akuns_pendapatan as $akun)
                <x-pdf.laporan-keuangan-item :nama="$akun->nama"
                                             :kode-rekening="$akun->kode_rekening"
                                             :nominal="formatRupiah($akun->detailakun->saldo)"
                                             :is-negative="false"/>
            @endforeach
            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom">Total Pendapatan</td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom">Rp. {{ $pendapatan }}</td>
            </tr>
        </table>

        <table style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem;">
            <tr class="account-head">
                <td style="font-weight: 600; font-size: 1.15rem;">Beban</td>
            </tr>

            @foreach($akuns_beban as $akun)
                <x-pdf.laporan-keuangan-item :nama="$akun->nama"
                                             :kode-rekening="$akun->detailakun->kode_rekening"
                                             :nominal="formatRupiah($akun->detailakun->saldo)"
                                             :is-negative="false"/>

            @endforeach

            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom; color: red">Total Beban</td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom; color: red;">
                    - Rp. {{ $beban }}</td>
            </tr>
        </table>

        <table class="account-table" style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem;">
            <tr class="account-head">
                <td style="font-weight: 600; font-size: 1.15rem;">Pendapatan Lain-lain</td>
            </tr>
            @foreach($akuns_pendapatan_lain as $akun)
                <x-pdf.laporan-keuangan-item :nama="$akun->nama"
                                             :kode-rekening="$akun->kode_rekening"
                                             :nominal="formatRupiah($akun->detailakun->saldo)"
                                             :is-negative="false"/>
            @endforeach
            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom">Total Pendapatan Lain</td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom">
                    Rp. {{ $pendapatan_lain }}</td>
            </tr>
        </table>

        @if($akuns_beban_lain->count() > 0)
            <table class="account-table"
                   style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem;">
                <tr class="account-head">
                    <td style="font-weight: 600; font-size: 1.15rem;">Beban Lain-lain</td>
                </tr>
                @foreach($akuns_beban_lain as $akun)
                    <x-pdf.laporan-keuangan-item :nama="$akun->nama"
                                                 :kode-rekening="$akun->kode_rekening"
                                                 :nominal="formatRupiah($akun->detailakun->saldo)"
                                                 :is-negative="false"/>
                @endforeach
                <tr class="account-subtotal">
                    <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom; color: red;">Total Beban
                        Lain
                    </td>
                    <td style="text-align: right; font-weight: 600; vertical-align: bottom; color: red;">
                        - Rp. {{ $beban_lain }}</td>
                </tr>
            </table>
        @endif

        <table style="margin-top: 1.5rem; border: 1px solid; width: 100%; padding: 0.5rem;">
            <tr class="account-head">
                <td style="font-weight: 600; font-size: 1.15rem;">Total Perhitungan Laba Rugi</td>
            </tr>

            <x-pdf.laporan-keuangan-item nama="Pendapatan" :nominal="$pendapatan"
                                         :is-negative="false"/>
            <x-pdf.laporan-keuangan-item nama="Pendapatan Lain" :nominal="$pendapatan_lain"
                                         :is-negative="false"/>

            @if($beban > 0)
                <x-pdf.laporan-keuangan-item nama="Beban" :nominal="$beban" :is-negative="true"/>
            @endif

            @if($beban_lain > 0)
                <x-pdf.laporan-keuangan-item nama="Beban Lain" :nominal="$beban_lain" :is-negative="true"/>
            @endif

            <tr class="account-subtotal">
                <td style="font-weight: 600; padding-top: 1rem; vertical-align: bottom">Total Pendapatan Bersih</td>
                <td style="text-align: right; font-weight: 600; vertical-align: bottom">
                    Rp. {{ $pendapatan_bersih }}</td>
            </tr>
        </table>
    </div>

@endsection

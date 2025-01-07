<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'nama' => 'BUMDES ADMIN',
            'email' => 'bum_admin@gmail.com',
            'no_hp' => '911',
        ]);
        DB::table('companies')->insert([
            'nama' => 'BUMDES SEJAHTERA',
            'email' => 'bum_sejahtera@gmail.com',
            'no_hp' => '011',
        ]);
        

        // Table nama akun
        DB::table('nama_akuns')->insert([
            'company_id' => '2',    
            'nama' => 'Aset',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Aset Lancar',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Kas',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Kas di Bank A',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Kas di Bank B',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Kas di Bank C',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Kas Kecil',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Giro',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Deposito',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Piutang Usaha',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Persediaan Barang Dagangan',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Persediaan Makan dan Minuman',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Perlengkapan',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Sewa Dibayar Dimuka',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Asuransi Dibayar Dimuka',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'PPh 25',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Piutang Desa',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Aset Lancar Lainnya',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Investasi',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Aset Tetap',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Tanah',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Gedung dan Bangunan',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Akumulasi Penyusutan Gedung dan Bangunan',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Peralatan dan Meubeliar',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Akumulasi Penyusutan Peralatan dan Meubeliar',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Kendaraan',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Akumulasi Penyusutan Kendaraan',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Aset Tetap Lainnya',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Kewajiban',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Kewajiban Jangka Pendek',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Utang Usaha',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'PPn Keluaran',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'PPh 21',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'PPh 23',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'PPh 29',

            ]);

            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Utang Gaji dan Tunjangan',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Utang Listrik',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Utang Telepon dan Internet',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Utang Utilitas Lainnya',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Utang Jangka Pendek Lainnya',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Kewajiban Jangka Panjang',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Utang Ke Bank',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Utang Jangka Panjang Lainnya',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Ekuitas',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Modal Pemilik',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Penyertaan Modal Desa',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Penyertaan Modal Masyarakat',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Pengambilan Oleh Pemilik',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Bagi Hasil Penyertaan Modal Desa',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Bagi Hasil Penyertaan Modal Masyarakat',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Laba Ditahan dan Pencadangan',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Laba Ditahan',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'RK Unit Usaha',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'RK Unit Toko Desa',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'RK Unit Rekreasi',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Ikhtisar Laba Rugi',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Pendapatan',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Pendapatan Tiket',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Pendapatan Tiket Masuk Perseorangan',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Pendapatan Tiket Masuk Rombongan',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Pendapatan Tiket Lainnya',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Pendapatan Rupa-rupa',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Pendapatan Komisi',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Pendapatan Parkir',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Pendapatan Toilet',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Pendapatan Sewa',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Pendapatan Jasa',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Pendapatan Rupa-rupa Lainnya',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Administrasi dan Umum',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Gaji dan Tunjangan',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Honor Lembur',


            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Honor Narasumber',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Insentif (Bonus)',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Komisi',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Seragam Pegawai',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Listrik',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Telepon dan Internet',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Air',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Utilitas Lainnya',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Transportasi',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Parkir',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Administrasi Bank',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Keamanan',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Kebersihan',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban ATK',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Perlengkapan Lainnya',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Fotocopy',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Pemeliharaan dan Perbaikan',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Sewa',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Asuransi',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Konsumsi rapat',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Perjalanan Dinas',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Penyusutan Peralatan dan Meubeliar',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Penyusutan Gedung dan Bangunan',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Penyusutan Kendaraan',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Pajak Air Permukaan',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Pajak Bunga Bank',
            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Pajak Daerah',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Pajak Hiburan',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Pajak Reklame',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban PPh 21',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban PPh 23',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban PPh 25',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban PPh 29',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban PADes',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Administrasi Umum dan Lainnya',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Pendapatan dan Beban Lain-lain',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Pendapatan Lain-lain',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Pendapatan Bunga',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Pendapatan dari Desa',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Pendapatan Bantuan/Sumbangan/Hibah',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Pendapatan Lain-lain',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Lain-lain',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Bunga',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Pajak',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Denda',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Diskon',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban yang Masih Harus Dibayar',

            ]);
            DB::table('nama_akuns')->insert([
                'company_id' => '2',
                'nama' => 'Beban Lain-lainnya',

        ]);
        // end table nama akuns


        //table detail_akun
        DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '1',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '1000',
                'd_k' => '',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '2',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '1100',
                'd_k' => '',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '3',
                'saldo' => '8050000',
                'penyesuaian' => '0',
                'kode_rekening' => '1101',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '4',
                'saldo' => '150050000',
                'penyesuaian' => '0',
                'kode_rekening' => '1102',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '5',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '1103',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '6',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '1104',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '7',
                'saldo' => '1750000',
                'penyesuaian' => '0',
                'kode_rekening' => '1105',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '8',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '1106',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '9',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '1107',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '10',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '1108',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '11',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '1109',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '12',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '1110',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '13',
                'saldo' => '1000000',
                'penyesuaian' => '0',
                'kode_rekening' => '1111',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '14',
                'saldo' => '12000000',
                'penyesuaian' => '0',
                'kode_rekening' => '1112',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '15',
                'saldo' => '50000000',
                'penyesuaian' => '0',
                'kode_rekening' => '1113',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '16',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '1114',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '17',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '1115',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '18',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '1199',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '19',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '1200',
                'd_k' => '',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '20',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '1300',
                'd_k' => '',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '21',
                'saldo' => '300000000',
                'penyesuaian' => '0',
                'kode_rekening' => '1301',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '22',
                'saldo' => '250000000',
                'penyesuaian' => '0',
                'kode_rekening' => '1302',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '23',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '1303',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '24',
                'saldo' => '4200000',
                'penyesuaian' => '0',
                'kode_rekening' => '1304',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '25',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '1305',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '26',
                'saldo' => '25000000',
                'penyesuaian' => '0',
                'kode_rekening' => '1306',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '27',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '1307',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '28',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '1399',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '29',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '2000',
                'd_k' => '',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '30',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '2100',
                'd_k' => '',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '31',
                'saldo' => '150000000',
                'penyesuaian' => '0',
                'kode_rekening' => '2101',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '32',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '2102',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '33',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '2103',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '34',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '2104',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '35',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '2105',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '36',
                'saldo' => '62000000',
                'penyesuaian' => '0',
                'kode_rekening' => '2106',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '37',
                'saldo' => '250000',
                'penyesuaian' => '0',
                'kode_rekening' => '2107',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '38',
                'saldo' => '250000',
                'penyesuaian' => '0',
                'kode_rekening' => '2108',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '39',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '2109',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '40',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '2110',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '41',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '2111',
                'd_k' => '',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '42',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '2112',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '43',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '2199',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '44',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '3000',
                'd_k' => '',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '45',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '3100',
                'd_k' => '',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '46',
                'saldo' => '10000000',
                'penyesuaian' => '0',
                'kode_rekening' => '3101',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '47',
                'saldo' => '5000000',
                'penyesuaian' => '0',
                'kode_rekening' => '3102',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '48',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '3200',
                'd_k' => '',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '49',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '3201',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '50',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '3202',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '51',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '3300',
                'd_k' => '',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '52',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '3301',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '53',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '3400',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '54',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '3401',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '55',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '3402',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '56',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '3500',
                'd_k' => '',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '57',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '4000',
                'd_k' => '',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '58',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '4100',
                'd_k' => '',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '59',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '4101',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '60',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '4102',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '61',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '4199',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '62',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '4300',
                'd_k' => '',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '63',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '4301',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '64',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '4302',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '65',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '4303',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '66',
                'saldo' => '351200000',
                'penyesuaian' => '0',
                'kode_rekening' => '4304',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '67',
                'saldo' => '350000000',
                'penyesuaian' => '0',
                'kode_rekening' => '4305',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '68',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '4399',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '69',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '6000',
                'd_k' => '',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '70',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '6100',
                'd_k' => '',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '71',
                'saldo' => '12000000',
                'penyesuaian' => '0',
                'kode_rekening' => '6101',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '72',
                'saldo' => '5000000',
                'penyesuaian' => '0',
                'kode_rekening' => '6102',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '73',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '6103',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '74',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '6104',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '75',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '6105',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '76',
                'saldo' => '300000',
                'penyesuaian' => '0',
                'kode_rekening' => '6106',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '77',
                'saldo' => '250000',
                'penyesuaian' => '0',
                'kode_rekening' => '6107',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '78',
                'saldo' => '250000',
                'penyesuaian' => '0',
                'kode_rekening' => '6108',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '79',
                'saldo' => '150000',
                'penyesuaian' => '0',
                'kode_rekening' => '6109',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '80',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '6110',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '81',
                'saldo' => '100000',
                'penyesuaian' => '0',
                'kode_rekening' => '6111',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '82',
                'saldo' => '100000',
                'penyesuaian' => '0',
                'kode_rekening' => '6112',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '83',
                'saldo' => '50000',
                'penyesuaian' => '0',
                'kode_rekening' => '6113',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '84',
                'saldo' => '250000',
                'penyesuaian' => '0',
                'kode_rekening' => '6114',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '85',
                'saldo' => '50000',
                'penyesuaian' => '0',
                'kode_rekening' => '6115',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '86',
                'saldo' => '200000',
                'penyesuaian' => '0',
                'kode_rekening' => '6116',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '87',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '6117',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '88',
                'saldo' => '200000',
                'penyesuaian' => '0',
                'kode_rekening' => '6118',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '89',
                'saldo' => '300000',
                'penyesuaian' => '0',
                'kode_rekening' => '6119',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '90',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '6120',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '91',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '6121',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '92',
                'saldo' => '250000',
                'penyesuaian' => '0',
                'kode_rekening' => '6122',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '93',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '6123',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '94',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '6124',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '95',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '6125',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '96',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '6126',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '97',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '6127',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '98',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '6128',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '99',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '6129',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '100',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '6130',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '101',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '6131',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '102',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '6132',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '103',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '6133',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '104',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '6134',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '105',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '6135',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '106',
                'saldo' => '50000',
                'penyesuaian' => '0',
                'kode_rekening' => '6136',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '107',
                'saldo' => '200000',
                'penyesuaian' => '0',
                'kode_rekening' => '6199',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '108',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '7000',
                'd_k' => '',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '109',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '7100',
                'd_k' => '',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '110',
                'saldo' => '50000',
                'penyesuaian' => '0',
                'kode_rekening' => '7101',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '111',
                'saldo' => '15750000',
                'penyesuaian' => '0',
                'kode_rekening' => '7102',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '112',
                'saldo' => '2000000',
                'penyesuaian' => '0',
                'kode_rekening' => '7103',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '113',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '7199',
                'd_k' => 'Kredit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '114',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '7200',
                'd_k' => '',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '115',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '7201',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '116',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '7202',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '117',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '7203',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '118',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '7204',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '119',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '7205',
                'd_k' => 'Debit',
            ]);
            DB::table('detail_akun')->insert([
                'nama_akun_id' =>  '120',
                'saldo' => '0',
                'penyesuaian' => '0',
                'kode_rekening' => '7299',
                'd_k' => 'Debit',
        ]);
        //end table detail_akun
        DB::table('saldo_akhir')->insert([
            'company_id' => '2',
            'akun' => '1618250000',
            'penyesuaian' => '0',
            'neraca_setelahnya' => '1618250000',
            'laba_rugi' => '738700000',
            'neraca' => '879550000',
            'aset' => '802050000',
            'kewajiban' => '62500000',
            'ekuitas' => '15000000',
            'pendapatan' => '701200000',
            'beban' => '37500000',
            'pendapatan_bersih' => '663700000',
        ]);
        //table saldo_akhir


        DB::table('users')->insert([
            'company_id' => '1',
            'nama' => 'admin',
            'email' => 'admin@admin.com',
            'no_hp' => '001',
            'role' => 'admin',
            'password' => Hash::make('adminadmin'),
        ]);
        DB::table('users')->insert([
            'company_id' => '2',
            'nama' => 'operator desa',
            'email' => 'operator@gmail.com',
            'no_hp' => '002',
            'role' => 'operator',
            'password' => Hash::make('adminadmin'),
        ]);
        DB::table('users')->insert([
            'company_id' => '2',
            'nama' => 'kepala desa',
            'email' => 'kepala@gmail.com',
            'no_hp' => '003',
            'role' => 'pelihat',
            'password' => Hash::make('adminadmin'),
        ]);
        DB::table('users')->insert([
            'company_id' => '2',
            'nama' => 'direktur',
            'email' => 'direktur@gmail.com',
            'no_hp' => '004',
            'role' => 'pelihat',
            'password' => Hash::make('adminadmin'),
        ]);

        //table jurnal_umum
        DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-01-02'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 1',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-01-02'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 2',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-01-02'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 3',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-01-04'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 4',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-01-07'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 5',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-01-27'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 6',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-02-05'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 7',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-02-08'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 8',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-02-10'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 9',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-02-10'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 10',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-02-12'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 11',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-02-14'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 12',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-03-28'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 13',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-04-17'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 14',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-05-25'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 15',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-06-04'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 16',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-06-04'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 17',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-06-04'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 18',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-06-07'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 19',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-07-01'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 20',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-07-01'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 21',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-07-31'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 22',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-08-04'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 23',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-08-04'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 24',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-08-05'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 25',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-08-07'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 26',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-08-10'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 27',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-08-11'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 28',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-08-30'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 29',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-09-01'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 30',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-09-03'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 31',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-09-05'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 32',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-09-06'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 33',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-09-09'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 34',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-09-10'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 35',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-09-11'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 36',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-09-12'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 37',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-09-13'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 38',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-09-14'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 39',
            ]);
            DB::table('jurnal_umum')->insert([
                'tanggal' => Carbon::parse('2022-09-15'),
                'bukti_pembayaran' => '8eafcf84bcceec78873f53f928c910be.jpg',
                'company_id' => '2',
                'jenis_transaksi' => 'Transaksi 40',
        ]);
        //end table jurnal_umum



        //table data_jurnal_umum
        DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '5000000',
                'kredit' => '0',
                'jurnal_umum_id' => '1',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Penyertaan Modal Masyarakat',
                'noref' => '3102',
                'debit' => '0',
                'kredit' => '5000000',
                'jurnal_umum_id' => '1',
            ]);

            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Piutang Desa',
                'noref' => '1115',
                'debit' => '15000000',
                'kredit' => '0',
                'jurnal_umum_id' => '2',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Pendapatan Dari Desa (PADES)',
                'noref' => '7102',
                'debit' => '0',
                'kredit' => '15000000',
                'jurnal_umum_id' => '2',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Sewa dibayar dimuka',
                'noref' => '1112',
                'debit' => '12000000',
                'kredit' => '0',
                'jurnal_umum_id' => '3',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '12000000',
                'jurnal_umum_id' => '3',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Peralatan dan meubeliar',
                'noref' => '1304',
                'debit' => '4200000',
                'kredit' => '0',
                'jurnal_umum_id' => '4',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '4200000',
                'jurnal_umum_id' => '4',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Piutang Usaha',
                'noref' => '1108',
                'debit' => '1200000',
                'kredit' => '0',
                'jurnal_umum_id' => '5',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Pendapatan Sewa',
                'noref' => '4304',
                'debit' => '0',
                'kredit' => '1200000',
                'jurnal_umum_id' => '5',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '1200000',
                'kredit' => '0',
                'jurnal_umum_id' => '6',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Piutang Usaha',
                'noref' => '1108',
                'debit' => '0',
                'kredit' => '1200000',
                'jurnal_umum_id' => '6',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '350000000',
                'kredit' => '0',
                'jurnal_umum_id' => '7',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Pendapatan Sewa',
                'noref' => '4304',
                'debit' => '0',
                'kredit' => '350000000',
                'jurnal_umum_id' => '7',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '350000000',
                'kredit' => '0',
                'jurnal_umum_id' => '8',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Pendapatan Jasa',
                'noref' => '4305',
                'debit' => '0',
                'kredit' => '350000000',
                'jurnal_umum_id' => '8',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '15000000',
                'kredit' => '0',
                'jurnal_umum_id' => '9',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Piutang Desa',
                'noref' => '1115',
                'debit' => '0',
                'kredit' => '15000000',
                'jurnal_umum_id' => '9',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Beban PADES',
                'noref' => '6136',
                'debit' => '50000',
                'kredit' => '0',
                'jurnal_umum_id' => '10',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '50000',
                'jurnal_umum_id' => '10',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Perlengkapan',
                'noref' => '1111',
                'debit' => '250000',
                'kredit' => '0',
                'jurnal_umum_id' => '11',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '250000',
                'jurnal_umum_id' => '11',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kendaraan',
                'noref' => '1306',
                'debit' => '25000000',
                'kredit' => '0',
                'jurnal_umum_id' => '12',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '25000000',
                'jurnal_umum_id' => '12',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Tanah',
                'noref' => '1301',
                'debit' => '300000000',
                'kredit' => '0',
                'jurnal_umum_id' => '13',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '100000000',
                'jurnal_umum_id' => '13',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Utang Usaha',
                'noref' => '2101',
                'debit' => '0',
                'kredit' => '200000000',
                'jurnal_umum_id' => '13',
            ]);

            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Gedung dan bangunan',
                'noref' => '1302',
                'debit' => '250000000',
                'kredit' => '0',
                'jurnal_umum_id' => '14',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '250000000',
                'jurnal_umum_id' => '14',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Utang usaha',
                'noref' => '2112',
                'debit' => '200000000',
                'kredit' => '0',
                'jurnal_umum_id' => '15',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '200000000',
                'jurnal_umum_id' => '15',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas di Bank A',
                'noref' => '1102',
                'debit' => '150000000',
                'kredit' => '0',
                'jurnal_umum_id' => '16',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Utang Usaha',
                'noref' => '2112',
                'debit' => '0',
                'kredit' => '150000000',
                'jurnal_umum_id' => '16',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Beban Administrasi Bank',
                'noref' => '6113',
                'debit' => '50000',
                'kredit' => '0',
                'jurnal_umum_id' => '17',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '50000',
                'jurnal_umum_id' => '17',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas di Bank A',
                'noref' => '1101',
                'debit' => '50000',
                'kredit' => '0',
                'jurnal_umum_id' => '18',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Pendapatan Bunga',
                'noref' => '7101',
                'debit' => '0',
                'kredit' => '50000',
                'jurnal_umum_id' => '18',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas Kecil',
                'noref' => '1105',
                'debit' => '2500000',
                'kredit' => '0',
                'jurnal_umum_id' => '19',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '2500000',
                'jurnal_umum_id' => '19',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '10000000',
                'kredit' => '0',
                'jurnal_umum_id' => '20',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Penyertaan Modal Desa',
                'noref' => '3102',
                'debit' => '0',
                'kredit' => '10000000',
                'jurnal_umum_id' => '20',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Asuransi Dibayar Dimuka',
                'noref' => '1113',
                'debit' => '50000000',
                'kredit' => '0',
                'jurnal_umum_id' => '21',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '50000000',
                'jurnal_umum_id' => '21',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Utang Gaji dan Tunjangan',
                'noref' => '2106',
                'debit' => '50000000',
                'kredit' => '0',
                'jurnal_umum_id' => '22',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '50000000',
                'jurnal_umum_id' => '22',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Utang Gaji dan Tunjangan',
                'noref' => '2106',
                'debit' => '12000000',
                'kredit' => '0',
                'jurnal_umum_id' => '23',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '12000000',
                'jurnal_umum_id' => '23',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Utang Listrik',
                'noref' => '2107',
                'debit' => '250000',
                'kredit' => '0',
                'jurnal_umum_id' => '24',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Utang Telepon dan Internet',
                'noref' => '2107',
                'debit' => '250000',
                'kredit' => '0',
                'jurnal_umum_id' => '24',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '500000',
                'jurnal_umum_id' => '24',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Beban Gaji dan Tunjangan',
                'noref' => '6101',
                'debit' => '12000000',
                'kredit' => '0',
                'jurnal_umum_id' => '25',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '12000000',
                'jurnal_umum_id' => '25',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Beban Listrik',
                'noref' => '6107',
                'debit' => '0',
                'kredit' => '250000',
                'jurnal_umum_id' => '26',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Beban Telepon dan Internet',
                'noref' => '6108',
                'debit' => '250000',
                'kredit' => '0',
                'jurnal_umum_id' => '26',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '500000',
                'jurnal_umum_id' => '26',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Beban Air',
                'noref' => '6109',
                'debit' => '150000',
                'kredit' => '0',
                'jurnal_umum_id' => '27',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '150000',
                'jurnal_umum_id' => '27',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '750000',
                'kredit' => '0',
                'jurnal_umum_id' => '28',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Pendapatan dari Desa (PADES)',
                'noref' => '7102',
                'debit' => '0',
                'kredit' => '750000',
                'jurnal_umum_id' => '28',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '2000000',
                'kredit' => '0',
                'jurnal_umum_id' => '29',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Pendapatan Bantuan/Sumangan/Hibah',
                'noref' => '7103',
                'debit' => '0',
                'kredit' => '2000000',
                'jurnal_umum_id' => '29',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Perlengkapan',
                'noref' => '1101',
                'debit' => '750000',
                'kredit' => '0',
                'jurnal_umum_id' => '30',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas Kecil',
                'noref' => '7102',
                'debit' => '0',
                'kredit' => '750000',
                'jurnal_umum_id' => '30',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Beban Honor Lembur',
                'noref' => '6102',
                'debit' => '5000000',
                'kredit' => '0',
                'jurnal_umum_id' => '31',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '5000000',
                'jurnal_umum_id' => '31',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Beban Transportasi',
                'noref' => '6111',
                'debit' => '100000',
                'kredit' => '0',
                'jurnal_umum_id' => '32',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '100000',
                'jurnal_umum_id' => '32',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Beban Parkir',
                'noref' => '6112',
                'debit' => '100000',
                'kredit' => '0',
                'jurnal_umum_id' => '33',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '100000',
                'jurnal_umum_id' => '33',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Beban Keamanan',
                'noref' => '6114',
                'debit' => '250000',
                'kredit' => '0',
                'jurnal_umum_id' => '34',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '250000',
                'jurnal_umum_id' => '34',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Beban Fotocopy',
                'noref' => '6118',
                'debit' => '200000',
                'kredit' => '0',
                'jurnal_umum_id' => '35',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '200000',
                'jurnal_umum_id' => '35',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Beban Pemeliharaan dan Perbaikan',
                'noref' => '6119',
                'debit' => '300000',
                'kredit' => '0',
                'jurnal_umum_id' => '36',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '300000',
                'jurnal_umum_id' => '36',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Beban ATK',
                'noref' => '6116',
                'debit' => '200000',
                'kredit' => '0',
                'jurnal_umum_id' => '37',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '200000',
                'jurnal_umum_id' => '37',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Beban Kebersihan',
                'noref' => '6115',
                'debit' => '50000',
                'kredit' => '0',
                'jurnal_umum_id' => '38',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '50000',
                'jurnal_umum_id' => '38',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Beban Administrasi Umum dan Lainnya',
                'noref' => '6199',
                'debit' => '200000',
                'kredit' => '0',
                'jurnal_umum_id' => '39',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '200000',
                'jurnal_umum_id' => '39',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Beban Seragam Pegawai',
                'noref' => '6106',
                'debit' => '300000',
                'kredit' => '0',
                'jurnal_umum_id' => '40',
            ]);
            DB::table('data_jurnal_umum')->insert([
                'nama_akun' => 'Kas',
                'noref' => '1101',
                'debit' => '0',
                'kredit' => '300000',
                'jurnal_umum_id' => '40',
        ]);
        //end table data_jurnal_umum

        //table data_pembelian
        DB::table('data_pembelian')->insert([ //1
                'company_id' => '2',
                'tanggal' => Carbon::parse('2000-01-01'),
                'keterangan' => 'Kas',
                'noref' => '1101',
                'pembelian' => '15000000',
                'akun' => '-',
                'utang_dagang' => '15000000',
            ]);
            DB::table('data_pembelian')->insert([ //2
                'company_id' => '2',
                'tanggal' => Carbon::parse('2000-02-01'),
                'keterangan' => 'Piutang Usaha',
                'noref' => '1108',
                'pembelian' => '5000000',
                'akun' => '-',
                'utang_dagang' => '5000000',
            ]);
            DB::table('data_pembelian')->insert([ //3
                'company_id' => '2',
                'tanggal' => Carbon::parse('2000-03-01'),
                'keterangan' => 'Kas',
                'noref' => '1101',
                'pembelian' => '12000000',
                'akun' => '-',
                'utang_dagang' => '12000000',
            ]);
            DB::table('data_pembelian')->insert([ //4
                'company_id' => '2',
                'tanggal' => Carbon::parse('2000-04-01'),
                'keterangan' => 'Perlengkapan',
                'noref' => '1111',
                'pembelian' => '25000000',
                'akun' => '-',
                'utang_dagang' => '25000000',
        ]);
        //end table data_pembelian


        //table data_penjualan
        DB::table('data_penjualan')->insert([ //1
                'company_id' => '2',
                'tanggal' => Carbon::parse('2000-01-01'),
                'no_faktur' => '-',
                'keterangan' => 'Toko X',
                'noref' => '8000',
                'syarat_pembayaran' => 'x/n, n/30',
                'piutang_dagang' => '100000',
                'penjualan' => '100000',
            ]);
            DB::table('data_penjualan')->insert([ //2
                'company_id' => '2',
                'tanggal' => Carbon::parse('2000-02-01'),
                'no_faktur' => '-',
                'keterangan' => 'Toko Y',
                'noref' => '8000',
                'syarat_pembayaran' => 'x/n, n/30',
                'piutang_dagang' => '200000',
                'penjualan' => '200000',
            ]);
            DB::table('data_penjualan')->insert([ //3
                'company_id' => '2',
                'tanggal' => Carbon::parse('2000-02-01'),
                'no_faktur' => '-',
                'keterangan' => 'Toko Z',
                'noref' => '8000',
                'syarat_pembayaran' => 'x/n, n/30',
                'piutang_dagang' => '200000',
                'penjualan' => '200000',
        ]);
        //end table data_penjualan
    }
}

1.Tambahkan satu buah table pada web aplikasi kemudian buatlah halaman CRUD dengan menggunakan CRUD generator, serta tambahkan menu untuk mengakses tabletersebut pada sidebar(30poin).

2.Buatlahsebuah view untuk melakukan analisis data yang relevan dengan topik final project anda, simpan queryview tersebut kedalam file queryUAS.sql(20poin)

3.Buatlah sebuah antarmuka untuk menampilkan view pada soal 2, kemudian tambahkan tombol untuk mencetaknyakedalam format laporan pdf. Sertakan logo UPH dan nama berserta studentID anda pada header laporan (30)

4.Buat validasi data untuk halaman insert dan update soal nomor 1 (10 Poin)

5.Simpan kode program beserta queryUAS.sqlke public repository github, tambahkan file readme.mdyang  berisikan (10 Poin):
o Nama dan StudentID
o Soaldanpenjelasan solusi untuk setiap soal beserta nama file yang berubah.

jawaban

nama : joselyn amanda
nim : 03081200019

1. pertama buat crud untuk tabel baru yang akan dibuat
php artisan crud:generate statustransaksi --fields='namastatus#string; idtransaksi#integer ' --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html

buat tabel database baru pada phpmyadmin

2. masukan detail pada setiap tabel pada form_transactions dan status transaksi pada website yang dirun

CREATE VIEW statustransaksisaya
SELECT kamu.Transactionnumber as notransaksi, kamu.namastatus as namastatus
FROM form_statustransaksi kamu
LEFT JOIN subscriptions kamu on saya.notransaksi = kamu.idstatus

3. masukkan code pada route untuj tampilan
Route::get('/tampilan', function () {
    return view('tampilan');
});

input nim nama dam
masukkan image yang didownload pada folder public -> image

Lakukan konfigurasi pada bagian providers dan aliases dalam config/app.php agar Laravel dapat mengenali DOMPDF
'providers'=> [....Barryvdh\DomPDF\ServiceProvider::class,],
'aliases'=> [....'PDF'=> Barryvdh\DomPDF\Facade::class,]

phpartisan make:seederMahasiswaSeeder
Buat Controller dengan ketik php artisan make:controllerLaporanController pada terminal lalu masukkan konfigurasi routes pada routes->web.php ketikkan
Route::get('/laporan', [LaporanController::class,'index']);
Route::get('/laporan/cetak_pdf', [LaporanController::class,'cetak_pdf']);

buat config.php dan laporancontroller.php
![Gambar PDF](/public/images/tampilanpdf.png)

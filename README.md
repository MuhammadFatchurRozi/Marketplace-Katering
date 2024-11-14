<p align="center"><a href="#" target="_blank"><img src="public/assets/customers/images/favicon.png" width="400" alt="Aurora Logo"></a></p>

## Tentang Marketplace Katering

Apa itu Marketplace Katering?

Marketplace katering adalah platform online yang berfungsi sebagai penghubung antara penyedia jasa katering (vendor) dengan konsumen yang membutuhkan layanan katering. Sama seperti marketplace pada umumnya, platform ini memfasilitasi transaksi antara kedua belah pihak secara efisien.

Dengan hanya beberapa klik, nikmati hidangan lezat dari berbagai restoran tanpa perlu repot keluar rumah. Pilih menu kesukaan Anda, tentukan waktu pengiriman, dan pembayaran dilakukan secara aman. Prosesnya begitu mudah sehingga Anda bisa pesan katering kapan saja dan di mana saja.

<p align="center"><a href="#" target="_blank"><img src="public/storage/Screenshot (11).png" alt="Preview"></a></p>
<p align="center"><a href="#" target="_blank"><img src="public/storage/Screenshot (12).png" alt="Preview"></a></p>
<p align="center"><a href="#" target="_blank"><img src="public/storage/Screenshot (13).png" alt="Preview"></a></p>
<p align="center"><a href="#" target="_blank"><img src="public/storage/Screenshot (10).png" alt="Preview"></a></p>

## Dev Guide

Clone this repo

```
git clone git@github.com/MuhammadFatchurRozi/Marketplace-Katering
```

Switch to the repo folder

```
cd Marketplace-Katering
```

Install all the dependencies using composer

```
composer install
```

Copy the example env file and make the required configuration changes in the .env file

```
cp .env.example .env
```

Generate a new application key

```
php artisan key:generate
```

Run the database migrations and seeder

```
php artisan migrate --seed
```

Start the development server using the following command:

```
php artisan serve
```

### Fitur

#### Portal Merchant

-   **Registrasi dan Login:** ✅ Merchant dapat membuat akun dan masuk ke sistem.
-   **Pengelolaan Profil:** ❌ Merchant belum dapat mengelola informasi profil mereka.
-   **Pengelolaan Menu:** ✅ Merchant dapat menambahkan, mengedit, dan menghapus menu makanan. Setiap menu dilengkapi dengan deskripsi, foto, dan harga.
-   **Daftar Pesanan:** ❌ Merchant belum dapat melihat daftar pesanan dan invoice yang masuk.

#### Portal Customer

-   **Registrasi dan Login:** ✅ Customer dapat membuat akun dan masuk ke sistem.
-   **Pencarian Katering:** ✅ Customer dapat mencari katering berdasarkan lokasi, jenis makanan, dan harga.
-   **Pembelian:** ✅ Customer dapat memilih menu, jumlah porsi, dan tanggal pengiriman.
-   **Invoice:** ❌ Sistem belum menghasilkan invoice yang dapat diakses oleh kedua belah pihak.

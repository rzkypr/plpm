# Portal Layanan Pengajuan Magang Studi Kasus Diskominfo Kabupaten Bandung

(Cloned from [rzkypr/plpm](https://github.com/rzkypr/plpm.git) with some modifications based on my requirement, please refer there for official update and the newest change)

### Prasyarat

Berikut beberapa hal yang perlu diinstal terlebih dahulu:

-   Composer (https://getcomposer.org/)
-   PHP 7.4.x
-   MySQL 14.5.x
-   XAMPP

Jika Anda menggunakan XAMPP, untuk PHP dan MySQL sudah menjadi 1 (bundle) didalam aplikasi XAMPP

### Fitur

-   CRUD Lowongan Magang
-   CRUD Petugas
-   Verifikasi Pengajuan Magang
-   Login/Register
-   Form Pengajuan Magang
-   Data dan Ekspor Surat Magang

### Preview Gambar

-
-
-
-
-

### Langkah-langkah instalasi

-   Clone repository ini

```
https://github.com/rzkypr/plpm.git
```

```
git@github.com:rzkypr/plpm.git
```

-   Install seluruh packages yang dibutuhkan

```
composer install
```

-   Siapkan database dan atur file .env sesuai dengan konfigurasi Anda
-   Jika sudah, migrate seluruh migrasi dan seeding data

```
php artisan migrate --seed
```

-   Jalankan local server

```
php artisan serve
```

-   User default aplikasi untuk login

```
Email       : admin@mail.com
Password    : admin
```

### Dibuat dengan

-   [Laravel](https://laravel.com) - Web Framework
-	[Tailwind CSS](https://tailwindcss.com/) - Library

### Kontribusi

Silahkan request melalui kolom `Pull Requests` jika ingin melakukan kontribusi

### Pembuat

-   **Rizky Purnama Ramadhan** - _Programmer_ - [rzkypr](https://github.com/rzkypr)

### Lisensi

Aplikasi ini boleh untuk dibagi dan diubah. Mohon tidak untuk diperjualbelikan!

### Ucapan terima kasih

-   Stackoverflow
-   Google

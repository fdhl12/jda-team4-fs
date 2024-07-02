# Kelurahan Cibeber

Proyek ini adalah tempat informasi dan beberapa Layanan yang disediakan Kelurahan Cibeber (Cimahi).

# Informasi yang disediakan

-   Pengumuman
-   Berita

# Informasi Profil Kelurahan Cibeber

## Teknologi yang Digunakan

-   [Program-Language] PHP, JavaScript
-   [Style] Tailwind
-   [Framework] Laravel
-   [Database] MySQL
-   [Plugin] Flowbite

## Instalasi

1. Clone repositori ini
    ```bash
    $ git clone https://github.com/fdhl12/jda-team4-fs.git
    ```
2. Masuk ke direktori proyek
    ```bash
    $ cd jda-team4-fs
    ```
3. Instal dependensi
    ```bash
    $ npm install
    ```
    ```bash
    $ composer install
    ```
4. Konfigurasi database di `.env` atau `config` file
    ```bash
    $ cp .env.example .env
    ```
    - Ubah isi file .env
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=kelurahancibeber
    DB_USERNAME=root
    DB_PASSWORD=(yourpassword)
    ```
    - Jalankan perintah di terminal
    ```bash
    $ php artisan storage:link
    ```
    ```bash
    $ php artisan key:generate
    ```
5. Jalankan migrasi database
   perintah migrasi :
    ```bash
    $ php artisan migrate --seed
    ```
6. Jalankan aplikasi
    ```bash
    $ php artisan serve
    $ npm run dev
    ```

## Penggunaan

Setelah menginstal dan menjalankan aplikasi, buka browser dan akses `http://localhost:[8000]` untuk mulai menggunakan aplikasi.

## Login Sebagai Admin

-   Url login for management
    `http://localhost:[8000]`
-   email
    `kangadmin@gmail.com`
-   password
    `password`

## Lisensi

Proyek ini dilisensikan di bawah lisensi [Nama Lisensi]. Lihat file `LICENSE` untuk detail lebih lanjut.

## Kontak

Jika Anda memiliki pertanyaan atau saran, silakan hubungi saya di [example@email.com].

---

`

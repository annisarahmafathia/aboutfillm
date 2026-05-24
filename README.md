AboutFilm

Aplikasi rekomendasi dan review film berbasis web yang dibangun menggunakan framework Laravel dengan konsep MVC dan Eloquent ORM.

A. Fitur

- **Browse Film** — Melihat daftar film lengkap dengan poster, genre, tahun, dan rating
- **Detail Film** — Melihat informasi lengkap film beserta daftar review dari pengguna
- **Tulis Review** — Pengguna dapat mencari film dan menulis review beserta rating
- **Edit Review** — Pengguna dapat mengubah review yang sudah ditulis
- **Hapus Review** — Pengguna dapat menghapus review
- **Daftar Review** — Melihat semua review yang pernah ditulis

B. Teknologi

- PHP 8.x
- Laravel 13.x
- MySQL
- Eloquent ORM
- Bootstrap 5

C. Instalasi

1. Clone repository
   ```bash
   git clone https://github.com/annisarahmafathia/aboutfillm.git
   cd aboutfillm
   ```

2. Install dependencies
   ```bash
   composer install
   ```

3. Copy file `.env`
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Konfigurasi database di `.env`
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=movierec
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. Jalankan migration dan seeder
   ```bash
   php artisan migrate
   php artisan db:seed --class=MovieSeeder
   ```

6. Jalankan aplikasi
   ```bash
   php artisan serve
   ```

7. Buka browser ke **http://localhost:8000**

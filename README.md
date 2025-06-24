# Laravel Project

Ini adalah proyek Laravel yang berfungsi sebagai sistem informasi berbasis web.

## Cara Menjalankan

```bash
# 1. Clone repository
git clone https://github.com/username/nama-project.git
cd nama-project

# 2. Install dependensi PHP
composer install

# 3. Salin file .env dan generate key
cp .env.example .env
php artisan key:generate

# 4. Atur konfigurasi database di file .env
# Contoh:
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=nama_database
# DB_USERNAME=root
# DB_PASSWORD=

# 5. Jalankan migrasi dan seeder (jika ada)
php artisan migrate --seed

# 6. Jalankan server Laravel
php artisan serve
```

Buka browser dan akses: http://localhost:8000

## Kebutuhan Sistem

-   PHP >= 8.1
-   Composer
-   MySQL / MariaDB
-   Node.js & npm (jika menggunakan Vite atau frontend modern)

## Lisensi

Proyek ini menggunakan lisensi MIT.

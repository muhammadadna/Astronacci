Untuk Menjalankan sistem ini :

1. composer install
2. set database di .env
3. php artisan migrate --seed
4. php artisan storage:link

Terdapat 4 hak akses dalam sistem ini
1. hak akses sebagai admin (dapat melakukan crud dari posts)
2. hak akses sebagai star (dapat melihat semua posts dan video)
3. hak akses sebagai premium (dapat melihat 10 data posts dan video)
4. hak akses sebagai regular (dapat melihat 3 data posts dan video)

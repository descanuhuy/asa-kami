## Panduan Instalasi

Yang dilakukan setelah clone

1. Install composer-dependency pake `composer install`
2. Install npm package pake `npm install`, ini buat install beberapa package seperti tailwind dan alphine
3. Jalankan build css nya, pake `npm run dev`
4. Copy file `.env.example` di root folder terus ganti jadi `.env`. Setting sesuai dengan environment yang digunakan
5. Buat shortcut storage, ini biar folder storage tadi bisa diakses dari folder `public`. Bisa pake `php artisan storage:link`
6. Setting database, sesuaikan nama databasenya dengan yang ada di `.env`
7. Migrasikan database, `php artisan migrate`
8. Jalankan seeder `php artisan db:seed`
9. Jalankan `php artisan key:generate`
10. Jalankan project pada terminal dengan command `php artisan serve`

📝 To-Do List dengan Laravel

🚀 Deskripsi:
To-Do List ini adalah aplikasi berbasis web yang dibuat menggunakan Laravel, framework PHP yang powerful dan efisien. Aplikasi ini memungkinkan pengguna untuk menambahkan, mengedit, menandai sebagai selesai, dan menghapus tugas dengan mudah.

🔹 Fitur Utama:
✅ CRUD Tasks – Tambah, ubah, hapus, dan tandai tugas sebagai selesai.
✅ Autentikasi Pengguna – Login & registrasi untuk menyimpan daftar tugas secara personal.
✅ Filter & Pencarian – Cari tugas berdasarkan status (selesai/belum selesai).
✅ UI Responsif – Menggunakan Tailwind CSS untuk tampilan yang modern dan mobile-friendly.
✅ Notifikasi Flash – Memberikan feedback setelah aksi tertentu (misalnya: tugas berhasil ditambahkan).

🔧 Teknologi yang Digunakan:

    Laravel 10+ (Backend & Routing)
    Blade Templating (Frontend)
    MySQL (Database)
    Tailwind CSS (UI/UX)

📂 Cara Menginstal & Menjalankan:

    Clone repositori ini:

git clone https://github.com/username/todolist-laravel.git
cd todolist-laravel

Instal dependensi:

composer install
npm install

Buat file .env dari .env.example dan atur database:

cp .env.example .env
php artisan key:generate

Jalankan migrasi database:

php artisan migrate

Jalankan server lokal:

    php artisan serve

    Akses aplikasi di http://127.0.0.1:8000

📌 Catatan: Pastikan sudah menginstal PHP, Composer, dan MySQL sebelum menjalankan aplikasi.

💡 Kontribusi & Dukungan:
Jika ada masalah atau ingin berkontribusi, silakan buat issue atau pull request di GitHub repo ini.

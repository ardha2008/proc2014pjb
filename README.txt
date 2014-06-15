CARA PENGGUNAAN
=========

1. Buat database baru melalui phpmyadmin
2. Import file .sql pada database yang telah dibuat
3. Setting nama database yang digunakan pada file config.php
4. Akses dengan melalui browser dengan alamat localhost/[namafolder]

NB : Lebih optimal menggunakan Google Chrome 30++


CHANGELOG
=========

V1.0 - 22-05-2014
1. Fitur Add,Edit jquery proc 
2. Menggunakan framework bootstrap (CSS), Glyphicon (Icon)

V1.1 - 24-05-2014
1. Perbaikan bug edit, delete
2. Penambahan modal.js
3. Popup login, add,edit,delete

V1.2 - 28-05-2014
1. Perbaikan list beberapa tabel yang tidak muncul
2. Penambahan fitur paging

V1.3 - 30-05-2014
1. Perbaikan database
2. Penambahan fitur list user

V1.4 - 01-06-2014
1. Perbaikan bug insert, data insert setelah refresh
2. Penambahan Hak akses user (Sampel 15 Level + Superadmin) 

V1.5 - 02-06-2014
1. Remove input file, manage files menu
2. Manajemen file per user = 15 level + SU + Guest
3. Added Upload file by Admin user
4. added Download file by user
5. Live Search real time (berdasar no, tanggal, nama info)
6. Pagination on user (Guest user)

V.1.6 - 10-06-2014
1. Fixed minor upload
2. Add change password

V1.7 - 14-06-2014
1. Perbaikan bug insert pada beberapa tabel
2. Penambahan level management (Kantor pusat dapat memanage semua sub/file kecuali manage users)
3. Penambahan limit file upload (max : 1000 KB/file)
4. Filter upload (Memperbolehkan file pdf, dan file text proses lainnya)
5. Adding unlink (Database and file deleted at the same time)
6. Penambahan fitur update username
7. Penambahan environment develop, testing dan rilis (Fitur sederhana development)
8. Export data as xls (Nama file sesuai dengan tanggal export)

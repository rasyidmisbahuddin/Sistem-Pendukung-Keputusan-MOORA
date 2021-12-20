# Sistem Pendukung Keputusan Pemilihan Siswa Penerima Bantuan dengan Metode MOORA
<p align="center">
<img src="https://github.com/rasyidmisbahuddin/Sistem-Pendukung-Keputusan-MOORA/blob/main/screenshotspk.jpeg" alt="drawing" width="400"/>
<img src="https://github.com/rasyidmisbahuddin/Sistem-Pendukung-Keputusan-MOORA/blob/main/screenshotspk2.jpeg" alt="drawing" width="400"/>
<img src="https://github.com/rasyidmisbahuddin/Sistem-Pendukung-Keputusan-MOORA/blob/main/screenshotspk3.jpeg" alt="drawing" width="400"/>
<img src="https://github.com/rasyidmisbahuddin/Sistem-Pendukung-Keputusan-MOORA/blob/main/screenshotspk4.jpeg" alt="drawing" width="400"/>
</p>
Sistem merupakan sistem berbasis web yang digunakan untuk menyeleksi siswa yang memerlukan bantuan berdasarkan perhitungan MOORA

Berikut merupakan panduan installasi website Sistem Pendukung Keputusan Pemilihan Siswa Penerima Bantuan Dampak COVID-19 Menggunakan Multi Objective Optimization Method On The Basic Of Ratio

Panduan dibawah ini saya mengasumsikan bahwa pengguna telah terbiasa dengan bahasa pemrograman PHP dan memahami penggunaan Windows PC pada sehari-hari.
Yang harus dipersiapkan
1. Mempunyai aplikasi text editor seperti Visual Studio Code, Notepad++, atau Sublime Text
2. Mempunyai web server seperti XAMPP dengan versi v3.3.0 atau diatasnya
3. Mempunyai browser yang dapat menjalankan Javascript pada web (Google Chrome, Microsoft Edge atau browser lain dengan versi terbaru).
4. Koneksi Internet.

Langkah installasi
1. Install terlebih dahulu XAMPP dengan mendownload pada link https://www.apachefriends.org/download.html yang digunakan untuk menjalankan web pada localhost.
2. Jalankan aplikasi XAMPP Control Panel, kemudian hidupkan modul Apache, mySQL dan pastikan dengan keadaan running dengan adanya indikator hijau.
3. Kemudian pindahkan folder spk kedalam folder C:\xampp\htdocs (jika penginstallan XAMPP pada disk C:).
4. Buka aplikasi browser (seperti Google Chrome atau browser lainnya) dan ketikkan link http://localhost/phpmyadmin/ yang digunakan untuk mengolah database mySQL.
5. Buat database baru dengan nama db_moora_siswa lalu impor database db_moora_siswa.db pada halaman phpmyadmin dengan memilih file pada lokasi C:\xampp\htdocs\spk\db.
6. Buka website yang telah diinstall sebelumnya dengan link http://localhost/spk/login.php.
7. Jika sebagai guru maka login dengan akun dibawah ini
Username	: admin
Password	: guru
8. Jika sebagai pegawai maka login dengan akun dibawah ini
Username	: admin
Password	: admin
9. Aplikasi siap digunakan.


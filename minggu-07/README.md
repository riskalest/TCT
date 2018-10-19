Menampilkan Data dari Database dengan Framwork Slim
===================================================

## SLIM

SLIM adalah salah satu jenis micro framework yang dikhususkan untuk membangun API(Application programming interfaces). Langkah awal sebelum kita membuat api yang mampu terintegrasi dengan database atau 3rd party lain adalah mendefinisikan endpoint.

#  **Menyiapkan Database Aplikasi**

Pada aplikasi ini, kita akan menggunakan database MySQL dengan koneksi PDO. Silahkan buat database baru dan dua buah tabel bernama books.
Buka Phpmyadmin, lalu buat database bernama tokobuku. 

Setelah itu buat tabel books dengan 5 field:

    book_id untuk menyimpan id buku;
    title untuk menyimpan judul buku;
    author untuk menyimpan nama pengarang;
    sinopsis untuk menyimpan teks sinopsis;
    cover untuk menyimpan nama file sampul buku.

## **Membuat Koneksi Database**

Untuk menyambungkan project slim ke dalam database mysql yang ada pada phpmyadmin, dibutuhkan fungsi :

```function DBConnection(){
	return new PDO ('mysql :dbhost=localhost;dbname=tokobuku', 'root', '');
}

Untuk menampilkan data yang ada pada database tersebut digunakan fungsi show, berikut ini adalah script untuk menampilkan isi dari tabel mahasiswa dengan menggunakan json.

```$app = new \Slim\App;
$app->get('/show', function()use($app){
$db = DBConnection();
$result = $db->query("select * from books")->fetchAll();
echo json_encode($result);
});```

Tampilan json untuk menampilkan dari data tabel books.

![logo](https://github.com/riskalest/tct/blob/master/minggu-06/TCT_per-6_1.PNG)



#### Terimakasih :)


REFERENSI :
===========
https://pfw2017k01.wordpress.com/2017/12/06/tutorial-lengkap-install-framework-slim-crud/

https://www.slimframework.com/docs/v3/cookbook/database-eloquent.html

https://degananda.com/slim-framework-perkenalan-installasi/
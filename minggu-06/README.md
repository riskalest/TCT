Data As a Services
==================

## Apa itu Data As a Services?

Dalam komputasi, data sebagai layanan adalah sepupu perangkat lunak sebagai layanan. Seperti semua anggota keluarga "sebagai layanan", DaaS membangun konsep bahwa produk dapat diberikan sesuai permintaan kepada 
pengguna terlepas dari pemisahan geografis atau organisasi penyedia dan konsumen.

## SLIM

SLIM adalah salah satu jenis micro framework yang dikhususkan untuk membangun API(Application programming interfaces). Langkah awal sebelum kita membuat api yang mampu terintegrasi dengan database atau 3rd party lain adalah mendefinisikan endpoint.

#  **RESt Endpoint dengan Slim**

Endpoint pada RESt merupakan sesuatu yang krusial. Pada pertemuan ke-6 praktikum Teknologi Cloud Computing ini  membahas mengenai cara membuat endpoint pada framework SLIM. Http method yang digunakan yakni : 
GET.  Slim ditulis dengan menggunakan php (hypertext pre processor) sehingga kita akan menulis API juga dengan menggunakan php dan tentunnya menggunakan kaidah object oriented programming (OOP).


## **Install slim micro framework**

##### **Micro framework**

Kita telah mengeal beragam framework yang ada pada php (hypertext pre processor) contohnya seperti code igniter, cake, zend, laravel dan lain seabagainnya.  Namun belakangan ini muncul satu framework “jenis baru” yakni micro framework. Apakah itu micro framework ? silahkan simak ulasan berikut ini.
Micro berdasarkan pada KBBI (Kamus besar bahasa indonesia) berarti “kecil; tipis; sempit:”. Artinya microframework adalah framework kecil dan sering kali dapat diartikan sebagai suatu web framework yang mengakomodasi fungsi spesifik tertentu. Contohnya adalah lumen, slim merupakan suatu web framework yang berfokus pada pembuatan API dan micro services. Kedua hal tersebut nantinya akan dikonsumsi oleh services lainnya (web services).

Berlainan dengan full-stack framework yang mengakomodasi banyak hal seperti :

* account management
* autentikasi
* database abstraction
* templating (html).
* dan lain sebagainnya

micro framework tidak mengakomodasi fitur-fitur diatas melainkan hanya suatu fungsionalitas kecil. Keuntungannya adalah framework tersebut secara teori tentunnya “lebih ringan” jika dibandingkan dengan full-stack framework atau juga dapat disebut sebagai enterprise framework. Dan sekali lagi menurut teori, jika framework tersebut ringan otomatis performa yang dihasilkan juga akan lebih baik jika dibandingkan dengan full-stack framework untuk fungsionalitas tertentu (pada kasus ini adalah untuk membangun RESt-API).

#### **Slim framework**

Slim framework merupakan framework yang ditulis dengan menggunakan bahasa pemrograman php. Untuk package manager yang digunakan adalah composer. Slim mengakomodasi fungsi – fungsi yang terkait dengan pembuatan API (Apllication programming interfaces). Untuk dapat menjalankan slim diperlukan php dengan minimal versi 5.5.
Sebagai suatu framework tentunnya slim memiliki fitur-fitur yang diakomodasinnya. Berikut ini adalah daftar fitur yang dimiliki oleh slim framework.

    * Request & response handler
    hal ini sangat penting tentunnya karena kita akan membuat API yang pasti akan membutuhkan untuk melakukan pengelolaan terhadap request yang ada. Baik request dari client ke server ataupun sebaliknya.
    * Routing + middleware
    tanpa routing api akan sangat susah untuk diakses dan dilakukan pengelolaan. Fitur routing pada slim tentunnya akan sangat membantu pembuatan API project kita. Middleware  akan membantu kita untuk melakukan error handling
    * Error handler
    bayangkan jika api mengalami error secara parsial namun api tersebut down? maka seluruh services tidak dapat diakses. Oleh karena itu event handler ini hadir untuk mengakomodasi kebutuhan tersebut. Meski fungsi error handler tidak hanya itu saja (masih banyak kegunaan lainnya).
    * JSON
    slim menggunakan JSON sebagai format pertukaran data yang mana format ini sangat populer dan ringan (which is good bro).

sekelias secara singkat fitur tersebut hampir sama dengan express (salah satu webframework) yang berjalan pada nodejs. Namun slim ini berjalan pada php yang mana memiliki keuntungan yakni terdapat banyak sekali developer php jika dibandingkan dengan nodejs. Tentunnya ini akan mempermudah jika suatu saat membutuhkan tenaga tambahan / partner kerja.

#### **Install composer**

slim menggunakan package manager berupa composer, oleh karena itu kita perlu menginstall composer terlebih dahulu.
untuk php:
1. install composer (getcomposer.org)

#### **Gunakan composer untuk mendownload slim**

Masuklah pada folder htdocs / www / apapun folder yang anda gunakan(lokasi web folder) kemudian install slim framework. perintah yang digunakan untuk mendownload slim framework adalah sebagai berikut ini
**php composer.phar create-project slim/slim-skeleton tct**

![logo](https://github.com/riskalest/tct/blob/master/minggu-06/TCT_per-6_1.PNG)

#### **jalankan php web server (built-in dari slim)**

slim memiliki web server tersendiri (built-in). Sehingga kita perlu menjalankan web server tersebut untuk running slim framework tersebut. Stelah masuk ke folder yang memiliki file index.php, Perintah yang digunakan adalah sebagai berikut ini
**php -S localhost:8080 -t public public/index.php**

![logo](https://github.com/riskalest/tct/blob/master/minggu-06/TCT_per-6_2.PNG)

done maka slim framework siap untuk digunakan. Terdapat informasi bahwa server berjalan pada port 8080.  Kita dapat mengarahkan browser untuk mengakses halaman localhost:8080.  Maka akan tampak welcome page dari slim framework yang telah kita install pada folder tersebut.

#### **Membuat endpoint**

Buat endpoint yang sesuai dengan spesifikasi web services / API(application programming interfaces) yang akan dibuat. Berikut ini adalah kode endpoint yang sesuai dengan spesifikasi api yang digunakan.

<?php 
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require './vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response){
$data = array('name' => 'Riska', 'age' => 20);
$newResponse = $response->withJson($data);

return $newResponse;
});
$app->run();



Kode basic diatas menggunakan dua buah modul yakni ServerRequestInterfaces dan ResponseInterfaces yang digunakan untuk menghandle request dan response.  Intances awal yang dibuat yaitu app() yang melakukan proses instansiasi(proses yang membuat object biasannya ditandai dengan “new” pada SlimApp.
Endpoint yang didefinisikan adalah /hello/{nama} dengan metode http GET. Untuk mendapatkan parameter pada url fungsi yang digunakan yaitu getAttribute(‘nama attribute/parameter’). Untuk memberikan response kepada client digunakanlah fungsi Returning JSON dan jangan lupa mereturn response tersebut.

#### Setelah dijalankan di browser dengan keyword : 

**http://localhost:8080/hello/abc**

output

![logo](https://github.com/riskalest/tct/blob/master/minggu-06/TCT_per-6_3.PNG)

![logo](https://github.com/riskalest/tct/blob/master/minggu-06/TCT_per-6_4.PNG)

![logo](https://github.com/riskalest/tct/blob/master/minggu-06/TCT_per-6_5.PNG)


#### Terimakasih :)


REFERENSI :
===========
https://degananda.com/rest-endpoint-dengan-slim/

https://www.slimframework.com/docs/v3/objects/response.html

https://degananda.com/slim-framework-perkenalan-installasi/
Menyelesaiakan Proyek Untuk Menampilkan Data dari Database dengan Framwork Slim
===============================================================================

## SLIM

SLIM adalah salah satu jenis micro framework yang dikhususkan untuk membangun API(Application programming interfaces). Langkah awal sebelum kita membuat api yang mampu terintegrasi dengan database atau 3rd party lain adalah mendefinisikan endpoint.

#  **Install the Application**
	sebelum mengistall slim maka kita perlu install composer dan kemudian dibuat folder dengan melakukan git init pada folder.
	maka folder projek berisi tiga file yaitu : composer, composer.bat, composer.phar
	**composer create-project slim/slim-skeleton slimphp-CRUD**
	
	
#  **Menyiapkan Database Aplikasi**

Pada aplikasi ini, kita akan menggunakan database MySQL dengan koneksi PDO. Silahkan buat database baru dan dua buah tabel bernama Database operations
first_restful_api.
Buka Phpmyadmin, lalu buat database bernama tokobuku. 

Setelah itu buat tabel buah dengan 4 field:

![logo](https://github.com/riskalest/tct/blob/master/minggu-07/1.PNG)

## **Membuat Koneksi Database**

	Konstanta database, ditulis dalam  file **src/settings.php** :

```// Db settings
'db' => [
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'dbname' => 'first_restful_api',
]```


Sambungan ke MySQL di **src/dependencies.php**


```// PDO database library
$container['db'] = function ($c) {
    $settings = $c->get('settings')['db'];
    $pdo = new PDO("mysql:host=" . $settings['host'] . ";dbname=" . $settings['dbname'],
        $settings['user'], $settings['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};```


Semua kode yang digunakan untuk mendefinisikan route, mendapatkan data dari database, menerima request dari luar dan mengembalikan response ditulis di file **src/routes.php** :


```$app->get('/buah', function (Request $request, Response $response) {
	$query = $this->db->prepare('SELECT * FROM buah');
	$result = $query->execute();
	if ($result) {
		if ($query->rowCount()) {
			$data = array(
				'kode' => 1,
				'keterangan' => 'Sukses',
				'data' => $query->fetchAll());
		}else{
			$data = array(
				'kode' => 2,
				'keterangan' => 'Tidak ada data',
				'data' => null);
		}
	}else{
		$data = array(
			'kode' => 100,
			'keterangan' => 'Terdapat error',
			'data' => null);
	}
    return $response->withJson($data);
});```


Ada 3 kemungkinan response yang akan didapat seperti terlihat di atas. Kode 1 menandakan bahwa data berhasil didapatkan, kode 2 menandakan bahwa data tidak tersedia dan kode 100 menandakan bahwa ada yang error ketika query ke database.

Mendapatkan semua buah
Method dan url  :  http://localhost/first-restful-api/public/buah

Mendapatkan 1 data buah berdasarkan id
Method dan url  : http://localhost/first-restful-api/public/buah/{id}
Ganti {id} dengan id dari buah yang ingin didapatkan

Tampilan hasil untuk dari data tabel buah.

![logo](https://github.com/riskalest/tct/blob/master/minggu-07/1.PNG)

![logo](https://github.com/riskalest/tct/blob/master/minggu-07/1.PNG)

![logo](https://github.com/riskalest/tct/blob/master/minggu-07/1.PNG)

#### Terimakasih :)


REFERENSI :
===========
https://blog.andevindo.com/membuat-restful-api-menggunakan-slim-php-framework/

https://github.com/masfranzhuo/slimphp-CRUD

https://degananda.com/slim-framework-perkenalan-installasi/
Cloud Computing Architecture 
============================
![CCA](https://github.com/riskalest/tct/blob/master/minggu-03/TCT.jpeg)

Disini akan dibahas cara memasang aplikasi open sourece layanan komputasi awan yang bernama Microsoft Azure.

#### **Apa itu Windows Azure?**

Windows Azure adalah sebuah bentuk implementasi dari Teknologi bentukan Microsoft <i>Platform as a Service</i> (PaaS) dari sebuah cloud computing. Teknologi ini memungkinkan kita 
untuk membangun sebuah aplikasi melalui cloud, baik berupa teknologi web application, cloud service, &nbsp;maupun aplikasi-aplikasi yang berjalan di atas virtual machine.

Salah satu yang menjadi keunggulan Windows Azure adalah kemampuan untuk menjalankan aplikasi dari berbagai jenis teknologi dan platform, diantaranya adalah .NET (sebagai teknologi dari Microsoft), JAVA, dan juga PHP.

Terdapat tiga buah komponen dari teknologi Windows Azure, diantaranya adalah :
1. Compute : Merupakan bagian dari teknologi Windows Azure yang berguna dalam proses komputasi, baik secara foreground maupun background job (berjalan di belakang layar). Compute tools 
	 dari Windows Azure diantaranya adalah web role, worker role dan virtual role.
2. Storage : Merupakan bagian dari teknologi Windows Azure yang berguna dalam proses penyimpanan data. Terdapat dua jenis storage dalam Windows Azure, yang pertama adalah Azure Storage yang 
	berguna untuk penyimpanan data yang berbentuk table, cloud, dan blob. Sementara itu, bentuk storage lainnya adalah SQL Azure yang merupakan versi SQL Server yang berjalan di cloud.
3. Fabric : Merupakan bagian yang berguna sebagai “otak” dari teknologi ini. Proses ini diatur oleh Windows Azure Fabric Controller yang berguna dalam proses scheduling, resource allocation, 
	dan management.
	
Microsoft Azure sendiri merupakan layanan komputasi awan dari Microsoft yang menyediakan berbagai macam layanan seperti Virtual Machine, App Services, Database, Big Data, IoT, hingga Machine Learning.

Nah, pada pert ini akan dibahas mengenai cara menggunakan salah satu layanan dari Microsoft Azure yaitu Azure Web Apps. Layanan ini dapat digunakan untuk menyimpan aplikasi web yang sudah pengguna Azure buat ke layanan Azure Cloud.

Hal yang menarik dari layanan ini adalah pengguna Azure tidak perlu melakukan konfigurasi pada sisi server untuk memasang semua program yang dibutuhkan seperti web server, database, dan beragam konfigurasi lain karena layanan ini sudah menyediakan semua untuk penggunanya.

Pengguna Azure dapat mengatur sumber daya yang akan digunakan pada layanan ini melalui fitur panel kontrol yang sudah disediakan. Walaupun layanan Azure adalah produk Microsoft namun bersifat open platform sehingga pengguna Azure dapat memasang sistem operasi selain Windows Server pada layanan Virtual Machine yang disediakan. Selain itu, Azure juga mendukung berbagai macam platform terbuka seperti PHP, Java, dan Node.js.	

Untuk mencoba menggunakan layanan Microsoft Azure, ada beberapa solusi yang dapat pembaca atau developer gunakan yaitu:

    **Pertama** adalah pembaca atau developer mendaftarkan dirinya di program free trial.Dengan mendaftar pada program ini, pembaca atau developer akan mendapatkan kredit senilai US$ 200 yang dapat dibelanjakan pada semua layanan Azure dalam waktu 1 bulan.
    **Untuk alternatif kedua** berlaku pada mahasiswa yang memiliki akun DreamSpark. Mahasiswa yang memiliki akun DreamSpark dapat mendaftar pada tautan berikut untuk mendapatkan akun Azure gratis yang dapat digunakan untuk beberapa layanan seperti Azure Web Apps, MySQL database, dan platform kolaborasi Visual Studio Online.
    **Selain itu,** bagi pembaca atau developer yang memiliki startup dapat mendaftarkan startup-nya di program BizSpark. Program ini menawarkan lisensi Visual Studio Ultimate + MSDN yang didalamnya termasuk fasilitas penggunaan layanan Microsoft Azure.
    **Terakhir,** bagi kalangan akademisi, khususnya dosen yang mengajar mata kuliah yang menggunakan platform Azure dapat juga mengajukan program Azure in Education. Kalangan akademisi dapat memanfaatkan program ini untuk kepentingan riset atau pengajaran.

Setelah pembaca atau developer mendapatkan akun Microsoft Azure, anda dapat menggunakan layanan tersebut melalui Microsoft Azure Portal.

![CCA](https://github.com/riskalest/tct/blob/master/minggu-03/langkah_1.jpg)

Ketika pembaca atau developer berhasil masuk ke halaman Azure Portal, maka saatnya untuk memasang aplikasi CMS (content management system) pada Azure. Azure sendiri menyediakan banyak pilihan aplikasi yang dikelompokkan dalam layanan Marketplace.

Pada artikel ini saya akan menggunakan WordPress sebagai contohnya. Seperti sudah diketahui bersama  bahwa WordPress adalah platform CMS untuk membuat website yang berbasis teknologi open source seperti PHP dan MySQL. Untuk itu pembaca atau developer membutuhkan layanan cloud yang mendukung teknologi tersebut.

###### Langkah 1: Membuat MySQL Database

Sebelum membuat layanan Azure Web Apps, langkah paling pertama adalah pembaca harus menyiapkan database MySQL yang nantinya akan digunakan oleh aplikasi WordPress yang akan pengguna Azure buat.

Untuk membuat database MySQL baru, pilih tombol “New” pada Azure Portal, kemudian pilih “Data + Storage”, dan pilih “MySQL Database”.

![CCA](https://github.com/riskalest/tct/blob/master/minggu-03/langkah_1.jpg)

Pada jendela “New MySQL Database” tambahkan beberapa informasi sebagai berikut:

    1. Masukan nama database yang akan pembaca buat pada kotak “Database Name”. Ingat nama database yang telah dimasukan karena database tersebut akan digunakan pada langkah selanjutnya ketika memasang aplikasi WordPress di layanan Azure Web.
    2. Untuk tipe database yang disediakan, pembaca dapat memilih “Shared”. Pilihan ini menunjukkan bahwa database pembaca akan disimpan pada server dengan arsitektur multi-tenant yang berarti server tersebut digunakan juga oleh pengguna lain. Secara default pilihan ini akan aktif karena kita menggunakan free MySQL database.
    3. Untuk pilihan lokasi, pembaca dapat memilih lokasi data center terdekat dengan target pengguna website. Sebagai contoh saya mengasumsikan bahwa sebagian besar pengakses website yang saya buat berasal dari Indonesia maka saya akan memilih South East Asia sebagai lokasi dimana aplikasi saya akan diletakan.
    4. Untuk pilihan “Pricing Tier”, pembaca dapat menyesuakan sesuai kebutuhan. Sebagai permulaannya, pembaca dapat memilih paket yang paling murah untuk menguji coba aplikasi yang dibuat. Selanjutnya pada fase produksi, pembaca dapat meningkatkan paket yang disesuaikan dengan kebutuhan (banyak pengguna, beban kerja server, dll).
    5. “Resource group” digunakan untuk mengelompokan sumber daya yang pembaca buat pada layanan Azure agar pembaca lebih mudah mengatur dan mencari sumber daya tersebut.
    6. Untuk pilihan “Pricing Tier”, pilih paket “Mercury” yang merupakan paket gratis dengan spesifikasi paling minimal dari layanan MySQL database di Azure. Untuk mengetahui paket-paket yang disediakan beserta harganya lihat tautan berikut.
    7. Untuk pilihan “Legal Terms”, pilih tombol “OK”.
    8. Langkah terakhir, tekan tombol “Create” untuk membuat database baru.
	
###### Langkah 2: Memasang WordPress pada layanan Azure Web

Setelah database selesai dipersiapkan maka langkah selanjutnya adalah memasang WordPress pada layanan Azure Web. Untuk langkah awalnya adalah pembaca dapat membuka Azure portal, kemudian pilih tombol “New”, selanjutnya akan muncul pilihan layanan yang disediakan oleh Azure.

Dalam hal ini, pembaca dapat memilih “Web + Mobile”, kemudian “Marketplace”. Selain itu, pembaca dapat mencari aplikasi CMS yang akan dipasang pada Azure. Sebagai contohnya, pembaca dapat mengetikkan WordPress pada kotak pencarian. Selain WordPress, masih banyak aplikasi open source yang dapat pembaca pasang seperti Joomla, Moodle, Magento, dan lain sebagainya.

![CCA](https://github.com/riskalest/tct/blob/master/minggu-03/langkah_2-1.jpg)

Setelah pembaca menemukan WordPress pada halaman pencarian maka selanjutnya pilih aplikasi tersebut dan kemudian pilih tombol “Create”.

![CCA](https://github.com/riskalest/tct/blob/master/minggu-03/langkah_2-2.jpg)

Untuk membuat layanan Azure Web dan memasang aplikasi WordPress pada layanan tersebut, tambahkan informasi berikut ini:

    Alamat URL dari aplikasi WordPress yang pembaca buat. Microsoft Azure menyediakan domain default dengan akhiran azurewebsites.net, untuk itu pembaca dapat menggunakan alamat domain ini atau menggunakan alamat domain pembaca sendiri.
    Untuk pilihan subscription, pembaca dapat memilih sesuai dengan subscription yang pembaca miliki, misalnya seperti DreamSpark, atau Visual Studio MSDN.
    Pada pilihan berikutnya masukan resource group yang sama dengan yang sudah pembaca buat ketika pembaca membuat MySQL database.
    Untuk pilihan lokasi dan paket, pilih lokasi data center yang sama dengan database yang sudah pembaca buat sebelumnya yaitu “South East Asia”, dan pilih paket yang gratis yaitu “F1”.
    Untuk database pilih MySQL database yang sudah pembaca buat sebelumnya.

![CCA](https://github.com/riskalest/tct/blob/master/minggu-03/langkah_2-3.jpg)

Setelah semua informasi selesai dimasukan, kemudian tekan tombol “Create” maka Azure akan menyiapkan semua sumber daya yang dibutuhkan seperti database dan layanan Azure web apps. Selanjutnya akan dilakukan proses deployment aplikasi WordPress ke dalam layanan Azure web apps.

Tunggu beberapa saat sampai proses deploying selesai dilakukan, nantinya pembaca akan dapat melihat aplikasi WordPress pada halaman dashboard dari Azure Portal.

![CCA](https://github.com/riskalest/tct/blob/master/minggu-03/langkah_2-4.jpg)

Untuk melakukan konfigurasi pada WordPress, pilih URL dari aplikasi yang sudah pembaca buat pada layanan Azure. Sebagai contoh alamat URL yang sudah saya buat adalah http://actualwpweb.azurewebsites.net. Maka akan muncul tampilan awal untuk instalasi aplikasi WordPress. Pembaca dapat mengikuti proses instalasi sampai aplikasi WordPress siap.

Dari artikel diatas dapat dilihat bahwa sangat mudah untuk memasang aplikasi open source CMS seperti WordPress pada layanan Microsoft Azure. Ketika pengguna aplikasi pembaca atau developer bertambah sehingga merasa perlu untuk menambah kapasitas layanan maka pembaca atau developer dapat melakukan proses scaling-up dengan relatif mudah.

Pembaca atau developer juga dapat mengakses panel kontrol yang ada di Azure untuk meningkatkan paket layanan Azure Web atau layanan database yang dimiliki sesuai dengan kebutuhan tanpa harus melakukan proses migrasi server yang merepotkan.

*Artikel ini ditulis oleh Erick Kurniawan yang merupakan seorang Microsoft Azure MVP, trainer, konsultan, dan penulis. Dirinya fokus pada teknologi Web, Mobile, dan Cloud. Selain itu, dirinya penikmat kuliner, hobi masak, dan traveling. Penulis dapat dihubungi lewat email berikut erick@actual-training.com.


REFERENSI :
===========
https://teknojurnal.com/cara-memasang-aplikasi-open-source-pada-layanan-microsoft-azure/






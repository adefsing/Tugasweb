# TUGAS PEMBUATAN WEB FRAMEWORK

Ini adalah tugas framework yang menggunakan codeigniter 3 dengan mysql, saya kebetulan mendapatkan tugas web di bidang panagan. web ini saya buat dengan nama Madura Resto yang di dalamnya terdapat halaman admin dan halaman user yang sudah terkoneksi ke database.

## BAHAN

- CodeIgniter 3.1.11+
- XAMPP
- Visual Studio

## CARA MENGGUNAKANNYA

- Mendownload Tampilan ADMIN serta USER yang tersedia di internet
- Memasang Tampilan tersebut ke dalam CodeIgniter
- Membuat Controller untuk memanggil halaman yang diperlukan seperti model, view, agar halaman dapat peroprasi dengan baik
- Membuat Model untuk memanggil database yang diperlukan serta membuat funtion agar memiliki aksi untuk tombol-tombol yang tersedia
- membuat view dimana sebagai tampilan interface nantinya saat halam dibuka
- membuat CRUD agar dapat menambahkan, merubah, serta menghapus data produk nantinya
- membuat function login agar halaman lebih aman, dan dibutuhkan login sebelum mengakses halaman ADMIN
- Tampilan User untuk menampilkan data-data menu dan galeri yang ada di Madura Resto

## DATABASE

``` php
defined('BASEPATH') OR exit('No direct script access allowed');
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'maduraresto',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
```
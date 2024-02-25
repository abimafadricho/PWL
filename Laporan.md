--PRAKTIKUM 1--

1. Route hello
   ![Alt text](image.png)

2. Route world
   ![alt text](image-1.png)

3. Route selamat
   ![alt text](image-2.png)

4. Route nama
   ![alt text](image-3.png)

--PRAKTIKUM 2--

1. Route /user/{name}
   ![alt text](image-4.png)

2. Selanjutnya, coba tuliskan URL: localhost/PWL_2024/public/user/. Perhatikan halaman yang muncul dan jelaskan pengamatan anda
   Jawaban : yang ditampilkan 404 not found karena kita harus menggunakan parameter untuk memanggilnya.

3. ![alt text](image-5.png)
   Route::get('/articels/{id}', function ($Id) {
   return 'Halaman Artikel dengan ID ' . $Id;
   });

--PRAKTIKUM 3--

1. ![alt text](image-6.png)
   Output yang dihasilkan hanya "Nama saya" karena parameter tidak disertakan dalam URL.

2. ![alt text](image-7.png)

3. ![alt text](image-8.png)
   Output yang dihasilkan adalah "Nama saya John" karena tidak ada nilai dalam URL jadi nilai default John digunakan secara otomatis

--PRAKTIKUM Controler--

1. ![alt text](image.png)

2. <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
public function index()
{
return 'Selamat Datang';
}

    public function about()
    {
        $nim = '2241720025';
        $nama = 'Abima Fadricho Syuhadak';

        return 'NIM : ' . $nim . '<br>' .
            'Nama : ' . $nama;
    }
    public function articles($id)
    {
        return 'Halaman Artikel dengan Id ' . $id;
    }

};

Untuk Routingnya

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles{id}', [PageController::class, 'articles']);

3.  Route::get('/', [HomeController::class, "index"]); <br>
    Route::get('/about', [AboutController::class, 'About']); <br>
    Route::get('/articles{id}', [ArticleController::class, 'articles']);

--PRAKTIKUM Resource Controller--

1. ![alt text](image-1.png)

--PRAKTIKUM View--

1. ![alt text](image-2.png)

2. ![alt text](image-3.png) view dalam direktori

3. ![alt text](image-4.png) menampilkan view dari controller

4. ![alt text](image-5.png) manerusakan data ke view

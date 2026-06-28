<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\QuizQuestion;

class QuizSeeder extends Seeder
{
    public function run(): void
    {
        $quizzes = [
            'karakteristik' => [
            'title' => 'Karakteristik',
            'questions' => [
                [
                    'id' => 1,
                    'question' => 'Fungsi kuadrat berikut yang memiliki parabola terbuka ke atas adalah ....',
                    'options' => [
                        'a' => '𝑓(𝑥) = 3𝑥² + 4𝑥 + 2',
                        'b' => '𝑓(𝑥) = −4𝑥² + 4𝑥 + 2',
                        'c' => '𝑓(𝑥) = −3𝑥² + 4𝑥 + 2',
                        'd' => '𝑓(𝑥) = −4𝑥² + 4𝑥 + 2',
                    ],
                    'correct_answer' => 'a',
                ],
                [
                    'id' => 2,
                    'question' => 'Fungsi kuadrat berikut yang memiliki parabola terbuka ke bawah adalah ....',
                    'options' => [
                        'a' => '𝑓(𝑥) = 𝑥² + 2𝑥 + 2',
                        'b' => '𝑓(𝑥) = −2𝑥² + 4𝑥 + 1',
                        'c' => '𝑓(𝑥) = 3𝑥² − 4𝑥 + 2',
                        'd' => '𝑓(𝑥) = 4𝑥² + 2𝑥 − 1',
                    ],
                    'correct_answer' => 'b',
                ],
                [
                    'id' => 3,
                    'question' => 'Fungsi kuadrat berikut yang memiliki nilai 𝑎 < 0 adalah ....',
                    'options' => [
                        'a' => '𝑓(𝑥) = −𝑥² + 3𝑥 + 3',
                        'b' => '𝑓(𝑥) = 3𝑥² − 2𝑥 + 4',
                        'c' => '𝑓(𝑥) = 2𝑥² + 3𝑥 − 2',
                        'd' => '𝑓(𝑥) = 𝑥² + 5𝑥 − 2',
                    ],
                    'correct_answer' => 'a',
                ],
                [
                    'id' => 4,
                    'question' => ' Diketahui 𝑓(𝑥) = 2𝑥² + 5𝑥 + 1, koordinat titik potong grafik fungsi tersebut dengan sumbu 𝑦 adalah ....',
                    'options' => [
                        'a' => '(−2, −1)',
                        'b' => '(0, 1)',
                        'c' => '(1, 8)',
                        'd' => '(−1, −2)',
                    ],
                    'correct_answer' => 'b',
                ],
                [
                    'id' => 5,
                    'question' => 'Diketahui f(x) = x² - 4x + 3, koordinat titik puncaknya adalah ....',
                    'options' => [
                        'a' => '(2, -1)',
                        'b' => '(-2, 1)', 
                        'c' => '(2, 1)', 
                        'd' => '(-2, -1)', 
                    ],
                    'correct_answer' => 'a',
                ],
                [
                    'id' => 6,
                    'question' => 'Diketahui 𝑓(𝑥) = 4𝑥² + 11𝑥 − 7, banyaknya titik potong grafik fungsi tersebut terhadap sumbu \\(x \\) adalah ....',
                    'options' => [
                        'a' => 'Satu',
                        'b' => 'Dua',
                        'c' => 'Tiga',
                        'd' => 'Empat',
                    ],
                    'correct_answer' => 'b',
                ],
                [
                    'id' => 7,
                    'question' => 'Diketahui 𝑓(𝑥) = 4𝑥² + 4𝑥 + 5, banyaknya titik potong grafik fungsi tersebut terhadap sumbu \\(x \\) adalah ....',
                    'options' => [
                        'a' => 'Satu',
                        'b' => 'Dua',
                        'c' => 'Tiga',
                        'd' => 'Tidak ada',
                    ],
                    'correct_answer' => 'd',
                ],
                [
                    'id' => 8,
                    'question' => 'Jarak maksimum yang ditempuh oleh mobil dari tabel berikut adalah ....',
                    'options' => [
                        'a' => '7 m',
                        'b' => '11 m',
                        'c' => '15 m',
                        'd' => '19 m',
                    ],
                    'image' => 'assets/img/app/tabel-karakteristik1.png',
                    'correct_answer' => 'd',
                ],
                [
                    'id' => 9,
                    'question' => 'Koordinat titik maksimum dan garis sumbu simetri dari tabel berikut adalah ....',
                    'options' => [
                        'a' => 'Koordinat titik maksimum (3, 19) dan sumbu simetrinya 3',
                        'b' => 'Koordinat titik maksimum (1, 11) dan sumbu simetrinya 1',
                        'c' => 'Koordinat titik maksimum (4, 15) dan sumbu simetrinya 4',
                        'd' => 'Koordinat titik maksimum (2, 15) dan sumbu simetrinya 2',
                    ],
                    'image' => 'assets/img/app/tabel-karakteristik2.png',
                    'correct_answer' => 'a',
                ],
                [
                    'id' => 10,
                    'question' => 'Nilai diskriminan dari fungsi 𝑓(𝑥) = 2𝑥² + 4𝑥 − 3 adalah ....',
                    'options' => [
                        'a' => '10',
                        'b' => '20',
                        'c' => '30',
                        'd' => '40',
                    ],
                    'correct_answer' => 'd',
                ],
            ],
        ],
            'rekonstruksi' => [
            'title' => 'Rekonstruksi',
            'questions' => [
                [
                    'id' => 1,
                    'question' => 'Persamaan fungsi kuadrat yang grafiknya melalui titik-titik \( k(-2,0), l(0,4), m(1,5) \) adalah ....',
                    'options' => [
                        'a' => '\( f(x) = -\frac{1}{3}x^2 + \frac{4}{3}x + 4 \)',
                        'b' => '\( f(x) = -\frac{1}{3}x^2 - \frac{4}{3}x + 4 \)',
                        'c' => '\( f(x) = -\frac{1}{3}x^2 - \frac{4}{3}x - 4 \)',
                        'd' => '\( f(x) = \frac{1}{3}x^2 + \frac{4}{3}x + 4 \)',
                    ],
                    'correct_answer' => 'a',
                    'explanation' => 'Penjelasan: Persamaan fungsi kuadrat yang melalui tiga titik diperoleh dengan mensubstitusikan ketiga titik ke bentuk umum \( y=ax²+bx+c \) sehingga diperoleh sistem persamaan linear untuk menentukan nilai \( a \), \( b \), dan \( c\).',
                    'reinforcement' => 'Jika diketahui tiga titik berbeda yang dilalui grafik fungsi kuadrat, gunakan bentuk umum \( f(x)=ax²+bx+c \). Substitusikan ketiga titik tersebut sehingga diperoleh tiga persamaan linear. Setelah nilai \( a \), \( b \), dan \( c\) ditemukan, susun kembali persamaan fungsi kuadratnya.',
                ],
                [
                    'id' => 2,
                    'question' => 'Persamaan fungsi kuadrat yang titik potongnya dengan sumbu \(x\) di \( A(4,0) \) dan \( B(-2,0) \) serta melalui titik \( (2, -8) \) adalah ....',
                    'options' => [
                        'a' => '\( f(x) = -x^2 - 2x - 8 \)',
                        'b' => '\( f(x) = x^2 - 2x - 8 \)',
                        'c' => '\( f(x) = -x^2 + 2x - 8 \)',
                        'd' => '\( f(x) = x^2 - 2x + 8 \)',
                    ],
                    'correct_answer' => 'b',
                    'explanation' => 'Penjelasan: Persamaan fungsi kuadrat dapat dibentuk dari dua titik potong dengan sumbu \( x\), yaitu \( A(4,0) \) dan \( B(−2,0) \), menggunakan bentuk faktor \( f(x)=a(x−4)(x+2) \). Selanjutnya, substitusikan titik \( (2,−8) \) untuk menentukan nilai \( a\).',
                    'reinforcement' => 'Jika diketahui dua titik potong grafik dengan sumbu \( x \), gunakan bentuk faktor \( y = a(x - x_{1})(x - x_{2}) \). Apabila diketahui satu titik lain yang dilalui grafik, substitusikan titik tersebut untuk menentukan nilai \( a \), kemudian susun persamaan fungsi kuadratnya.',
                ],
                [
                    'id' => 3,
                    'question' => 'Fungsi kuadrat yang memiliki akar-akar kompleks \(3 + i\) dan \(3 - i\) adalah ....',
                    'options' => [
                        'a' => '\( f(x) = x^2 - 6x - 10 \)',
                        'b' => '\( f(x) = -x^2 - 6x - 10 \)',
                        'c' => '\( f(x) = x^2 - 6x + 10 \)',
                        'd' => '\( f(x) = x^2 + 6x + 10 \)',
                    ],
                    'correct_answer' => 'c',
                    'explanation' => 'Penjelasan: Fungsi kuadrat yang memiliki akar kompleks tetap dapat dibentuk menggunakan bentuk faktor. Karena akar-akarnya adalah \( 3+i \) dan \( 3−i \), maka pasangan akar kompleks tersebut menghasilkan persamaan dengan koefisien real, yaitu \( f(x) = x^2 - 6x + 10 \).',
                    'reinforcement' => 'Jika diketahui akar-akar suatu fungsi kuadrat, gunakan bentuk faktor \( y = a(x - x_{1})(x - x_{2}) \). Untuk akar kompleks yang berpasangan, hasil perkaliannya tetap menghasilkan persamaan fungsi kuadrat dengan koefisien real.',
                ],
                [
                    'id' => 4,
                    'question' => 'Persamaan fungsi kuadrat yang melalui titik-titik (1, 2), (0, 3) dan (3, 2) adalah ....',
                    'options' => [
                        'a' => '\( f(x) = -\frac{1}{3}x^2 + \frac{4}{3}x + 3 \)',
                        'b' => '\( f(x) = -\frac{1}{3}x^2 - \frac{4}{3}x + 3 \)',
                        'c' => '\( f(x) = -\frac{1}{3}x^2 - \frac{4}{3}x - 3 \)',
                        'd' => '\( f(x) = \frac{1}{3}x^2 - \frac{4}{3}x + 3 \)',
                    ],
                    'correct_answer' => 'd',
                    'explanation' => 'Penjelasan: Persamaan fungsi kuadrat diperoleh dengan mensubstitusikan ketiga titik, yaitu (1,2), (0,3), dan (3,2), ke bentuk umum \( y=ax²+bx+c \). Selanjutnya, selesaikan sistem persamaan linear untuk menentukan nilai \( a \), \( b \), dan \( c\), sehingga diperoleh persamaan fungsi kuadrat yang sesuai.',
                    'reinforcement' => 'Jika diketahui tiga titik berbeda yang dilalui grafik fungsi kuadrat, gunakan bentuk umum \( f(x)=ax²+bx+c \). Substitusikan ketiga titik tersebut sehingga diperoleh tiga persamaan linear. Setelah nilai \( a \), \( b \), dan \( c\) ditemukan, susun kembali persamaan fungsi kuadratnya.',
                ],
                [
                    'id' => 5,
                    'question' => 'Fungsi kuadrat yang memiliki nilai minimum \(-4\) pada \(x = 1\) dan melalui titik (0, 0) adalah ....',
                    'options' => [
                        'a' => '\( f(x) = 4x^2 - 8x \)',
                        'b' => '\( f(x) = -4x^2 - 8x \)',
                        'c' => '\( f(x) = x^2 - 8x \)',
                        'd' => '\( f(x) = x^2 + 8x \)',
                    ],
                    'correct_answer' => 'a',
                    'explanation' => 'Penjelasan: Karena diketahui fungsi memiliki nilai minimum \( −4 \) pada \( x=1 \), maka titik puncaknya adalah \( (1,−4) \). Gunakan bentuk puncak \( y = a(x - x_{1})(x - x_{2}) \). Selanjutnya, substitusikan titik \( (0, 0) \) untuk menentukan nilai \( a \), sehingga diperoleh persamaan fungsi kuadrat yang benar. ',
                    'reinforcement' => 'Jika diketahui titik puncak suatu fungsi kuadrat, gunakan bentuk puncak \( y = a(x - ℎ)^2 + 𝑘 \). Setelah itu, substitusikan satu titik lain yang diketahui untuk menentukan nilai \( a \), kemudian ubah ke bentuk umum apabila diperlukan.',
                ],
                [
                    'id' => 6,
                    'question' => 'Persamaan fungsi kuadrat yang melalui sumbu \(x\) dari grafik di bawah ini adalah ....(Sumber gambar grafik: Dibuat Mandiri via GeoGebra)',
                    'options' => [
                        'a' => '\( f(x) = x^2 - 8x + 4 \)',
                        'b' => '\( f(x) = -x^2 + 3x + 4 \)',
                        'c' => '\( f(x) = x^2 - 8x - 4 \)',
                        'd' => '\( f(x) = x^2 + 3x - 4 \)',
                    ],
                    'image' => 'assets/img/app/graph-rekon-2.png',
                    'correct_answer' => 'b',
                    'explanation' => 'Penjelasan: Grafik menunjukkan dua titik potong dengan sumbu \( x \) dan satu titik lain pada parabola. Informasi tersebut digunakan untuk menyusun persamaan fungsi kuadrat dalam bentuk faktor, kemudian menentukan nilai \( a \) sehingga diperoleh persamaan fungsi yang sesuai dengan grafik.',
                    'reinforcement' => 'Jika diketahui grafik fungsi kuadrat beserta titik potong terhadap sumbu \( x \), tentukan terlebih dahulu akar-akarnya. Gunakan bentuk faktor \( y = a(x - x_{1})(x - x_{2}) \), kemudian tentukan nilai \( a \) menggunakan satu titik lain pada grafik.',
                ],
                [
                    'id' => 7,
                    'question' => 'Persamaan fungsi kuadrat yang melalui sumbu \(x\) dari grafik di bawah ini adalah ....(Sumber gambar grafik: Dibuat Mandiri via GeoGebra)',
                    'options' => [
                        'a' => '\( f(x) = 2x^2 + 6x + 4 \)',
                        'b' => '\( f(x) = -x^2 + 6x + 4 \)',
                        'c' => '\( f(x) = x^2 - 6x - 4 \)',
                        'd' => '\( f(x) = 2x^2 + 6x - 4 \)',
                    ],
                    'image' => 'assets/img/app/graph-rekon-3.png',
                    'correct_answer' => 'a',
                    'explanation' => 'Penjelasan: Dari grafik dapat ditentukan dua titik potong terhadap sumbu \( x \) dan satu titik lain yang dilalui parabola. Informasi tersebut digunakan untuk menentukan nilai \( a \) sehingga diperoleh persamaan fungsi kuadrat yang sesuai dengan grafik.',
                    'reinforcement' => 'Jika diketahui grafik fungsi kuadrat beserta titik potong terhadap sumbu \( x \), tentukan terlebih dahulu akar-akarnya. Gunakan bentuk faktor \( y = a(x - x_{1})(x - x_{2}) \), kemudian tentukan nilai \( a \) menggunakan satu titik lain pada grafik.',
                ],
                [
                    'id' => 8,
                    'question' => 'Persamaan fungsi kuadrat yang melalui sumbu \(x\) dari grafik di bawah ini adalah .... (Sumber gambar grafik: Dibuat Mandiri via GeoGebra)',
                    'options' => [
                        'a' => '\( f(x) = 2x^2 - 6x + 4 \)',
                        'b' => '\( f(x) = -2x^2 + 4x + 6 \)',
                        'c' => '\( f(x) = 2x^2 - 4x - 6 \)',
                        'd' => '\( f(x) = 2x^2 + 4x - 6 \)',
                    ],
                    'image' => 'assets/img/app/graph-rekon-4.png',
                    'correct_answer' => 'd',
                    'explanation' => 'Penjelasan: Grafik memperlihatkan dua titik potong terhadap sumbu \( x \) dan satu titik lain pada parabola. Data tersebut digunakan untuk membentuk persamaan fungsi kuadrat dalam bentuk faktor, kemudian menentukan nilai \( a \) agar persamaan sesuai dengan grafik. ',
                    'reinforcement' => 'Jika diketahui grafik fungsi kuadrat beserta titik potong terhadap sumbu \( x \), tentukan terlebih dahulu akar-akarnya. Gunakan bentuk faktor \( y = a(x - x_{1})(x - x_{2}) \), kemudian tentukan nilai \( a \) menggunakan satu titik lain pada grafik.',
                ],
                [
                    'id' => 9,
                    'question' => 'Fungsi kuadrat dengan titik puncak (2, 6) dan melalui titik (1, 7) adalah ....',
                    'options' => [
                        'a' => '\( f(x) = x^2 - 4x - 10 \)',
                        'b' => '\( f(x) = 2x^2 + 4x + 10 \)',
                        'c' => '\( f(x) = x^2 - 4x + 10 \)',
                        'd' => '\( f(x) = 2x^2 + 4x - 10 \)',
                    ],
                    'correct_answer' => 'c',
                    'explanation' => 'Penjelasan: Karena diketahui titik puncak \( (2,6) \), persamaan fungsi kuadrat disusun menggunakan bentuk puncak \( f(x)=a(x−2)^2+6 \). Selanjutnya, substitusikan titik (1,7) untuk menentukan nilai \( a \), sehingga diperoleh persamaan fungsi kuadrat yang sesuai.',
                    'reinforcement' => 'Jika diketahui titik puncak suatu fungsi kuadrat, gunakan bentuk puncak \( y = a(x - ℎ)^2 + 𝑘 \). Setelah itu, substitusikan satu titik lain yang diketahui untuk menentukan nilai \( a \), kemudian ubah ke bentuk umum apabila diperlukan.',
                ],
                [
                    'id' => 10,
                    'question' => 'Fungsi kuadrat dengan titik balik \(2, -1 \), seperti pada gambar di bawah ini adalah .... (Sumber gambar grafik: Dibuat Mandiri via GeoGebra)',
                    'options' => [
                        'a' => '\( f(x) = x^2 - 4x - 3 \)',
                        'b' => '\( f(x) = -x^2 - 4x - 3 \)',
                        'c' => '\( f(x) = x^2 - 6x + 3 \)',
                        'd' => '\( f(x) = x^2 - 4x + 3 \)',
                    ],
                    'image' => 'assets/img/app/graph-rekon-5.png',
                    'correct_answer' => 'd',
                    'explanation' => 'Penjelasan: Grafik menunjukkan titik balik atau titik puncak parabola berada di \( (2,−1) \). Dengan menggunakan bentuk puncak \( f(x)=a(x−2)^2−1 \), dan memanfaatkan informasi lain pada grafik, nilai \( a \) dapat ditentukan sehingga diperoleh persamaan fungsi kuadrat sesuai.',
                    'reinforcement' => 'Jika diketahui titik balik atau titik puncak dari grafik fungsi kuadrat, gunakan bentuk puncak \( y = a(x - ℎ)^2 + 𝑘 \). Selanjutnya, gunakan satu titik lain pada grafik untuk menentukan nilai \( a \), kemudian tuliskan persamaan fungsi kuadratnya.',
                ],
            ],
        ],

        'masalah' => [
        'title' => 'Menyelesaikan Masalah',
        'questions' => [
            [
            'id' => 1,
            'question' => 'Seorang petani memiliki pagar sepanjang 6.000 m. Ia ingin membuat sebuah ladang yang berbentuk persegi panjang yang akan dibagi menjadi dua kapling sama besar, dengan pagar pembatas sejajar dengan salah satu sisi ladang. Luas maksimum ladang yang dapat dipagari oleh petani adalah ....',
            'options' => [
                'a' => '1.500.000 m²',
                'b' => '1.600.000 m²',
                'c' => '1.700.000 m²',
                'd' => '1.800.000 m²',
            ],
            'correct_answer' => 'a',
            'explanation' => 'Penjelasan: Pada soal ini, fungsi kuadrat digunakan untuk memodelkan masalah nyata, yaitu menentukan luas maksimum sebuah ladang. Setelah model matematika diperoleh dalam bentuk fungsi kuadrat \( L(l) = −1,5l^2 + 3000l \), nilai maksimum ditentukan melalui titik puncak parabola. Hal ini menunjukkan bahwa fungsi kuadrat dapat digunakan untuk menyelesaikan masalah optimasi dalam kehidupan sehari-hari.',
            'reinforcement' => 'Permasalahan optimasi yang berkaitan dengan luas atau keuntungan dapat dimodelkan menggunakan fungsi kuadrat. Setelah model matematika diperoleh, tentukan nilai maksimum atau minimum dengan mencari titik puncak parabola menggunakan rumus \( x=-\frac{b}{2a} \), kemudian substitusikan kembali ke fungsi untuk memperoleh hasil akhirnya.',
        ],
        [
            'id' => 2,
            'question' => 'Sebuah bola dilemparkan ke atas dari tanah dengan kecepatan tertentu sehingga ketinggiannya terhadap waktu (dalam detik), dinyatakan oleh fungsi \( h(t) = -5t^2 + 40t \). Ketinggian maksimum yang dicapai oleh bola (dalam meter) adalah ....',
            'options' => [
                'a' => '80',
                'b' => '100',
                'c' => '120',
                'd' => '180',
            ],
            'correct_answer' => 'a',
            'explanation' => 'Penjelasan:  Ketinggian bola dinyatakan oleh fungsi kuadrat \( h(t) = -5t^2 + 40t \). Karena koefisien \( t^2 \) bernilai negatif, grafik parabola terbuka ke bawah sehingga memiliki nilai maksimum. Nilai maksimum diperoleh dari titik puncak parabola dengan menentukan waktu terlebih dahulu, kemudian menghitung tinggi maksimum bola.',
            'reinforcement' => 'Pada gerak benda yang dinyatakan dengan fungsi kuadrat, tinggi maksimum atau minimum diperoleh melalui titik puncak parabola. Tentukan terlebih dahulu nilai variabel menggunakan rumus \( x=-\frac{b}{2a} \), kemudian substitusikan ke fungsi untuk memperoleh nilai optimumnya.',
        ],
        [
            'id' => 3,
            'question' => 'Suatu kawat yang panjangnya 20 cm akan dibentuk persegi panjang. Tentukan ukuran persegi panjang tersebut agar luasnya maksimum, serta luas maksimumnya adalah ....',
            'options' => [
                'a' => '16 cm²',
                'b' => '25 cm²',
                'c' => '36 cm²',
                'd' => '49 cm²',
            ],
            'correct_answer' => 'b',
            'explanation' => 'Penjelasan: Luas persegi panjang dinyatakan sebagai fungsi kuadrat berdasarkan keliling kawat yang tersedia. Karena fungsi luas berbentuk parabola terbuka ke bawah, luas maksimum diperoleh pada titik puncak parabola.',
            'reinforcement' => 'Pada permasalahan menentukan luas maksimum suatu persegi panjang dengan keliling tetap, bentuklah terlebih dahulu model fungsi kuadrat luas. Selanjutnya tentukan titik puncak parabola untuk memperoleh ukuran dan luas maksimum.',
        ],
        [
            'id' => 4,
            'question' => 'Jika jumlah dua bilangan adalah 20 dan hasil kalinya 96. Bilangan-bilangan tersebut adalah ....',
            'options' => [
                'a' => '2 dan 6',
                'b' => '4 dan 8',
                'c' => '6 dan 10',
                'd' => '8 dan 12',
            ],
            'correct_answer' => 'b',
            'explanation' => 'Penjelasan: Jika jumlah dua bilangan diketahui, salah satu bilangan dapat dinyatakan dalam bentuk variabel sehingga hasil kalinya membentuk fungsi kuadrat.',
            'reinforcement' => 'Masalah yang melibatkan jumlah dan hasil kali dua bilangan dapat dimodelkan menggunakan fungsi kuadrat. Misalkan salah satu bilangan sebagai variabel, kemudian bentuk persamaan kuadrat dan tentukan pasangan bilangan yang memenuhi kondisi soal.',
        ],
        [
            'id' => 5,
            'question' => 'Diketahui keliling suatu persegi panjang adalah 36 cm. Ukuran-ukuran persegi panjang tersebut agar luasnya maksimum adalah ....',
            'options' => [
                'a' => '\(9\) cm x \( 9\) cm',
                'b' => '\(10\) cm x \( 3\) cm',
                'c' => '\(11\) cm x \( 3\) cm',
                'd' => '\(12\) cm x \( 4\) cm',
            ],
            'correct_answer' => 'a',
            'explanation' => 'Penjelasan: Luas persegi panjang dinyatakan sebagai fungsi kuadrat berdasarkan keliling sebesar 36 cm. Karena fungsi luas berbentuk parabola terbuka ke bawah, luas maksimum diperoleh ketika panjang dan lebar sama besar.',
            'reinforcement' => 'Pada persegi panjang dengan keliling tetap, luas maksimum dicapai ketika panjang dan lebar memiliki ukuran yang sama sehingga membentuk persegi. Hal ini dapat dibuktikan melalui model fungsi kuadrat dan titik puncaknya.',
        ],
        [
            'id' => 6,
            'question' => 'Pendapatan dari hasil penjualan barang dinyatakan sebagai fungsi jumlah barang yang diproduksi \(q\): \(P(q) = -20q^2 + 3000q\). Pendapatan maksimal (optimal) dan jumlah barang \(q\) yang menghasilkan pendapatan tersebut adalah ....',
            'options' => [
                'a' => 'Pendapatan maksimal adalah 114.500 dan Jumlah barang sebanyak 95 unit',
                'b' => 'Pendapatan maksimal adalah 113.500 dan Jumlah barang sebanyak 85 unit',
                'c' => 'Pendapatan maksimal adalah 112.500 dan Jumlah barang sebanyak 75 unit',
                'd' => 'Pendapatan maksimal adalah 111.500 dan Jumlah barang sebanyak 65 unit',
            ],
            'correct_answer' => 'c',
            'explanation' => 'Penjelasan: Pendapatan dinyatakan oleh fungsi kuadrat \(P(q) = -20q^2 + 3000q\). Karena grafik terbuka ke bawah, pendapatan maksimum diperoleh di titik puncak parabola. Setelah menentukan nilai \( q \), diperoleh jumlah produksi optimal beserta pendapatan maksimalnya.',
            'reinforcement' => 'Dalam masalah keuntungan, pendapatan, atau biaya yang dimodelkan dengan fungsi kuadrat, tentukan nilai variabel yang menghasilkan nilai optimum menggunakan titik puncak parabola. Nilai tersebut menunjukkan kondisi yang paling menguntungkan.',
        ],
        [
            'id' => 7,
            'question' => 'Perhatikan gambar di bawah ini. Seorang petani ingin membuat pagar pembatas tanaman berbentuk dua petak persegi panjang yang berdampingan. Panjang kawat yang tersedia adalah \(24 m\). Luas maksimum ladang yang dapat dibuat petani adalah ....',
            'image' => 'assets/img/app/2box.png',
            'options' => [
                'a' => '6 m²',
                'b' => '12 m²',
                'c' => '24 m²',
                'd' => '48 m²',
            ],
            'correct_answer' => 'c',
            'explanation' => 'Penjelasan: Luas dua petak ladang dinyatakan sebagai fungsi kuadrat berdasarkan panjang kawat yang tersedia. Setelah model matematika disusun, luas maksimum diperoleh dari titik puncak parabola.',
            'reinforcement' => 'Permasalahan pagar, lahan, atau kebun dapat dimodelkan menjadi fungsi kuadrat dengan menyatakan salah satu ukuran sebagai variabel. Gunakan titik puncak parabola untuk menentukan luas maksimum yang dapat diperoleh.',
        ],
        [
            'id' => 8,
            'question' => 'Panjang sisi miring suatu segitiga siku-siku adalah 13 cm. Jika selisih panjang sisi-sisi siku-sikunya adalah 5 cm. Luas segitiga tersebut adalah ....',
            'options' => [
                'a' => '11 cm²',
                'b' => '22 cm²',
                'c' => '33 cm²',
                'd' => '44 cm²',
            ],
            'correct_answer' => 'c',
            'explanation' => 'Penjelasan: Panjang kedua sisi siku-siku dapat dinyatakan menggunakan variabel karena diketahui selisih kedua sisi dan panjang sisi miringnya. Setelah diperoleh ukuran kedua sisi, maka dapat dihitung luas segitiganya.',
            'reinforcement' => 'Permasalahan geometri yang melibatkan hubungan antar sisi dapat dimodelkan menggunakan persamaan kuadrat atau Teorema Pythagoras. Setelah ukuran sisi diperoleh, gunakan rumus luas bangun untuk menentukan hasil akhirnya.',
        ],
        [
            'id' => 9,
            'question' => 'Misalkan \(x\) adalah pengeluaran untuk iklan (dalam juta rupiah) dan \(p\) adalah keuntungan yang diperolehnya. Diberikan, \( p = 230 + 20x - 0,5x^2 \). Pengeluaran untuk iklan \( x \) yang memberikan keuntungan maksimum adalah ....',
            'options' => [
                'a' => '30 juta rupiah',
                'b' => '20 juta rupiah',
                'c' => '40 juta rupiah',
                'd' => '10 juta rupiah',
            ],
            'correct_answer' => 'b',
            'explanation' => 'Penjelasan: Keuntungan perusahaan dinyatakan oleh fungsi kuadrat \( p = 230 + 20x - 0,5x^2 \). Karena grafik parabola terbuka ke bawah, keuntungan maksimum diperoleh pada titik puncak. Nilai \( x \) pada titik puncak menunjukkan besarnya biaya iklan yang menghasilkan keuntungan maksimum',
            'reinforcement' => 'Dalam permasalahan optimasi keuntungan atau pendapatan, fungsi kuadrat digunakan untuk menentukan nilai maksimum. Tentukan terlebih dahulu titik puncak parabola menggunakan rumus \( x=-\frac{b}{2a} \), kemudian tafsirkan hasilnya sesuai konteks soal.',
        ],
        [
            'id' => 10,
            'question' => 'Sebuah benda dilempar ke atas dari ketinggian 20 meter dengan kecepatan awal 10 m/s. Tinggi benda \(h(t)\) setelah \(t\) detik dinyatakan oleh persamaan \(h(t) = -5t^2 + 10t + 20\). Waktu yang dibutuhkan untuk mencapai ketinggian maksimum dan hitung tinggi maksimumnya adalah ....',
            'options' => [
                'a' => 'Waktunya 3 detik, Tingginya 35 m',
                'b' => 'Waktunya 2 detik, Tingginya 35 m',
                'c' => 'Waktunya 1 detik, Tingginya 25 m',
                'd' => 'Waktunya 2 detik, Tingginya 25 m',
            ],
            'correct_answer' => 'd',
            'explanation' => 'Penjelasan: Tinggi benda terhadap waktu dinyatakan oleh fungsi kuadrat \(h(t) = -5t^2 + 10t + 20\). Karena parabola terbuka ke bawah, tinggi maksimum dicapai di titik puncak. Dengan menentukan waktu pada titik puncak kemudian menghitung nilai fungsi, diperoleh waktu dan tinggi maksimum benda.',
            'reinforcement' => 'Pada gerak vertikal yang dinyatakan dengan fungsi kuadrat, waktu saat benda mencapai titik tertinggi diperoleh dari titik puncak parabola. Setelah waktu diperoleh, substitusikan kembali ke fungsi untuk menentukan tinggi maksimumnya.',
        ],
    ],
        ],
        'evaluasi' => [
        'title' => 'Evaluasi',
        'questions' => [
            [
                'id' => 1,
                'question' => 'Diketahui \\( f(x) = 3x^2 + 2x + 1 \\), titik potong dengan sumbu y adalah ....',
                'options' => [
                    'a' => '(0, 1)',
                    'b' => '(1, 0)',
                    'c' => '(0, 2)',
                    'd' => '(-1, 2)',
                ],
                'correct_answer' => 'a',
            ],
            [
                'id' => 2,
                'question' => 'Perhatikan gambar grafik fungsi kuadrat berikut! Fungsi \\( f(x) = ax^2 + bx + c \\) yang terbuka ke bawah dan memotong sumbu \\( y \\) di atas titik asal (0,0). Berdasarkan grafik tersebut, tanda dari nilai \\(a, b, c \\) yang benar adalah ....',
                'image' => 'assets/img/app/graph-eval-1.png',
                'options' => [
                    'a' => 'a < 0, b > 0, dan c > 0',
                    'b' => 'a < 0, b < 0, dan c > 0',
                    'c' => 'a < 0, b > 0, dan c < 0',
                    'd' => 'a > 0, b > 0, dan c > 0',
                ],
                'correct_answer' => 'a',
            ],
            [
                'id' => 3,
                'question' => 'Diketahui grafik fungsi kuadrat memiliki nilai koefisien \\( a = 1 \\) dan titik puncak \\( (p, q) = (-2, -9) \\). Koordinat titik potong grafik dengan sumbu \\( x \\) adalah ....',
                'options' => [
                    'a' => '(-8, 0) dan (2, 0)',
                    'b' => '(-7, 0) dan (2, 0)',
                    'c' => '(-6, 0) dan (2, 0)',
                    'd' => '(-5, 0) dan (1, 0)',
                ],
                'correct_answer' => 'd',
            ],
            [
                'id' => 4,
                'question' => 'Berikut ini yang merupakan fungsi kuadrat dengan parabola terbuka ke bawah adalah ....',
                'options' => [
                    'a' => '\\(f(x) = -3x^2 + 2x + 1 \\)',
                    'b' => '\\(f(x) = 2x^2 + 4x - 1 \\)',
                    'c' => '\\(f(x) = 2x^2 + 2x - 2 \\)',
                    'd' => '\\(f(x) = 4x^2 - 2x - 3 \\)',
                ],
                'correct_answer' => 'a',
            ],
            [
                'id' => 5,
                'question' => 'Berikut ini yang merupakan fungsi kuadrat dengan parabola terbuka ke atas adalah ....',
                'options' => [
                    'a' => '\\(f(x) = 3x^2 + 2x + 2 \\)',
                    'b' => '\\(f(x) = -3x^2 + 3x + 1 \\)',
                    'c' => '\\(f(x) = -2x^2 - 2x + 1 \\)',
                    'd' => '\\(f(x) = -2x^2 + 3x + 4 \\)',
                ],
                'correct_answer' => 'a',
            ],
            [
                'id' => 6,
                'question' => 'Diketahui grafik fungsi \\(y = (m - 2)x^2 + 4x + (m - 5) \\) menyinggung sumbu \\( x \\). Nilai \\( m \\) yang memenuhi adalah ....',
                'options' => [
                    'a' => '2 atau 3',
                    'b' => '1 atau 6',
                    'c' => '-1 atau 6',
                    'd' => '-1 atau -6',
                ],
                'correct_answer' => 'b',
            ],
            [
                'id' => 7,
                'question' => 'Diketahui fungsi kuadrat \\( f(x) = (n - 3)x^2 + nx - 1 \\). Jika fungsi tersebut bernilai negatif untuk semua \\( x \\), maka nilai \\( n \\) yang memenuhi adalah ....',
                'options' => [
                    'a' => '-6 < n < 2',
                    'b' => '-4 < n < 3',
                    'c' => '-2 < n < 6',
                    'd' => 'n < -6 atau n > 2',
                ],
                'correct_answer' => 'a',
            ],
            [
                'id' => 8,
                'question' => 'Persamaan grafik fungsi kuadrat yang menyinggung sumbu \\( x \\) di titik (2, 0) dan melalui titik (0, -8) adalah ....',
                'options' => [
                    'a' => '\\(f(x) = 2x^2 + 8x + 8 \\)',
                    'b' => '\\(f(x) = 2x^2 - 8x - 8 \\)',
                    'c' => '\\(f(x) = -2x^2 + 8x - 8 \\)',
                    'd' => '\\(f(x) = -2x^2 + 8x - 5 \\)',
                ],
                'correct_answer' => 'c',
            ],
            [
                'id' => 9,
                'question' => 'Persamaan grafik fungsi kuadrat yang memiliki titik puncak di (4, 4) dan melalui titik (0, -12) adalah …',
                'options' => [
                    'a' => '\\(f(x) = -x^2 + 8x - 12 \\)',
                    'b' => '\\(f(x) = 2x^2 - 8x - 12 \\)',
                    'c' => '\\(f(x) = -2x^2 - 8x - 12 \\)',
                    'd' => '\\(f(x) = x^2 + 8x + 12 \\)',
                ],
                'correct_answer' => 'a',
            ],
            [
                'id' => 10,
                'question' => 'Persamaan grafik fungsi kuadrat yang memotong sumbu x di titik (1, 0) dan (5, 0) serta melalui titik (0, 5) adalah ....',
                'options' => [
                    'a' => '\\(f(x) = -x^2 + 6x - 5 \\)',
                    'b' => '\\(f(x) = 2x^2 - 6x - 5 \\)',
                    'c' => '\\(f(x) = -2x^2 - 6x - 5 \\)',
                    'd' => '\\(f(x) = x^2 - 6x + 5 \\)',
                ],
                'correct_answer' => 'd',
            ],
            [
                'id' => 11,
                'question' => 'Persamaan fungsi kuadrat yang melalui titik-titik (0, 0), (4, 0), dan (1, 2) adalah ....',
                'options' => [
                    'a' => '\\(f(x) = \\frac{2}{3}x^2 - \\frac{8}{3}x \\)',
                    'b' => '\\(f(x) = \\frac{-2}{3}x^2 - \\frac{8}{3}x \\)',
                    'c' => '\\(f(x) = \\frac{-2}{3}x^2 + \\frac{8}{3}x \\)',
                    'd' => '\\(f(x) = \\frac{2}{3}x^2 + \\frac{8}{3}x \\)',
                ],
                'correct_answer' => 'c',
            ],
            [
                'id' => 12,
                'question' => 'Diketahui fungsi kuadat \\(f(x) = 2x^2 - 8x + p \\) memiliki nilai minimum 20. Nilai \\(f(2) \\) adalah ....',
                'options' => [
                    'a' => '20',
                    'b' => '15',
                    'c' => '10',
                    'd' => '25',
                ],
                'correct_answer' => 'a',
            ],
            [
                'id' => 13,
                'question' => 'Ali mempunyai 36 m kawat berduri untuk membuat pagar berbentuk persegi panjang. Jika seluruh kawat digunakan untuk pagar, ukuran halaman agar luasnya maksimum dan luas maksimum yang dapat dibuat adalah ....',
                'options' => [
                    'a' => 'Ukuran pagar adalah 9 × 9 m, Luas maksimum adalah 81 m²',
                    'b' => 'Ukuran pagar adalah 9 × 9 m, Luas maksimum adalah 80 m²',
                    'c' => 'Ukuran pagar adalah 9 × 8 m, Luas maksimum adalah 72 m²',
                    'd' => 'Ukuran pagar adalah 9 × 6 m, Luas maksimum adalah 54 m²',
                ],
                'correct_answer' => 'a',
            ],
            [
                'id' => 14,
                'question' => 'Jumlah dua bilangan adalah 60 dan hasil kali keduanya adalah 875, kedua bilangan tersebut adalah ....',
                'options' => [
                    'a' => '32 atau 23',
                    'b' => '31 atau 24',
                    'c' => '31 atau 26',
                    'd' => '35 atau 25',
                ],
                'correct_answer' => 'd',
            ],
            [
                'id' => 15,
                'question' => 'Diketahui grafik fungsi kuadrat \\(f(x) = x^2 - 2x + p \\) melalui titik (0,0). Nilai \\(p \\) adalah ....',
                'options' => [
                    'a' => '-2',
                    'b' => '-1',
                    'c' => '0',
                    'd' => '1',
                ],
                'correct_answer' => 'c',
            ],
            [
                'id' => 16,
                'question' => 'Suatu perusahaan mengeluarkan biaya iklan sebesar \\( x \\) juta rupiah, dan keuntungannya dinyatakan dengan fungsi \\( p = 230 + 20x - 0.5x^2 \\). Pengeluaran iklan yang memberikan keuntungan maksimum adalah ....',
                'options' => [
                    'a' => '20 juta rupiah',
                    'b' => '21 juta rupiah',
                    'c' => '22 juta rupiah',
                    'd' => '23 juta rupiah',
                ],
                'correct_answer' => 'a',
            ],
            [
                'id' => 17,
                'question' => 'Diketahui fungsi kuadrat \( f(x)=ax^2+bx+c \) memiliki sifat-sifat berikut: parabola terbuka ke bawah, memotong sumbu \( y \) di titik (0,4), memiliki sumbu simetri \( x=2 \), dan menyinggung sumbu \( x \). Persamaan fungsi kuadrat yang memenuhi adalah ....',
                'options' => [
                    'a' => '\\( f(x)=−x^2 + 4x \\)',
                    'b' => '\\( f(x)=−x^2 + 4x − 4 \\)',
                    'c' => '\\( f(x)=x^2 − 4x +4 \\)',
                    'd' => '\\( f(x)=−2x^2 + 8x − 4 \\)',
                ],
                'correct_answer' => 'b',
            ],
            [
                'id' => 18,
                'question' => 'Suatu fungsi kuadrat memiliki titik puncak di \( (3,−4) \) dan melalui titik \( (1,4) \).Persamaan fungsi kuadrat tersebut adalah ....',
                'options' => [
                    'a' => '\\(f(x) = 2x^2 − 12x + 14 \\)',
                    'b' => '\\(f(x) = −2x^2 + 12x − 14 \\)',
                    'c' => '\\(f(x) = x^2 − 6x + 5 \\)',
                    'd' => '\\(f(x) = 2x^2 − 6x + 14 \\)',
                ],
                'correct_answer' => 'a',
            ],
            [
                'id' => 19,
                'question' => ' Sebuah taman berbentuk persegi panjang akan dibuat di tepi sungai sehingga hanya membutuhkan pagar pada tiga sisinya. Panjang pagar yang tersedia adalah 60 meter. Luas maksimum taman yang dapat dibuat adalah ....',
                'options' => [
                    'a' => '300 m²',
                    'b' => '400 m²',
                    'c' => '450 m²',
                    'd' => '600 m²',
                ],
                'correct_answer' => 'c',
            ],
            [
                'id' => 20,
                'question' => 'Sebuah perusahaan mencatat hubungan antara jumlah barang yang diproduksi \\(x\\) dan keuntungan yang diperoleh dengan fungsi \\(P(x) = -x^2 + 40x + 100\\). Seorang manajer memberikan empat pernyataan berikut:<br><br>
                (1) Keuntungan maksimum diperoleh saat memproduksi 10 barang.<br>
                (2) Keuntungan maksimum diperoleh saat memproduksi 20 barang.<br>
                (3) Keuntungan maksimum yang diperoleh adalah Rp500.<br>
                (4) Keuntungan maksimum yang diperoleh adalah Rp300.<br><br>
                Pernyataan yang benar adalah ....',
                'options' => [
                    'a' => '(1) dan (3)',
                    'b' => '(1) dan (4)',
                    'c' => '(2) dan (3)',
                    'd' => '(2) dan (4)',
                ],
                'correct_answer' => 'c',
            ],
            ],
        ],  
    ];

        // Ubah bagian ini di QuizSeeder.php
        foreach ($quizzes as $key => $data) {
            $quiz = \App\Models\Quiz::updateOrCreate(
                ['key' => $key], // Cari berdasarkan key ini
                ['title' => $data['title']] // Jika ada update judulnya, jika tidak ada buat baru
            );

            foreach ($data['questions'] as $index => $question) {
                \App\Models\QuizQuestion::updateOrCreate(
                    [
                        'quiz_id' => $quiz->id,
                        'question_number' => $index + 1
                    ],
                    [
                        'question' => $question['question'],
                        'option_a' => $question['options']['a'] ?? null,
                        'option_b' => $question['options']['b'] ?? null,
                        'option_c' => $question['options']['c'] ?? null,
                        'option_d' => $question['options']['d'] ?? null,
                        'correct_answer' => $question['correct_answer'],
                        'explanation' => $question['explanation'] ?? null,
                        'reinforcement' => $question['reinforcement'] ?? null,
                        'image' => $question['image'] ?? null,
                    ]
                );
            }
        }
    }    
}
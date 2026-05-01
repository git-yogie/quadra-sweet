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
                    'question' => 'Tentukan fungsi kuadrat berikut yang memiliki parabola terbuka ke atas!',
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
                    'question' => 'Tentukan fungsi kuadrat berikut yang memiliki parabola terbuka ke bawah!',
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
                    'question' => 'Tentukan fungsi kuadrat berikut yang memiliki nilai 𝑎 < 0 !',
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
                    'question' => ' Diketahui 𝑓(𝑥) = 2𝑥² + 5𝑥 + 1, tentukan koordinat titik potong grafik fungsi tersebut dengan sumbu 𝑦!',
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
                    'question' => 'Diketahui f(x) = x² - 4x + 3, tentukan koordinat titik puncaknya!',
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
                    'question' => 'Diketahui 𝑓(𝑥) = 4𝑥² + 11𝑥 − 7, tentukan berapa banyaknya titik potong grafik fungsi dengan sumbu \\(x \\)!',
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
                    'question' => 'Diketahui 𝑓(𝑥) = 4𝑥² + 4𝑥 + 5, tentukan berapa banyaknya titik potong grafik fungsi dengan sumbu \\(x \\)!',
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
                    'question' => 'Berapa jarak maksimum yang ditempuh oleh mobil dari tabel berikut?',
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
                    'question' => 'Berapa koordinat titik maksimum dan garis sumbu simetri dari tabel berikut?',
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
                    'question' => 'Berapakah nilai 𝑐 dari persamaan fungsi kuadrat 𝑓(𝑥) = 2𝑥² + 4𝑥 − 3?',
                    'options' => [
                        'a' => '2',
                        'b' => '-3',
                        'c' => '-4',
                        'd' => '4',
                    ],
                    'correct_answer' => 'b',
                ],
            ],
        ],
        'rekonstruksi' => [
            'title' => 'Rekonstruksi',
            'questions' => [
                [
                    'id' => 1,
                    'question' => 'Tentukan persamaan fungsi kuadrat yang grafiknya melalui titik-titik \( k(-2,0), l(0,4), m(1,5) \)!',
                    'options' => [
                        'a' => '\( f(x) = -\frac{1}{3}x^2 + \frac{4}{3}x + 4 \)',
                        'b' => '\( f(x) = -\frac{1}{3}x^2 - \frac{4}{3}x + 4 \)',
                        'c' => '\( f(x) = -\frac{1}{3}x^2 - \frac{4}{3}x - 4 \)',
                        'd' => '\( f(x) = \frac{1}{3}x^2 + \frac{4}{3}x + 4 \)',
                    ],
                    'correct_answer' => 'a',
                ],
                [
                    'id' => 2,
                    'question' => 'Tentukan persamaan fungsi kuadrat yang titik potongnya dengan sumbu \(x\) di \( A(4,0) \) dan \( B(-2,0) \) serta melalui titik \( (2, -8) \) adalah …',
                    'options' => [
                        'a' => '\( f(x) = -x^2 - 2x - 8 \)',
                        'b' => '\( f(x) = x^2 - 2x - 8 \)',
                        'c' => '\( f(x) = -x^2 + 2x - 8 \)',
                        'd' => '\( f(x) = x^2 - 2x + 8 \)',
                    ],
                    'correct_answer' => 'b',
                ],
                [
                    'id' => 3,
                    'question' => 'Fungsi kuadrat yang memiliki akar-akar kompleks \(3 + i\) dan \(3 - i\) adalah …',
                    'options' => [
                        'a' => '\( f(x) = x^2 - 6x - 10 \)',
                        'b' => '\( f(x) = -x^2 - 6x - 10 \)',
                        'c' => '\( f(x) = x^2 - 6x + 10 \)',
                        'd' => '\( f(x) = x^2 + 6x + 10 \)',
                    ],
                    'correct_answer' => 'c',
                ],
                [
                    'id' => 4,
                    'question' => 'Tentukan persamaan fungsi kuadrat yang melalui titik-titik (1,2), (0,3) dan (3,2)!',
                    'options' => [
                        'a' => '\( f(x) = -\frac{1}{3}x^2 + \frac{4}{3}x + 3 \)',
                        'b' => '\( f(x) = -\frac{1}{3}x^2 - \frac{4}{3}x + 3 \)',
                        'c' => '\( f(x) = -\frac{1}{3}x^2 - \frac{4}{3}x - 3 \)',
                        'd' => '\( f(x) = \frac{1}{3}x^2 - \frac{4}{3}x + 3 \)',
                    ],
                    'correct_answer' => 'd',
                ],
                [
                    'id' => 5,
                    'question' => 'Fungsi kuadrat yang memiliki nilai minimum \(-4\) pada \(x = 1\) dan melalui titik (0,0) adalah …',
                    'options' => [
                        'a' => '\( f(x) = 4x^2 - 8x \)',
                        'b' => '\( f(x) = -4x^2 - 8x \)',
                        'c' => '\( f(x) = x^2 - 8x \)',
                        'd' => '\( f(x) = x^2 + 8x \)',
                    ],
                    'correct_answer' => 'a',
                ],
                [
                    'id' => 6,
                    'question' => 'Persamaan fungsi kuadrat yang melalui sumbu \(x\) dari grafik di bawah ini adalah …',
                    'options' => [
                        'a' => '\( f(x) = x^2 - 8x + 4 \)',
                        'b' => '\( f(x) = -x^2 + 3x + 4 \)',
                        'c' => '\( f(x) = x^2 - 8x - 4 \)',
                        'd' => '\( f(x) = x^2 + 3x - 4 \)',
                    ],
                    'image' => 'assets/img/app/graph-rekon-2.png',
                    'correct_answer' => 'b',
                ],
                [
                    'id' => 7,
                    'question' => 'Persamaan fungsi kuadrat yang melalui sumbu \(x\) dari grafik di bawah ini adalah …',
                    'options' => [
                        'a' => '\( f(x) = 2x^2 + 6x + 4 \)',
                        'b' => '\( f(x) = -x^2 + 6x + 4 \)',
                        'c' => '\( f(x) = x^2 - 6x - 4 \)',
                        'd' => '\( f(x) = 2x^2 + 6x - 4 \)',
                    ],
                    'image' => 'assets/img/app/graph-rekon-3.png',
                    'correct_answer' => 'a',
                ],
                [
                    'id' => 8,
                    'question' => 'Persamaan fungsi kuadrat yang melalui sumbu \(x\) dari grafik di bawah ini adalah …',
                    'options' => [
                        'a' => '\( f(x) = 2x^2 - 6x + 4 \)',
                        'b' => '\( f(x) = -2x^2 + 4x + 6 \)',
                        'c' => '\( f(x) = 2x^2 - 4x - 6 \)',
                        'd' => '\( f(x) = 2x^2 + 4x - 6 \)',
                    ],
                    'image' => 'assets/img/app/graph-rekon-4.png',
                    'correct_answer' => 'd',
                ],
                [
                    'id' => 9,
                    'question' => 'Fungsi kuadrat dengan titik puncak (2,6) dan melalui titik (1,7) adalah …',
                    'options' => [
                        'a' => '\( f(x) = x^2 - 4x - 10 \)',
                        'b' => '\( f(x) = 2x^2 + 4x + 10 \)',
                        'c' => '\( f(x) = x^2 - 4x + 10 \)',
                        'd' => '\( f(x) = 2x^2 + 4x - 10 \)',
                    ],
                    'correct_answer' => 'c',
                ],
                [
                    'id' => 10,
                    'question' => 'Tentukan persamaan fungsi kuadrat dengan titik balik (2,-1), seperti pada gambar di bawah ini!',
                    'options' => [
                        'a' => '\( f(x) = x^2 - 4x - 3 \)',
                        'b' => '\( f(x) = -x^2 - 4x - 3 \)',
                        'c' => '\( f(x) = x^2 - 6x + 3 \)',
                        'd' => '\( f(x) = x^2 - 4x + 3 \)',
                    ],
                    'image' => 'assets/img/app/graph-rekon-5.png',
                    'correct_answer' => 'd',
                ],
            ],
        ],

        'masalah' => [
    'title' => 'Menyelesaikan Masalah',
    'questions' => [
        [
            'id' => 1,
            'question' => 'Seorang petani memiliki pagar sepanjang 6.000 m. Ia ingin membuat sebuah ladang yang berbentuk persegi panjang yang akan dibagi menjadi dua kapling sama besar, dengan pagar pembatas sejajar dengan salah satu sisi ladang. Berapakah luas maksimum ladang yang dapat dipagari oleh petani tersebut?',
            'options' => [
                'a' => '1.500.000 m²',
                'b' => '1.600.000 m²',
                'c' => '1.700.000 m²',
                'd' => '1.800.000 m²',
            ],
            'correct_answer' => 'a',
        ],
        [
            'id' => 2,
            'question' => 'Sebuah bola dilemparkan ke atas dari tanah dengan kecepatan tertentu sehingga ketinggiannya terhadap waktu (dalam detik), dinyatakan oleh fungsi \( h(t) = -5t^2 + 40t \). Tentukan ketinggian maksimum yang dicapai bola (dalam meter)!',
            'options' => [
                'a' => '80',
                'b' => '120',
                'c' => '180',
                'd' => '100',
            ],
            'correct_answer' => 'a',
        ],
        [
            'id' => 3,
            'question' => 'Sebuah kawat yang panjangnya 20 cm akan dibentuk menjadi persegi panjang. Tentukan ukuran persegi panjang tersebut agar luasnya maksimum, serta tentukan luas maksimumnya!',
            'options' => [
                'a' => '36 cm²',
                'b' => '25 cm²',
                'c' => '16 cm²',
                'd' => '49 cm²',
            ],
            'correct_answer' => 'b',
        ],
        [
            'id' => 4,
            'question' => 'Jika jumlah dua bilangan adalah 20 dan hasil kalinya 96. Tentukan bilangan-bilangan tersebut!',
            'options' => [
                'a' => '2 dan 6',
                'b' => '4 dan 8',
                'c' => '6 dan 10',
                'd' => '8 dan 12',
            ],
            'correct_answer' => 'b',
        ],
        [
            'id' => 5,
            'question' => 'Diketahui keliling suatu persegi panjang adalah 36 cm. Tentukan ukuran-ukuran persegi panjang tersebut agar luasnya maksimum!',
            'options' => [
                'a' => '15 cm',
                'b' => '3 cm',
                'c' => '12 cm',
                'd' => '9 cm',
            ],
            'correct_answer' => 'd',
        ],
        [
            'id' => 6,
            'question' => 'Pendapatan dari hasil penjualan barang dinyatakan sebagai fungsi jumlah barang yang diproduksi \(q\): \(P(q) = -20q^2 + 3000q\). Tentukan pendapatan maksimal (optimal) dan jumlah barang \(q\) yang menghasilkan pendapatan tersebut!',
            'options' => [
                'a' => 'Pendapatan maksimal: 114.500 dan Jumlah barang: 95 unit',
                'b' => 'Pendapatan maksimal: 113.500 dan Jumlah barang: 85 unit',
                'c' => 'Pendapatan maksimal: 112.500 dan Jumlah barang: 75 unit',
                'd' => 'Pendapatan maksimal: 111.500 dan Jumlah barang: 65 unit',
            ],
            'correct_answer' => 'c',
        ],
        [
            'id' => 7,
            'question' => 'Perhatikan gambar di bawah ini. Seorang petani ingin membuat pagar pembatas tanaman berbentuk dua petak persegi panjang yang berdampingan. Panjang kawat yang tersedia adalah 24 m. Berapakah luas maksimum ladang yang dapat dibuat petani?',
            'image' => 'assets/img/app/2box.png',
            'options' => [
                'a' => '48',
                'b' => '6',
                'c' => '24',
                'd' => '12',
            ],
            'correct_answer' => 'c',
        ],
        [
            'id' => 8,
            'question' => 'Panjang sisi miring suatu segitiga siku-siku adalah 13 cm. Jika selisih panjang sisi-sisi siku-sikunya adalah 5 cm. Tentukan luas segitiga tersebut!',
            'options' => [
                'a' => '33 cm²',
                'b' => '22 cm²',
                'c' => '44 cm²',
                'd' => '11 cm²',
            ],
            'correct_answer' => 'a',
        ],
        [
            'id' => 9,
            'question' => 'Misalkan \(x\) adalah pengeluaran untuk iklan (dalam juta rupiah) dan \(p\) adalah keuntungan yang diperolehnya. Diberikan, \( p = 230 + 20x - 0,5x^2 \). Berapa pengeluaran untuk iklan \( x \) yang memberikan keuntungan maksimum?',
            'options' => [
                'a' => '30 juta rupiah',
                'b' => '20 juta rupiah',
                'c' => '40 juta rupiah',
                'd' => '10 juta rupiah',
            ],
            'correct_answer' => 'b',
        ],
        [
            'id' => 10,
            'question' => 'Sebuah benda dilempar ke atas dari ketinggian 20 meter dengan kecepatan awal 10 m/s. Tinggi benda \(h(t)\) setelah \(t\) detik dinyatakan oleh persamaan \(h(t) = -5t^2 + 10t + 20\). Tentukan waktu yang dibutuhkan untuk mencapai ketinggian maksimum dan hitung ketinggian maksimum tersebut!',
            'options' => [
                'a' => 'Waktu: 3 detik, Tinggi: 35 m',
                'b' => 'Waktu: 2 detik, Tinggi: 35 m',
                'c' => 'Waktu: 1 detik, Tinggi: 25 m',
                'd' => 'Waktu: 2 detik, Tinggi: 25 m',
            ],
            'correct_answer' => 'd',
        ],
    ],
        ],
        'evaluasi' => [
        'title' => 'Evaluasi',
        'questions' => [
            [
                'id' => 1,
                'question' => 'Diketahui \\( f(x) = 3x^2 + 2x + 1 \\), tentukan titik potong dengan sumbu y!',
                'options' => [
                    'a' => '(0,1)',
                    'b' => '(1,0)',
                    'c' => '(0,2)',
                    'd' => '(-1,2)',
                ],
                'correct_answer' => 'a',
            ],
            [
                'id' => 2,
                'question' => 'Perhatikan gambar grafik fungsi kuadrat berikut! Fungsi \\( f(x) = ax^2 + bx + c \\) yang terbuka ke bawah dan memotong sumbu y di atas titik asal (0,0). Berdasarkan grafik tersebut, tanda dari nilai \\(a, b, c \\) yang benar adalah ...',
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
                'question' => 'Diketahui grafik fungsi kuadrat memiliki titik puncak (p, q) = (-2, -9). Tentukan koordinat titik potong grafik dengan sumbu \\( x \\)!',
                'options' => [
                    'a' => '(-8,0) dan (2,0)',
                    'b' => '(-7,0) dan (2,0)',
                    'c' => '(-6,0) dan (2,0)',
                    'd' => '(-5,0) dan (1,0)',
                ],
                'correct_answer' => 'c',
            ],
            [
                'id' => 4,
                'question' => 'Berikut ini yang merupakan fungsi kuadrat dengan parabola terbuka ke bawah adalah …',
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
                'question' => 'Berikut ini yang merupakan fungsi kuadrat dengan parabola terbuka ke atas adalah …',
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
                'question' => 'Diketahui grafik fungsi \\(y = (m - 2)x^2 + 4x + (m - 5) \\) menyinggung sumbu \\( x \\). Tentukan nilai m yang memenuhi!',
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
                'question' => 'Diketahui fungsi kuadrat \\(f (x) = (n - 3)x^2 + nx - 1 \\). Jika fungsi tersebut bernilai negatif, maka nilai n yang memenuhi adalah …',
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
                'question' => 'Persamaan grafik fungsi kuadrat yang menyinggung sumbu \\( x \\) di titik (2,0) dan melalui titik (0,-8) adalah…',
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
                'question' => 'Persamaan grafik fungsi kuadrat yang memiliki titik puncak di (4,4) dan melalui titik (0,-12) adalah …',
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
                'question' => 'Persamaan grafik fungsi kuadrat yang memotong sumbu x di titik (1,0) dan (5,0) serta melalui titik (0,5) adalah …',
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
                'question' => 'Persamaan fungsi kuadrat yang melalui titik-titik (0,0), (4,0), dan (1,2) adalah …',
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
                'question' => 'Diketahui fungsi kuadat \\(f(x) = 2x^2 - 8x + p \\) memiliki nilai minimum 20. Tentukan nilai \\(f(2) \\)!',
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
                'question' => 'Ali mempunyai 36 m kawat berduri untuk membuat pagar berbentuk persegi panjang. Jika seluruh kawat digunakan untuk pagar, tentukan ukuran halaman agar luasnya maksimum serta hitung luas maksimum yang dapat dibuat!',
                'options' => [
                    'a' => 'Ukuran pagar: 9 × 9 m, Luas maksimum: 81 m²',
                    'b' => 'Ukuran pagar: 9 × 9 m, Luas maksimum: 80 m²',
                    'c' => 'Ukuran pagar: 9 × 8 m, Luas maksimum: 72 m²',
                    'd' => 'Ukuran pagar: 9 × 6 m, Luas maksimum: 54 m²',
                ],
                'correct_answer' => 'a',
            ],
            [
                'id' => 14,
                'question' => 'Jumlah dua bilangan adalah 60 dan hasil kali keduanya adalah 875, tentukan kedua bilangan tersebut!',
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
                'question' => 'Diketahui grafik fungsi kuadrat \\(f(x) = x^2 - 2x + p \\) melalui titik (0,0). Tentukan nilai \\(p \\) !',
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
                'question' => 'Suatu perusahaan mengeluarkan biaya iklan sebesar \\( x \\) juta rupiah, dan keuntungannya dinyatakan dengan fungsi \\( p = 230 + 20x - 0.5x^2 \\). Tentukan pengeluaran iklan yang memberikan keuntungan maksimum!',
                'options' => [
                    'a' => '22 juta rupiah',
                    'b' => '21 juta rupiah',
                    'c' => '20 juta rupiah',
                    'd' => '23 juta rupiah',
                ],
                'correct_answer' => 'c',
            ],
            [
                'id' => 17,
                'question' => 'Sebuah peluru ditembakkan ke atas. Tinggi peluru \\( h \\) dalam meter setelah \\( t \\) detik dinyatakan dengan fungsi \\( h(t) = -5t^2 + 10t + 20 \\). Berapakah tinggi maksimum yang dapat dicapai peluru tersebut?',
                'options' => [
                    'a' => '35 m',
                    'b' => '25 m',
                    'c' => '30 m',
                    'd' => '15 m',
                ],
                'correct_answer' => 'b',
            ],
            [
                'id' => 18,
                'question' => 'Tentukan persamaan fungsi kuadrat yang memiliki titik puncak di (1,3) dan melalui titik (0,0)!',
                'options' => [
                    'a' => '\\(f(x) = -3x^2 + 6x \\)',
                    'b' => '\\(f(x) = 3x^2 + 6x \\)',
                    'c' => '\\(f(x) = x^2 + 3x \\)',
                    'd' => '\\(f(x) = -3x^2 + 6x + 3 \\)',
                ],
                'correct_answer' => 'a',
            ],
            [
                'id' => 19,
                'question' => 'Diketahui jumlah dua bilangan adalah 20. Jika selisih kuadrat bilangan tersebut adalah 128, tentukan kedua bilangan tersebut!',
                'options' => [
                    'a' => '13,2 dan 6,6',
                    'b' => '13,2 dan 6,7',
                    'c' => '13,2 dan 6,8',
                    'd' => '13,2 dan 6,9',
                ],
                'correct_answer' => 'c',
            ],
            [
                'id' => 20,
                'question' => 'Diketahui grafik fungsi kuadrat \\(f(x) = -x^2 + 2x + p \\) melalui titik (3,9). Tentukan nilai \\(p \\)!',
                'options' => [
                    'a' => '9',
                    'b' => '10',
                    'c' => '11',
                    'd' => '12',
                ],
                'correct_answer' => 'd',
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
                        'image' => $question['image'] ?? null,
                    ]
                );
            }
        }
    }
}

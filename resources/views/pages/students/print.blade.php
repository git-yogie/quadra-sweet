<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan_Nilai_Siswa_QuadraLearn</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body { font-family: 'Arial', sans-serif; background: #fff; color: #000; }
        .kop-surat { border-bottom: 3px double #000; padding-bottom: 10px; margin-bottom: 30px; }
        @media print {
            .no-print { display: none; }
            body { padding: 0; }
        }
    </style>
</head>
<body onload="window.print()">
    <div class="container my-4">
        <div class="kop-surat text-center">
            <h2>REKAPITULASI PROGRES DAN NILAI KUIS SISWA</h2>
            <h3>Aplikasi Media Pembelajaran Matematika (QuadraLearn)</h3>
            <p class="mb-0">Materi: Fungsi Kuadrat | Tanggal Cetak: {{ date('d-m-Y') }}</p>
        </div>

        <div class="mb-3 no-print">
            <button onclick="window.print()" class="btn btn-primary">Cetak Ulang</button>
            <button onclick="window.close()" class="btn btn-secondary">Tutup Halaman</button>
        </div>

        <table class="table table-bordered align-middle">
            <thead class="table-light text-center">
                <tr>
                    <th width="50px">No</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Progres Belajar</th>
                    <th>Kuis 1<br>(Karakteristik)</th>
                    <th>Kuis 2<br>(Rekonstruksi)</th>
                    <th>Kuis 3<br>(Masalah)</th>
                    <th>Evaluasi Akhir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $index => $item)
                @php
                    $progressData = $item->progress->first();
                    $progressPct = $progressData ? ($progressData->progress * 25) : 0;
                    if($progressPct > 100) $progressPct = 100;

                    // Menggunakan data relasi progress murni
                    $kuis1 = $item->studentQuizzes->where('quiz_key', 'karakteristik')->first()->score ?? '-';
                    $kuis2 = $item->studentQuizzes->where('quiz_key', 'rekonstruksi')->first()->score ?? '-';
                    $kuis3 = $item->studentQuizzes->where('quiz_key', 'masalah')->first()->score ?? '-';
                    $evaluasi = $item->studentQuizzes->where('quiz_key', 'evaluasi')->first()->score ?? '-';
                @endphp
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>{{ $item->nis }}</td>
                    <td><strong>{{ $item->name }}</strong></td>
                    <td class="text-center">{{ $progressPct }}%</td>
                    <td class="text-center">{{ $kuis1 }}</td>
                    <td class="text-center">{{ $kuis2 }}</td>
                    <td class="text-center">{{ $kuis3 }}</td>
                    <td class="text-center fw-bold">{{ $evaluasi }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
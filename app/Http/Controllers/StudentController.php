<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class StudentController extends Controller
{
    use \App\Trait\Paginate;
    use \App\Trait\Toast;

    // 1. Menampilkan Halaman Utama Guru (Menggunakan studentQuizzes asli)
    public function index(Request $request): View {
        $students = User::student()
            ->with(['progress', 'studentQuizzes']) // Memanggil relasi tabel baru Anda
            ->search($request->query('q'))
            ->render($this->pageSize);

        $data = [
            'items' => $students,
        ];

        return view('pages.students.index', $data);
    }

    // 2. Fitur Ekspor ke Excel Menggunakan Format Spreadsheet Asli
    public function exportExcel(Request $request) {
        $students = User::student()->with(['progress', 'studentQuizzes'])->get();

        // Nama file diatur menggunakan ekstensi .xls
        $filename = "Laporan_Nilai_Siswa_QuadraLearn.xls";

        // Atur Header agar browser mendownloadnya sebagai file Excel resmi
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
        header("Content-Disposition: attachment; filename=\"$filename\"");
        header("Pragma: no-cache");
        header("Expires: 0");

        // Membuat struktur tabel HTML yang otomatis dikonversi rapi oleh Excel
        echo '<table border="1">';
        echo '<thead>';
        echo '<tr>';
        echo '<th style="background-color: #4CAF50; color: white;">No</th>';
        echo '<th style="background-color: #4CAF50; color: white;">NIS</th>';
        echo '<th style="background-color: #4CAF50; color: white;">Nama Siswa</th>';
        echo '<th style="background-color: #4CAF50; color: white;">Progress Belajar</th>';
        echo '<th style="background-color: #4CAF50; color: white;">Kuis 1 (Karakteristik)</th>';
        echo '<th style="background-color: #4CAF50; color: white;">Kuis 2 (Rekonstruksi)</th>';
        echo '<th style="background-color: #4CAF50; color: white;">Kuis 3 (Masalah)</th>';
        echo '<th style="background-color: #4CAF50; color: white;">Evaluasi Akhir</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        foreach ($students as $index => $student) {
            $progressData = $student->progress->first();
            $progressPct = $progressData ? ($progressData->progress * 25) : 0;
            if($progressPct > 100) $progressPct = 100;

            $kuis1 = $student->studentQuizzes->where('quiz_key', 'karakteristik')->first()->score ?? '-';
            $kuis2 = $student->studentQuizzes->where('quiz_key', 'rekonstruksi')->first()->score ?? '-';
            $kuis3 = $student->studentQuizzes->where('quiz_key', 'masalah')->first()->score ?? '-';
            $evaluasi = $student->studentQuizzes->where('quiz_key', 'evaluasi')->first()->score ?? '-';

            echo '<tr>';
            echo '<td>' . ($index + 1) . '</td>';
            // Menambahkan tanda kutip tunggal agar NIS bertipe string dan angka nol (0) di depan NIS tidak hilang
            echo '<td style="vnd.ms-excel.numberformat:@">' . $student->nis . '</td>';
            echo '<td>' . $student->name . '</td>';
            echo '<td>' . $progressPct . '%</td>';
            echo '<td>' . $kuis1 . '</td>';
            echo '<td>' . $kuis2 . '</td>';
            echo '<td>' . $kuis3 . '</td>';
            echo '<td>' . $evaluasi . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
        exit;
    }

    // 3. Fitur Cetak PDF Data Asli
    public function exportPdf(): View {
        $data = [
            'items' => User::student()->with(['progress', 'studentQuizzes'])->get(),
        ];
        return view('pages.students.print', $data);
    }

    public function resetPassword(Request $request, string $nis): RedirectResponse {
        $student = User::student()->where('nis', $nis)->first();
        if (is_null($student)) {
            return back()->with($this->flashMessageKey, $this->errorToast('Siswa tidak ditemukan'));
        }
        $student->update(['password' => User::DEFAULT_PASSWORD]);

        return back()->with($this->flashMessageKey, $this->successToast("NIS. {$student->nis} telah mereset password!"));
    }

    public function destroy(Request $request, string $nis): RedirectResponse {
        $student = User::student()->where('nis', $nis)->first();
        if (is_null($student)) {
            return back()->with($this->flashMessageKey, $this->errorToast('Siswa tidak ditemukan'));
        }

        if ($student->avatar) {
            Storage::delete($student->avatar);
        }

        $student->delete();

        return back()->with($this->flashMessageKey, $this->successToast("NIS. {$student->nis} telah dihapus!"));
    }

    // =========================================================================
    // TAMBAHAN BARU: FUNGSI UNTUK MERESET NILAI KUIS DAN PROGRESS SISWA
    // =========================================================================
    public function resetQuiz(Request $request, string $nis): RedirectResponse {
        $student = User::student()->where('nis', $nis)->first();
        
        if (is_null($student)) {
            return back()->with($this->flashMessageKey, $this->errorToast('Siswa tidak ditemukan'));
        }

        // 1. Hapus semua rekaman nilai kuis milik siswa tersebut di database
        \App\Models\StudentQuiz::where('user_id', $student->id)->delete();

        // 2. Kembalikan progress belajarnya ke angka 0
        \App\Models\Progress::where('user_id', $student->id)->update(['progress' => 0]);

        return back()->with($this->flashMessageKey, $this->successToast("NIS. {$student->nis} telah mereset nilai kuis dan progres belajar!"));
    }
}
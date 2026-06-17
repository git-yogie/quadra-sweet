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

    // 2. Fitur Ekspor ke Excel Data Asli
    public function exportExcel(Request $request): StreamedResponse {
        $students = User::student()->with(['progress', 'studentQuizzes'])->get();

        $callback = function() use ($students) {
            $file = fopen('php://output', 'w');
            fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));

            fputcsv($file, [
                'No', 'NIS', 'Nama Siswa', 'Progress Belajar', 
                'Kuis 1 (Karakteristik)', 'Kuis 2 (Rekonstruksi)', 
                'Kuis 3 (Masalah)', 'Evaluasi Akhir'
            ], ';');

            foreach ($students as $index => $student) {
                $progressData = $student->progress->first();
                $progressPct = $progressData ? ($progressData->progress * 25) : 0;
                if($progressPct > 100) $progressPct = 100;

                // Mengambil nilai asli dari database student_quizzes Anda
                $kuis1 = $student->studentQuizzes->where('quiz_key', 'karakteristik')->first()->score ?? '-';
                $kuis2 = $student->studentQuizzes->where('quiz_key', 'rekonstruksi')->first()->score ?? '-';
                $kuis3 = $student->studentQuizzes->where('quiz_key', 'masalah')->first()->score ?? '-';
                $evaluasi = $student->studentQuizzes->where('quiz_key', 'evaluasi')->first()->score ?? '-';

                fputcsv($file, [
                    $index + 1,
                    $student->nis,
                    $student->name,
                    $progressPct . '%',
                    $kuis1,
                    $kuis2,
                    $kuis3,
                    $evaluasi
                ], ';');
            }

            fclose($file);
        };

        $headers = [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="Laporan_Nilai_Siswa_QuadraLearn.csv"',
        ];

        return response()->stream($callback, 200, $headers);
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
}
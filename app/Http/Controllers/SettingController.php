<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class SettingController extends Controller
{
    use \App\Trait\Toast;

    // Menampilkan halaman KKM
    public function index(): View
    {
        $setting = Setting::first();

        // Jika tabel masih kosong, buat data default
        if (!$setting) {
            $setting = Setting::create([
                'kkm_quiz1' => 75,
                'kkm_quiz2' => 75,
                'kkm_quiz3' => 75,
                'kkm_evaluasi' => 75,
            ]);
        }

        return view('pages.settings.kkm', compact('setting'));
    }

    // Menyimpan perubahan KKM
    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'kkm_quiz1' => 'required|integer|min:0|max:100',
            'kkm_quiz2' => 'required|integer|min:0|max:100',
            'kkm_quiz3' => 'required|integer|min:0|max:100',
            'kkm_evaluasi' => 'required|integer|min:0|max:100',
        ]);

        $setting = Setting::first();

        $setting->update($request->only([
            'kkm_quiz1',
            'kkm_quiz2',
            'kkm_quiz3',
            'kkm_evaluasi'
        ]));

        return back()->with(
            $this->flashMessageKey,
            $this->successToast('Nilai KKM berhasil diperbarui.')
        );
    }
}
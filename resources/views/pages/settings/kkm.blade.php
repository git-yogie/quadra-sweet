@extends('layouts.dashboard')

@section('content')
<h4 class="py-3 mb-4">Pengaturan Nilai KKM</h4>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Atur Nilai KKM</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('kkm.update') }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">KKM Kuis Karakteristik</label>
                    <input
                        type="number"
                        name="kkm_quiz1"
                        class="form-control"
                        value="{{ $setting->kkm_quiz1 }}"
                        min="0"
                        max="100">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">KKM Kuis Rekonstruksi</label>
                    <input
                        type="number"
                        name="kkm_quiz2"
                        class="form-control"
                        value="{{ $setting->kkm_quiz2 }}"
                        min="0"
                        max="100">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">KKM Kuis Masalah</label>
                    <input
                        type="number"
                        name="kkm_quiz3"
                        class="form-control"
                        value="{{ $setting->kkm_quiz3 }}"
                        min="0"
                        max="100">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">KKM Evaluasi</label>
                    <input
                        type="number"
                        name="kkm_evaluasi"
                        class="form-control"
                        value="{{ $setting->kkm_evaluasi }}"
                        min="0"
                        max="100">
                </div>

            </div>

            <button class="btn btn-primary">
                Simpan Perubahan
            </button>

        </form>
    </div>
</div>
@endsection
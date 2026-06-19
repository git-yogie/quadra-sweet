@extends('layouts.dashboard')

@section('content')
<h4 class="py-3 mb-4">Siswa</h4>

<div class="card">
    <div class="card-body">
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
            <form action="" class="flex-grow-1" style="max-width: 600px;">
                <div class="row g-2">
                    <div class="col-9 col-sm-10">
                        <div class="input-group input-group-merge">
                            <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                            <input value="{{ request()->query('q') ?? '' }}" type="text" class="form-control" placeholder="Cari..." aria-label="Cari..." name="q" aria-describedby="basic-addon-search31">
                        </div>
                    </div>
                    <div class="col-3 col-sm-2 d-grid">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </div>
            </form>

            <div class="d-flex gap-2">
                <a href="{{ route('students.export.excel') }}" class="btn btn-success">
                    <i class="bx bx-spreadsheet me-1"></i> Excel
                </a>
                <a href="{{ route('students.export.pdf') }}" target="_blank" class="btn btn-danger">
                    <i class="bx bx-file me-1"></i> PDF / Cetak
                </a>
            </div>
        </div>
    </div>

    <div class="table-responsive text-nowrap">
      <table class="table table-hover align-middle">
        <thead>
          <tr>
            <th>Nama</th>
            <th class="text-center">Progres Belajar</th>
            <th class="text-center">Kuis 1<br><small>(Karakteristik)</small></th>
            <th class="text-center">Kuis 2<br><small>(Rekonstruksi)</small></th>
            <th class="text-center">Kuis 3<br><small>(Masalah)</small></th>
            <th class="text-center">Evaluasi Akhir</th>
            <th width="75px">Aksi</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($items as $item)
            @php
                // Mengambil data progress pertama untuk persentase bar
                $progressData = $item->progress->first();
                $progressPct = $progressData ? ($progressData->progress * 25) : 0;
                if($progressPct > 100) $progressPct = 100;

                // Membaca skor nilai kuis langsung dari koleksi tabel progress siswa
                $kuis1 = $item->studentQuizzes->where('quiz_key', 'karakteristik')->first()->score ?? '-';
                $kuis2 = $item->studentQuizzes->where('quiz_key', 'rekonstruksi')->first()->score ?? '-';
                $kuis3 = $item->studentQuizzes->where('quiz_key', 'masalah')->first()->score ?? '-';
                $evaluasi = $item->studentQuizzes->where('quiz_key', 'evaluasi')->first()->score ?? '-';
            @endphp
            <tr>
                <td>
                    <b>{{ $item->name }}</b>
                    <div><small class="text-muted">NIS. {{ $item->nis }}</small></div>
                </td>
                <td>
                    <div class="d-flex align-items-center gap-2" style="min-width: 150px;">
                        <div class="progress flex-grow-1" style="height: 12px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: {{ $progressPct }}%" aria-valuenow="{{ $progressPct }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="fw-semibold">{{ $progressPct }}%</small>
                    </div>
                </td>
                <td class="text-center fw-bold text-secondary">{{ $kuis1 }}</td>
                <td class="text-center fw-bold text-secondary">{{ $kuis2 }}</td>
                <td class="text-center fw-bold text-secondary">{{ $kuis3 }}</td>
                <td class="text-center fw-bold text-primary">{{ $evaluasi }}</td>
                <td>
                <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                        <form action="{{ route('students.reset-password', $item->nis) }}" method="post" onsubmit="return confirmSubmit(event, this)">
                            @csrf
                            @method('PATCH')
                            <button class="dropdown-item" type="submit"><i class="bx bx-reset me-1"></i> Reset Password</button>
                        </form>
                        
                        <form action="{{ route('students.reset-quiz', $item->nis) }}" method="post" onsubmit="return confirmSubmit(event, this)">
                            @csrf
                            @method('DELETE')
                            <button class="dropdown-item" type="submit"><i class="bx bx-refresh me-1"></i> Reset Nilai Kuis</button>
                        </form>
                        
                        <form action="{{ route('students.destroy', $item->nis) }}" method="post" onsubmit="return confirmSubmit(event, this)">
                            @csrf
                            @method('DELETE')
                            <button class="dropdown-item" type="submit"><i class="bx bx-trash me-1"></i> Hapus</button>
                        </form>
                    </div>
                </div>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <div class="card-footer pb-0">
        {!! $items->links() !!}
    </div>
</div>
@endsection
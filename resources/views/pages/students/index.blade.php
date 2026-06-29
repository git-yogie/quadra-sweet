@extends('layouts.dashboard')

@section('content')
<h4 class="py-3 mb-4">Siswa</h4>

<div class="card">
    <div class="card-body">
        <div class="d-flex flex-wrap justify-content-end align-items-center gap-3 mb-3">
            <div>
                <select id="filterKelas" class="form-select">
                    <option value="">Semua Kelas</option>
                    <option value="XA">XA</option>
                    <option value="XB">XB</option>
                    <option value="XC">XC</option>
                </select>
            </div>
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

    <div class="table-responsive text-nowrap px-4 pb-4">
      <table id="tabelSiswa" class="table table-hover align-middle" style="width:100%">
        <thead>
          <tr>
            <th>Nama / NIS</th>
            <th class="text-center">Kelas</th>
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
                $progressData = $item->progress->first();
                $progressPct = $progressData ? ($progressData->progress * 25) : 0;
                if($progressPct > 100) $progressPct = 100;

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
                <td class="text-center">
                    <span class="badge bg-label-primary">
                        {{ $item->kelas ?? '-' }}
                    </span>
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
                        
                        <button
                            type="button"
                            class="dropdown-item"
                            data-bs-toggle="modal"
                            data-bs-target="#kelasModal{{ $item->id }}">
                            <i class="bx bx-book me-1"></i> Ubah Kelas
                        </button>

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
</div>
@foreach($items as $item)
<div class="modal fade" id="kelasModal{{ $item->id }}" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('students.update-class', $item->nis) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">
                        Ubah Kelas
                    </h5>

                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">
                            Nama Siswa
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            value="{{ $item->name }}"
                            readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            NIS
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            value="{{ $item->nis }}"
                            readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Kelas
                        </label>

                        <select
                            class="form-select"
                            name="kelas"
                            required>

                            <option value="XA"
                                {{ $item->kelas=='XA' ? 'selected' : '' }}>
                                XA
                            </option>

                            <option value="XB"
                                {{ $item->kelas=='XB' ? 'selected' : '' }}>
                                XB
                            </option>

                            <option value="XC"
                                {{ $item->kelas=='XC' ? 'selected' : '' }}>
                                XC
                            </option>

                        </select>

                    </div>

                </div>

                <div class="modal-footer">

                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">
                        Batal
                    </button>

                    <button
                        class="btn btn-primary"
                        type="submit">
                        Simpan
                    </button>

                </div>

            </div>

        </form>
    </div>
</div>
@endforeach
@endsection

@push('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <style>
        /* Mengatur tata letak komponen: Searching ke KIRI, Tampilkan Entri ke KANAN */
        .dataTables_wrapper .dataTables_filter {
            margin-bottom: 20px;
            float: left !important;
            text-align: left;
        }
        .dataTables_wrapper .dataTables_length {
            margin-bottom: 20px;
            float: right !important;
            text-align: right;
        }
        .dataTables_wrapper .dataTables_info {
            padding-top: 15px;
            float: left;
        }
        .dataTables_wrapper .dataTables_paginate {
            padding-top: 15px;
            float: right;
        }
        .page-item.active .page-link {
            background-color: #696cff !important; 
            border-color: #696cff !important;
            color: #fff !important;
        }
    </style>
@endpush

@push('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#tabelSiswa').DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.13.6/i18n/id.json"
                },
                // f (filter/searching) diposisikan di kiri, l (length menu) diposisikan di kanan
                "dom": "<'row'<'col-sm-12 col-md-6'f><'col-sm-12 col-md-6'l>>" +
                       "<'row'<'col-sm-12'tr>>" +
                       "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                
                "pageLength": 5, // Mengunci tampilan data default dimulai dari 5 baris
                "lengthMenu": [5, 10, 25, 50, 100], // Menampilkan pilihan menu dropdown dari angka 5
                "order": [],
                "ordering": true,   
                "searching": true,  
                "columnDefs": [
                    { "orderable": false, "targets": 7 } 
                ]
            });
            $('#filterKelas').on('change', function () {

                table.column(1).search($(this).val()).draw();

            });
        });
        
    </script>
@endpush
@extends('layouts.dashboard')

@section('content')

@if(session('success'))
<script>
document.addEventListener('DOMContentLoaded', function () {
    Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: '{{ session("success") }}',
        timer: 1800,
        showConfirmButton: false
    });
});
</script>
@endif

<h4 class="mb-4">
    Bank Soal
</h4>

<div class="card">
    <div class="card-body">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>Bank Soal</h4>

            <a href="{{ route('bank-soal.create') }}" class="btn btn-primary">
                <i class="bx bx-plus"></i> Tambah Soal
            </a>
        </div>

        <form method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari soal..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary">
                    <i class="bx bx-search"></i>
                </button>
                <a href="{{ route('bank-soal.index') }}" class="btn btn-secondary">
                    Reset
                </a>
            </div>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kuis</th>
                    <th>No Soal</th>
                    <th>Pertanyaan</th>
                    <th>Gambar</th>
                    <th>Jawaban</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>

            <tbody>

                @forelse($questions as $question)

                <tr>

                    <td>{{ $questions->firstItem() + $loop->index }}</td>

                    <td>{{ $question->quiz->title }}</td>

                    <td>{{ $question->question_number }}</td>

                    <td>{!! Str::limit(strip_tags($question->question), 100) !!}</td>

                    <td>
                        @if($question->image)
                            <span class="badge bg-primary">Ada</span>
                        @else
                            <span class="badge bg-secondary">Tidak</span>
                        @endif
                    </td>

                    <td>
                        <span class="badge bg-success">
                            {{ strtoupper($question->correct_answer) }}
                        </span>
                    </td>

                    <td class="d-flex gap-2">

                        <a href="{{ route('bank-soal.edit', $question->id) }}"
                            class="btn btn-warning btn-sm"
                            title="Edit Soal">
                            <i class="bx bx-edit"></i>
                        </a>

                        <form id="delete-form-{{ $question->id }}"
                            action="{{ route('bank-soal.destroy', $question->id) }}"
                            method="POST"
                            class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button type="button"
                                    class="btn btn-danger btn-sm"
                                    title="Hapus Soal"
                                    onclick="confirmDelete({{ $question->id }})">

                                <i class="bx bx-trash"></i>

                            </button>

                        </form>

                    </td>

                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center text-muted">
                        Belum ada data soal.
                    </td>
                </tr>
                @endforelse

            </tbody>

        </table>

        {{ $questions->links() }}

    </div>
</div>

<script>
function confirmDelete(id) {

    Swal.fire({
        title: 'Hapus Soal?',
        text: "Data yang sudah dihapus tidak dapat dikembalikan.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Ya, Hapus',
        cancelButtonText: 'Batal'
    }).then((result) => {

        if (result.isConfirmed) {
            document.getElementById('delete-form-' + id).submit();
        }

    });

}
</script>
@endsection
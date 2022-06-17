@extends('backend.layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection
@section('content')

<x-card title="Siswa">

    @slot('breadcrumbs')
    <ol class="breadcrumb float-left mt-2">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Soal</li>
    </ol>
    @endslot

    <div style="height: 20px;"></div>
    <form action="" method="post">
        @csrf
    @foreach ($soals as $soal)
        <strong>{{ $loop->iteration.')' }}</strong>
        @if ($soal->gambar != Null)
            <div>
                <img src="{{ asset('soal/'.$soal->gambar) }}" class="img-fluid" style="max-width: 200px" alt="">
            </div>
        @endif
        <p>{!! $soal->pertanyaan !!}</p>     
        <fieldset id="group2">
            <div class="d-flex mb-2">
                <input type="radio" value="opsi_a" name="jawab_{{ $soal->id }}" id="jawab_opsi_a_{{ $soal->id }}" > 
                <label class="font-weight-light" for="jawab_opsi_a_{{ $soal->id }}">A. {{$soal->opsi_a}}</label>
            </div>
            <div class="d-flex mb-2">
                <input type="radio" value="opsi_b" name="jawab_{{ $soal->id }}" id="jawab_opsi_b_{{ $soal->id }}" > 
                <label class="font-weight-light" for="jawab_opsi_b_{{ $soal->id }}">B. {{$soal->opsi_b}}</label>
            </div>
            <div class="d-flex mb-2">
                <input type="radio" value="opsi_c" name="jawab_{{ $soal->id }}" id="jawab_opsi_c_{{ $soal->id }}" > 
                <label class="font-weight-light" for="jawab_opsi_c_{{ $soal->id }}">C. {{$soal->opsi_c}}</label>
            </div>
            <div class="d-flex mb-2">
                <input type="radio" value="opsi_d" name="jawab_{{ $soal->id }}" id="jawab_opsi_d_{{ $soal->id }}" > 
                <label class="font-weight-light" for="jawab_opsi_d_{{ $soal->id }}">D. {{$soal->opsi_d}}</label>
            </div>
        </fieldset>
        <hr> 
    @endforeach

    <div class="col-md-12 text-right">
        <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah anda Yakin ?')">Submit Jawaban</button>
    </div>
    </form>

</x-card>

<form action="" id="removeBtnForm" method="post">
    @csrf
    @method('delete')
</form>

@endsection

@section('css-top')
    {{-- dashboard/assets/libs/datatables/dataTables.bootstrap4.css --}}
@endsection

@section('js')
    <!-- third party js -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
        $('.removeBtn').on('click', function(){
            let form = $('#removeBtnForm');
            let action = $(this).data('url');
            form.attr('action', action);
            form.submit();
        });
        $("#datatable").DataTable();
    </script>
@endsection

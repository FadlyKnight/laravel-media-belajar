@extends('backend.layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection
@section('content')

<div class="d-flex overflow-auto">
    @forelse ($nilais as $nilai)
    @php
        $total_nilai = $nilai->total_nilai;
        $total_soal = $nilai->total_benar + $nilai->total_salah + $nilai->total_tidak_jawab;
    @endphp
    <div class="col-xl-3 col-md-6">
        <div class="card-box mb-1 ">

            <h4 class="header-title mt-0 mb-4">Test ke #{{ $loop->iteration }}</h4>

            <div class="widget-chart-1">
                <div class="widget-chart-box-1 float-left" dir="ltr">
                    <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#10c469"
                           data-bgColor="rgb(148, 204, 149)" value="{{ $total_nilai }}"
                           data-skin="tron" data-angleoffset="180" data-max="{{ ($total_soal*10) }}" data-readOnly=true
                           data-thickness=".15"/>
                </div>

                <div class="widget-detail-1 text-right">
                    <h2 class="font-weight-normal pt-2 mb-3"> {{ $nilai->total_benar }} / {{ $total_soal }}</h2>
                </div>
            </div>
            <br>
            <div>
                <small class="text-muted mb-1 d-block">Jumlah Benar : {{ $nilai->total_benar }}</small>
                <small class="text-muted mb-1 d-block">Jumlah Salah : {{ $nilai->total_salah }}</small>
                <small class="text-muted mb-1 d-block">Jumlah Tidak Jawab : {{ $nilai->total_tidak_jawab }}</small>
            </div>
        </div>
    </div>
    
    @empty
        
    <div class="col-md-12">
        <div class="alert alert-info">
            Anda Belum Mengerjakan Soal !
        </div>
    </div>
    @endforelse

</div>

<div class="row mt-3">
    <div class="col-md-5">
        <x-card title="Profil">
            <p> Nama : {{ $users->name }} </p>
            <p> Email : {{ $users->email }} </p>
        </x-card>
    </div>
</div>

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

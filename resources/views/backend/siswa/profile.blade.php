@extends('backend.layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection
@section('content')

<div class="row">
    @if(!$sudah_jawab)
    <div class="col-md-12">
        <div class="alert alert-info">
            Anda Belum Mengerjakan Soal !
        </div>
    </div>
    @endif
    <div class="col-xl-3 col-md-6">
        <div class="card-box">

            <h4 class="header-title mt-0 mb-4">Total Nilai</h4>

            <div class="widget-chart-1">
                <div class="widget-chart-box-1 float-left" dir="ltr">
                    <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#10c469"
                           data-bgColor="rgb(148, 204, 149)" value="{{ $total_nilai }}"
                           data-skin="tron" data-angleoffset="180" data-max="{{ ($total_soal*10) }}" data-readOnly=true
                           data-thickness=".15"/>
                </div>

                <div class="widget-detail-1 text-right">
                    <h2 class="font-weight-normal pt-2 mb-3"> {{ $total_nilai }} </h2>
                </div>
            </div>
        </div>

    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <div class="card-box">
            
            <h4 class="header-title mt-0 mb-4">Jawaban Benar</h4>
            <div class="widget-chart-1">
                <div class="widget-chart-box-2 float-left" dir="ltr">
                    <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="rgb(76, 83, 166)"
                            data-bgColor="rgb(152, 192, 226)" value="{{ $total_benar }}"
                            data-skin="tron" data-angleoffset="180" data-max="{{ $total_soal }}" data-readOnly=true
                            data-thickness=".15"/>
                </div>
                <div class="widget-detail-1 text-right">
                    <h2 class="font-weight-normal pt-2 mb-3"> {{ $total_benar }} </h2>
                </div>
            </div>
        </div>

    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <div class="card-box">
            
            <h4 class="header-title mt-0 mb-4">Jawaban Salah</h4>

            <div class="widget-chart-1">
                <div class="widget-chart-box-1 float-left" dir="ltr">
                    <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050"
                            data-bgColor="#F9B9B9" value="{{ $total_salah }}"
                            data-skin="tron" data-angleoffset="180" data-max="{{ $total_soal }}" data-readOnly=true
                            data-thickness=".15"/>
                </div>
                <div class="widget-detail-1 text-right">
                    <h2 class="font-weight-normal pt-2 mb-3"> {{ $total_salah }} </h2>
                </div>
            </div>
        </div>

    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <div class="card-box">
            
            <h4 class="header-title mt-0 mb-4">Tidak di Jawab</h4>

            <div class="widget-chart-1">
                <div class="widget-chart-box-1 float-left" dir="ltr">
                    <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#ffbd4a"
                            data-bgColor="#FFE6BA" value="{{ $total_tidak_jawab }}"
                            data-skin="tron" data-angleoffset="180" data-max="{{ $total_soal }}" data-readOnly=true
                            data-thickness=".15"/>
                </div>
                <div class="widget-detail-1 text-right">
                    <h2 class="font-weight-normal pt-2 mb-3"> {{ $total_tidak_jawab }} </h2>
                    {{-- <p class="text-muted mb-1">Revenue today</p> --}}
                </div>
            </div>
        </div>

    </div><!-- end col -->

</div>

<div class="row">
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

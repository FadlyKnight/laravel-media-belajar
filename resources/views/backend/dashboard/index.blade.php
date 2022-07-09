@extends('backend.layouts.app')
@section('css')
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> --}}
@endsection
@section('content')

<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-midnight-bloom">
            <div class="widget-content-wrapper d-flex text-white" style="flex: 1">
                <div class="widget-content-left">
                    <h4 class="widget-heading text-white">Total Materi</h4>
                    <div class="widget-subheading">Jumlah Materi Yang Dibuat</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>{{ $total_materi }}</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-arielle-smile">
            <div class="widget-content-wrapper d-flex text-white" style="flex: 1">
                <div class="widget-content-left">
                    <h4 class="widget-heading text-white">Total Soal</h4>
                    <div class="widget-subheading">Jumlah Soal yang dibuat</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>{{ $total_soal }}</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-grow-early">
            <div class="widget-content-wrapper d-flex text-white" style="flex: 1">
                <div class="widget-content-left">
                    <h4 class="widget-heading text-white">Total Siswa</h4>
                    <div class="widget-subheading">Jumlah siswa yang terdaftar</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>{{ $total_siswa }}</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-premium-dark">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Products Sold</div>
                    <div class="widget-subheading">Revenue streams</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-warning"><span>$14M</span></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <x-card title="Chart Nilai">
            <div id="nilai-chart"></div>
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

@push('script')
    <script>
        let dataSiswa = {!! $nilai_siswa->toJson() !!};
        
        let chartData = dataSiswa.map(function(s){
            return {
                y: s.name,
                p: s.nilai_siswa[0] != null ? s.nilai_siswa[0].total_nilai : 0
            }
        });
        Morris.Bar({
            element: 'nilai-chart',
            data: chartData,
            xkey: 'y',
            ykeys: ['p'],
            // ymax: 100,
            labels: ['Soal ke 1']
        });
    </script>
@endpush

@section('js')
    <!-- third party js -->
    {{-- <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> --}}
        <script src="{{ asset('dashboard/assets/libs/morris-js/morris.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/libs/raphael/raphael.min.js') }}"></script>

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
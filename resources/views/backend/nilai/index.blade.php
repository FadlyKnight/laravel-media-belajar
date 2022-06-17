@extends('backend.layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection
@section('content')

<x-card title="Soal">

    @slot('breadcrumbs')
    <ol class="breadcrumb float-left mt-2">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Soal</li>
    </ol>
    @endslot

    {{-- <a href="{{ route('manage.soal.create') }}" class="btn btn-primary">Tambah</a>
    <div style="height: 20px;"></div> --}}
    <table id="datatable" class="table table-bordered ">
        <thead>
        <tr>
            <th>#</th>
            @foreach ($head as $th)
            <th>{{ Str::ucfirst(str_replace('_id','',$th)) }}</th>
            @endforeach
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    @foreach ($head as $th)
                        @if (str_contains($th, '_id'))
                            @php
                                $replacer = str_replace('_id','',$th);
                            @endphp
                            <td>{{ $d->$replacer->name }}</td>
                        @else
                            <td>{{ Str::limit($d->$th, 40, '...') }}</td>
                        @endif
                    @endforeach
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" 
                                data-toggle="modal" 
                                data-target="#modalNilai"
                                data-siswa="{{ $d->siswa->toJson() }}"
                                data-total_nilai="{{ $d->total_nilai }}"
                                data-total_benar="{{ $d->total_benar }}"
                                data-total_salah="{{ $d->total_salah }}"
                                data-total_tidak_jawab="{{ $d->total_tidak_jawab }}"
                                data-history="{{ $d->history }}"
                                >
                          <i class="fa fa-eye" aria-hidden="true"></i>
                        </button>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-card>

<form action="" id="removeBtnForm" method="post">
    @csrf
    @method('delete')
</form>

@endsection

@section('css-top')
    <link href="{{ asset('dashboard/assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    {{-- dashboard/assets/libs/datatables/dataTables.bootstrap4.css --}}
@endsection

@section('js')
    <!-- third party js -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('dashboard/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>

    <!-- Modal -->
    <div class="modal fade" id="modalNilai" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title">Detail Nilai</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                <div class="modal-body">
                    <div class="container-fluid detail-nilai">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save</button> --}}
                </div>
            </div>
        </div>
    </div>
    
    <script>
        $('#modalNilai').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM
            let nDetailHtml = $('.detail-nilai');
            let siswa = button.data('siswa');
            let total_nilai = button.data('total_nilai');
            let total_benar = button.data('total_benar');
            let total_salah = button.data('total_salah');
            let total_tidak_jawab = button.data('total_tidak_jawab');
            let history = button.data('history');

            let setHtml = ``;

            setHtml += `<p><h5>${siswa.name} | ${siswa.email}</h5></p>`;
            setHtml += `<p> Total benar : ${total_benar}</p>`;
            setHtml += `<p> Total salah : ${total_salah}</p>`;
            setHtml += `<p> Total tidak jawab : ${total_tidak_jawab}</p>`;
            let table = 
                history.map(function(h,i){    
                    let jwb = '';
                    switch (h.jawaban) {
                        case '1':
                            jwb = '<span class="badge badge-success">Benar</span>';
                            break;
                        case '0':
                            jwb = '<span class="badge badge-danger">Salah</span>';
                            break;
                        case '-':
                            jwb = '<span class="badge badge-warning">Tidak Jawab</span>';
                            break;
                        default:
                            break;
                    }
                    return `<tr>
                        <td>${++i}</td>
                        <td>${jwb}</td>
                        </tr>`;
                }).join('');
            
            setHtml += `<table class="table-bordered table table-striped">
                            <thead>
                                <tr>
                                    <th>Soal</th>
                                    <th>Jawaban</th>    
                                </tr>
                            </thead>
                            <tbody>${table}</tbody>
                        </table>`

            nDetailHtml.html(setHtml);
            
        });
    </script>
    
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

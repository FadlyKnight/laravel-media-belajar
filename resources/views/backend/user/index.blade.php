@extends('backend.layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection
@section('content')

<x-card title="Pengguna">

    @slot('breadcrumbs')
    <ol class="breadcrumb float-left mt-2">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Pengguna</li>
    </ol>
    @endslot

    <a href="{{ route('manage.user.create') }}" class="btn btn-primary">Tambah</a>
    <div style="height: 20px;"></div>
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
                            <td>{{ $d->$th }}</td>
                        @endif
                    @endforeach
                    <td>
                        <a 
                            class="btn btn-warning"
                            href="{{ route('manage.user.edit', $d->id) }}">
                            <i class="fa fa-pencil-alt" aria-hidden="true"></i>
                        </a>
                        <a class="btn btn-danger removeBtn"
                            href="javascript:void(0)"
                            data-url="{{ route('manage.user.destroy', $d->id) }}"
                            >
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
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

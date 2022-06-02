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

    <a href="#" class="btn btn-primary">Create</a>
    <div style="height: 20px;"></div>
    <table id="datatable" class="table table-bordered ">
        <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</x-card>

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
        $("#datatable").DataTable();
    </script>
@endsection

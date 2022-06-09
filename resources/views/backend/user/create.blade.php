@extends('backend.layouts.app')
@section('css')
@endsection
@section('content')

<x-card title="Materi">

    @slot('breadcrumbs')
    <ol class="breadcrumb float-left mt-2">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('manage.user.index') }}">User</a></li>
        <li class="breadcrumb-item active">Tambah</li>
    </ol>
    @endslot

    <form action="{{ route('manage.user.store') }}" method="post" class="row" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control form-control-sm select2" name="role" id="role" required>
                    <option value="">-- Pilih Role --</option>
                    @foreach ($roles as $role )
                      <option value="{{ $role }}">{{ $role }}</option>                  
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-12 text-right">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </form>
</x-card>

@endsection

@section('css-top')
<link href="{{ asset('dashboard/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('dashboard/assets/libs/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css" />

{{-- 
<link href="{{ asset('dashboard/assets/libs/quill/quill.core.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('dashboard/assets/libs/quill/quill.bubble.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('dashboard/assets/libs/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" /> --}}

@endsection

@section('js')
<script src="{{ asset('dashboard/assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/dropify/dropify.min.js') }}"></script>

{{-- <script src="{{ asset('dashboard/assets/libs/quill/quill.min.js') }}"></script> --}}


<script>
    $('.select2').select2();
    $('.dropify').dropify();
    var form = $('form');
    form.on('submit', function(e){
        e.preventDefault();
        e.currentTarget.submit()
    });

</script>
@endsection

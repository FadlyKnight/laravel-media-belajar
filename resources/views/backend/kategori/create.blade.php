@extends('backend.layouts.app')
@section('css')
@endsection
@section('content')

<x-card title="Materi">

    @slot('breadcrumbs')
    <ol class="breadcrumb float-left mt-2">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('manage.kategori.index') }}">Kategori</a></li>
        <li class="breadcrumb-item active">Tambah</li>
    </ol>
    @endslot

    <form action="{{ route('manage.kategori.store') }}" method="post" class="row" enctype="multipart/form-data">
        @csrf
        {{-- <input type="hidden" name="guru_id" value="{{ auth()->id ?? '1' }}"> --}}
        <div class="col-md-6">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="" aria-describedby="helpId" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="parent_id">Parent Kategori (Optional)</label>
                <select class="form-control form-control-sm select2" name="parent_id" id="parent_id">
                    <option value="">-- Pilih Kategori Parent --</option>
                    @foreach ($parents as $item)
                      <option value="{{ $item->id }}">{{ $item->nama }}</option>                  
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

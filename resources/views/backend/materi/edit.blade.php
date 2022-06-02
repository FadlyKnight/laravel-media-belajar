@extends('backend.layouts.app')
@section('css')
@endsection
@section('content')

<x-card title="Materi">

    @slot('breadcrumbs')
    <ol class="breadcrumb float-left mt-2">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('manage.materi.index') }}">Materi</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
    @endslot

    <form action="{{ route('manage.materi.update', $materi) }}" method="post" class="row" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-md-6">

            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" value="{{ $materi->judul }}" class="form-control" placeholder="" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="kategori_id">Kategori</label>
              <select class="form-control form-control-sm select2" name="kategori_id" id="kategori_id" required>
                  <option value="">-- Pilih Katgeori --</option>
                  @foreach ($kategoris as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $materi->kategori_id ? 'selected' : '' }}>{{ $item->nama }}</option>                  
                  @endforeach
              </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="gambar"></label>
                <input type="file" class="form-control dropify"
                        name="gambar"
                        id="gambar"
                        aria-describedby="helpId"
                        placeholder="gambar" 
                        data-default-file="{{ asset($materi->gambar) }}"
                        >
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label for="konten">Konten</label>
                <input name="konten" type="hidden">
                <div class="form-control" id="konten" style="height: 300px;">{!! $materi->konten !!}</div>
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


<link href="{{ asset('dashboard/assets/libs/quill/quill.core.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('dashboard/assets/libs/quill/quill.bubble.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('dashboard/assets/libs/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('js')
<script src="{{ asset('dashboard/assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/dropify/dropify.min.js') }}"></script>

<script src="{{ asset('dashboard/assets/libs/quill/quill.min.js') }}"></script>


<script>
    $('.select2').select2();
    $('.dropify').dropify();
    // var quill= new Quill("#snow-editor",{theme:"snow",modules:{toolbar:[[{font:[]},{size:[]}],["bold","italic","underline","strike"],[{color:[]},{background:[]}],[{script:"super"},{script:"sub"}],[{header:[!1,1,2,3,4,5,6]},"blockquote","code-block"],[{list:"ordered"},{list:"bullet"},{indent:"-1"},{indent:"+1"}],["direction",{align:[]}],["link","image","video","formula"],["clean"]]}});
    quill=new Quill("#konten",{theme:"snow"});


    var form = $('form');

    form.on('submit', function(e){
        e.preventDefault();
        $('input[name=konten]').val(document.querySelector('#konten').children[0].innerHTML);
        e.currentTarget.submit()
    });

</script>
@endsection

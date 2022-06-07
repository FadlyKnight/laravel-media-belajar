@extends('backend.layouts.app')
@section('css')
@endsection
@section('content')

<x-card title="Soal">

    @slot('breadcrumbs')
    <ol class="breadcrumb float-left mt-2">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('manage.soal.index') }}">Soal</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
    @endslot

    <form action="{{ route('manage.soal.update', $soal) }}" method="post" class="row" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="col-12">
            <div class="form-group">
                <label for="pertanyaan">Pertanyaan</label>
                <input name="pertanyaan" type="hidden">
                <div class="form-control" id="pertanyaan" style="height: 300px;">{!! $soal->pertanyaan !!}</div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
              <label for="materi_id">Materi</label>
              <select class="form-control form-control-sm select2" name="materi_id" id="materi_id" required>
                  <option value="">-- Pilih Materi --</option>
                  @foreach ($materis as $item)
                    <option value="{{ $item->id }}" {{ $soal->materi_id == $item->id ? 'selected' : ''  }} >{{ $item->judul }}</option>                  
                  @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="kunci">Kunci</label>
              <select class="form-control form-control-sm select2" name="kunci" id="kunci" required>
                  <option value="">-- Pilih Kunci Jawaban--</option>
                  <option value="opsi_a" {{ $soal->kunci == "opsi_a" ? 'selected' : '' }}>A</option>
                  <option value="opsi_b" {{ $soal->kunci == "opsi_b" ? 'selected' : '' }}>B</option>
                  <option value="opsi_c" {{ $soal->kunci == "opsi_c" ? 'selected' : '' }}>C</option>
                  <option value="opsi_d" {{ $soal->kunci == "opsi_d" ? 'selected' : '' }}>D</option>
              </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="gambar">Gambar (optional)</label>
                <input type="file" class="form-control dropify" name="gambar" id="gambar" aria-describedby="helpId" placeholder="gambar" data-default-file="{{ asset($soal->gambar) }}">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
              <label for="opsi_a">Opsi A</label>
              <input type="text" name="opsi_a" value="{{ $soal->opsi_a }}" id="opsi_a" class="form-control" required aria-describedby="helpId">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="opsi_b">Opsi B</label>
              <input type="text" name="opsi_b" value="{{ $soal->opsi_b }}" id="opsi_b" class="form-control" required aria-describedby="helpId">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="opsi_c">Opsi C</label>
              <input type="text" name="opsi_c" value="{{ $soal->opsi_c }}" id="opsi_c" class="form-control" required aria-describedby="helpId">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="opsi_d">Opsi D</label>
              <input type="text" name="opsi_d" value="{{ $soal->opsi_d }}" id="opsi_d" class="form-control" required aria-describedby="helpId">
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
    quill=new Quill("#pertanyaan",{theme:"snow"});


    var form = $('form');

    form.on('submit', function(e){
        e.preventDefault();
        $('input[name=pertanyaan]').val(document.querySelector('#pertanyaan').children[0].innerHTML);
        e.currentTarget.submit()
    });

</script>
@endsection

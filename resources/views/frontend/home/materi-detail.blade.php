@extends('frontend.layouts.content')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>{{ Str::limit($materi->judul, 20, '...') }}</h2>
            <ol>
              <li><a href="/">Home</a></li>
              <li><a href="{{ route('home.materi', $materi->kategori_id) }}">{{ $materi->kategori->nama }}</a></li>
              <li>{{ Str::limit($materi->judul, 20, '...') }}</li>
            </ol>
          </div>
  
        </div>
      </div><!-- End Breadcrumbs -->
  
      <!-- ======= Blog Details Section ======= -->
      <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
  
          <div class="row g-5">
  
            <div class="col-lg-12">
  
              <article class="blog-details">
  
                <div class="post-img" style="text-align: center">
                  <img src="{{ asset($materi->gambar) }}" alt="" class="img-fluid" style="max-height: 500px">
                </div>
  
                @if ($materi->video != NULL)
                  <div class="w-100 my-3 mx-auto" style="max-width: 600px;">
                    <video controls class="w-100">
                      <source src="{{ asset($materi->video) }}" type="video/mp4">
                      Your browser does not support HTML video.
                    </video>
                  </div>
                @endif

                <h2 class="title">{{ $materi->judul }}</h2>
  
                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{ route('home.materi.slug', $materi->slug) }}">{{ $materi->guru->name }}</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ route('home.materi.slug', $materi->slug) }}">{{ date('d F Y', strtotime($materi->created_at)) }}</a></li>
                    {{-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="{{ route('home.materi.slug', $materi->slug) }}">12 Comments</a></li> --}}
                  </ul>
                </div><!-- End meta top -->
                <div class="content">
                    {!! $materi->konten !!}
                </div><!-- End meta bottom -->
  
              </article><!-- End blog post -->
  
            </div>
  
          </div>
  
        </div>
      </section><!-- End Blog Details Section -->

@endsection
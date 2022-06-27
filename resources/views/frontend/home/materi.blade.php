@extends('frontend.layouts.content')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>{{ $kategori->nama }}</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>{{ $kategori->nama }}</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-12">

            <div class="row gy-4 posts-list">
                @foreach ($materis as $materi)
                {{-- @dd($materi) --}}
                    <div class="col-lg-4">
                        <article class="d-flex flex-column">
                            <div class="post-img">
                                <img src="{{ asset($materi->gambar) }}" alt="" class="img-fluid">
                            </div>
            
                            <h2 class="title">
                                <a href="{{ route('home.materi.slug', $materi->slug) }}">{{ Str::limit($materi->judul, 40, '...') }}</a>
                            </h2>
            
                            <div class="meta-top">
                                <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{ route('home.materi.slug', $materi->slug) }}">{{ $materi->guru->name }}</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ route('home.materi.slug', $materi->slug) }}">{{ date('d F Y', strtotime($materi->created_at)) }}</a></li>
                                {{-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="{{ route('home.materi.slug', $materi->slug) }}">12 Comments</a></li> --}}
                                </ul>
                            </div>
            
                            <div class="content">
                                <p></p>
                                {{-- <p>{{ $materi->stor }}</p> --}}
                            </div>
            
                            <div class="read-more mt-auto align-self-end">
                                <a href="{{ route('home.materi.slug', $materi->slug) }}">Read More</a>
                            </div>
                        </article>
                    </div><!-- End post list item -->                    
                @endforeach


            </div><!-- End blog posts list -->

            {{-- <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div><!-- End blog pagination --> --}}

          </div>


        </div>

      </div>
    </section><!-- End Blog Section -->


@endsection
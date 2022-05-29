@extends('frontend.layouts.content')

@section('content')

<section id="background-carousal" class="background-carousal">
    <div class="row">
        <div class="col-12">

            <div class="img-area">

                <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner ml-lg-10 ">
                        <div class="carousel-item active">
                        </div>
                        <div class="carousel-item">
                        </div>
                        <div class="carousel-item">
                        </div>
                    </div>

                 </div>

                <div class="carousal-overlay">
                    <div class="main-content ">

                        <div class="social_icon">
                            <ul class="social-icon">
                                <li class="fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="twit"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="insta"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>

                        <div class="container">
                            <div class="row content-carousal">

                                <div class="col-sm-12 col-lg-6 d-flex justify-content-center align-items-center">
                                <div class="row margin-top-sm">

                                    <div class="col-6 mini-slider p-0">

                                        <div id="carouselExampleSlidesOnly" class="carousel slide image-div" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="{{ asset('front/img/box-img') }}-1.png" alt="First slide">
                                                </div>
                                                <div class="carousel-item animation1">
                                                    <img class="d-block w-100" src="{{ asset('front/img/box-img') }}-2.png" alt="Second slide">
                                                </div>
                                                <div class="carousel-item animation2">
                                                    <img class="d-block w-100" src="{{ asset('front/img/box-img') }}-3.png" alt="Second slide">
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-6 p-0">
                                        <a href="" class="text-decoration-none">
                                        <div class="custom-box bg-green-color">
                                            <div class="bg-study-icon">
                                                <i class="las la-school"></i>
                                            </div>
                                            <h1 class="box-text mb-sm-2 mt-sm-2 mb-md-3 mt-md-3 mb-lg-3 mt-lg-3">Check Latest Courses</h1>
                                            <div class="arrow-box">
                                                <i class="las la-arrow-right"></i>
                                            </div>
                                        </div>
                                        </a>

                                        <a href="" class="text-decoration-none">
                                        <div class="custom-box bg-blue-color">
                                            <div class="bg-campus-icon">
                                                <i class="las la-university"></i>
                                             </div>
                                            <h1 class="box-text">Want to know about Campus Life?</h1>
                                            <div class="arrow-box1">
                                                <i class="las la-arrow-right"></i>
                                            </div>
                                        </div>
                                        </a>
                                    </div>

                                </div>
                            </div>

                                <div class="col-sm-12 col-lg-6 d-flex justify-content-center align-items-center col-height text-left">
                                <div class="col-1 column-display"></div>

                                    <div class="detail-sec">
                                        <h1 class="main-heading">Education makes proper humanity.</h1>
                                        <p class="sub-heading margin-sub-heading">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua. Ut enim veniam, quis nostrud exercitation ullamco laboris nisi
                                        in voluptate velit esse cillum.</p>
                                        <a class="btn btn-primary rounded-pill green-btn">Read More</a>
                                     </div>
                            </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<section id="features">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-8 offset-lg-2 text-center">
                <h1 class="main-heading green-color">Campus<span class="blue-color"> Features</span></h1>
                <p class="sub-heading text-black">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut quis  in voluptate velit esse cillum.</p>
            </div>
        </div>

        <div class="row mt-4 feature-card">

            <div class="col-sm-12 col-md-6 col-lg-4 col-height-features">
                <div class="card box text-center">
                    <div class="card-body box__image">
                        <div class="feature-icon green-color">
                            <i class="las la-globe"></i>
                        </div>
                        <h2 class="card-title">Worldwide Recognize</h2>
                        <p class="card-text sub-heading">Lorem ipsum dolor sit amet, adipi elit et dolore magna, sed do incididunt</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 col-height-features">
                <div class="card box text-center">
                    <div class="card-body box__image">
                        <div class="feature-icon blue-color">
                            <i class="las la-gem"></i>
                        </div>
                        <h2 class="card-title">Top Ranking</h2>
                        <p class="card-text sub-heading">Lorem ipsum dolor sit amet, adipi elit et dolore magna, sed do incididunt</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 col-height-features">
                <div class="card box text-center">
                    <div class="card-body box__image">
                        <div class="feature-icon green-color">
                            <i class="las la-chalkboard-teacher"></i>
                        </div>
                        <h2 class="card-title">Best Teachers</h2>
                        <p class="card-text sub-heading">Lorem ipsum dolor sit amet, adipi elit et dolore magna, sed do incididunt</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 col-height-features">
                <div class="card box text-center">
                    <div class="card-body box__image">
                        <div class="feature-icon blue-color">
                            <i class="las la-book-open"></i>
                        </div>
                        <h2 class="card-title">Many Courses</h2>
                        <p class="card-text sub-heading">Lorem ipsum dolor sit amet, adipi elit et dolore magna, sed do incididunt</p>
                    </div>
                </div>
            </div>

            <div class=" col-sm-12 col-md-6 col-lg-4 col-height-features">
                <div class="card box text-center">
                    <div class="card-body box__image">
                        <div class="feature-icon green-color">
                            <i class="las la-graduation-cap"></i>
                        </div>
                        <h2 class="card-title">Scholarships</h2>
                        <p class="card-text sub-heading">Lorem ipsum dolor sit amet, adipi elit et dolore magna, sed do incididunt</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 col-height-features">
                <div class="card box text-center">
                    <div class="card-body box__image">
                        <div class="feature-icon blue-color">
                            <i class="las la-paper-plane"></i>
                        </div>
                        <h2 class="card-title">Events</h2>
                        <p class="card-text sub-heading">Lorem ipsum dolor sit amet, adipi elit et dolore magna, sed do incididunt</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="get-admission" class="bg-admission-img">

    <div class="overlay-admission"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="admission-text">
                        <p class="sub-heading text-white m-0">We Believe that education is for everyone.</p>
                        <h1 class="main-heading text-white mt-2 mb-4">Want To Get Enrolled!</h1>
                        <a class="btn btn-primary rounded-pill blue-btn"  data-toggle="modal" data-target=".modal">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
</section>

<section id="portfolio">
    <div class="container">

    <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">


        <div class="cbp-item">
            <div class="demo height2">
                <figure class="imghvr-blocks-rotate-right"><img class="img-responsive" src="{{ asset('front/img/portfolio1.png') }}" alt="">
                    <figcaption>
                        <p class="heart-icon"><i class="lni-heart"></i></p>
                        <p>Campus Life</p>
                        <a data-fancybox="gallery1" href="{{ asset('front/img/portfolio1.png') }}" ></a>
                    </figcaption>
                </figure>
            </div>
        </div>

        <div class="cbp-item">
            <div class="demo height2">
                <figure class="imghvr-blocks-rotate-right">  <img class="img-responsive" src="{{ asset('front/img/portfolio2.png') }}" alt="">

                    <figcaption>
                        <p>Campus Life</p>
                        <a data-fancybox="gallery1" href="{{ asset('front/img/portfolio2.png') }}" ></a>
                    </figcaption>
                </figure>
    </div>
        </div>

        <div class="cbp-item">
            <div class="cbp-caption-defaultWrap">
                    <img src="{{ asset('front/img/portfolio3.png') }}" alt="">
                </div>
                <div class="overlay-portfolio">
                    <div class="d-flex justify-content-center align-items-center text-center col-height-portfolio">
                        <div class="portfolio-content p-5">
                            <h1 class="main-heading text-white mt-2 mb-4">University Life</h1>
                            <p class="sub-heading text-white">Lorem ipsum dolor sit amet, sed do eiusmod tempor
                             aliqua. Ut quis  in  esse cillum.</p>
                         </div>
                    </div>
                </div>
        </div>

        <div class="cbp-item">
            <div class="demo height1">
                <figure class="imghvr-blocks-rotate-right"><img class="img-responsive" src="{{ asset('front/img/portfolio4.png') }}" alt="">

                    <figcaption>
                        <p class="heart-icon"><i class="lni-heart"></i></p>
                        <p>Campus Life</p>
                        <a data-fancybox="gallery1" href="{{ asset('front/img/portfolio4.png') }}" ></a>
                    </figcaption>
                </figure>
        </div>
        </div>

        <div class="cbp-item">
            <div class="demo">
                <figure class="imghvr-blocks-rotate-right"> <img class="img-responsive" src="{{ asset('front/img/portfolio5.png') }}" alt="">

                    <figcaption>
                        <p>Campus Life</p>
                        <a data-fancybox="gallery1" href="{{ asset('front/img/portfolio5.png') }}" ></a>
                    </figcaption>
                </figure>
            </div>
        </div>

        <div class="cbp-item">
            <div class="demo">
                <figure class="imghvr-blocks-rotate-right"><img class="img-responsive" src="{{ asset('front/img/portfolio6.png') }}" alt="">

                    <figcaption>
                        <p>Campus Life</p>
                        <a data-fancybox="gallery1" href="{{ asset('front/img/portfolio6.png') }}" ></a>
                    </figcaption>
                </figure>
            </div>
        </div>

        <div class="cbp-item">
            <div class="demo">
                <figure class="imghvr-blocks-rotate-right"> <img class="img-responsive" src="{{ asset('front/img/portfolio7.png') }}" alt="">

                    <figcaption>
                        <p>Campus Life</p>
                        <a data-fancybox="gallery1" href="{{ asset('front/img/portfolio7.png') }}" ></a>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
  </div>
</section>

<section id="teachers">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-lg-8 offset-lg-2 text-center mb-5">
                <h1 class="main-heading green-color">Faculty <span class="blue-color">Members</span> </h1>
                <p class="sub-heading text-black">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut quis  in voluptate velit esse cillum.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="ourteachers-slider" class="owl-carousel">

                    <div class="item">
                        <div class="team-box wow fadeInUp" data-wow-delay="300ms">
                            <div class="image">
                                <img src="{{ asset('front/img/teacher1.png') }}" alt="">
                            </div>
                            <div class="team-content gradient_bg whitecolor">
                                <h3 class="text-white">Elina Marie </h3>
                                <p class="mb-5 text-white">Language Teacher</p>
                                <div class="progress-bars">
                                    <div class="progress">
                                        <p class="text-white sub-heading">Loem ispum</p>
                                        <div class="progress-bar" data-value="90"><span>90%</span></div>
                                    </div>
                                    <div class="progress">
                                        <p class="text-white">Loem ispum</p>
                                        <div class="progress-bar" data-value="75"><span>75%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-box wow fadeInUp" data-wow-delay="350ms">
                            <div class="image">
                                <img src="{{ asset('front/img/teacher2.png') }}" alt="">
                            </div>
                            <div class="team-content gradient_bg_default whitecolor">
                                <h3 class="text-white">Jhony Walkin</h3>
                                <p class="text-white mb-5">Photograpy Teacher</p>
                                <div class="progress-bars">
                                    <div class="progress">
                                        <p class="text-white sub-heading">Loem ispum</p>
                                        <div class="progress-bar" data-value="75"><span>75%</span></div>
                                    </div>
                                    <div class="progress">
                                        <p class="text-white sub-heading">Loem ispum</p>
                                        <div class="progress-bar" data-value="90"><span>90%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-box wow fadeInUp" data-wow-delay="300ms">
                            <div class="image">
                                <img src="{{ asset('front/img/teacher3.png') }}" alt="">
                            </div>
                            <div class="team-content gradient_bg whitecolor">
                                <h3 class="text-white">Clair Daniel</h3>
                                <p class="text-white mb-5">Computer Teacher</p>
                                <div class="progress-bars">
                                    <div class="progress">
                                        <p class="text-white sub-heading">Loem ispum</p>
                                        <div class="progress-bar" data-value="90"><span>90%</span></div>
                                    </div>
                                    <div class="progress">
                                        <p class="text-white sub-heading">Loem ispum</p>
                                        <div class="progress-bar" data-value="75"><span>75%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-box wow fadeInUp" data-wow-delay="300ms">
                            <div class="image">
                                <img src="{{ asset('front/img/teacher1.png') }}" alt="">
                            </div>
                            <div class="team-content gradient_bg whitecolor">
                                <h3 class="text-white">Elina Marie</h3>
                                <p class="text-white mb-5">Sports Teacher</p>
                                <div class="progress-bars">
                                    <div class="progress">
                                        <p class="text-white sub-heading">Loem ispum</p>
                                        <div class="progress-bar" data-value="90"><span>90%</span></div>
                                    </div>
                                    <div class="progress">
                                        <p class="text-white sub-heading">Loem ispum</p>
                                        <div class="progress-bar" data-value="75"><span>75%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-box wow fadeInUp" data-wow-delay="350ms">
                            <div class="image">
                                <img src="{{ asset('front/img/teacher2.png') }}" alt="">
                            </div>
                            <div class="team-content gradient_bg_default whitecolor">
                                <h3 class="text-white">Johny Walkin</h3>
                                <p class="text-white mb-5">Science Teacher</p>
                                <div class="progress-bars">
                                    <div class="progress">
                                        <p class="text-white sub-heading">Loem ispum</p>
                                        <div class="progress-bar" data-value="75"><span>75%</span></div>
                                    </div>
                                    <div class="progress">
                                        <p class="text-white sub-heading">Loem ispum</p>
                                        <div class="progress-bar" data-value="90"><span>90%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-box wow fadeInUp" data-wow-delay="300ms">
                            <div class="image">
                                <img src="{{ asset('front/img/teacher3.png') }}" alt="">
                            </div>
                            <div class="team-content gradient_bg whitecolor">
                                <h3 class="text-white">Clair Daniel</h3>
                                <p class="text-white mb-5">Mathematics Teacher</p>
                                <div class="progress-bars">
                                    <div class="progress">
                                        <p class="text-white sub-heading">Loem ispum</p>
                                        <div class="progress-bar" data-value="90"><span>90%</span></div>
                                    </div>
                                    <div class="progress">
                                        <p class="text-white sub-heading">Loem ispum</p>
                                        <div class="progress-bar" data-value="75"><span>75%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<section id="testimonial" class="bg-testimonial-img">
    <div class="overlay-testimonial"></div>
        <div class="container testimonial-container">

            <div id="testimonial-carousal" class="owl-carousel owl-theme testimonial-owl pt-5 pb-5 text-center">

                <div class="item">
                    <div class="quotes">
                        <i class="las la-quote-left"></i>
                    </div>
                    <div class="student-img mt-2">
                        <img src="{{ asset('front/img/student1.png') }}" alt="student img">
                    </div>
                    <div class="student-tittle mt-3 mb-3">
                        <h3 class="blue-color mb-0">Jesicca Miller</h3>
                        <p class="font-italic green-color sub-heading"> English Literature</p>
                    </div>
                    <div class="description">
                        <p class="width-text text-black sub-heading">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim veniam,  velit esse cillum</p>
                    </div>
                </div>

                <div class="item">
                    <div class="quotes">
                        <i class="las la-quote-left"></i>
                    </div>
                    <div class="student-img mt-2">
                        <img src="{{ asset('front/img/student2.png') }}" alt="student img">
                    </div>
                    <div class="student-tittle mt-3 mb-3">
                        <h3 class="blue-color mb-0">Hanna John</h3>
                        <p class="font-italic green-color sub-heading">Computer Science</p>
                    </div>
                    <div class="description">
                        <p class="width-text text-black sub-heading">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim veniam,  velit esse cillum</p>
                    </div>
                </div>

                <div class="item">
                    <div class="quotes">
                        <i class="las la-quote-left"></i>
                    </div>
                    <div class="student-img mt-2">
                        <img src="{{ asset('front/img/student3.png') }}" alt="student img">
                    </div>
                    <div class="student-tittle mt-3 mb-3">
                        <h3 class="blue-color mb-0">Michel Clark</h3>
                        <p class="font-italic green-color sub-heading">Language</p>
                    </div>
                    <div class="description">
                        <p class="width-text text-black sub-heading">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim veniam,  velit esse cillum</p>
                    </div>
                </div>
        </div>
    </div>
</section>

<section id="blog">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-lg-8 offset-lg-2 text-center mb-5">
                <h1 class="main-heading green-color">University <span class="blue-color">Events</span> </h1>
                <p class="sub-heading text-black">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut quis  in voluptate velit esse cillum.</p>
            </div>
        </div>

        <div class="row">
             <div class="col-12">
                 <div class="owl-carousel owl-theme no-gutters" id="blog-carousal">

                     <div class="item blog-item">
                         <div class="blog-img">
                             <img src="{{ asset('front/img/blog3.png') }}" alt="blog img">
                         </div>

                         <div class="blog-text">
                             <div class="date">
                                 <p class="mb-0 text-black sub-heading">20 November 2019</p>
                             </div>
                             <div class="info-blog mb-3">
                                 <a href="{{ asset('front/blog.html"') }} class="text-decoration-none"><h4 class="blue-color mb-0 mt-1 hover-heading">Annual Festival</h4></a>
                                 <p class="green-color sub-heading">by John</p>
                             </div>
                             <div class="blog-description">
                                 <p class="sub-heading text-black">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut. Ut enim veniam,
                                     in voluptate velit esse cillum.</p>
                             </div>
                             <a href="{{ asset('front/blog.html"') }} class="btn btn-primary rounded-pill navbar-btn mt-4 ml-1">Read More</a>
                         </div>
                     </div>

                     <div class="item blog-item">
                         <div class="blog-img">
                             <img src="{{ asset('front/img/blog1.png') }}" alt="blog img">
                         </div>

                         <div class="blog-text">
                             <div class="date">
                                 <p class="mb-0 sub-heading text-black sub-heading">12 January 2020</p>
                             </div>
                             <div class="info-blog mb-3">
                                 <a href="{{ asset('front/blog.html"') }} class="text-decoration-none"><h4 class="blue-color mb-0 mt-1 hover-heading">Graduation Day</h4></a>
                                 <p class="green-color sub-heading">by Smith</p>
                             </div>
                             <div class="blog-description">
                                 <p class="sub-heading text-black">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut. Ut enim veniam,
                                     in voluptate velit esse cillum.</p>
                             </div>
                             <a href="{{ asset('front/blog.html"') }} class="btn btn-primary rounded-pill navbar-btn mt-4 ml-1">Read More</a>
                         </div>
                     </div>

                     <div class="item blog-item">
                         <div class="blog-img">
                             <img src="{{ asset('front/img/blog4.png') }}" alt="blog img">
                         </div>

                         <div class="blog-text">
                             <div class="date">
                                 <p class="mb-0 text-black sub-heading sub-heading">12 January 2019</p>
                             </div>
                             <div class="info-blog mb-3">
                                 <a href="{{ asset('front/blog.html"') }} class="text-decoration-none"><h4 class="blue-color mb-0 mt-1 hover-heading">Campus Life</h4></a>
                                 <p class="green-color sub-heading">by Herry</p>
                             </div>
                             <div class="blog-description">
                                 <p class="sub-heading text-black">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut. Ut enim veniam,
                                     in voluptate velit esse cillum.</p>
                             </div>
                             <a href="{{ asset('front/blog.html"') }} class="btn btn-primary rounded-pill navbar-btn mt-4 ml-1">Read More</a>
                         </div>
                     </div>

                     <div class="item blog-item">
                         <div class="blog-img">
                             <img src="{{ asset('front/img/blog3.png') }}" alt="blog img">
                         </div>

                         <div class="blog-text">
                             <div class="date">
                                 <p class="mb-0 text-black sub-heading">20 November 2019</p>
                             </div>
                             <div class="info-blog mb-3">
                                 <a href="{{ asset('front/blog.html"') }} class="text-decoration-none"><h4 class="blue-color mb-0 mt-1 hover-heading">Annual Festival</h4></a>
                                 <p class="green-color sub-heading">by John</p>
                             </div>
                             <div class="blog-description">
                                 <p class="sub-heading text-black">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut. Ut enim veniam,
                                     in voluptate velit esse cillum.</p>
                             </div>
                             <a href="{{ asset('front/blog.html"') }} class="btn btn-primary rounded-pill navbar-btn mt-4 ml-1">Read More</a>
                         </div>
                     </div>

                     <div class="item blog-item">
                         <div class="blog-img">
                             <img src="{{ asset('front/img/blog1.png') }}" alt="blog img">
                         </div>

                         <div class="blog-text">
                             <div class="date">
                                 <p class="mb-0 sub-heading text-black sub-heading">12 January 2020</p>
                             </div>
                             <div class="info-blog mb-3">
                                 <a href="{{ asset('front/blog.html"') }} class="text-decoration-none"><h4 class="blue-color mb-0 mt-1 hover-heading">Graduation Day</h4></a>
                                 <p class="green-color sub-heading">by Smith</p>
                             </div>
                             <div class="blog-description">
                                 <p class="sub-heading text-black">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut. Ut enim veniam,
                                     in voluptate velit esse cillum.</p>
                             </div>
                             <a href="{{ asset('front/blog.html"') }} class="btn btn-primary rounded-pill navbar-btn mt-4 ml-1">Read More</a>
                         </div>
                     </div>

                     <div class="item blog-item">
                         <div class="blog-img">
                             <img src="{{ asset('front/img/blog4.png') }}" alt="blog img">
                         </div>

                         <div class="blog-text">
                             <div class="date">
                                 <p class="mb-0 text-black sub-heading sub-heading">12 January 2019</p>
                             </div>
                             <div class="info-blog mb-3">
                                 <a href="{{ asset('front/blog.html"') }} class="text-decoration-none"><h4 class="blue-color mb-0 mt-1 hover-heading">Campus Life</h4></a>
                                 <p class="green-color sub-heading">by Herry</p>
                             </div>
                             <div class="blog-description">
                                 <p class="sub-heading text-black">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut. Ut enim veniam,
                                     in voluptate velit esse cillum.</p>
                             </div>
                             <a href="{{ asset('front/blog.html"') }} class="btn btn-primary rounded-pill navbar-btn mt-4 ml-1">Read More</a>
                         </div>
                     </div>


                </div>
             </div>
        </div>

    </div>
</section>


@endsection
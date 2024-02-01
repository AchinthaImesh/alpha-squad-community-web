@extends('layout')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero-blog" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">BLOG</h2>
                    <a href="/listings/create" class="btn-get-started animate__animated animate__fadeInUp scrollto">Create a
                        Post</a>
                </div>
            </div>

        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>
    </section><!-- End Hero -->

    <!-- ======= Lifestyle Category Section ======= -->
    <section class="category-section">
        <div class="container" data-aos="fade-up">
            <div class="row g-3">

                <div class="col-lg-12">
                    <div class="post-entry-1 lg"><br>
                        <h2>{{ $listing['title'] }}</h2><br>

                        <img src="{{ $listing->image ? asset('storage/' . $listing->image) : asset('assets-blog/img/post-landscape-7.jpg') }}"
                            alt="" class="img-fluid">
                        <div class="post-meta"><span class="date">{{ $listing['tags'] }}</span> <span
                                class="mx-1">&bullet;</span>
                            <span>{{ $listing['updated_at'] }}</span>
                        </div>
                        <br>

                        <p class="mb-4 d-block">{{ $listing['description'] }}</p>

                        <div class="d-flex align-items-center author">
                            <div class="photo"><img src="{{ asset('assets-blog/img/person-7.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="name">
                                <h3 class="m-0 p-0">{{ $listing['author'] }}</h3>
                                {{-- <h3 class="m-0 p-0">{{ auth()->user()->name }}</h3> --}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- End .row -->
    </section><!-- End Lifestyle Category Section -->
@endsection

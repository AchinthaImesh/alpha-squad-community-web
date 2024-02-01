@extends('layout')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero-blog" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">BLOG</h2>
                    {{-- <a href="/listings/create" class="btn-get-started animate__animated animate__fadeInUp scrollto">Create a
                        Post</a> --}}
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

    <main id="main">
        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Blog</h2>
                    <p>Create a Post</p>
                </div>

                <div class="row content" data-aos="fade-up">
                    <div class="col-lg-12">
                        <section id="contact" class="contact">
                            <div class="container">
                                <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

                                    <form method="POST" action="/listings" class="create-post php-email-form-n"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-6 form-group">
                                            <label for="author" class="form-label">Display Name</label>
                                            <input type="text" name="author" class="form-control" id="author"
                                                placeholder="Author Name" required>
                                            @error('author')
                                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 form-group mt-3 mt-md-0">
                                            <label for="tags" class="form-label">Tag</label>
                                            <input type="text" class="form-control" name="tags" id="tags"
                                                placeholder="Tag" required>
                                            @error('tags')
                                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" name="title" id="title"
                                                placeholder="Title" required>
                                            @error('title')
                                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="image" class="form-label">Image</label>
                                            <input class="form-control" type="file" id="image" name="image"
                                                required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control" name="description" rows="5" placeholder="Description" required></textarea>
                                            @error('description')
                                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="text-center">
                                            <button type="submit">Submit Post</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{-- <section class="category-section">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                <form action="">
                    <div class="mb-6">
                        <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company" />
                    </div>
                </form>
            </div>
        </div>
    </section> --}}
@endsection

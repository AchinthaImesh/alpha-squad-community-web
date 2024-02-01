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

    <main id="main">
        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Manage</h2>
                    <p>Manage your Posts</p>
                </div>

                <table class="w-full table-auto rounded-sm">
                    <tbody>

                        @unless($listings->isEmpty())
                            @foreach ($listings as $listing)
                                <tr class="border-gray-300 manage" style="height: 50px; font-size: 18px;">
                                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                        <a href="/listings/{{ $listing->id }}">
                                            {{ $listing->title }}
                                        </a>
                                    </td>
                                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                        <a href="/listings/{{ $listing->id }}/edit"
                                            class="text-blue-400 px-6 py-2 rounded-xl"><i class="fa-solid fa-pen-to-square"></i>
                                            {{-- <span style="padding: 5px"><i class="ri-edit-2-fill">&nbsp;&nbsp;Edit</i></span> --}}
                                            <button type="submit" class="edit"><i
                                                    class="ri-edit-2-fill"></i>&nbsp;&nbsp;Edit</button>
                                        </a>
                                    </td>
                                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                        <form method="POST" action="/listings/{{ $listing->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="delete"><i
                                                    class="ri-delete-bin-line"></i>&nbsp;&nbsp;DELETE
                                                POST</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="border-gray-300">
                                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    <p>No Listings Found!</p>
                                </td>
                            </tr>
                        @endunless

                    </tbody>
                </table>
            </div>
        </section>
    </main>
@endsection

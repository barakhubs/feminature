@extends('layouts.app')

@section('title', 'Our Gallery')

@section('content')

    <section class="page_title_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h2>Our Gallery</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Our Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="assets/images/slider/shape-5.png" alt="">
        </div>
    </section>

    <section class="gallery_section s4 section_space">
        <div class="container">
            <div class="row">
                <div class="top_title">
                    <div class="row">
                        <div class="col-12">
                            <h2>OUR GALLERY</h2>
                            <h3>Capturing Moments of Impact & Change</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                @foreach ($galleries as $item)
                    <div class="col col-lg-4 col-md-6 col-12 mb-1">
                        <div class="gallery-card">
                            <div class="image-wrapper">
                                <img src="{{ $item->image_url }}" alt="{{ $item->title }}">
                                <div class="hover-overlay">
                                    <i class="themify-icons ti-zoom-in" data-bs-toggle="modal"
                                        data-bs-target="#imageModal"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-image-container">
                            <img src="" alt="Gallery Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .gallery-card .image-wrapper {
                position: relative;
                overflow: hidden;
            }

            .gallery-card img {
                width: 100%;
                transition: transform 0.3s ease;
            }

            .hover-overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
                display: flex;
                justify-content: center;
                align-items: center;
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            .gallery-card:hover .hover-overlay {
                opacity: 1;
            }

            .gallery-card:hover img {
                transform: scale(1.1);
            }

            .themify-icons {
                color: white;
                font-size: 24px;
                cursor: pointer;
                padding: 15px;
                border: 2px solid white;
                border-radius: 50%;
                transition: all 0.3s ease;
            }

            .themify-icons:hover {
                background: white;
                color: #000;
            }

            /* Modal Styles */
            .modal-dialog.modal-xl {
                max-width: 90vw;
                margin: 1.75rem auto;
            }

            .modal-content {
                background-color: transparent;
                border: none;
            }

            .modal-header {
                border-bottom: none;
                position: absolute;
                right: 0;
                z-index: 1;
            }

            .btn-close {
                background-color: #ff8c00;
                opacity: 1;
                margin: 1rem;
            }

            .modal-body {
                padding: 0;
            }

            .modal-image-container {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 80vh;
                background-color: rgba(0, 0, 0, 0.5);
            }

            .modal-image-container img {
                max-height: 90vh;
                width: auto;
                object-fit: contain;
            }
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const galleryImages = document.querySelectorAll('.gallery-card img');
                const modalImage = document.querySelector('#imageModal .modal-image-container img');

                galleryImages.forEach(img => {
                    const zoomIcon = img.parentElement.querySelector('.ti-zoom-in');
                    zoomIcon.addEventListener('click', function() {
                        modalImage.src = img.src;
                    });
                });
            });
        </script>
    @endsection

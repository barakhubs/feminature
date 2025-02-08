@extends('layouts.app')

@section('title', 'Publications')

@section('content')
    <!--  page_title_section  start-->
    <section class="page_title_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h2>Publications</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Publications</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="{{ asset('assets/images/slider/shape-5.png') }}" alt="">
        </div>
    </section>

    <section class="blog_section_s2 section_space">
        <div class="container">
            <div class="row">
                <div class="top_title">
                    <div class="row">
                        <div class="col-12">
                            <h2>PUBLICATIONS</h2>
                            <h3>Explore Our Reports and Publications</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($publications as $item)
                    <div class="col col-lg-6 col-md-6 col-12">
                        <div class="blog-card">
                            <div class="" style="margin: 10px">
                                <canvas id="pdf-canvas-{{ $item->id }}" style="width: 230px; height: 247px; border: 1px solid #ccc;"></canvas>
                            </div>
                            <div class="content">
                                <h2><a href="{{ $item->file_path }}">{{ \Str::limit($item->title, 50, '...') }}</a></h2>
                                <span><strong>Date:</strong> {{ date('d M, Y', strtotime($item->published_at)) }}</span><br>
                                <span><strong>Type:</strong> pdf</span><br><br>
                                <a href="{{ $item->file_path }}" download="{{ $item->file_path }}" target="_blank"><span><i
                                            class="ti-download"></i>&nbsp; Download</span> </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const publications = @json($publications); // Convert Blade collection to JSON

            publications.forEach(item => {
                const pdfUrl = item.file_path;
                const canvasId = `pdf-canvas-${item.id}`;
                const canvas = document.getElementById(canvasId);

                if (!canvas) return; // Skip if the element is missing

                pdfjsLib.getDocument(pdfUrl).promise.then(pdf => {
                    pdf.getPage(1).then(page => {
                        const context = canvas.getContext("2d");

                        const desiredWidth = 230;
                        const desiredHeight = 247;

                        // Scale viewport to fit the desired width while keeping aspect ratio
                        const viewport = page.getViewport({ scale: 1 });
                        const scale = desiredWidth / viewport.width;
                        const scaledViewport = page.getViewport({ scale });

                        // Set exact size
                        canvas.width = scaledViewport.width;
                        canvas.height = scaledViewport.height;
                        canvas.style.width = `${desiredWidth}px`;
                        canvas.style.height = `${desiredHeight}px`;

                        // Render first page on canvas
                        const renderContext = { canvasContext: context, viewport: scaledViewport };
                        page.render(renderContext);
                    });
                }).catch(error => {
                    console.error("Error loading PDF:", error);
                });
            });
        });
    </script>
@endsection


@extends('layouts.app') <!-- Menggunakan layout utama -->

@section('title', 'Welcome to ClimateWare') <!-- Judul halaman -->

@section('content') <!-- Konten utama -->
<div class="container mt-5">
    <!-- Section: Introduction -->
    <div class="text-center">
        <h1 class="mb-4">Welcome to ClimateWare</h1>
        <p class="lead">A platform to raise awareness about global warming.</p>
    </div>

    <!-- Section: Causes, Impacts, Actions -->
    <div class="row mt-4">
        <!-- Penyebab -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Causes of Global Warming</h5>
                    <p class="card-text">
                        Global warming is caused by human activities like deforestation, burning fossil fuels, and industrial processes that release greenhouse gases into the atmosphere.
                    </p>
                </div>
            </div>
        </div>

        <!-- Dampak -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Impacts of Global Warming</h5>
                    <p class="card-text">
                        Rising temperatures lead to sea level rise, extreme weather events, loss of biodiversity, and threats to human health and livelihoods.
                    </p>
                </div>
            </div>
        </div>

        <!-- Pentingnya Tindakan -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Why Act Now?</h5>
                    <p class="card-text">
                        Immediate action is crucial to mitigate the effects of global warming and ensure a sustainable future for the next generations.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Flash Message -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Section: Articles -->
    <div class="mt-5">
        <h2 class="text-center">Articles</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Article</a>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($posts as $post)
                <div class="col">
                    <!-- Article Card -->
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ Str::limit($post->content, 200) }}</p>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

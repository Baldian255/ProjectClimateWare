@extends('layouts.app')

@section('title', 'Welcome to ClimateWare')

@section('content')
<!-- Hero Section with Background Image -->
<div class="hero-section">
    <div class="hero-overlay">
        <h1 class="display-4">Welcome to ClimateWare</h1>
        <p class="lead">A platform to raise awareness about global warming.</p>
        <a href="{{ route('articles') }}" class="btn hero-btn">Explore Articles</a>
    </div>
</div>

<!-- Section: Causes, Impacts, Actions -->
<div class="container mt-5 section-bg">
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
</div>

<!-- Section: Articles -->
<div class="mt-5 section-bg">
    <h2 class="text-center">Articles</h2>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Article</a>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($posts as $post)
        <div class="col">
            <!-- Article Card -->
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

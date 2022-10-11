@props(['images', 'id'])

@php
    $images = collect($images);
@endphp

<div id="blade{{ $id }}carousel" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        @for ($i = 0; $i < $images->count(); $i++)
            <button type="button" data-bs-target="#blade{{ $id }}carousel"
                data-bs-slide-to="{{ $i }}" {!! $i == 0 ? 'class="active" aria-current="true"' : '' !!}
                aria-label="Slide {!! $i + 1 !!}"></button>
        @endfor
    </div>
    <div class="carousel-inner">
        @foreach ($images as $index => $image)
            <div class="carousel-item {!! $index == 0 ? 'active' : '' !!}">
                <img src="{{ $image }}" class="d-block w-100" alt="...">
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#blade{{ $id }}carousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#blade{{ $id }}carousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

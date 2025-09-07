@extends('layouts.app')

@section('content')


<div class="gallery-banner">
    <div class="gallery-banner-content">
        <h1>GALLERY</h1>
        <div class="breadcrumb">
            <span>POLESIN</span>
        </div>
    </div>
</div>


<section class="gallery-section">
    <div class="container">
        <div class="gallery-grid">

            <div class="gallery-item item-1"><img src="{{ asset('images/Galerry/DSC00369.JPG') }}" alt="Gallery Image 1"></div>
            <div class="gallery-item item-2"><img src="{{ asset('images/Galerry/DSC00440.JPG') }}" alt="Gallery Image 2"></div>
            <div class="gallery-item item-3"><img src="{{ asset('images/Galerry/DSC00476.JPG') }}" alt="Gallery Image 3"></div>
            <div class="gallery-item item-4"><img src="{{ asset('images/Galerry/DSC00386.JPG') }}" alt="Gallery Image 4"></div>
            <div class="gallery-item item-5"><img src="{{ asset('images/Galerry/DSC00417.JPG') }}" alt="Gallery Image 5"></div>
            <div class="gallery-item item-6"><img src="{{ asset('images/Galerry/DSC00425.JPG') }}" alt="Gallery Image 6"></div>
            <div class="gallery-item item-7"><img src="{{ asset('images/Galerry/DSC00375.JPG') }}" alt="Gallery Image 7"></div>
            <div class="gallery-item item-8"><img src="{{ asset('images/Galerry/DSC00434.JPG') }}" alt="Gallery Image 8"></div>
            <div class="gallery-item item-9"><img src="{{ asset('images/Galerry/DSC00407.JPG') }}" alt="Gallery Image 9"></div>
        </div>
    </div>
</section>

@include('partials.footer')

@endsection

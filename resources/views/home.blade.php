@extends('layouts.app')

@section('content')

<section class="hero-section">
    <div class="hero-content">
        <h1>Professional Service for a <br>Pristine Finish.</h1>
        <p>
            Ready for a transformation you can see and feel? Polesin Bali goes beyond cleaning.
            We bring surfaces back to life with expert care and flawless results. Let us handle the
            dirty work so you can enjoy the shine.
        </p>
        <a href="https://api.whatsapp.com/send?phone=6281399355590" target="_blank" class="cta-button">Contact Us &gt;</a>
    </div>
</section>


@include('partials.about-us')

@include('partials.services')

@include('partials.why-us')

@include('partials.review')

@include('partials.footer')

@endsection

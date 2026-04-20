@extends('frontend.layouts.index')

@section('content')
{{-- <section class="about-sec common-text common-padding">
<div class="container-md">
<h1>404 Page not Found</h1>
</div>
</section> --}}
<style>

</style>
<section class="contact-banner-sec inner-service-banner thank-you-page">
    
        <img src="/front-assets/src/images/404-page-banner.jpg" alt="" class="img-fluid w-100  banner-img 3" width="1920" height="767">


    <div class="banner-content col-12">
        <div class="container-md">
            <div class="row">
                <div class="banner-text">
                    
                    <h1 class="desktop-heading">404 – Page Not Found</h1>
                    <h1 class="mobile-heading">404 – Page <br> Not Found</h1>
                    <p class="error-page-text">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                    <a href="{{route('home')}}" class="common-btn common-btn" id="common-btn">BACK TO HOME</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('frontend.layouts.index')
@section('robots') noindex @endsection
@section('content')
{{-- <section class="about-sec common-text common-padding">
<div class="container-md">
<h1>Thank You</h1>
</div>
</section> --}}

<section class="contact-banner-sec inner-service-banner thank-you-page ">
    
        <img src="/front-assets/src/images/contact-us-banner.webp" alt="" class="img-fluid w-100  banner-img 3" width="1920" height="767">


    <div class="banner-content col-12">
        <div class="container-md">
            <div class="row">
                <div class="banner-text">
                    
                    <h1 class="desktop-heading">Thank You</h1>
                    <h1 class="mobile-heading">Thank You</h1>
                    <p>Thank you for the inquiry. A representative from our team will contact you.</p>
                    <a href="{{route('home')}}" class="common-btn common-btn" id="common-btn">BACK TO HOME</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
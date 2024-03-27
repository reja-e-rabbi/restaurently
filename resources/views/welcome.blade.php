@extends('layouts.main')
@section('carosel')
@include('layouts.carosel')
@endsection
@section('content')

    <!-- ======= About Section ======= -->
    <!-- End About Section -->
    @include('layouts.about')

    <!-- ======= Why Us Section ======= -->
    @include('layouts.why_us')
    <!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    @include('layouts.manue')
    <!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    @include('layouts.specials')
    <!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    @include('layouts.event')
    <!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    @include('layouts.book')
    <!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    @include('layouts.testimonials')
    <!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    @include('layouts.gallery')
    <!-- End Gallery Section -->

    @include('layouts.contract')

    <!-- ======= Chefs Section ======= -->
    @include('layouts.chefs')
    <!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <!-- End Contact Section -->

  <!-- ======= Footer ======= -->
  @include('layouts.footer')
  <!-- End Footer -->

  

@endsection

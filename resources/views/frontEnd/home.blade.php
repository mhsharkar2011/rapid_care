@extends('layouts.master')

@section('title', 'Rapid Care')
    


@section('content')
  <!-- custom slider part start  -->
  @include('frontEnd.carousel')
  <!-- custom slider part end -->

    <!-- banner part start  -->
    @include('frontEnd.banner')
    <!-- banner part end -->

    <!-- about part start  -->
    @include('frontEnd.about')
    <!-- about part end -->

    <!-- our services part start  -->
    @include('frontEnd.service')
    <!-- our services part end -->

    <!-- offer part start  -->
    @include('frontEnd.offer')
    <!-- offer part end -->

    <!-- Doctors part start  -->
    @include('frontEnd.doctors')
    <!-- Doctors part end -->

    <!-- pricing part start  -->
    @include('frontEnd.pricing')
    <!-- pricing part end -->
 
    <!-- testimonial part start  -->
    @include('frontEnd.comment')
    <!-- testimonial part end -->

    <!-- testimonial part start  -->
    @include('frontEnd.contact')
    <!-- testimonial part end -->


    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
      <div class="container">
          <div class="bg-primary p-5">
              <form class="mx-auto" style="max-width: 600px;">
                  <div class="input-group">
                      <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                      <button class="btn btn-dark px-4">Sign Up</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
  <!-- Newsletter End -->

@endsection
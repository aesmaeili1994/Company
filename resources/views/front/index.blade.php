@extends('front.layouts.master')
@section('content')
    <!-- ======= Header ======= -->
    @include('front.partials.menu')
    <!-- End Header -->

    <!-- ======= Slider Section ======= -->
    @include('front.partials.slider',['slider'=>$slider])
    <!-- End Slider -->

    <!-- ======= #main ======= -->
    <main id="main">

        <!-- ======= About Section ======= -->
    @include('front.partials.about',['about'=>$about])
    <!-- End About Section -->

        <!-- ======= Product Section ======= -->
    @include('front.partials.product',['product'=>$product])
    <!-- End Product Section -->

        <!-- ======= Team Section ======= -->
    @include('front.partials.team',['team'=>$team])
    <!-- End Team Section -->

        <!-- ======= Blog Section ======= -->
    @include('front.partials.blog',['post'=>$post])
    <!-- End Blog Section -->

        <!-- ======= Contact Section ======= -->
    @include('front.partials.contact')
    <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('front.partials.footer',['social'=>$social,'information'=>$information,'link'=>$link])
    <!-- End  Footer -->
@endsection
@section('seo')
    @include('front.partials.seo',['seo'=>$seo])
@endsection


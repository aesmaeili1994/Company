@extends('front.layouts.master')
@section('content')
    <!-- ======= Header ======= -->
    @include('front.partials.menu')
    <!-- End Header -->


    <!-- ======= #main ======= -->
    <main id="main">

        <!-- ======= parallax Section ======= -->
    @include('front.partials.parallax')
    <!-- End parallax Section -->

        <!-- ======= Product Section ======= -->
    @include('front.partials.showProduct',['recentProduct'=>$recentProduct,'singleProduct'=>$singleProduct])
    <!-- End Product Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('front.partials.footer',['social'=>$social,'information'=>$information,'link'=>$link])
    <!-- End  Footer -->
@endsection
@section('seo')
    @if (!empty($singleProduct))
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>{{$singleProduct->title_web}}</title>
        <meta content="{{$singleProduct->description}}" name="description">
        <meta content="{{$singleProduct->keywords}}" name="keywords">
{{--        <meta name="author" content="{{$seo->author}}">--}}
        <meta content="index,follow" name="robots">
        <meta property="og:title" content="{{$singleProduct->title}}"/>
        <meta property="og:site_name" content="{{$singleProduct->title_web}}"/>
        <meta property="og:description" content="{{$singleProduct->description}}"/>
        <meta property="og:keywords" content="{{$singleProduct->keywords}}"/>
        <meta property="og:image" content="{{asset('images/product/'.$singleProduct->image)}}"/>

    @else
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>eBusiness Bootstrap Template - Index</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <meta name="author" content="">
        <meta content="index,follow" name="robots">
        <meta property="og:title" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta property="og:keywords" content=""/>
        <meta property="og:image" content=""/>
    @endif
@endsection

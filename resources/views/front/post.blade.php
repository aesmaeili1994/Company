@extends('front.layouts.master')
@section('content')
    <!-- ======= Header ======= -->
    @include('front.partials.menu')
    <!-- End Header -->


    <!-- ======= #main ======= -->
    <main id="main">

        <!-- ======= parallax Section ======= -->
    @include('front.partials.parallaxPost')
    <!-- End parallax Section -->

        <!-- ======= Product Section ======= -->
    @include('front.partials.showPost',['recentPost'=>$recentPost,'singlePost'=>$singlePost])
    <!-- End Product Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('front.partials.footer',['social'=>$social,'information'=>$information,'link'=>$link])
    <!-- End  Footer -->
@endsection
@section('seo')
    @if (!empty($singlePost))
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>{{$singlePost->title}}</title>
        <meta content="{{$singlePost->description}}" name="description">
        <meta content="{{$singlePost->keywords}}" name="keywords">
        <meta name="author" content="{{$singlePost->author}}">
        <meta content="index,follow" name="robots">
        <meta property="og:title" content="{{$singlePost->subject}}"/>
        <meta property="og:site_name" content="{{$singlePost->title}}"/>
        <meta property="og:description" content="{{$singlePost->description}}"/>
        <meta property="og:keywords" content="{{$singlePost->keywords}}"/>
        <meta property="og:image" content="{{asset('images/post/'.$singlePost->image)}}"/>

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

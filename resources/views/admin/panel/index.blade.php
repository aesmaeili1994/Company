@extends('admin.layouts.master')
@section('content')
<section class="row m-0">
	<section class="rounded col-10 offset-1 mt-5 p-5 bg_panel">
        <h1 class="text-success" style="font-weight: bold">Welcome To Your Website</h1>
        <h5 class="text-white mb-4">welcome to your website and take data in the website, please click down button. thanks</h5>
        <a href="{{route('panel.create')}}" class="btn btn-info btn-block text-capitalize text-white">go to seo page</a>
	</section>
</section>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

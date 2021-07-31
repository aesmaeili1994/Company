@extends('admin.layouts.master')
@section('content')
    <section class="row m-0">
        @if(session('create'))
            <section class="rounded col-10 offset-1 mt-3 bg_green alert">
                <h5 class="text-white text-center">{{session('create')}}</h5>
            </section>
        @endif
        <section class="rounded col-10 offset-1 mt-3 p-5 bg_panel">
            {!! Form::open(['route' => 'slider.store', 'method' => 'post','files'=>true]) !!}
            <section class="form-group">
                {!! Form::label('title', 'Title',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('title',old('title'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter title slider...!']) !!}
                @error('title')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('caption', 'Caption',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('caption',old('caption'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter caption slider...!']) !!}
                @error('caption')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('alt', 'alt-image',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('alt',old('alt'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter alt image slider...!']) !!}
                @error('alt')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('image', 'image',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::file('image',['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please select image slider...!']) !!}
                @error('image')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::submit('create',['class'=>'btn btn-success btn-block']) !!}
            </section>
            {!! Form::close() !!}
            <a href="{{route('slider.index')}}" class="btn btn-info text-capitalize font-weight-bold text-white">go to index slider</a>
        </section>
    </section>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@extends('admin.layouts.master')
@section('content')
    <section class="row m-0">
        @if(session('create'))
            <section class="rounded col-10 offset-1 mt-3 bg_green alert">
                <h5 class="text-white text-center">{{session('create')}}</h5>
            </section>
        @endif
        <section class="rounded col-10 offset-1 mt-3 p-5 bg_panel">
            {!! Form::open(['route' => 'product.store', 'method' => 'post','files'=>true]) !!}
            <section class="form-group">
                {!! Form::label('title', 'Title',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('title',old('title'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter title product...!']) !!}
                @error('title')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('body', 'Body',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::textarea('body',old('body'),['class'=>'form-control','style'=>'border:2px inset lightgray;resize:none;height:150px','placeholder'=>'please enter body product...!']) !!}
                @error('body')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('alt', 'alt-image',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('alt',old('alt'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter alt image product...!']) !!}
                @error('alt')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('image', 'image',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::file('image',['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please select image product...!']) !!}
                @error('image')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('title_web', 'Title_Web',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('title_web',old('title_web'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter title web product...!']) !!}
                @error('title_web')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('keywords', 'KeyWords',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::textarea('keywords',old('keywords'),['class'=>'form-control','style'=>'border:2px inset lightgray;resize:none;height:150px','placeholder'=>'please enter keywords product...!']) !!}
                @error('keywords')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('description', 'Description',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::textarea('description',old('description'),['class'=>'form-control','style'=>'border:2px inset lightgray;resize:none;height:150px','placeholder'=>'please enter description product...!']) !!}
                @error('description')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::submit('create',['class'=>'btn btn-success btn-block']) !!}
            </section>
            {!! Form::close() !!}
            <a href="{{route('product.index')}}" class="btn btn-info text-capitalize font-weight-bold text-white">go to index product</a>
        </section>
    </section>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

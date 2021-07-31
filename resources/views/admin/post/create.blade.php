@extends('admin.layouts.master')
@section('content')
    <section class="row m-0">
        @if(session('create'))
            <section class="rounded col-10 offset-1 mt-3 bg_green alert">
                <h5 class="text-white text-center">{{session('create')}}</h5>
            </section>
        @endif
        <section class="rounded col-10 offset-1 mt-3 p-5 bg_panel">
            {!! Form::open(['route' => 'post.store', 'method' => 'post','files'=>true]) !!}
            <section class="form-group">
                {!! Form::label('alt', 'alt-image',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('alt',old('alt'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter alt image post...!']) !!}
                @error('alt')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('image', 'image',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::file('image',['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please select image post...!']) !!}
                @error('image')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('subject', 'Subject',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('subject',old('subject'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter subject post...!']) !!}
                @error('subject')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('body', 'Body',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::textarea('body',old('body'),['class'=>'form-control','style'=>'border:2px inset lightgray;resize:none;height:150px','placeholder'=>'please enter body post...!']) !!}
                @error('body')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('title', 'Title-Web',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('title',old('title'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter title-web post...!']) !!}
                @error('title')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('author', 'Author',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('author',old('author'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter author web post...!']) !!}
                @error('author')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('keywords', 'Keywords',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::textarea('keywords',old('keywords'),['class'=>'form-control','style'=>'border:2px inset lightgray;resize:none;height:150px','placeholder'=>'please enter keywords post...!']) !!}
                @error('keywords')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('description', 'Description',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::textarea('description',old('description'),['class'=>'form-control','style'=>'border:2px inset lightgray;resize:none;height:150px','placeholder'=>'please enter description post...!']) !!}
                @error('description')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::submit('create',['class'=>'btn btn-success btn-block']) !!}
            </section>
            {!! Form::close() !!}
            <a href="{{route('post.index')}}" class="btn btn-info text-capitalize font-weight-bold text-white">go to index post</a>
        </section>
    </section>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

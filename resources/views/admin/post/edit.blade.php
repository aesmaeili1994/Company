@extends('admin.layouts.master')
@section('content')
    <section class="row m-0">
        <section class="rounded col-10 offset-1 mt-3 p-5 bg_panel">
            {!! Form::model($post,['route' => ['post.update',$post->id], 'method' => 'put','files'=>true]) !!}
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
                <p class="text-center"><img src="{{asset('images/post/'.$post->image)}}" width="100" height="100"></p>
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
                {!! Form::submit('update',['class'=>'btn btn-success btn-block']) !!}
            </section>
            {!! Form::close() !!}
        </section>
    </section>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

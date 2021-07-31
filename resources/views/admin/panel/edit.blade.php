@extends('admin.layouts.master')
@section('content')
    <section class="row m-0">
        <section class="rounded col-10 offset-1 mt-3 p-5 bg_panel">
            {!! Form::model($seo,['route' => ['panel.update',$seo->id], 'method' => 'put']) !!}
            <section class="form-group">
                {!! Form::label('title', 'Title',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('title', null,['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter title website...!']) !!}
                @error('title')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('keywords', 'Key words',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::textarea('keywords', null,['class'=>'form-control','style'=>'border:2px inset lightgray;resize:none;height:100px','placeholder'=>'please enter key words website...!']) !!}
                @error('keywords')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('description', 'Description',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::textarea('description', null,['class'=>'form-control','style'=>'border:2px inset lightgray;resize:none;height:100px','placeholder'=>'please enter description website...!']) !!}
                @error('description')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('author', 'Author',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('author', null,['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter author website...!']) !!}
                @error('author')
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

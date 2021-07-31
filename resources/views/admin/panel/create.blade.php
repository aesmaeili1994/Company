@extends('admin.layouts.master')
@section('content')
    <section class="row m-0">
        @if(session('create'))
            <section class="rounded col-10 offset-1 mt-3 bg_green alert">
                <h5 class="text-white text-center">{{session('create')}}</h5>
            </section>
        @endif
        <section class="rounded col-10 offset-1 mt-3 p-5 bg_panel">
            {!! Form::open(['route' => 'panel.store', 'method' => 'post']) !!}
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
                    {!! Form::submit('create',['class'=>'btn btn-success btn-block']) !!}
                </section>
            {!! Form::close() !!}
            <a href="{{route('panel.data')}}" class="btn btn-info text-capitalize font-weight-bold text-white">go to seo panel</a>
        </section>
    </section>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

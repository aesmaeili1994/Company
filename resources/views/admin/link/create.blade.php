@extends('admin.layouts.master')
@section('content')
    <section class="row m-0">
        @if(session('create'))
            <section class="rounded col-10 offset-1 mt-3 bg_green alert">
                <h5 class="text-white text-center">{{session('create')}}</h5>
            </section>
        @endif
        <section class="rounded col-10 offset-1 mt-3 p-5 bg_panel">
            {!! Form::open(['route' => 'link.store', 'method' => 'post']) !!}
            <section class="form-group">
                {!! Form::label('name', 'Name',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('name', old('name'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter name link...']) !!}
                @error('name')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('link', 'Link',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('link', old('link'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter link...']) !!}
                @error('link')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::submit('create',['class'=>'btn btn-success btn-block']) !!}
            </section>
            {!! Form::close() !!}
            <a href="{{route('link.index')}}" class="btn btn-info text-capitalize font-weight-bold text-white">go to link page</a>
        </section>
    </section>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

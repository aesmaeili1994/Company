@extends('admin.layouts.master')
@section('content')
    <section class="row m-0">
        @if(session('create'))
            <section class="rounded col-10 offset-1 mt-3 bg_green alert">
                <h5 class="text-white text-center">{{session('create')}}</h5>
            </section>
        @endif
        <section class="rounded col-10 offset-1 mt-3 p-5 bg_panel">
            {!! Form::open(['route' => 'info.store', 'method' => 'post']) !!}
            <section class="form-group">
                {!! Form::label('phone', 'phone',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('phone', old('phone'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter phone. for example: 09133333333']) !!}
                @error('phone')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('email', 'email',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('email', old('email'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter email. for example: example@gmail.com']) !!}
                @error('email')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('hours', 'hours',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('hours', old('hours'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter working hours. for example: 9am-5pm']) !!}
                @error('hours')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::submit('create',['class'=>'btn btn-success btn-block']) !!}
            </section>
            {!! Form::close() !!}
            <a href="{{route('info.index')}}" class="btn btn-info text-capitalize font-weight-bold text-white">go to info page</a>
        </section>
    </section>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

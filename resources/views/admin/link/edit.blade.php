@extends('admin.layouts.master')
@section('content')
    <section class="row m-0">
        <section class="rounded col-10 offset-1 mt-3 p-5 bg_panel">
            {!! Form::model($link,['route' => ['link.update',$link->id], 'method' => 'put']) !!}
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
                {!! Form::submit('update',['class'=>'btn btn-success btn-block']) !!}
            </section>
            {!! Form::close() !!}
        </section>
    </section>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

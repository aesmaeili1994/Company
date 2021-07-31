@extends('admin.layouts.master')
@section('content')
    <section class="row m-0">
        @if(session('create'))
            <section class="rounded col-10 offset-1 mt-3 bg_green alert">
                <h5 class="text-white text-center">{{session('create')}}</h5>
            </section>
        @endif
        <section class="rounded col-10 offset-1 mt-3 p-5 bg_panel">
            {!! Form::open(['route' => 'team.store', 'method' => 'post','files'=>true]) !!}
            <section class="form-group">
                {!! Form::label('alt', 'alt-image',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('alt',old('alt'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter alt image team...!']) !!}
                @error('alt')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('image', 'image',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::file('image',['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please select image team...!']) !!}
                @error('image')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('fullname', 'fullname',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('fullname',old('fullname'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter fullname team...!']) !!}
                @error('fullname')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('job', 'job',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('job',old('job'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter job team...!']) !!}
                @error('job')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('facebook', 'facebook',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('facebook',old('facebook'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter facebook address...!']) !!}
                @error('facebook')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('twitter', 'twitter',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('twitter',old('twitter'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter twitter address...!']) !!}
                @error('twitter')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('instagram', 'instagram',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('instagram',old('instagram'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter instagram address...!']) !!}
                @error('instagram')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
            {!! Form::submit('create',['class'=>'btn btn-success btn-block']) !!}
            </section>
            {!! Form::close() !!}
            <a href="{{route('team.index')}}" class="btn btn-info text-capitalize font-weight-bold text-white">go to index team</a>
        </section>
    </section>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

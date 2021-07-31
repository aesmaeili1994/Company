@extends('admin.layouts.master')
@section('content')
    <section class="row m-0">
        <section class="rounded col-10 offset-1 mt-3 p-5 bg_panel">
            {!! Form::model($about,['route' => ['about.update',$about->id], 'method' => 'put','files'=>true]) !!}
            <section class="form-group">
                {!! Form::label('title', 'Title',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('title',null,['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter title about...!']) !!}
                @error('title')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('image', 'image',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::file('image',['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please select image about...!']) !!}
                <p class="text-center"><img src="{{asset('images/about/'.$about->image)}}" width="100" height="100"></p>
                @error('image')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('alt', 'alt-image',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('alt',null,['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter alt image about...!']) !!}
                @error('alt')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('description', 'Description',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::textarea('description',null,['class'=>'form-control','style'=>'border:2px inset lightgray;resize:none;height:300px','placeholder'=>'please enter description about...!']) !!}
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

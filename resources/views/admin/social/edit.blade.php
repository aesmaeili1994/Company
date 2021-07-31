@extends('admin.layouts.master')
@section('content')
    <section class="row m-0">
        <section class="rounded col-10 offset-1 mt-3 p-5 bg_panel">
            {!! Form::model($social,['route' => ['social.update',$social->id], 'method' => 'put']) !!}
            <section class="form-group">
                {!! Form::label('telegram', 'Telegram',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('telegram', old('telegram'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter telegram link...']) !!}
                @error('telegram')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('instagram', 'Instagram',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('instagram', old('instagram'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter instagram link...']) !!}
                @error('instagram')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('linkdin', 'Linkdin',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('linkdin', old('linkdin'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter linkdin link...']) !!}
                @error('linkdin')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('twitter', 'Twitter',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('twitter', old('twitter'),['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter twitter link...']) !!}
                @error('twitter')
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

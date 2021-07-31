@extends('admin.layouts.master')
@section('content')
    <section class="row m-0">
        <section class="rounded col-10 offset-1 mt-3 p-5 bg_panel">
            {!! Form::model($team,['route' =>['team.update',$team->id], 'method' => 'put','files'=>true]) !!}
            <section class="form-group">
                {!! Form::label('alt', 'alt-image',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('alt',null,['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter alt image team...!']) !!}
                @error('alt')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('image', 'image',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::file('image',['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please select image team...!']) !!}
                <p class="text-center"><img src="{{asset('images/team/'.$team->image)}}" width="100" height="100"></p>
                @error('image')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('fullname', 'fullname',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('fullname',null,['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter fullname team...!']) !!}
                @error('fullname')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('job', 'job',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('job',null,['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter job team...!']) !!}
                @error('job')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('facebook', 'facebook',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('facebook',null,['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter facebook address...!']) !!}
                @error('facebook')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('twitter', 'twitter',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('twitter',null,['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter twitter address...!']) !!}
                @error('twitter')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('instagram', 'instagram',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('instagram',null,['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter instagram address...!']) !!}
                @error('instagram')
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

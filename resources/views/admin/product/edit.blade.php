@extends('admin.layouts.master')
@section('content')
    <section class="row m-0">
        <section class="rounded col-10 offset-1 mt-3 p-5 bg_panel">
            {!! Form::model($product,['route' =>['product.update',$product->id], 'method' => 'put','files'=>true]) !!}
            <section class="form-group">
                {!! Form::label('title', 'Title',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('title',null,['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter title product...!']) !!}
                @error('title')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('body', 'Body',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::textarea('body',null,['class'=>'form-control','style'=>'border:2px inset lightgray;resize:none;height:150px','placeholder'=>'please enter body product...!']) !!}
                @error('body')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('alt', 'alt-image',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('alt',null,['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter alt image product...!']) !!}
                @error('alt')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('image', 'image',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::file('image',['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please select image product...!']) !!}
                <p class="text-center"><img src="{{asset('images/product/'.$product->image)}}" width="100" height="100"></p>
                @error('image')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('title_web', 'Title_Web',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::text('title_web',null,['class'=>'form-control','style'=>'border:2px inset lightgray','placeholder'=>'please enter title web product...!']) !!}
                @error('title_web')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('keywords', 'KeyWords',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::textarea('keywords',null,['class'=>'form-control','style'=>'border:2px inset lightgray;resize:none;height:150px','placeholder'=>'please enter keywords product...!']) !!}
                @error('keywords')
                <p class="text-center text-danger font-weight-bold">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('description', 'Description',['class'=>'text-white','style'=>'font-weight:bold']) !!}
                {!! Form::textarea('description',null,['class'=>'form-control','style'=>'border:2px inset lightgray;resize:none;height:150px','placeholder'=>'please enter description product...!']) !!}
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

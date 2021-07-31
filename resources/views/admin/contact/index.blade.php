@extends('admin.layouts.master')
@section('content')
    <section class="row m-0">
        @if(session('delete'))
            <section class="rounded col-10 offset-1 mt-3 bg_danger alert">
                <h5 class="text-white text-center">{{session('delete')}}</h5>
            </section>
        @endif
        <section class="col-10 offset-1 text-center pt-2">
            <h2 class="text-white font-weight-bold text-capitalize">this page is contact</h2>
        </section>
        <section class="rounded col-10 offset-1 mt-2 p-2 bg_panel">
            <table class="table table-hover table-dark">
                <tr>
                    <td>fullname</td>
                    <td>email</td>
                    <td>subject</td>
                    <td>message</td>
                    <td>delete</td>
                </tr>
                @forelse($contact as $item)
                    <tr>
                        <td>{{$item->fullname}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->subject}}</td>
                        <td>{{$item->message}}</td>
                        <td>
                            {!! Form::open(['route' =>['contact.destroy',$item->id], 'method' => 'delete']) !!}
                            {!! Form::submit('delete',['class'=>'btn btn-danger btn-block']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">
                            <h3 class="text-center">no data</h3>
                        </td>
                    </tr>
                @endforelse
            </table>
        </section>
    </section>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@extends('admin.layouts.master')
@section('content')
    <section class="row m-0">
        @if(session('delete'))
            <section class="rounded col-10 offset-1 mt-3 bg_danger alert">
                <h5 class="text-white text-center">{{session('delete')}}</h5>
            </section>
        @endif
        @if(session('update'))
            <section class="rounded col-10 offset-1 mt-3 bg-info alert">
                <h5 class="text-white text-center">{{session('update')}}</h5>
            </section>
        @endif
        <section class="col-10 offset-1 text-center pt-2">
            <h2 class="text-white font-weight-bold text-capitalize">this page is post</h2>
        </section>
        <section class="rounded col-10 offset-1 mt-2 p-2 bg_panel">
            <table class="table table-hover table-dark">
                <tr>
                    <td>image</td>
                    <td>alt</td>
                    <td>subject</td>
                    <td>title</td>
                    <td>author</td>
                    <td>update</td>
                    <td>delete</td>
                </tr>
                @forelse($post as $item)
                    <tr>
                        <td><img src="{{asset('images/post/'.$item->image)}}" height="50" width="50"></td>
                        <td>{{$item->alt}}</td>
                        <td>{{$item->subject}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->author}}</td>
                        <td>
                            <a class="btn btn-warning btn-block"
                               href="{{route('post.edit',['id'=>$item->id])}}">update</a>
                        </td>
                        <td>
                            {!! Form::open(['route' =>['post.destroy',$item->id], 'method' => 'delete']) !!}
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
            {{$post->links()}}
            <a href="{{route('post.create')}}" class="btn btn-info text-capitalize font-weight-bold text-white">go to
                create post website</a>
        </section>
    </section>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

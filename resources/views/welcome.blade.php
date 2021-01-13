@extends('layouts.app')

@section('content')
    @if (Auth::check())
        @include('tasks.index')
    @else
        <div class="center jifumbotron">
            {{--登録ページを表示--}}
            <h1>Les't check tasklist</h1>
            {!! link_to_route('signup.get', '登録', [], ['class' =>'btn btn-lg btn-primary']) !!}
        </div>
    @endif
@endsection

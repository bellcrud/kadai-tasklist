@extends('layouts.app')

@section('content')
    <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }}</li>
            @endforeach
        </ul>
        
        {!! link_to_route('tasks.create', '新規メッセージの投稿') !!}
    @endif

@endsection
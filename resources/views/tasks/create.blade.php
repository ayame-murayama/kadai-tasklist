@extends('layouts.app')

@section('content')

<h1>タスク新規入力ページ</h1>



    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('入力') !!}

    {!! Form::close() !!}

@endsection
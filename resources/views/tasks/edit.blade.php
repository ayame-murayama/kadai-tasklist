@extends('layouts.app')

@section('content')

<h1>id: {{ $task->id }} のタスク編集ページ</h1>

<div class="row">
    <div class="col-xs-12" "col-sm-offset2 col-sm-8" "col-md-offset2 col-md-8" "col-lg-offset3 col-lg-6">

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status',null,['class' => 'form-control']) !!}
        
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content',null,['class' => 'form-control']) !!}

        {!! Form::submit('更新',['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}
</div>
</div>
@endsection
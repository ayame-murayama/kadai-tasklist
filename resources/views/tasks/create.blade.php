@extends('layouts.app')

@section('content')

<h1>タスク新規入力ページ</h1>

<div class="row">
    <div class="col-xs-12" "col-sm-offset2 col-sm-8" "col-md-offset2 col-md-8" "col-lg-offset3 col-lg-6">


    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
      <div class="form-group">
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status',null,['class' => 'form-control']) !!}
      </div>

      <div>
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content',null, ['class' => 'form-control']) !!}
      </div>
      
        {!! Form::submit('入力', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
    </div>
</div>

@endsection
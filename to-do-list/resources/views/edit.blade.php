@extends('layouts.app')
@section('content')
<h1>Edit Todo</h1>
<hr>
{{ Form::open(['action' => ['TodosController@update', $todo->id], 'method' =>'POST'])}}
@csrf
<div class="form-group">
    {{Form::label('title', 'This is the todo.')}}
    {{ Form::text('title', $todo->title ,['class' =>'form-control', 'placeholder' => '$todo->title']) }}
</div>
<div class="form-group">
    {{Form::label('title', 'This is what we have to do.')}}
    {{ Form::text('content', $todo->content,['class' =>'form-control', 'placeholder' => '$todo->content']) }}
</div>
<div class="form-group">
    {{Form::label('title', 'This is when we have to do it!')}}
    {{ Form::text('due', $todo->due,['class' =>'form-control', 'placeholder' => '$todo-due']) }}
</div>
{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Submit')}}
{{Form::close()}}
@endsection
@extends('layouts.app')
@section('content')
<h1>Create New Todo</h1>
<hr>
{{ Form::open(['action' => 'TodosController@store', 'method'=>'POST'])}}
@csrf
<div class="form-group">
    {{ Form::text('title','',['class' =>'form-control', 'placeholder' => 'Create Tilte']) }}
</div>
<div class="form-group">
    {{ Form::text('content','',['class' =>'form-control', 'placeholder' => 'Enter Content']) }}
</div>
<div class="form-group">
    {{ Form::text('due','',['class' =>'form-control', 'placeholder' => 'When is this due?']) }}
</div>
<button type="submit" class="btn btn-secondary">Submit</button>
{{ Form::close() }}
@endsection
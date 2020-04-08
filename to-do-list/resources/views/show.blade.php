@extends('layouts.app')
@section('content')
    <a href="/10%20projects%20pt1/to%20do%20list/to-do-list/public/" class="btn btn-default">Go Back</a>
    <h1>{{ $todo->title }}</h1>
    <div class="label label-danger">{{ $todo->due }}</div>
    <hr>
    <p>{{ $todo->content }}</p>
@endsection
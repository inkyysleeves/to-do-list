@extends('layouts.app')
@section('content')
    <a href="/10%20projects%20pt1/to%20do%20list/to-do-list/public/" class="btn btn-secondary mt-2">Go Back</a>
    <h1>{{ $todo->title }}</h1>
    <div class="badge badge-danger">{{ $todo->due }}</div>
    <hr>
    <p>{{ $todo->content }}</p>
    <a href="{{ $todo->id }}/edit" class="btn btn-primary mt-2">Edit</a>
@endsection

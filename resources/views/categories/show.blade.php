@extends('layouts.app')
@section('content')

<div class="card card-default">
    <div class="card-header">
        Details
    </div>
    <div class="card-body">
        {{  $category->name  }}
    </div>
</div>
<a href="/categories/{{$category->id}}/edit" class="btn btn-info my-2">Edit</a>
<a href="/categories/{{$category->id}}/delete" class="btn btn-danger my-2">Delete</a>

@endsection

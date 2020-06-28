@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="/new-categories" class="btn btn-success">Add Category</a>
</div>
<div class="card card-default">
    <div class="card-header">
        Categories
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach($categories as $category)
                <li class="list-group-item">
                    {{ $category->name }}
                    <a href="/categories/{{  $category->id   }}"
                    class="btn btn-primary btn-sm float-right mr-2">
                    View</a>
                    <a href="/categories/{{ $category->id   }}/edit"
                    class="btn btn-primary btn-sm float-right mr-2">
                    Edit</a>

                </li>
            @endforeach
        </ul>
    </div>
</div>


@endsection

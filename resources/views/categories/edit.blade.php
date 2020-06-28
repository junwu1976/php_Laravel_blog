@extends('layouts.app')
@section('content')

<div class="card card-default">
    <div class="card-header">
        Update category
    </div>
    <div class="card-body">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item">
                            {{  $error  }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/categories/{{$category->id}}/update-categories" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="name" value="{{$category->name}}"/>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection

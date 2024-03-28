@extends("layouts.app")

@section("content")
    <h1 class="">New Task</h1>
    @if($errors->any())
        <div class="alert alert-danger p-0 pt-3" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li class="list-disc">{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="/tasks">
        <div class="form-group">
            @csrf
            <label for="description">Task Description</label>
            <input id="description" name="description" type="text" class="form-control" placeholder="Go swim">
        </div>
        @error('description')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror
        <div class="form-group mt-2">
            <button type="submit" class="btn btn-primary">Create Task</button>
        </div>
    </form>
@endsection
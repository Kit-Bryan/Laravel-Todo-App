@extends("layouts.app")

@section("content")
    <h1 class="">New Task</h1>
    <form method="POST" action="/tasks">
        <div class="form-group">
            @csrf
            <label for="description">Task Description</label>
            <input id="description" name="description" type="text" class="form-control" placeholder="Go swim">
        </div>
        <div class="form-group mt-2">
            <button type="submit" class="btn btn-primary">Create Task</button>
        </div>
    </form>
@endsection
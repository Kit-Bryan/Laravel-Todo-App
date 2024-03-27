@extends("layouts.app")

@section("content")
<h1 class="">New Task</h1>
<form method="POST" action="/task">
    <div class="form-group">
        <label for="description">Task Description</label>
        <input type="text" class="form-control" placeholder="Go swim">
    </div>
    <div class="form-group mt-2">
        <button type="submit" class="btn btn-primary">Create Task</button>
    </div>
</form>
@endsection